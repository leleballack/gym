<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\SoftDeletes;

class LnkRoutine extends Pivot
{
    use SoftDeletes;

    protected $table = 'lnk_routines';

    public function log() {
        return $this->hasOne(Log::class);
    }
}
