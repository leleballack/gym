<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Exercise extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'exercises';

    protected $guarded = [];

    public function exerciseType(): BelongsTo
    {
        return $this->belongsTo(ExerciseType::class);
    }
}
