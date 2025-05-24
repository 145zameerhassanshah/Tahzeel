<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Page;

class PagesTableSeeder extends Seeder
{
    public function run()
    {
        $pages = [
// Amer Services Start
[
    'slug' => 'residency-visa-issuance-renewal',
    'title' => [
        'en' => 'Residency Visa Issuance/Renewal',
        'ar' => 'إصدار/تجديد تأشيرة الإقامة',
    ],
    'description' => [
        'en' => 'Get assistance with issuing or renewing your UAE residency visa through Amer Services.',
        'ar' => 'احصل على المساعدة في إصدار أو تجديد تأشيرة الإقامة في الإمارات من خلال خدمات آمر.',
    ],
    'hero_title' => [
        'en' => 'Residency Visa Services',
        'ar' => 'خدمات تأشيرة الإقامة',
    ],
    'hero_sub_title' => [
        'en' => 'Secure and renew your UAE residency effortlessly.',
        'ar' => 'أصدر وجدد تأشيرتك بسهولة.',
    ],
    'hero_description' => [
        'en' => 'Professional visa processing for individuals and families.',
        'ar' => 'إجراءات تأشيرة احترافية للأفراد والعائلات.',
    ],
    'meta_title' => 'Residency Visa Issuance and Renewal',
    'meta_description' => 'Apply or renew your UAE residency visa with expert support via Amer.',
    'type' => 'amer-service',
    'status' => 'published',
    'route_name' => 'amer.residency_visa_issuance_renewal',
    'page_link_for' => 'header',
    'order_no' => 1,
],
[
    'slug' => 'open-file',
    'title' => [
        'en' => 'Open File',
        'ar' => 'فتح ملف',
    ],
    'description' => [
        'en' => 'Open a new immigration file required for residency processing.',
        'ar' => 'افتح ملف الهجرة المطلوب لمعالجة الإقامة.',
    ],
    'hero_title' => [
        'en' => 'Open Immigration File',
        'ar' => 'فتح ملف هجرة',
    ],
    'hero_sub_title' => [
        'en' => 'Step one for visa and residency services.',
        'ar' => 'الخطوة الأولى لخدمات التأشيرات والإقامة.',
    ],
    'hero_description' => [
        'en' => 'We assist in opening your immigration file quickly and easily.',
        'ar' => 'نساعدك في فتح ملف الهجرة بسرعة وسهولة.',
    ],
    'meta_title' => 'Open Immigration File',
    'meta_description' => 'Initiate your immigration process by opening a file through Amer Services.',
    'type' => 'amer-service',
    'status' => 'published',
    'route_name' => 'amer.open_file',
    'page_link_for' => 'header',
    'order_no' => 2,
],
[
    'slug' => 'visa-cancellations',
    'title' => [
        'en' => 'Visa Cancellations',
        'ar' => 'إلغاء التأشيرات',
    ],
    'description' => [
        'en' => 'Cancel your UAE visa properly to avoid penalties.',
        'ar' => 'ألغِ تأشيرتك الإماراتية بالشكل الصحيح لتجنب الغرامات.',
    ],
    'hero_title' => [
        'en' => 'Visa Cancellation Services',
        'ar' => 'خدمات إلغاء التأشيرات',
    ],
    'hero_sub_title' => [
        'en' => 'Quick and compliant visa cancellation.',
        'ar' => 'إلغاء التأشيرة بسرعة ووفق القوانين.',
    ],
    'hero_description' => [
        'en' => 'Expert handling of visa cancellations with minimal hassle.',
        'ar' => 'إلغاء تأشيرة احترافي وسهل.',
    ],
    'meta_title' => 'Visa Cancellation Service',
    'meta_description' => 'Use Amer to process and manage visa cancellations in the UAE.',
    'type' => 'amer-service',
    'status' => 'published',
    'route_name' => 'amer.visa_cancellations',
    'page_link_for' => 'header',
    'order_no' => 3,
],
[
    'slug' => 'emirates-id-applications',
    'title' => [
        'en' => 'Emirates ID Applications',
        'ar' => 'طلبات بطاقة الهوية الإماراتية',
    ],
    'description' => [
        'en' => 'Apply or renew your Emirates ID with our help.',
        'ar' => 'قدّم أو جدّد بطاقة الهوية الإماراتية بمساعدتنا.',
    ],
    'hero_title' => [
        'en' => 'Emirates ID Services',
        'ar' => 'خدمات بطاقة الهوية',
    ],
    'hero_sub_title' => [
        'en' => 'We assist in every step of Emirates ID processing.',
        'ar' => 'نساعدك في جميع مراحل الحصول على بطاقة الهوية.',
    ],
    'hero_description' => [
        'en' => 'Fast and reliable Emirates ID support.',
        'ar' => 'دعم سريع وموثوق لبطاقة الهوية.',
    ],
    'meta_title' => 'Emirates ID Application',
    'meta_description' => 'Get help with Emirates ID registration and renewal via Amer.',
    'type' => 'amer-service',
    'status' => 'published',
    'route_name' => 'amer.emirates_id_applications',
    'page_link_for' => 'header',
    'order_no' => 4,
],
[
    'slug' => 'medical-fitness-tests',
    'title' => [
        'en' => 'Medical Fitness Tests',
        'ar' => 'اختبارات اللياقة الطبية',
    ],
    'description' => [
        'en' => 'We help schedule your DHA-approved medical fitness test.',
        'ar' => 'نساعدك في حجز اختبار اللياقة الطبية المعتمد من هيئة الصحة بدبي.',
    ],
    'hero_title' => [
        'en' => 'Medical Fitness Certification',
        'ar' => 'شهادة اللياقة الطبية',
    ],
    'hero_sub_title' => [
        'en' => 'Essential for all visa processing.',
        'ar' => 'ضروري لجميع معاملات التأشيرة.',
    ],
    'hero_description' => [
        'en' => 'Fast, accurate, and compliant fitness test scheduling.',
        'ar' => 'حجز سريع ودقيق لاختبارات اللياقة.',
    ],
    'meta_title' => 'DHA Medical Fitness Services',
    'meta_description' => 'Get your visa-required medical fitness test scheduled through Amer.',
    'type' => 'amer-service',
    'status' => 'published',
    'route_name' => 'amer.medical_fitness_tests',
    'page_link_for' => 'header',
    'order_no' => 5,
],
[
    'slug' => 'entry-permits',
    'title' => [
        'en' => 'Entry Permits',
        'ar' => 'تصاريح الدخول',
    ],
    'description' => [
        'en' => 'Apply for UAE entry permits for employment, family, and more.',
        'ar' => 'قدّم طلب تصريح دخول للإمارات للعمل أو العائلة وغير ذلك.',
    ],
    'hero_title' => [
        'en' => 'UAE Entry Permits',
        'ar' => 'تصاريح دخول الإمارات',
    ],
    'hero_sub_title' => [
        'en' => 'Authorized and fast entry permit processing.',
        'ar' => 'معالجة سريعة ومصرح بها لتصاريح الدخول.',
    ],
    'hero_description' => [
        'en' => 'All types of entry permits handled professionally.',
        'ar' => 'نقوم بإصدار جميع أنواع تصاريح الدخول باحترافية.',
    ],
    'meta_title' => 'UAE Entry Permit Application',
    'meta_description' => 'Amer helps you apply for legal UAE entry permits smoothly.',
    'type' => 'amer-service',
    'status' => 'published',
    'route_name' => 'amer.entry_permits',
    'page_link_for' => 'header',
    'order_no' => 6,
],
[
    'slug' => 'change-status',
    'title' => [
        'en' => 'Change Status',
        'ar' => 'تغيير الوضع القانوني',
    ],
    'description' => [
        'en' => 'Change visa status without exiting the UAE.',
        'ar' => 'غيّر حالة تأشيرتك دون مغادرة الإمارات.',
    ],
    'hero_title' => [
        'en' => 'Visa Status Change',
        'ar' => 'تغيير حالة التأشيرة',
    ],
    'hero_sub_title' => [
        'en' => 'Quick in-country visa status change.',
        'ar' => 'تغيير سريع لحالة التأشيرة داخل الدولة.',
    ],
    'hero_description' => [
        'en' => 'Avoid travel and get your status updated legally.',
        'ar' => 'تجنّب السفر وقم بتحديث حالتك بشكل قانوني.',
    ],
    'meta_title' => 'UAE Visa Change Status',
    'meta_description' => 'Amer helps you change your visa status while staying in UAE.',
    'type' => 'amer-service',
    'status' => 'published',
    'route_name' => 'amer.change_status',
    'page_link_for' => 'header',
    'order_no' => 7,
],
[
    'slug' => 'visit-visas',
    'title' => [
        'en' => 'Visit Visas',
        'ar' => 'تأشيرات الزيارة',
    ],
    'description' => [
        'en' => 'Apply for short or long-term visit visas for your guests.',
        'ar' => 'قدّم طلب تأشيرة زيارة قصيرة أو طويلة لضيوفك.',
    ],
    'hero_title' => [
        'en' => 'Visitor Visa Services',
        'ar' => 'خدمات تأشيرات الزيارة',
    ],
    'hero_sub_title' => [
        'en' => 'Tourist and family visit visas made simple.',
        'ar' => 'تأشيرات سياحية وزيارات عائلية بسهولة.',
    ],
    'hero_description' => [
        'en' => 'Your complete solution for UAE visit visas.',
        'ar' => 'الحل الكامل لتأشيرات زيارة الإمارات.',
    ],
    'meta_title' => 'UAE Visit Visa Services',
    'meta_description' => 'Easily apply for visit visas with Amer support.',
    'type' => 'amer-service',
    'status' => 'published',
    'route_name' => 'amer.visit_visas',
    'page_link_for' => 'header',
    'order_no' => 8,
],
[
    'slug' => 'domestic-worker-visa',
    'title' => [
        'en' => 'Domestic Worker Visa',
        'ar' => 'تأشيرة العمالة المنزلية',
    ],
    'description' => [
        'en' => 'Apply for visa and legal formalities for hiring a housemaid or driver.',
        'ar' => 'قدّم طلب التأشيرة والإجراءات القانونية لتوظيف عاملة منزلية أو سائق.',
    ],
    'hero_title' => [
        'en' => 'Maid & Driver Visa',
        'ar' => 'تأشيرة الخدم والسائقين',
    ],
    'hero_sub_title' => [
        'en' => 'Legalize your domestic staff hiring.',
        'ar' => 'شرّع توظيف العاملين في منزلك.',
    ],
    'hero_description' => [
        'en' => 'We take care of domestic worker visa processing.',
        'ar' => 'نقوم بجميع إجراءات تأشيرات العمالة المنزلية.',
    ],
    'meta_title' => 'Domestic Worker Visa UAE',
    'meta_description' => 'Use Amer to apply for domestic helper visas quickly.',
    'type' => 'amer-service',
    'status' => 'published',
    'route_name' => 'amer.domestic_worker_visa',
    'page_link_for' => 'header',
    'order_no' => 9,
],
[
    'slug' => 'travel-history',
    'title' => [
        'en' => 'Travel History',
        'ar' => 'سجل السفر',
    ],
    'description' => [
        'en' => 'Get official reports of your UAE travel history.',
        'ar' => 'احصل على تقارير رسمية عن سجل سفرك داخل الإمارات.',
    ],
    'hero_title' => [
        'en' => 'UAE Travel History Report',
        'ar' => 'تقرير سجل السفر',
    ],
    'hero_sub_title' => [
        'en' => 'For visa, immigration, or legal purposes.',
        'ar' => 'لأغراض التأشيرات والهجرة والقانونية.',
    ],
    'hero_description' => [
        'en' => 'We generate travel history from official records.',
        'ar' => 'نقوم بإصدار سجل السفر من الجهات الرسمية.',
    ],
    'meta_title' => 'UAE Travel History',
    'meta_description' => 'Request your official UAE entry/exit travel history through Amer.',
    'type' => 'amer-service',
    'status' => 'published',
    'route_name' => 'amer.travel_history',
    'page_link_for' => 'header',
    'order_no' => 10,
],
[
    'slug' => 'absconding-overstay-removal',
    'title' => [
        'en' => 'Absconding Removal & Overstay Fines',
        'ar' => 'إزالة بلاغ الهروب وغرامات تجاوز الإقامة',
    ],
    'description' => [
        'en' => 'Clear absconding status and settle overstay fines legally.',
        'ar' => 'قم بإزالة بلاغ الهروب وتسوية غرامات تجاوز الإقامة بشكل قانوني.',
    ],
    'hero_title' => [
        'en' => 'Absconding & Overstay Solutions',
        'ar' => 'حلول الهروب وتجاوز الإقامة',
    ],
    'hero_sub_title' => [
        'en' => 'Legal support to remove immigration violations.',
        'ar' => 'دعم قانوني لإزالة المخالفات المتعلقة بالتأشيرة.',
    ],
    'hero_description' => [
        'en' => 'Resolve your visa issues through proper legal channels.',
        'ar' => 'حل مشكلات التأشيرة الخاصة بك عبر القنوات القانونية المناسبة.',
    ],
    'meta_title' => 'Remove Absconding and Pay Fines',
    'meta_description' => 'Clear UAE visa absconding cases and pay overstaying fines with Amer help.',
    'type' => 'amer-service',
    'status' => 'published',
    'route_name' => 'amer.absconding_overstay_removal',
    'page_link_for' => 'header',
    'order_no' => 11,
],
// Amer Services End

        ];
        foreach ($pages as $page) {
            Page::updateOrCreate(
                ['slug' => $page['slug']],
                $page
            );
        }
        // foreach ($pages as $pageData) {
        //     Page::create($pageData);
        // }
    }
}
