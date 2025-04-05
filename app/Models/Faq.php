<?php

namespace App\Models;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    

    protected $fillable = ['page_id', 'question', 'answer'];
   

    public function group()
    {
        return $this->belongsTo(Group::class);
    }
}
