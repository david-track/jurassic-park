<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Chip extends Model
{
    use HasFactory;

    public function parkDinosaur(): BelongsTo
    {
        return $this->belongsTo(ParkDinosaur::class);
    }
}
