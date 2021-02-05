<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Measurement extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'measurements';

    protected $guarded = [];

    public function member(): BelongsTo
    {
        return $this->belongsTo(Member::class);
    }
}
