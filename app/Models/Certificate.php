<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Certificate extends Model
{
    use HasFactory;

    public function user() : BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }

    public function getCertificatePath()
    {
        return $this->certificate_path;
    }

    public function setCertificatePath($certificate_path)
    {
        $this->certificate_path = $certificate_path;
    }
}
