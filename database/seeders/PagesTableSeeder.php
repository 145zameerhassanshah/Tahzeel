<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Page;

class PagesTableSeeder extends Seeder
{
    public function run()
    {
        $pages = [
            // visa-cancellation
            [
                'slug' => 'visa-cancellation',
                'title' => [
                    'en' => 'visa cancellation',
                    'ar' => 'إلغاء التأشيرة'
                ],
                'description' => [
                    'en' => 'We offer professional assistance in setting up corporate bank accounts tailored to your business needs.',
                    'ar' => 'We offer professional assistance in setting up corporate bank accounts tailored to your business needs.',
                ],
                'hero_title' => [
                    'en' => 'visa cancellation',
                    'ar' => 'إلغاء التأشيرة'
                ],
                'hero_sub_title' => [
                    'en' => 'Get your business banking set up with expert help.',
                    'ar' => 'قم بإعداد حسابك المصرفي للأعمال بمساعدة الخبراء.'
                ],
                'hero_description' => [
                    'en' => 'Our experienced consultants ensure a smooth and hassle-free corporate account setup.',
                    'ar' => 'Our experienced consultants ensure a smooth and hassle-free corporate account setup.',
                ],

                'meta_title' => 'Corporate Bank Account Setup',
                'meta_description' => 'Professional support for opening corporate bank accounts in the UAE.',
                'type' => 'amer-service',
                'status' => 'published',
                'route_name' => 'front.residency.visa',
                'page_link_for' => 'header',
                'order_no' => 1,
            ],
            [
                'slug' => 'open-file',
                'title' => [
                    'en' => 'Open The Files',
                    'ar' => 'Open The Files Arabic'
                ],
                'description' => [
                    'en' => 'We offer professional assistance in setting up corporate bank accounts tailored to your business needs.',
                    'ar' => 'We offer professional assistance in setting up corporate bank accounts tailored to your business needs Arabic.',
                ],
                'hero_title' => [
                    'en' => 'Open The Files',
                    'ar' => 'Open The Files Arabic'
                ],
                'hero_sub_title' => [
                    'en' => 'Get your business banking set up with expert help.',
                    'ar' => 'Get your business banking set up with expert help Arabic.'
                ],
                'hero_description' => [
                    'en' => 'Our experienced consultants ensure a smooth and hassle-free corporate account setup.',
                    'ar' => 'Our experienced consultants ensure a smooth and hassle-free corporate account setup Arabic.',
                ],
                'meta_title' => 'Corporate Bank Account Setup',
                'meta_description' => 'Professional support for opening corporate bank accounts in the UAE.',
                'type' => 'amer-service',
                'status' => 'published',
                'route_name' => 'front.open.file',
                'page_link_for' => 'header',
                'order_no' => 1,
            ],
            [
                'slug' => 'residency-visa',
                'title' => [
                    'en' => 'Residency Visa',
                    'ar' => 'Residency Visa Arabic'
                ],
                'description' => [
                    'en' => 'We offer professional assistance in setting up corporate bank accounts tailored to your business needs.',
                    'ar' => 'We offer professional assistance in setting up corporate bank accounts tailored to your business needs Arabic.',
                ],
                'hero_title' => [
                    'en' => 'Hero Title Residency Visa',
                    'ar' => 'Hero Title Residency Visa Arabic'
                ],
                'hero_sub_title' => [
                    'en' => 'Get your business banking set up with expert help.',
                    'ar' => 'Get your business banking set up with expert help Arabic.'
                ],
                'hero_description' => [
                    'en' => 'Our experienced consultants ensure a smooth and hassle-free corporate account setup.',
                    'ar' => 'Our experienced consultants ensure a smooth and hassle-free corporate account setup Arabic.',
                ],
                'meta_title' => 'Corporate Bank Account Setup',
                'meta_description' => 'Professional support for opening corporate bank accounts in the UAE.',
                'type' => 'amer-service',
                'status' => 'published',
                'route_name' => 'front.residency.visa',
                'page_link_for' => 'header',
                'order_no' => 1,
            ],
            [
                'slug' => 'corporate-bank-account-setup',
                'title' => [
                    'en' => 'Corporate Bank Account Setup',
                    'ar' => 'Corporate Bank Account Setup Arabic'
                ],
                'description' => [
                    'en' => 'We offer professional assistance in setting up corporate bank accounts tailored to your business needs.',
                    'ar' => 'We offer professional assistance in setting up corporate bank accounts tailored to your business needs Arabic.'
                ],
                'hero_title' => [
                    'en' => 'Corporate Banking Made Easy',
                ],
                'hero_sub_title' => [
                    'en' => 'Get your business banking set up with expert help.',
                ],
                'hero_description' => [
                    'en' => 'Our experienced consultants ensure a smooth and hassle-free corporate account setup.',
                ],
                'meta_title' => 'Corporate Bank Account Setup',
                'meta_description' => 'Professional support for opening corporate bank accounts in the UAE.',
                'type' => 'visa',
                'status' => 'published',
                'route_name' => 'pages.show',
                'page_link_for' => 'header',
                'order_no' => 1,
            ],
            [
                'slug' => 'personal-bank-account-assistance',
                'title' => ['en' => 'Personal Bank Account Assistance'],
                'description' => [
                    'en' => 'Get expert guidance for personal bank account opening with ease and convenience.',
                ],
                'hero_title' => [
                    'en' => 'Open Your Personal Bank Account',
                ],
                'hero_sub_title' => [
                    'en' => 'Seamless personal banking experience.',
                ],
                'hero_description' => [
                    'en' => 'Let us guide you through every step of opening a personal account.',
                ],

                'meta_title' => 'Personal Bank Account Help',
                'meta_description' => 'Reliable help in personal banking and account setup.',
                'type' => 'visa',
                'status' => 'published',
                'route_name' => 'pages.show',
                'page_link_for' => 'footer',
                'order_no' => 2,
            ],
        ];

        foreach ($pages as $pageData) {
            Page::create($pageData);
        }
    }
}
