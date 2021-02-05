<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class WorkoutType extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'workout_types';

    protected $guarded = [];

    public function workouts(): HasMany
    {
        return $this->hasMany(Workout::class);
    }
}
