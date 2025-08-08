<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Carbon;

/**
 *
 *
 * @property int $id
 * @property string $title
 * @property int $year
 * @property string $category
 * @property string $description
 * @property int $created_by
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder<static>|Movie newModelQuery()
 * @method static Builder<static>|Movie newQuery()
 * @method static Builder<static>|Movie query()
 * @method static Builder<static>|Movie whereCategory($value)
 * @method static Builder<static>|Movie whereCreatedAt($value)
 * @method static Builder<static>|Movie whereCreatedBy($value)
 * @method static Builder<static>|Movie whereDescription($value)
 * @method static Builder<static>|Movie whereId($value)
 * @method static Builder<static>|Movie whereTitle($value)
 * @method static Builder<static>|Movie whereUpdatedAt($value)
 * @method static Builder<static>|Movie whereYear($value)
 * @property string $cover
 * @method static Builder<static>|Movie whereCover($value)
 * @mixin \Eloquent
 */
class Movie extends Model
{
    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class);
    }
}
