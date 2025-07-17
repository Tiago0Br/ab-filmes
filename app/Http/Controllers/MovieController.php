<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMovieRequest;
use App\Http\Requests\UpdateMovieRequest;
use App\Models\Movie;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class MovieController extends Controller
{
    public function index()
    {
        //
    }

    public function create(): View
    {
        return view('movies.create');
    }

    public function store(StoreMovieRequest $request): RedirectResponse
    {
        $data = $request->only(['title', 'year', 'category', 'description']);

        Movie::create([
            'title' => $data['title'],
            'year' => $data['year'],
            'category' => $data['category'],
            'description' => $data['description'],
            'created_by' => auth()->user()->id,
        ]);

        return to_route('home');
    }

    public function show(Movie $movie)
    {
        //
    }

    public function edit(Movie $movie)
    {
        //
    }

    public function update(UpdateMovieRequest $request, Movie $movie)
    {
        //
    }

    public function destroy(Movie $movie)
    {
        //
    }
}
