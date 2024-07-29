<?php

namespace App\Traits;

use App\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Auth;

/**
 * Trait CreatedByUser
 *
 * @property string|null created_by_user_id
 * @property User|null createdByUser
 * @package App\Traits
 */
trait CreatedByUser
{
    /**
     * @return void
     */
    public static function bootCreatedByUser(): void
    {
        static::creating(static function (self $model) {
            $model->createdByUser()->associate(Auth::id());
        });
    }

    /**
     * Belongs to user
     *
     * @return BelongsTo
     */
    public function createdByUser(): BelongsTo
    {
        return $this->belongsTo(
            app(User::class),
            $this->createdByUserForeignKey ?? 'user_id',
            $this->createdByUserLocalKey ?? 'id',
            $this->createdByUserRelation ?? 'createdByUser'
        );
    }
}
