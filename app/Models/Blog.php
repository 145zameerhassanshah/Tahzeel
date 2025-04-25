<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    public function bcategory()
    {
        // return $this->belongsTo(Bcategory::class);
        return $this->belongsTo(Bcategory::class, 'bcategory_id');
    }
}