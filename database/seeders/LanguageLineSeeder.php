<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\TranslationLoader\LanguageLine;

class LanguageLineSeeder extends Seeder
{
    public function run(): void
    {
        LanguageLine::create([
            'group' => 'validation',
            'key' => 'required',
            'text' => [
                'en' => 'This field is required',
                'ar' => 'هذه الخانة مطلوبه',
            ],
        ]);
    }
}