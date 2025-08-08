<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Review extends Component
{
    public function __construct(
        /** @var int[] $ratings */
        public array $ratings = []
    ) {
    }

    public function render(): View|Closure|string
    {
        return view('components.review');
    }

    public function getTotalRatings(): int
    {
        return count($this->ratings);
    }

    public function getAverage(): float
    {
        return $this->getTotalRatings() !== 0
            ? round(num: array_sum($this->ratings) / $this->getTotalRatings(), precision: 1)
            : 0.0;
    }
}
