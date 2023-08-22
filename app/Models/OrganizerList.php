<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrganizerList extends Model
{
    use HasFactory;

    public function activities()
    {
        return $this->belongsToMany(Activity::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
