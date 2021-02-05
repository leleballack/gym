<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Workout extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'workouts';

    protected $guarded = [];

    public function workoutType(): BelongsTo
    {
        return $this->belongsTo(WorkoutType::class);
    }
}
