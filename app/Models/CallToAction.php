<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CallToAction extends Model
{
    public function group()
    {
        return $this->belongsTo(Group::class);
    }
}
