<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
{
    public function enquiryComments()
    {
        return $this->hasMany(EnquiryComment::class);
    }
}
