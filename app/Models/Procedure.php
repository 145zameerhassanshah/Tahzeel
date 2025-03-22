<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Procedure extends Model
{
    public function group()
    {
        return $this->belongsTo(Group::class);
    }
}
