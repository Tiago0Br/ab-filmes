<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMovieRequest;
use App\Models\Movie;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class MovieController extends Controller
{
    public function explore(): View
    {
        $search = request('search') ?: '';
        $movies = Movie::query()
            ->where('created_by', '!=', auth()->user()->id)
            ->when($search, fn ($query, $search) => $query->where('title', 'ilike', "%$search%"))
            ->paginate(10);

        return view('home', compact('movies', 'search'));
    }

    public function myMovies(): View
    {
        $search = request('search') ?: '';
        $movies = Movie::query()
            ->where('created_by', '=', auth()->user()->id)
            ->when($search, fn ($query, $search) => $query->where('title', 'ilike', "%$search%"))
            ->paginate(10);

        return view('my-movies', compact('movies', 'search'));
    }

    public function create(): View
    {
        return view('movies.create');
    }

    public function store(StoreMovieRequest $request): RedirectResponse
    {
        $data = $request->only(['title', 'year', 'category', 'description']);
        $file = $request->cover;

        $coverPath = $file->store('upload');
        if (! $coverPath) {
            return back()->withErrors(['cover' => 'Não foi possível fazer o upload da imagem.']);
        }

        Movie::create([
            'title' => $data['title'],
            'year' => $data['year'],
            'category' => $data['category'],
            'description' => $data['description'],
            'cover' => $coverPath,
            'created_by' => auth()->user()->id,
        ]);

        return to_route('home');
    }

    public function show(Movie $movie): View
    {
        return view('movies.show', compact('movie'));
    }
}
