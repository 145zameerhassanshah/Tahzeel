<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;

class Enquiry extends Model
{
    use HasTranslations;
    use SoftDeletes;
    public function enquiryComments()
    {
        return $this->hasMany(EnquiryComment::class);
    }
}
