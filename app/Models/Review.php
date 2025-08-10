<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Carbon;

/**
 * @property int $id
 * @property int $movie_id
 * @property int $user_id
 * @property int $rating
 * @property string $comment
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder<static>|Review newModelQuery()
 * @method static Builder<static>|Review newQuery()
 * @method static Builder<static>|Review query()
 * @method static Builder<static>|Review whereComment($value)
 * @method static Builder<static>|Review whereCreatedAt($value)
 * @method static Builder<static>|Review whereId($value)
 * @method static Builder<static>|Review whereMovieId($value)
 * @method static Builder<static>|Review whereRating($value)
 * @method static Builder<static>|Review whereUpdatedAt($value)
 * @method static Builder<static>|Review whereUserId($value)
 * @property-read \App\Models\Movie $movie
 * @property-read \App\Models\User $user
 * @mixin \Eloquent
 */
class Review extends Model
{
    public function movie(): BelongsTo
    {
        return $this->belongsTo(Movie::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
