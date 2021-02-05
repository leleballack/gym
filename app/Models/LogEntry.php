<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class LogEntry extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'log_entries';

    protected $guarded = [];

    public function log(): BelongsTo
    {
        return $this->belongsTo(Log::class);
    }
}
