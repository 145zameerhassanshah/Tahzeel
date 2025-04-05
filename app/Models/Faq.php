<?php

namespace App\Models;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    

    protected $fillable = ['page_id', 'question', 'answer'];
<<<<<<< HEAD
   
=======
>>>>>>> 5622229c3318aa6c5b50d057a0093abb033a8f17

    public function page()
    {
        return $this->belongsTo(Page::class);
    }
}
