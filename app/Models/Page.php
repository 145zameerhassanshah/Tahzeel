<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    public function groups()
    {
        return $this->belongsToMany(Group::class, 'page_groups')
                    ->withPivot('order_no', 'status')
                    ->withTimestamps();
    }
}
