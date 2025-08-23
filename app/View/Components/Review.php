<?php

namespace App\View\Components;

use App\Models\Review as ReviewModel;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Review extends Component
{
    public function __construct(public ReviewModel $review)
    {
    }

    public function render(): View|Closure|string
    {
        return view('components.review');
    }

    public function getUserName(): string
    {
        return $this->review->user->name;
    }

    public function getUserAvatar(): ?string
    {
        return $this->review->user->avatar;
    }

    public function isFromLoggedUser(): bool
    {
        return auth()->check()
            && auth()->user()->id === $this->review->user->id;
    }

    public function getReviewsMessage(): string
    {
        $reviewsCount = $this->review->user->reviews()->count();

        return $reviewsCount . ' ' . $this->getSingularOrPluralText($reviewsCount);
    }

    private function getSingularOrPluralText(int $reviewsCount): string
    {
        return $reviewsCount === 1
            ? "filme avaliado"
            : "filmes avaliados";
    }
}
