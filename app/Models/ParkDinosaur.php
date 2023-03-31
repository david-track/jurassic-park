<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class ParkDinosaur extends Model
{
    use HasFactory;

    protected $guarded = ["id"];
    protected $fillable = [];

    // Relationships

    public function dinosaur(): BelongsTo
    {
        return $this->belongsTo(Dinosaur::class);
    }

    public function paddock(): BelongsTo
    {
        return $this->belongsTo(Paddock::class);
    }

    public function chip(): HasOne
    {
        return $this->hasOne(Chip::class);
    }

    // Queries
}
