<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class GroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();

        $groups = [
            ['name' => 'hero_section', 'type' => 'hero', 'description' => null],
            ['name' => 'introduction_section', 'type' => 'intro_section', 'description' => null],
            ['name' => 'feature_list', 'type' => 'features', 'description' => null],
            ['name' => 'faq_list', 'type' => 'faq', 'description' => null],
            ['name' => 'why_choose_us_section', 'type' => 'why_choose_us', 'description' => null],
            ['name' => 'testimonial_list', 'type' => 'testimonials', 'description' => null],
            ['name' => 'documents_required_section', 'type' => 'documents_required', 'description' => null],
            ['name' => 'procedure_section', 'type' => 'procedure', 'description' => null],
            ['name' => 'call_to_action', 'type' => 'cta', 'description' => null],
            ['name' => 'Sec Title', 'type' => 'section_title', 'description' => null],
        ];

        foreach ($groups as &$group) {
            $group['created_at'] = $now;
            $group['updated_at'] = $now;
        }

        DB::table('groups')->insert($groups);

    }
}
