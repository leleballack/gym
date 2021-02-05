<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use function Symfony\Component\Translation\t;

class Log extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'logs';

    protected $guarded = [];

    public function logEntries(): HasMany
    {
        return $this->hasMany(LogEntry::class);
    }

    public function routine(): BelongsTo
    {
        return $this->belongsTo(LnkRoutine::class);
    }

    public function members(): BelongsToMany
    {
        return $this->belongsToMany(Member::class, 'lnk_sessions', 'member_id', 'log_id');
    }
}
