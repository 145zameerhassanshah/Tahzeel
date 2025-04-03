<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WhyUsImage extends Model
{
    public function page()
    {
        return $this->belongsTo(Page::class);
    }
}
