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
                'slug' => 'manpower-recruitment',
                'title' => [
                    'en' => 'Man Power Supply',
                    'ar' => 'توفير الأيدي العاملة'
                ],
                'description' => [
                    'en' => 'We provide reliable and skilled manpower supply services tailored to meet your business requirements.',
                    'ar' => 'نحن نقدم خدمات توفير الأيدي العاملة الماهرة والموثوقة لتلبية احتياجات عملك.'
                ],
                'hero_title' => [
                    'en' => 'Man Power Supply',
                    'ar' => 'توفير الأيدي العاملة'
                ],
                'hero_sub_title' => [
                    'en' => 'Trusted workforce solutions for your business success.',
                    'ar' => 'حلول موثوقة للقوى العاملة لنجاح عملك.'
                ],
                'hero_description' => [
                    'en' => 'Our expert team ensures you get the right talent for the right job – quickly and efficiently.',
                    'ar' => 'يضمن فريقنا المختص حصولك على الكفاءات المناسبة بسرعة وكفاءة.'
                ],
                'meta_title' => 'Manpower Supply Services in UAE',
                'meta_description' => 'We offer skilled manpower supply solutions across various industries in the UAE.',
                'type' => 'amer-service',
                'status' => 'published',
                'route_name' => 'front.residency.visa',
                'page_link_for' => 'header',
                'order_no' => 2,
            ],


            [
                'slug' => 'hr-consultancy-services',
                'title' => [
                    'en' => 'HR Consultancy Services',
                    'ar' => 'خدمات استشارات الموارد البشرية'
                ],
                'description' => [
                    'en' => 'We offer strategic HR consultancy solutions to help your business manage talent effectively and grow sustainably.',
                    'ar' => 'نقدم حلول استشارية استراتيجية في الموارد البشرية لمساعدتك على إدارة المواهب بفعالية وتحقيق نمو مستدام.'
                ],
                'hero_title' => [
                    'en' => 'HR Consultancy Services',
                    'ar' => 'خدمات استشارات الموارد البشرية'
                ],
                'hero_sub_title' => [
                    'en' => 'Empowering your workforce with expert HR guidance.',
                    'ar' => 'تمكين القوى العاملة لديك من خلال استشارات الموارد البشرية المتخصصة.'
                ],
                'hero_description' => [
                    'en' => 'From recruitment strategies to compliance and performance management, our HR experts are here to support your business.',
                    'ar' => 'من استراتيجيات التوظيف إلى الامتثال وإدارة الأداء، خبراؤنا في الموارد البشرية يدعمون عملك بكل احترافية.'
                ],
                'meta_title' => 'Professional HR Consultancy Services in UAE',
                'meta_description' => 'Get expert HR advice and customized solutions to optimize your business operations and workforce management.',
                'type' => 'amer-service',
                'status' => 'published',
                'route_name' => 'front.residency.visa',
                'page_link_for' => 'header',
                'order_no' => 3,
            ],


            [
                'slug' => 'employment-contracts',
                'title' => [
                    'en' => 'Employment Contracts',
                    'ar' => 'عقود التوظيف'
                ],
                'description' => [
                    'en' => 'We assist businesses in drafting and managing employment contracts that comply with UAE labor laws and regulations.',
                    'ar' => 'نساعد الشركات في إعداد وإدارة عقود التوظيف بما يتوافق مع قوانين وأنظمة العمل في دولة الإمارات.'
                ],
                'hero_title' => [
                    'en' => 'Employment Contracts',
                    'ar' => 'عقود التوظيف'
                ],
                'hero_sub_title' => [
                    'en' => 'Legally compliant and customized contracts for your workforce.',
                    'ar' => 'عقود قانونية ومخصصة تناسب القوى العاملة لديك.'
                ],
                'hero_description' => [
                    'en' => 'Our team ensures that your employment contracts are clear, fair, and aligned with labor standards to protect both employer and employee rights.',
                    'ar' => 'يضمن فريقنا أن تكون عقود التوظيف واضحة وعادلة ومتوافقة مع معايير العمل لحماية حقوق صاحب العمل والموظف.'
                ],
                'meta_title' => 'Employment Contract Services in UAE',
                'meta_description' => 'We provide professional support in drafting employment contracts that meet legal standards and business needs.',
                'type' => 'amer-service',
                'status' => 'published',
                'route_name' => 'front.residency.visa',
                'page_link_for' => 'header',
                'order_no' => 4,
            ],


            [
                'slug' => 'work-permits-labor-cards',
                'title' => [
                    'en' => 'Work Permits and Labor Cards',
                    'ar' => 'تصاريح العمل وبطاقات العمل'
                ],
                'description' => [
                    'en' => 'We help you obtain and renew work permits and labor cards in compliance with UAE labor laws.',
                    'ar' => 'نساعدك في الحصول على تصاريح العمل وبطاقات العمل أو تجديدها وفقًا لقوانين العمل في دولة الإمارات.'
                ],
                'hero_title' => [
                    'en' => 'Work Permits and Labor Cards',
                    'ar' => 'تصاريح العمل وبطاقات العمل'
                ],
                'hero_sub_title' => [
                    'en' => 'Fast and reliable processing of employee documentation.',
                    'ar' => 'إجراءات سريعة وموثوقة لوثائق الموظفين.'
                ],
                'hero_description' => [
                    'en' => 'Our experts handle the entire process of issuing and renewing labor cards and work permits, ensuring full legal compliance.',
                    'ar' => 'يتولى خبراؤنا عملية إصدار وتجديد بطاقات العمل وتصاريح العمل بالكامل، مع ضمان الامتثال الكامل للقانون.'
                ],
                'meta_title' => 'Work Permits and Labor Card Services in UAE',
                'meta_description' => 'Get efficient and compliant services for issuing or renewing work permits and labor cards for your employees.',
                'type' => 'amer-service',
                'status' => 'published',
                'route_name' => 'front.residency.visa',
                'page_link_for' => 'header',
                'order_no' => 5,
            ],

            [
                'slug' => 'employee-onboarding-compliance',
                'title' => [
                    'en' => 'Employee Onboarding and Compliance',
                    'ar' => 'الانضمام للموظفين والامتثال'
                ],
                'description' => [
                    'en' => 'We streamline the onboarding process and ensure your company stays compliant with UAE labor laws and regulations.',
                    'ar' => 'نقوم بتبسيط عملية انضمام الموظفين ونضمن امتثال شركتك لقوانين وأنظمة العمل في الإمارات.'
                ],
                'hero_title' => [
                    'en' => 'Employee Onboarding and Compliance',
                    'ar' => 'الانضمام للموظفين والامتثال'
                ],
                'hero_sub_title' => [
                    'en' => 'Smooth onboarding and legal compliance from day one.',
                    'ar' => 'انضمام سلس للموظفين وامتثال قانوني من اليوم الأول.'
                ],
                'hero_description' => [
                    'en' => 'Our tailored onboarding services help integrate new employees efficiently while meeting all legal obligations.',
                    'ar' => 'خدماتنا المخصصة تساعد في دمج الموظفين الجدد بكفاءة مع الالتزام الكامل بالمتطلبات القانونية.'
                ],
                'meta_title' => 'Employee Onboarding and Compliance Services UAE',
                'meta_description' => 'Ensure a seamless onboarding experience for your employees with full regulatory compliance in the UAE.',
                'type' => 'amer-service',
                'status' => 'published',
                'route_name' => 'front.residency.visa',
                'page_link_for' => 'header',
                'order_no' => 6,
            ],


            [
                'slug' => 'payroll-management',
                'title' => [
                    'en' => 'Payroll Management',
                    'ar' => 'إدارة الرواتب'
                ],
                'description' => [
                    'en' => 'We provide accurate and timely payroll management services that ensure full compliance with UAE labor laws and WPS requirements.',
                    'ar' => 'نقدم خدمات إدارة الرواتب بدقة وفي الوقت المناسب مع ضمان الامتثال الكامل لقوانين العمل ونظام حماية الأجور في الإمارات.'
                ],
                'hero_title' => [
                    'en' => 'Payroll Management',
                    'ar' => 'إدارة الرواتب'
                ],
                'hero_sub_title' => [
                    'en' => 'Seamless payroll processing with legal accuracy.',
                    'ar' => 'معالجة الرواتب بسلاسة وبدقة قانونية.'
                ],
                'hero_description' => [
                    'en' => 'Our payroll solutions cover salary calculations, WPS submissions, and all statutory deductions to keep your business fully compliant.',
                    'ar' => 'تشمل حلول الرواتب لدينا حساب الرواتب، وتقديم نظام حماية الأجور، وجميع الاستقطاعات القانونية لضمان امتثال شركتك الكامل.'
                ],
                'meta_title' => 'Payroll Management Services in UAE',
                'meta_description' => 'Reliable payroll services that ensure your workforce is paid correctly and your company meets all legal obligations.',
                'type' => 'amer-service',
                'status' => 'published',
                'route_name' => 'front.residency.visa',
                'page_link_for' => 'header',
                'order_no' => 7,
            ],
            
            [
                'slug' => 'property-buying-selling-assistance',
                'title' => [
                    'en' => 'Property Buying and Selling Assistance',
                    'ar' => 'مساعدة في شراء وبيع العقارات'
                ],
                'description' => [
                    'en' => 'We guide you through every step of property buying and selling, ensuring legal compliance and smooth transactions.',
                    'ar' => 'نرشدك في كل خطوة من خطوات شراء وبيع العقارات مع ضمان الامتثال القانوني وسلاسة المعاملات.'
                ],
                'hero_title' => [
                    'en' => 'Property Buying & Selling',
                    'ar' => 'شراء وبيع العقارات'
                ],
                'hero_sub_title' => [
                    'en' => 'Expert guidance for real estate investments.',
                    'ar' => 'إرشاد خبير للاستثمار العقاري.'
                ],
                'hero_description' => [
                    'en' => 'Our experienced team ensures you get the best deals while complying with all real estate regulations in the UAE.',
                    'ar' => 'يضمن فريقنا ذو الخبرة حصولك على أفضل الصفقات مع الالتزام بجميع قوانين العقارات في الإمارات.'
                ],
                'meta_title' => 'Property Buying and Selling in UAE',
                'meta_description' => 'Professional support for purchasing or selling property with complete transparency and legal assurance.',
                'type' => 'real-estate-service',
                'status' => 'published',
                'route_name' => 'front.realestate.buying.selling',
                'page_link_for' => 'header',
                'order_no' => 1,
            ],

            [
                'slug' => 'real-estate-transactions',
                'title' => [
                    'en' => 'Real Estate Transactions',
                    'ar' => 'المعاملات العقارية'
                ],
                'description' => [
                    'en' => 'We handle all types of real estate transactions with accuracy and full legal compliance.',
                    'ar' => 'نتولى جميع أنواع المعاملات العقارية بدقة وامتثال قانوني كامل.'
                ],
                'hero_title' => [
                    'en' => 'Real Estate Transactions',
                    'ar' => 'المعاملات العقارية'
                ],
                'hero_sub_title' => [
                    'en' => 'Transparent and secure real estate processes.',
                    'ar' => 'عمليات عقارية شفافة وآمنة.'
                ],
                'hero_description' => [
                    'en' => 'From documentation to final signatures, we manage all transaction steps to protect your property interests.',
                    'ar' => 'من التوثيق إلى التوقيعات النهائية، ندير جميع خطوات المعاملة لحماية مصالحك العقارية.'
                ],
                'meta_title' => 'Real Estate Transactions in UAE',
                'meta_description' => 'Comprehensive support for real estate deals including buying, selling, and property transfers.',
                'type' => 'real-estate-service',
                'status' => 'published',
                'route_name' => 'front.realestate.transactions',
                'page_link_for' => 'header',
                'order_no' => 2,
            ],

            [
                'slug' => 'property-management-solutions',
                'title' => [
                    'en' => 'Property Management Solutions',
                    'ar' => 'حلول إدارة الممتلكات'
                ],
                'description' => [
                    'en' => 'We offer comprehensive property management services to help you maintain and maximize the value of your real estate assets.',
                    'ar' => 'نقدم خدمات إدارة ممتلكات شاملة لمساعدتك في الحفاظ على قيمة أصولك العقارية وزيادتها.'
                ],
                'hero_title' => [
                    'en' => 'Property Management',
                    'ar' => 'إدارة الممتلكات'
                ],
                'hero_sub_title' => [
                    'en' => 'Reliable care for your property investments.',
                    'ar' => 'رعاية موثوقة لاستثماراتك العقارية.'
                ],
                'hero_description' => [
                    'en' => 'Our solutions cover tenant management, maintenance, rent collection, and more — ensuring hassle-free ownership.',
                    'ar' => 'تغطي حلولنا إدارة المستأجرين، الصيانة، تحصيل الإيجار والمزيد — لضمان امتلاك خالٍ من المتاعب.'
                ],
                'meta_title' => 'Property Management Services in UAE',
                'meta_description' => 'Efficient and professional services for managing residential and commercial properties across the UAE.',
                'type' => 'real-estate-service',
                'status' => 'published',
                'route_name' => 'front.realestate.management',
                'page_link_for' => 'header',
                'order_no' => 3,
            ],

            [
                'slug' => 'rental-agreements-renewals',
                'title' => [
                    'en' => 'Rental Agreements and Renewals',
                    'ar' => 'عقود الإيجار والتجديدات'
                ],
                'description' => [
                    'en' => 'We prepare and renew rental agreements with full legal accuracy, ensuring protection for both tenants and landlords.',
                    'ar' => 'نقوم بإعداد وتجديد عقود الإيجار بدقة قانونية كاملة لضمان الحماية للمستأجرين والمالكين.'
                ],
                'hero_title' => [
                    'en' => 'Rental Agreements & Renewals',
                    'ar' => 'عقود الإيجار والتجديدات'
                ],
                'hero_sub_title' => [
                    'en' => 'Hassle-free rental documentation and renewals.',
                    'ar' => 'توثيق وتجديد عقود الإيجار بسهولة وبدون عناء.'
                ],
                'hero_description' => [
                    'en' => 'Our team ensures all rental documents are compliant with UAE laws and registered properly to avoid future disputes.',
                    'ar' => 'يضمن فريقنا التزام جميع وثائق الإيجار بالقوانين الإماراتية وتسجيلها بالشكل الصحيح لتجنب النزاعات مستقبلاً.'
                ],
                'meta_title' => 'Rental Contract Services in UAE',
                'meta_description' => 'Trusted services for drafting, reviewing, and renewing rental contracts with complete legal compliance.',
                'type' => 'real-estate-service',
                'status' => 'published',
                'route_name' => 'front.realestate.rentals',
                'page_link_for' => 'header',
                'order_no' => 4,
            ],

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
                    'en' => 'Open The Files Title',
                    'ar' => 'Open The Files Title Arabic'
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