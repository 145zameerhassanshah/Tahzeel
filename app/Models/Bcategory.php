<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Bcategory extends Model
{
    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }
}