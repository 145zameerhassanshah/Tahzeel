<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class EnquiryComment extends Model
{
    use HasFactory;
    use HasTranslations;

    public function enquiry()
    {
        return $this->belongsTo(Enquiry::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
