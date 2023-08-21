<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Team extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    public function user(): BelongsTo{
        return $this->belongsTo(User::class);
    }

    public function team_members(): HasMany
    {
        return $this->hasMany(TeamMember::class);
    }

    public function tasklist(): HasOne
    {
        return $this->hasOne(Tasklist::class);
    }

    public function activity(): BelongsTo{
        return $this->belongsTo(Activity::class);
    }

    public function announcements(): HasMany
    {
        return $this->hasMany(Announcement::class);
    }

    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }

    public function registries(): HasMany
    {
        return $this->hasMany(Registry::class);
    }
}
