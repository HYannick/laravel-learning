<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public static function scopeIncomplete($query) {
        return $query->where('isComplete', 0)->get();
    }
}
