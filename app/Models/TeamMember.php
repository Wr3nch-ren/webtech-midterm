<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TeamMember extends Model
{
    use HasApiTokens, HasFactory, Notifiable;


    public function team(): BelongsTo{
    return $this->belongsTo(Team::class);
    }

    public function user(): BelongsTo{
        return $this->belongsTo(User::class);
        }
    
}
