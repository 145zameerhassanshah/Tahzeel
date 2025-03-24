<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PageGroup extends Model
{
    public function group()
    {
        return $this->belongsTo(Group::class);
    }
    public function page()
    {
        return $this->belongsTo(Page::class);
    }

}
