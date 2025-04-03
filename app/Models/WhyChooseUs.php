<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WhyChooseUs extends Model
{
    public function page()
    {
        return $this->belongsTo(Page::class);
    }
}
