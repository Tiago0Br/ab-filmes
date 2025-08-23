<?php

namespace App\View\Components;

use App\Models\Movie;
use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class ReviewModal extends Component
{
    public function __construct(
        public Movie $movie
    ) {
    }

    public function render(): View|Closure|string
    {
        return view('components.review-modal');
    }
}
