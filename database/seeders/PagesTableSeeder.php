<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Page;

class PagesTableSeeder extends Seeder
{
    public function run()
    {
        $pages = [
            [
                'slug' => 'corporate-bank-account-setup',
                'title' => 'Corporate Bank Account Setup',
                'description' => 'We offer professional assistance in setting up corporate bank accounts tailored to your business needs.',
                'meta_tags' => 'Corporate Bank Account, Business Banking, Account Setup',
                'banner_image' => null,
                'status' => 'published',
            ],
            [
                'slug' => 'personal-bank-account-assistance',
                'title' => 'Personal Bank Account Assistance',
                'description' => 'Get expert guidance for personal bank account opening with ease and convenience.',
                'meta_tags' => 'Personal Bank Account, Bank Account Assistance, Banking Solutions',
                'banner_image' => null,
                'status' => 'published',
            ],
            [
                'slug' => 'business-banking-consultation',
                'title' => 'Business Banking Consultation',
                'description' => 'Consult with our experts to choose the best banking solutions for your business.',
                'meta_tags' => 'Business Banking, Banking Consultation, Banking Solutions',
                'banner_image' => null,
                'status' => 'published',
            ],
            [
                'slug' => 'online-banking-solutions',
                'title' => 'Online Banking Solutions',
                'description' => 'We provide guidance for setting up reliable online banking solutions for your business.',
                'meta_tags' => 'Online Banking, Banking Solutions, Online Transactions',
                'banner_image' => null,
                'status' => 'published',
            ],
            [
                'slug' => 'vat-registration-for-businesses',
                'title' => 'VAT Registration for Businesses',
                'description' => 'Complete VAT registration services for businesses to ensure compliance.',
                'meta_tags' => 'VAT Registration, Business VAT, Tax Compliance',
                'banner_image' => null,
                'status' => 'published',
            ],
            [
                'slug' => 'vat-return-filing',
                'title' => 'VAT Return Filing',
                'description' => 'Expert assistance in preparing and filing VAT returns on time.',
                'meta_tags' => 'VAT Return Filing, VAT Services, Tax Compliance',
                'banner_image' => null,
                'status' => 'published',
            ],
            [
                'slug' => 'vat-consultation-compliance',
                'title' => 'VAT Consultation & Compliance',
                'description' => 'Professional consultation to ensure your business stays VAT compliant.',
                'meta_tags' => 'VAT Consultation, VAT Compliance, Tax Services',
                'banner_image' => null,
                'status' => 'published',
            ],
            [
                'slug' => 'vat-deregistration',
                'title' => 'VAT Deregistration',
                'description' => 'We assist you in the complete process of VAT deregistration when needed.',
                'meta_tags' => 'VAT Deregistration, Tax Compliance, VAT Services',
                'banner_image' => null,
                'status' => 'published',
            ],
        ];

        foreach ($pages as $page) {
            Page::create($page);
        }
    }
}
