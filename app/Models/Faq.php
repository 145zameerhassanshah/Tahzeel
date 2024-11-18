<?php

namespace App\Models;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    use HasTranslations;

    protected $fillable = ['page_id', 'question', 'answer'];
    public $translatable = ['question', 'ans'];
}
