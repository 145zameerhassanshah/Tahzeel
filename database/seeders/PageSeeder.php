<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pages')->insert([
            [
                'slug' => 'about-us',
                'title' => 'About Us',
                'description' => 'This is the about us page of our website.',
                'meta_tags' => 'about us, company, information',
                'banner_image' => 'banners/about-us.jpg',
                'status' => 'published',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'slug' => 'contact-us',
                'title' => 'Contact Us',
                'description' => 'Feel free to contact us through this page.',
                'meta_tags' => 'contact, support, help',
                'banner_image' => 'banners/contact-us.jpg',
                'status' => 'published',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'slug' => 'privacy-policy',
                'title' => 'Privacy Policy',
                'description' => 'This is the privacy policy of our website.',
                'meta_tags' => 'privacy, policy, terms',
                'banner_image' => 'banners/privacy-policy.jpg',
                'status' => 'draft',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
