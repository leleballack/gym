<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\SoftDeletes;

class LnkLogMember extends Pivot
{
    use SoftDeletes;

    protected $table = 'lnk_logs_members';

    protected $fillable = [

    ];
}
