<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Announcement extends Model
{
    use HasFactory;

    public function team(): BelongsTo{
        return $this->belongsTo(Team::class);
    }

    public function user(): BelongsTo{
        return $this->belongsTo(User::class);
    }
}
