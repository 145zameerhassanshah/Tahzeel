<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $guarded = [];

    public function gcategory()
    {
        return $this->belongsTo(Gcategory::class, 'category_id');
    }

}
