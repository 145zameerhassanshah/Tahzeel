<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Page;

class PagesTableSeeder extends Seeder
{
    public function run()
    {
        $pages = [
            // Typing and Attestation Services Start
            [
                'slug' => 'police-clearance',
                'title' => [
                    'en' => 'Police Clearance',
                    'ar' => 'اختبارات اللياقة الطبية'
                ],
                'description' => [
                    'en' => 'Schedule your DHA medical fitness tests quickly and easily through our service center.',
                    'ar' => 'احجز اختبارات اللياقة الطبية الخاصة بك بسرعة وسهولة من خلال مركز خدماتنا.'
                ],
                'hero_title' => [
                    'en' => 'DHA Medical Fitness',
                    'ar' => 'اللياقة الطبية - هيئة الصحة بدبي'
                ],
                'hero_sub_title' => [
                    'en' => 'Efficient and certified testing for visa and employment purposes.',
                    'ar' => 'اختبارات معتمدة وسريعة لأغراض التأشيرة والعمل.'
                ],
                'hero_description' => [
                    'en' => 'Get your fitness certificates with minimal wait times and expert assistance.',
                    'ar' => 'احصل على شهادات اللياقة بسرعة وبمساعدة فريقنا المختص.'
                ],
                'meta_title' => 'DHA Medical Fitness Test Services',
                'meta_description' => 'We assist in scheduling and managing DHA-approved medical fitness tests in Dubai.',
                'type' => 'typing-attestation-service',
                'status' => 'published',
                'route_name' => 'typing.police_clearance',
                'page_link_for' => 'header',
                'order_no' => 1,
            ],
            [
                'slug' => 'new-passport-request',
                'title' => [
                    'en' => 'New Passport Request',
                    'ar' => 'اختبارات اللياقة الطبية'
                ],
                'description' => [
                    'en' => 'Schedule your DHA medical fitness tests quickly and easily through our service center.',
                    'ar' => 'احجز اختبارات اللياقة الطبية الخاصة بك بسرعة وسهولة من خلال مركز خدماتنا.'
                ],
                'hero_title' => [
                    'en' => 'DHA Medical Fitness',
                    'ar' => 'اللياقة الطبية - هيئة الصحة بدبي'
                ],
                'hero_sub_title' => [
                    'en' => 'Efficient and certified testing for visa and employment purposes.',
                    'ar' => 'اختبارات معتمدة وسريعة لأغراض التأشيرة والعمل.'
                ],
                'hero_description' => [
                    'en' => 'Get your fitness certificates with minimal wait times and expert assistance.',
                    'ar' => 'احصل على شهادات اللياقة بسرعة وبمساعدة فريقنا المختص.'
                ],
                'meta_title' => 'DHA Medical Fitness Test Services',
                'meta_description' => 'We assist in scheduling and managing DHA-approved medical fitness tests in Dubai.',
                'type' => 'typing-attestation-service',
                'status' => 'published',
                'route_name' => 'typing.new_passport_request',
                'page_link_for' => 'header',
                'order_no' => 1,
            ],
            [
                'slug' => 'passport-renewal',
                'title' => [
                    'en' => 'Passport Renewal',
                    'ar' => 'اختبارات اللياقة الطبية'
                ],
                'description' => [
                    'en' => 'Schedule your DHA medical fitness tests quickly and easily through our service center.',
                    'ar' => 'احجز اختبارات اللياقة الطبية الخاصة بك بسرعة وسهولة من خلال مركز خدماتنا.'
                ],
                'hero_title' => [
                    'en' => 'DHA Medical Fitness',
                    'ar' => 'اللياقة الطبية - هيئة الصحة بدبي'
                ],
                'hero_sub_title' => [
                    'en' => 'Efficient and certified testing for visa and employment purposes.',
                    'ar' => 'اختبارات معتمدة وسريعة لأغراض التأشيرة والعمل.'
                ],
                'hero_description' => [
                    'en' => 'Get your fitness certificates with minimal wait times and expert assistance.',
                    'ar' => 'احصل على شهادات اللياقة بسرعة وبمساعدة فريقنا المختص.'
                ],
                'meta_title' => 'DHA Medical Fitness Test Services',
                'meta_description' => 'We assist in scheduling and managing DHA-approved medical fitness tests in Dubai.',
                'type' => 'typing-attestation-service',
                'status' => 'published',
                'route_name' => 'typing.passport_renewal',
                'page_link_for' => 'header',
                'order_no' => 1,
            ],
            [
                'slug' => 'passport-lost-report',
                'title' => [
                    'en' => 'Passport Lost Report',
                    'ar' => 'اختبارات اللياقة الطبية'
                ],
                'description' => [
                    'en' => 'Schedule your DHA medical fitness tests quickly and easily through our service center.',
                    'ar' => 'احجز اختبارات اللياقة الطبية الخاصة بك بسرعة وسهولة من خلال مركز خدماتنا.'
                ],
                'hero_title' => [
                    'en' => 'DHA Medical Fitness',
                    'ar' => 'اللياقة الطبية - هيئة الصحة بدبي'
                ],
                'hero_sub_title' => [
                    'en' => 'Efficient and certified testing for visa and employment purposes.',
                    'ar' => 'اختبارات معتمدة وسريعة لأغراض التأشيرة والعمل.'
                ],
                'hero_description' => [
                    'en' => 'Get your fitness certificates with minimal wait times and expert assistance.',
                    'ar' => 'احصل على شهادات اللياقة بسرعة وبمساعدة فريقنا المختص.'
                ],
                'meta_title' => 'DHA Medical Fitness Test Services',
                'meta_description' => 'We assist in scheduling and managing DHA-approved medical fitness tests in Dubai.',
                'type' => 'typing-attestation-service',
                'status' => 'published',
                'route_name' => 'typing.passport_lost_report',
                'page_link_for' => 'header',
                'order_no' => 1,
            ],
            [
                'slug' => 'mofa-attestation',
                'title' => [
                    'en' => 'MOFA Attestation (Ministry of Foreign Affairs)',
                    'ar' => 'اختبارات اللياقة الطبية'
                ],
                'description' => [
                    'en' => 'Schedule your DHA medical fitness tests quickly and easily through our service center.',
                    'ar' => 'احجز اختبارات اللياقة الطبية الخاصة بك بسرعة وسهولة من خلال مركز خدماتنا.'
                ],
                'hero_title' => [
                    'en' => 'DHA Medical Fitness',
                    'ar' => 'اللياقة الطبية - هيئة الصحة بدبي'
                ],
                'hero_sub_title' => [
                    'en' => 'Efficient and certified testing for visa and employment purposes.',
                    'ar' => 'اختبارات معتمدة وسريعة لأغراض التأشيرة والعمل.'
                ],
                'hero_description' => [
                    'en' => 'Get your fitness certificates with minimal wait times and expert assistance.',
                    'ar' => 'احصل على شهادات اللياقة بسرعة وبمساعدة فريقنا المختص.'
                ],
                'meta_title' => 'DHA Medical Fitness Test Services',
                'meta_description' => 'We assist in scheduling and managing DHA-approved medical fitness tests in Dubai.',
                'type' => 'typing-attestation-service',
                'status' => 'published',
                'route_name' => 'typing.mofa_attestation',
                'page_link_for' => 'header',
                'order_no' => 1,
            ],
            [
                'slug' => 'power-of-attorney-drafting',
                'title' => [
                    'en' => 'Power of Attorney (POA) Drafting',
                    'ar' => 'اختبارات اللياقة الطبية'
                ],
                'description' => [
                    'en' => 'Schedule your DHA medical fitness tests quickly and easily through our service center.',
                    'ar' => 'احجز اختبارات اللياقة الطبية الخاصة بك بسرعة وسهولة من خلال مركز خدماتنا.'
                ],
                'hero_title' => [
                    'en' => 'DHA Medical Fitness',
                    'ar' => 'اللياقة الطبية - هيئة الصحة بدبي'
                ],
                'hero_sub_title' => [
                    'en' => 'Efficient and certified testing for visa and employment purposes.',
                    'ar' => 'اختبارات معتمدة وسريعة لأغراض التأشيرة والعمل.'
                ],
                'hero_description' => [
                    'en' => 'Get your fitness certificates with minimal wait times and expert assistance.',
                    'ar' => 'احصل على شهادات اللياقة بسرعة وبمساعدة فريقنا المختص.'
                ],
                'meta_title' => 'DHA Medical Fitness Test Services',
                'meta_description' => 'We assist in scheduling and managing DHA-approved medical fitness tests in Dubai.',
                'type' => 'typing-attestation-service',
                'status' => 'published',
                'route_name' => 'typing.power_of_attorney_drafting',
                'page_link_for' => 'header',
                'order_no' => 1,
            ],
            [
                'slug' => 'document-typing-formatting',
                'title' => [
                    'en' => 'Document Typing and Formatting',
                    'ar' => 'اختبارات اللياقة الطبية'
                ],
                'description' => [
                    'en' => 'Schedule your DHA medical fitness tests quickly and easily through our service center.',
                    'ar' => 'احجز اختبارات اللياقة الطبية الخاصة بك بسرعة وسهولة من خلال مركز خدماتنا.'
                ],
                'hero_title' => [
                    'en' => 'DHA Medical Fitness',
                    'ar' => 'اللياقة الطبية - هيئة الصحة بدبي'
                ],
                'hero_sub_title' => [
                    'en' => 'Efficient and certified testing for visa and employment purposes.',
                    'ar' => 'اختبارات معتمدة وسريعة لأغراض التأشيرة والعمل.'
                ],
                'hero_description' => [
                    'en' => 'Get your fitness certificates with minimal wait times and expert assistance.',
                    'ar' => 'احصل على شهادات اللياقة بسرعة وبمساعدة فريقنا المختص.'
                ],
                'meta_title' => 'DHA Medical Fitness Test Services',
                'meta_description' => 'We assist in scheduling and managing DHA-approved medical fitness tests in Dubai.',
                'type' => 'typing-attestation-service',
                'status' => 'published',
                'route_name' => 'typing.document_typing_formatting',
                'page_link_for' => 'header',
                'order_no' => 1,
            ],
            // Typing and Attestation Services End


            // DHA Services Start
            [
                'slug' => 'medical-fitness-tests',
                'title' => [
                    'en' => 'Medical Fitness Tests',
                    'ar' => 'اختبارات اللياقة الطبية'
                ],
                'description' => [
                    'en' => 'Schedule your DHA medical fitness tests quickly and easily through our service center.',
                    'ar' => 'احجز اختبارات اللياقة الطبية الخاصة بك بسرعة وسهولة من خلال مركز خدماتنا.'
                ],
                'hero_title' => [
                    'en' => 'DHA Medical Fitness',
                    'ar' => 'اللياقة الطبية - هيئة الصحة بدبي'
                ],
                'hero_sub_title' => [
                    'en' => 'Efficient and certified testing for visa and employment purposes.',
                    'ar' => 'اختبارات معتمدة وسريعة لأغراض التأشيرة والعمل.'
                ],
                'hero_description' => [
                    'en' => 'Get your fitness certificates with minimal wait times and expert assistance.',
                    'ar' => 'احصل على شهادات اللياقة بسرعة وبمساعدة فريقنا المختص.'
                ],
                'meta_title' => 'DHA Medical Fitness Test Services',
                'meta_description' => 'We assist in scheduling and managing DHA-approved medical fitness tests in Dubai.',
                'type' => 'dha-service',
                'status' => 'published',
                'route_name' => 'dha.medical_fitness_tests',
                'page_link_for' => 'header',
                'order_no' => 1,
            ],
            [
                'slug' => 'health-insurance-approvals',
                'title' => [
                    'en' => 'Health Insurance Approvals',
                    'ar' => 'موافقات التأمين الصحي'
                ],
                'description' => [
                    'en' => 'Streamline your DHA health insurance approval process with our end-to-end service support.',
                    'ar' => 'سهل عملية الحصول على موافقة التأمين الصحي من هيئة الصحة بدبي بمساعدتنا الكاملة.'
                ],
                'hero_title' => [
                    'en' => 'DHA Insurance Approval',
                    'ar' => 'موافقة التأمين الصحي - هيئة الصحة بدبي'
                ],
                'hero_sub_title' => [
                    'en' => 'Fast-track your health coverage with expert approval handling.',
                    'ar' => 'احصل على موافقة تأمينك الصحي بسرعة مع دعمنا المتخصص.'
                ],
                'hero_description' => [
                    'en' => 'We coordinate with insurance providers and DHA to ensure smooth approvals.',
                    'ar' => 'ننسق مع مزودي التأمين وهيئة الصحة لضمان الموافقة السلسة.'
                ],
                'meta_title' => 'DHA Health Insurance Approvals',
                'meta_description' => 'Assisting individuals and companies in getting DHA health insurance approvals in Dubai.',
                'type' => 'dha-service',
                'status' => 'published',
                'route_name' => 'dha.health_insurance_approvals',
                'page_link_for' => 'header',
                'order_no' => 2,
            ],
            // DHA Services End

            // Legal Services Pages Start
            [
                'slug' => 'document-drafting',
                'title' => [
                    'en' => 'Document Drafting',
                    'ar' => 'صياغة المستندات'
                ],
                'description' => [
                    'en' => 'Professional legal drafting services to create accurate and enforceable documents.',
                    'ar' => 'خدمات صياغة قانونية احترافية لإنشاء مستندات دقيقة وقابلة للتنفيذ.'
                ],
                'hero_title' => [
                    'en' => 'Legal Document Drafting',
                    'ar' => 'صياغة المستندات القانونية'
                ],
                'hero_sub_title' => [
                    'en' => 'Clear, compliant, and customized documentation.',
                    'ar' => 'مستندات واضحة ومطابقة ومخصصة.'
                ],
                'hero_description' => [
                    'en' => 'From contracts to corporate agreements, we ensure your documents are legally sound.',
                    'ar' => 'من العقود إلى الاتفاقيات، نضمن سلامة مستنداتك قانونياً.'
                ],
                'meta_title' => 'Legal Document Drafting UAE',
                'meta_description' => 'Expert legal drafting services in the UAE for contracts, agreements, and more.',
                'type' => 'legal-service',
                'status' => 'published',
                'route_name' => 'legal.document_drafting',
                'page_link_for' => 'header',
                'order_no' => 1,
            ],
            [
                'slug' => 'consultations',
                'title' => [
                    'en' => 'Legal Consultations',
                    'ar' => 'الاستشارات القانونية'
                ],
                'description' => [
                    'en' => 'Receive expert legal advice tailored to your business or personal needs.',
                    'ar' => 'احصل على استشارات قانونية متخصصة حسب احتياجاتك الشخصية أو التجارية.'
                ],
                'hero_title' => [
                    'en' => 'Legal Consultation Services',
                    'ar' => 'خدمات الاستشارات القانونية'
                ],
                'hero_sub_title' => [
                    'en' => 'Clarity and confidence in every decision.',
                    'ar' => 'وضوح وثقة في كل قرار.'
                ],
                'hero_description' => [
                    'en' => 'Our legal team is here to guide you through contracts, disputes, and compliance.',
                    'ar' => 'فريقنا القانوني يرشدك خلال العقود والنزاعات والامتثال.'
                ],
                'meta_title' => 'Legal Consultation UAE',
                'meta_description' => 'Talk to expert legal consultants in the UAE about contracts, disputes, and business matters.',
                'type' => 'legal-service',
                'status' => 'published',
                'route_name' => 'legal.consultations',
                'page_link_for' => 'header',
                'order_no' => 2,
            ],
            [
                'slug' => 'representation',
                'title' => [
                    'en' => 'Legal Representation',
                    'ar' => 'التمثيل القانوني'
                ],
                'description' => [
                    'en' => 'Representation in courts and legal matters from experienced legal professionals.',
                    'ar' => 'تمثيل قانوني أمام المحاكم وفي المسائل القانونية من قبل محترفين متمرسين.'
                ],
                'hero_title' => [
                    'en' => 'Professional Legal Representation',
                    'ar' => 'التمثيل القانوني المهني'
                ],
                'hero_sub_title' => [
                    'en' => 'Strong advocacy for your rights and interests.',
                    'ar' => 'دفاع قوي عن حقوقك ومصالحك.'
                ],
                'hero_description' => [
                    'en' => 'We represent individuals and businesses across a variety of legal matters.',
                    'ar' => 'نُمثل الأفراد والشركات في مجموعة واسعة من القضايا القانونية.'
                ],
                'meta_title' => 'Legal Representation UAE',
                'meta_description' => 'Qualified lawyers for court cases, legal disputes, and more in the UAE.',
                'type' => 'legal-service',
                'status' => 'published',
                'route_name' => 'legal.representation',
                'page_link_for' => 'header',
                'order_no' => 3,
            ],
            [
                'slug' => 'dispute-resolution',
                'title' => [
                    'en' => 'Dispute Resolution',
                    'ar' => 'حل النزاعات'
                ],
                'description' => [
                    'en' => 'Efficient dispute resolution services including arbitration, mediation, and negotiation.',
                    'ar' => 'خدمات حل النزاعات بكفاءة، بما في ذلك التحكيم والوساطة والتفاوض.'
                ],
                'hero_title' => [
                    'en' => 'Dispute Resolution Services',
                    'ar' => 'خدمات حل النزاعات'
                ],
                'hero_sub_title' => [
                    'en' => 'Resolve legal conflicts quickly and effectively.',
                    'ar' => 'حل النزاعات القانونية بسرعة وفعالية.'
                ],
                'hero_description' => [
                    'en' => 'Minimize risk and avoid lengthy court battles through our tailored legal solutions.',
                    'ar' => 'قلل المخاطر وتجنب القضايا الطويلة من خلال حلولنا القانونية المخصصة.'
                ],
                'meta_title' => 'Dispute Resolution UAE',
                'meta_description' => 'Legal services in mediation, arbitration, and litigation support in the UAE.',
                'type' => 'legal-service',
                'status' => 'published',
                'route_name' => 'legal.dispute_resolution',
                'page_link_for' => 'header',
                'order_no' => 4,
            ],
            // Legal Services Pages End

            // VAT Registration & Compliance Start
            [
                'slug' => 'vat-registration',
                'title' => [
                    'en' => 'VAT Registration for Businesses',
                    'ar' => 'تسجيل ضريبة القيمة المضافة للشركات'
                ],
                'description' => [
                    'en' => 'Get your business VAT-registered with ease. Our experts guide you through every step.',
                    'ar' => 'سجّل شركتك في ضريبة القيمة المضافة بكل سهولة بمساعدة خبرائنا.'
                ],
                'hero_title' => [
                    'en' => 'VAT Registration Services',
                    'ar' => 'خدمات تسجيل ضريبة القيمة المضافة'
                ],
                'hero_sub_title' => [
                    'en' => 'We simplify the VAT registration process.',
                    'ar' => 'نُبَسِّط لك عملية تسجيل ضريبة القيمة المضافة.'
                ],
                'hero_description' => [
                    'en' => 'Ensure compliance and avoid penalties with our expert VAT registration support.',
                    'ar' => 'تأكد من الالتزام وتجنب الغرامات بمساعدة خبرائنا.'
                ],
                'meta_title' => 'VAT Registration Services in UAE',
                'meta_description' => 'Professional assistance for VAT registration tailored to your business needs in the UAE.',
                'type' => 'amer-service',
                'status' => 'published',
                'route_name' => 'vat.registration',
                'page_link_for' => 'header',
                'order_no' => 1,
            ],
            [
                'slug' => 'vat-return-filing',
                'title' => [
                    'en' => 'VAT Return Filing',
                    'ar' => 'تقديم إقرار ضريبة القيمة المضافة'
                ],
                'description' => [
                    'en' => 'Timely and accurate VAT return submissions to keep your business compliant.',
                    'ar' => 'تقديم إقرارات ضريبة القيمة المضافة بدقة وفي الوقت المحدد.'
                ],
                'hero_title' => [
                    'en' => 'VAT Return Filing Services',
                    'ar' => 'خدمات تقديم إقرار ضريبة القيمة المضافة'
                ],
                'hero_sub_title' => [
                    'en' => 'Stay compliant with timely VAT submissions.',
                    'ar' => 'ابقَ ملتزمًا من خلال التقديم في الوقت المناسب.'
                ],
                'hero_description' => [
                    'en' => 'Avoid fines with our expert VAT filing support.',
                    'ar' => 'تجنب الغرامات بمساعدة خبرائنا في تقديم الإقرارات.'
                ],
                'meta_title' => 'VAT Return Filing in UAE',
                'meta_description' => 'Submit your VAT returns correctly with help from our experienced consultants.',
                'type' => 'amer-service',
                'status' => 'published',
                'route_name' => 'vat.return_filing',
                'page_link_for' => 'header',
                'order_no' => 2,
            ],
            [
                'slug' => 'vat-consultation-compliance',
                'title' => [
                    'en' => 'VAT Consultation & Compliance',
                    'ar' => 'الاستشارات والامتثال لضريبة القيمة المضافة'
                ],
                'description' => [
                    'en' => 'Expert VAT consultation services to ensure you stay on the right side of the law.',
                    'ar' => 'خدمات استشارية متخصصة لضريبة القيمة المضافة لضمان الامتثال الكامل.'
                ],
                'hero_title' => [
                    'en' => 'VAT Compliance Solutions',
                    'ar' => 'حلول الامتثال لضريبة القيمة المضافة'
                ],
                'hero_sub_title' => [
                    'en' => 'Guiding your business through VAT challenges.',
                    'ar' => 'نرشد عملك لتخطي تحديات ضريبة القيمة المضافة.'
                ],
                'hero_description' => [
                    'en' => 'Comprehensive VAT compliance support tailored to your industry.',
                    'ar' => 'دعم كامل للامتثال لضريبة القيمة المضافة حسب نشاطك.'
                ],
                'meta_title' => 'VAT Compliance Services in UAE',
                'meta_description' => 'Receive VAT guidance and ensure your business meets FTA compliance standards.',
                'type' => 'amer-service',
                'status' => 'published',
                'route_name' => 'vat.consultation_compliance',
                'page_link_for' => 'header',
                'order_no' => 3,
            ],
            [
                'slug' => 'vat-deregistration',
                'title' => [
                    'en' => 'VAT Deregistration',
                    'ar' => 'إلغاء تسجيل ضريبة القيمة المضافة'
                ],
                'description' => [
                    'en' => 'Assistance with smooth VAT deregistration in line with UAE laws.',
                    'ar' => 'مساعدة في إلغاء تسجيل ضريبة القيمة المضافة بسلاسة وفقًا لقوانين الإمارات.'
                ],
                'hero_title' => [
                    'en' => 'VAT Deregistration Services',
                    'ar' => 'خدمات إلغاء تسجيل ضريبة القيمة المضافة'
                ],
                'hero_sub_title' => [
                    'en' => 'Proper closure of your VAT registration.',
                    'ar' => 'إغلاق صحيح لتسجيل ضريبتك.'
                ],
                'hero_description' => [
                    'en' => 'Ensure legal compliance when deregistering from VAT with our support.',
                    'ar' => 'تأكد من الامتثال القانوني عند إلغاء تسجيلك في ضريبة القيمة المضافة.'
                ],
                'meta_title' => 'VAT Deregistration UAE',
                'meta_description' => 'Guided VAT deregistration process for businesses winding down or no longer eligible.',
                'type' => 'amer-service',
                'status' => 'published',
                'route_name' => 'vat.deregistration',
                'page_link_for' => 'header',
                'order_no' => 4,
            ],
            // VAT Registration & Compliance End
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
<<<<<<< HEAD
            //pro services
      
    [
        'slug' => 'document-clearance-submission',
        'title' => [
            'en' => 'Document Clearance and Submission',
            'ar' => 'تخليص وتقديم المستندات'
        ],
        'description' => [
            'en' => 'We ensure timely and accurate processing of all your official documents.',
            'ar' => 'نضمن معالجة مستنداتك الرسمية بدقة وفي الوقت المحدد.'
        ],
        'hero_title' => [
            'en' => 'Document Clearance',
            'ar' => 'تخليص المستندات'
        ],
        'hero_sub_title' => [
            'en' => 'Fast and reliable services.',
            'ar' => 'خدمات سريعة وموثوقة.'
        ],
        'hero_description' => [
            'en' => 'From collection to submission, we handle every step of the process.',
            'ar' => 'من الجمع إلى التقديم، نتولى كل خطوة من العملية.'
        ],
        'meta_title' => 'Document Clearance UAE',
        'meta_description' => 'Professional handling of document clearance and submissions across UAE.',
        'type' => 'pro-service',
        'status' => 'published',
        'route_name' => 'front.proservices.show',
        'page_link_for' => 'header',
        'order_no' => 1,
    ],
    [
        'slug' => 'visa-applications-renewals',
        'title' => [
            'en' => 'Visa Applications and Renewals',
            'ar' => 'طلبات وتجديد التأشيرات'
        ],
        'description' => [
            'en' => 'We assist with all visa types, from application to renewal.',
            'ar' => 'نساعد في جميع أنواع التأشيرات من التقديم إلى التجديد.'
        ],
        'hero_title' => [
            'en' => 'Visa Services',
            'ar' => 'خدمات التأشيرات'
        ],
        'hero_sub_title' => [
            'en' => 'Your visa made easy.',
            'ar' => 'تأشيرتك أصبحت سهلة.'
        ],
        'hero_description' => [
            'en' => 'Expert guidance and quick processing for all visa needs.',
            'ar' => 'إرشاد خبير ومعالجة سريعة لجميع احتياجات التأشيرة.'
        ],
        'meta_title' => 'Visa Application UAE',
        'meta_description' => 'Fast and professional visa application and renewal services in UAE.',
        'type' => 'pro-service',
        'status' => 'published',
        'route_name' => 'front.proservices.show',
        'page_link_for' => 'header',
        'order_no' => 2,
    ],
    [
        'slug' => 'labor-immigration-services',
        'title' => [
            'en' => 'Labor and Immigration Services',
            'ar' => 'خدمات العمل والهجرة'
        ],
        'description' => [
            'en' => 'Reliable services for labor card, immigration permits, and more.',
            'ar' => 'خدمات موثوقة لبطاقة العمل وتصاريح الهجرة والمزيد.'
        ],
        'hero_title' => [
            'en' => 'Labor & Immigration',
            'ar' => 'العمل والهجرة'
        ],
        'hero_sub_title' => [
            'en' => 'Compliance made simple.',
            'ar' => 'الامتثال أصبح بسيطًا.'
        ],
        'hero_description' => [
            'en' => 'We manage government requirements efficiently on your behalf.',
            'ar' => 'ندير متطلبات الحكومة بكفاءة نيابة عنك.'
        ],
        'meta_title' => 'Labor Immigration UAE',
        'meta_description' => 'Trusted labor and immigration services with full compliance.',
        'type' => 'pro-service',
        'status' => 'published',
        'route_name' => 'front.proservices.show',
        'page_link_for' => 'header',
        'order_no' => 3,
    ],
    [
        'slug' => 'trade-license-processing',
        'title' => [
            'en' => 'Trade License Processing',
            'ar' => 'معالجة الرخصة التجارية'
        ],
        'description' => [
            'en' => 'We streamline the entire trade license process for your business.',
            'ar' => 'نُبَسِّط عملية الرخصة التجارية بالكامل لنشاطك التجاري.'
        ],
        'hero_title' => [
            'en' => 'Trade License Services',
            'ar' => 'خدمات الرخصة التجارية'
        ],
        'hero_sub_title' => [
            'en' => 'Start your business with ease.',
            'ar' => 'ابدأ عملك بسهولة.'
        ],
        'hero_description' => [
            'en' => 'Support with new applications, renewals, and modifications.',
            'ar' => 'الدعم في الطلبات الجديدة والتجديدات والتعديلات.'
        ],
        'meta_title' => 'Trade License UAE',
        'meta_description' => 'Expert help for trade license application and renewal across UAE.',
        'type' => 'pro-service',
        'status' => 'published',
        'route_name' => 'front.proservices.show',
        'page_link_for' => 'header',
        'order_no' => 4,
    ],
    [
        'slug' => 'attestation-notarization-assistance',
        'title' => [
            'en' => 'Attestation and Notarization Assistance',
            'ar' => 'المساعدة في التصديق والتوثيق'
        ],
        'description' => [
            'en' => 'We facilitate document attestation and notarization at all required levels.',
            'ar' => 'نُيَسِّر تصديق وتوثيق المستندات على جميع المستويات المطلوبة.'
        ],
        'hero_title' => [
            'en' => 'Attestation Services',
            'ar' => 'خدمات التصديق'
        ],
        'hero_sub_title' => [
            'en' => 'Verified and certified documents.',
            'ar' => 'وثائق موثقة ومصدقة.'
        ],
        'hero_description' => [
            'en' => 'From ministries to embassies, we handle the entire process.',
            'ar' => 'من الوزارات إلى السفارات، نتولى العملية بأكملها.'
        ],
        'meta_title' => 'Document Attestation UAE',
        'meta_description' => 'Comprehensive assistance with all attestation and notarization needs in UAE.',
        'type' => 'pro-service',
        'status' => 'published',
        'route_name' => 'front.proservices.show',
        'page_link_for' => 'header',
        'order_no' => 5,
    ],
    [
        'slug' => 'company-registration-setup',
        'title' => [
            'en' => 'Company Registration and Setup',
            'ar' => 'تسجيل وتأسيس الشركات'
        ],
        'description' => [
            'en' => 'We provide full support in registering and setting up your company in the UAE.',
            'ar' => 'نوفر دعمًا كاملاً في تسجيل وتأسيس شركتك في الإمارات.'
        ],
        'hero_title' => [
            'en' => 'Company Formation',
            'ar' => 'تأسيس الشركات'
        ],
        'hero_sub_title' => [
            'en' => 'Start your business journey.',
            'ar' => 'ابدأ رحلتك التجارية.'
        ],
        'hero_description' => [
            'en' => 'Guidance on choosing legal structure, jurisdiction, and documentation.',
            'ar' => 'إرشادات حول اختيار الهيكل القانوني والاختصاص القضائي والمستندات.'
        ],
        'meta_title' => 'Company Setup UAE',
        'meta_description' => 'Start your business with our reliable company registration and setup services.',
        'type' => 'pro-service',
        'status' => 'published',
        'route_name' => 'front.proservices.show',
        'page_link_for' => 'header',
        'order_no' => 6,
    ],
    [
        'slug' => 'government-liaison-services',
        'title' => [
            'en' => 'Government Liaison Services',
            'ar' => 'خدمات التنسيق الحكومي'
        ],
        'description' => [
            'en' => 'We represent you in all government-related procedures and submissions.',
            'ar' => 'نمثلك في جميع الإجراءات الحكومية والتقديمات.'
        ],
        'hero_title' => [
            'en' => 'Liaison with Authorities',
            'ar' => 'التنسيق مع الجهات'
        ],
        'hero_sub_title' => [
            'en' => 'We bridge you with the government.',
            'ar' => 'نُقَرِّبك من الحكومة.'
        ],
        'hero_description' => [
            'en' => 'Our team ensures smooth coordination with UAE ministries and authorities.',
            'ar' => 'يضمن فريقنا التنسيق السلس مع وزارات وسلطات الإمارات.'
        ],
        'meta_title' => 'Government Services UAE',
        'meta_description' => 'Professional liaison services to manage government interactions and approvals.',
        'type' => 'pro-service',
        'status' => 'published',
        'route_name' => 'front.proservices.show',
        'page_link_for' => 'header',
        'order_no' => 7,
    ],


//7. Document Clearance Services



    [
        'slug' => 'government-document-submission',
        'title' => [
            'en' => 'Government Document Submission',
            'ar' => 'تقديم المستندات الحكومية'
        ],
        'description' => [
            'en' => 'We handle the submission of documents to all relevant government departments.',
            'ar' => 'نتولى تقديم المستندات إلى جميع الجهات الحكومية المعنية.'
        ],
        'hero_title' => [
            'en' => 'Govt. Document Submission',
            'ar' => 'تقديم المستندات الحكومية'
        ],
        'hero_sub_title' => [
            'en' => 'Hassle-free government dealings.',
            'ar' => 'تعاملات حكومية بدون عناء.'
        ],
        'hero_description' => [
            'en' => 'We ensure your documents are submitted to the right departments on time.',
            'ar' => 'نضمن تقديم مستنداتك إلى الجهات المناسبة في الوقت المحدد.'
        ],
        'meta_title' => 'Government Document Submission UAE',
        'meta_description' => 'Streamlined government document submission services in UAE.',
        'type' => 'pro-service',
        'status' => 'published',
        'route_name' => 'front.proservices.show',
        'page_link_for' => 'header',
        'order_no' => 1,
    ],
    [
        'slug' => 'clearance-for-visa-residency',
        'title' => [
            'en' => 'Clearance for Visa and Residency',
            'ar' => 'تخليص التأشيرات والإقامة'
        ],
        'description' => [
            'en' => 'We assist with document clearance for all types of visa and residency needs.',
            'ar' => 'نساعد في تخليص المستندات لجميع أنواع التأشيرات والإقامات.'
        ],
        'hero_title' => [
            'en' => 'Visa & Residency Clearance',
            'ar' => 'تخليص التأشيرات والإقامة'
        ],
        'hero_sub_title' => [
            'en' => 'Your visa process simplified.',
            'ar' => 'نسهل لك عملية التأشيرة.'
        ],
        'hero_description' => [
            'en' => 'Clearance of all required documents for residency and visa applications.',
            'ar' => 'تخليص جميع المستندات المطلوبة لتأشيرات الإقامة والتأشيرات.'
        ],
        'meta_title' => 'Visa Clearance UAE',
        'meta_description' => 'Fast clearance for all visa and residency documentation.',
        'type' => 'pro-service',
        'status' => 'published',
        'route_name' => 'front.proservices.show',
        'page_link_for' => 'header',
        'order_no' => 2,
    ],
    [
        'slug' => 'labor-immigration-documents',
        'title' => [
            'en' => 'Labor and Immigration Documents',
            'ar' => 'مستندات العمل والهجرة'
        ],
        'description' => [
            'en' => 'Complete assistance with labor card and immigration documentation.',
            'ar' => 'مساعدة شاملة في بطاقات العمل ووثائق الهجرة.'
        ],
        'hero_title' => [
            'en' => 'Labor & Immigration Docs',
            'ar' => 'مستندات العمل والهجرة'
        ],
        'hero_sub_title' => [
            'en' => 'Handled with accuracy.',
            'ar' => 'تُدار بدقة وكفاءة.'
        ],
        'hero_description' => [
            'en' => 'Preparation and clearance of labor and immigration related documents.',
            'ar' => 'إعداد وتخليص مستندات العمل والهجرة.'
        ],
        'meta_title' => 'Labor Immigration Documents UAE',
        'meta_description' => 'Reliable support for labor and immigration paperwork in UAE.',
        'type' => 'pro-service',
        'status' => 'published',
        'route_name' => 'front.proservices.show',
        'page_link_for' => 'header',
        'order_no' => 3,
    ],
    [
        'slug' => 'corporate-document-clearance',
        'title' => [
            'en' => 'Corporate Document Clearance',
            'ar' => 'تخليص مستندات الشركات'
        ],
        'description' => [
            'en' => 'We provide expert clearance for all your corporate documentation needs.',
            'ar' => 'نقدم تخليصًا احترافيًا لجميع مستندات شركتك.'
        ],
        'hero_title' => [
            'en' => 'Corporate Clearance',
            'ar' => 'تخليص الشركات'
        ],
        'hero_sub_title' => [
            'en' => 'Professional and reliable service.',
            'ar' => 'خدمة احترافية وموثوقة.'
        ],
        'hero_description' => [
            'en' => 'Managing your business document clearance from start to finish.',
            'ar' => 'إدارة تخليص مستندات أعمالك من البداية للنهاية.'
        ],
        'meta_title' => 'Corporate Document Clearance UAE',
        'meta_description' => 'Seamless clearance of corporate legal and regulatory documents.',
        'type' => 'pro-service',
        'status' => 'published',
        'route_name' => 'front.proservices.show',
        'page_link_for' => 'header',
        'order_no' => 4,
    ],
    [
        'slug' => 'legal-document-processing',
        'title' => [
            'en' => 'Legal Document Processing',
            'ar' => 'معالجة المستندات القانونية'
        ],
        'description' => [
            'en' => 'Fast and accurate processing of all legal documents in the UAE.',
            'ar' => 'معالجة سريعة ودقيقة لجميع المستندات القانونية في الإمارات.'
        ],
        'hero_title' => [
            'en' => 'Legal Docs Processing',
            'ar' => 'معالجة المستندات القانونية'
        ],
        'hero_sub_title' => [
            'en' => 'Handled with care and precision.',
            'ar' => 'بكل عناية ودقة.'
        ],
        'hero_description' => [
            'en' => 'Document verification, submission, and follow-up across UAE entities.',
            'ar' => 'التحقق من المستندات، تقديمها، والمتابعة مع الجهات في الإمارات.'
        ],
        'meta_title' => 'Legal Document Processing UAE',
        'meta_description' => 'Professional handling of legal documents including contracts, affidavits, and more.',
        'type' => 'pro-service',
        'status' => 'published',
        'route_name' => 'front.proservices.show',
        'page_link_for' => 'header',
        'order_no' => 5,
    ],
//7. Document Clearance Services END

//  8. Bank Account Opening Services
[
    'slug' => 'corporate-bank-account-setup',
    'title' => [
        'en' => 'Corporate Bank Account Setup',
        'ar' => 'إعداد حساب بنكي للشركات'
    ],
    'description' => [
        'en' => 'We help you open and manage your corporate bank accounts in the UAE.',
        'ar' => 'نساعدك في فتح وإدارة حساباتك المصرفية للشركات في الإمارات العربية المتحدة.'
    ],
    'hero_title' => [
        'en' => 'Corporate Banking',
        'ar' => 'الخدمات المصرفية للشركات'
    ],
    'hero_sub_title' => [
        'en' => 'Efficient corporate account services.',
        'ar' => 'خدمات حسابات الشركات بكفاءة.'
    ],
    'hero_description' => [
        'en' => 'From documentation to approval, we simplify your corporate banking process.',
        'ar' => 'من التوثيق إلى الموافقة، نبسط عملية الخدمات المصرفية لشركتك.'
    ],
    'meta_title' => 'Corporate Bank Account UAE',
    'meta_description' => 'Open your corporate bank account in the UAE with expert assistance.',
    'type' => 'bank-service',
    'status' => 'published',
    'route_name' => 'front.bankservices.show',
    'page_link_for' => 'header',
    'order_no' => 1,
],
[
    'slug' => 'personal-bank-account-assistance',
    'title' => [
        'en' => 'Personal Bank Account Assistance',
        'ar' => 'المساعدة في فتح حساب بنكي شخصي'
    ],
    'description' => [
        'en' => 'We guide individuals through opening personal accounts in top banks.',
        'ar' => 'نوجه الأفراد لفتح الحسابات الشخصية في أفضل البنوك.'
    ],
    'hero_title' => [
        'en' => 'Personal Banking',
        'ar' => 'الخدمات المصرفية الشخصية'
    ],
    'hero_sub_title' => [
        'en' => 'Your financial partner.',
        'ar' => 'شريكك المالي.'
    ],
    'hero_description' => [
        'en' => 'We handle the full process of opening your personal account hassle-free.',
        'ar' => 'نتولى كامل عملية فتح حسابك الشخصي بسهولة.'
    ],
    'meta_title' => 'Open Personal Bank Account UAE',
    'meta_description' => 'Assistance for opening personal bank accounts across UAE banks.',
    'type' => 'bank-service',
    'status' => 'published',
    'route_name' => 'front.bankservices.show',
    'page_link_for' => 'header',
    'order_no' => 2,
],
[
    'slug' => 'business-banking-consultation',
    'title' => [
        'en' => 'Business Banking Consultation',
        'ar' => 'استشارات الأعمال المصرفية'
    ],
    'description' => [
        'en' => 'Get expert advice on selecting the best business banking solutions.',
        'ar' => 'احصل على مشورة الخبراء لاختيار أفضل الحلول المصرفية للأعمال.'
    ],
    'hero_title' => [
        'en' => 'Banking Consultation',
        'ar' => 'الاستشارات المصرفية'
    ],
    'hero_sub_title' => [
        'en' => 'Tailored banking advice.',
        'ar' => 'نصائح مصرفية مخصصة.'
    ],
    'hero_description' => [
        'en' => 'Choose the right financial partner with our expert consultation.',
        'ar' => 'اختر الشريك المالي المناسب من خلال استشارتنا المتخصصة.'
    ],
    'meta_title' => 'Business Banking UAE',
    'meta_description' => 'Professional consultation for your business banking needs.',
    'type' => 'bank-service',
    'status' => 'published',
    'route_name' => 'front.bankservices.show',
    'page_link_for' => 'header',
    'order_no' => 3,
],
[
    'slug' => 'online-banking-solutions',
    'title' => [
        'en' => 'Online Banking Solutions',
        'ar' => 'حلول الخدمات المصرفية عبر الإنترنت'
    ],
    'description' => [
        'en' => 'Manage your finances conveniently with modern online banking tools.',
        'ar' => 'أدِر أموالك بسهولة باستخدام أدوات الخدمات المصرفية الحديثة عبر الإنترنت.'
    ],
    'hero_title' => [
        'en' => 'Digital Banking',
        'ar' => 'الخدمات المصرفية الرقمية'
    ],
    'hero_sub_title' => [
        'en' => 'Accessible banking anytime.',
        'ar' => 'الوصول إلى البنك في أي وقت.'
    ],
    'hero_description' => [
        'en' => 'Get support for setting up and using online banking for personal or business use.',
        'ar' => 'احصل على الدعم لإعداد واستخدام الخدمات المصرفية عبر الإنترنت للأفراد أو الشركات.'
    ],
    'meta_title' => 'Online Banking UAE',
    'meta_description' => 'Modern online banking solutions for UAE residents and businesses.',
    'type' => 'bank-service',
    'status' => 'published',
    'route_name' => 'front.bankservices.show',
    'page_link_for' => 'header',
    'order_no' => 4,
],
// Bank Account Opening Services end

// 12. Dubai Notary Services
[
    'slug' => 'document-authentication',
    'title' => [
        'en' => 'Document Authentication',
        'ar' => 'توثيق المستندات'
    ],
    'description' => [
        'en' => 'We authenticate your documents with full legal validity in Dubai.',
        'ar' => 'نقوم بتوثيق مستنداتك بصلاحية قانونية كاملة في دبي.'
    ],
    'hero_title' => [
        'en' => 'Trusted Document Authentication',
        'ar' => 'توثيق مستندات موثوق'
    ],
    'hero_sub_title' => [
        'en' => 'Certified and compliant authentication.',
        'ar' => 'توثيق معتمد ومتوافق مع القوانين.'
    ],
    'hero_description' => [
        'en' => 'Ensure your documents are legally recognized in the UAE.',
        'ar' => 'تأكد من أن مستنداتك معترف بها قانونياً في الإمارات.'
    ],
    'meta_title' => 'Dubai Document Authentication Services',
    'meta_description' => 'Professional document authentication services in Dubai for legal use.',
    'type' => 'notary-service',
    'status' => 'published',
    'route_name' => 'front.notaryservices.show',
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
        'en' => 'We notarize all your property and real estate documents in Dubai.',
        'ar' => 'نقوم بتوثيق جميع مستندات العقارات الخاصة بك في دبي.'
    ],
    'hero_title' => [
        'en' => 'Real Estate Notarization',
        'ar' => 'توثيق العقارات'
    ],
    'hero_sub_title' => [
        'en' => 'Reliable property documentation services.',
        'ar' => 'خدمات توثيق الممتلكات الموثوقة.'
    ],
    'hero_description' => [
        'en' => 'Complete support for buying, selling, or leasing property in Dubai.',
        'ar' => 'دعم كامل للبيع أو الشراء أو التأجير في دبي.'
    ],
    'meta_title' => 'Real Estate Notary Dubai',
    'meta_description' => 'Legal notarization for all types of real estate transactions in Dubai.',
    'type' => 'notary-service',
    'status' => 'published',
    'route_name' => 'front.notaryservices.show',
    'page_link_for' => 'header',
    'order_no' => 2,
],
[
    'slug' => 'affidavits-declarations',
    'title' => [
        'en' => 'Affidavits and Declarations',
        'ar' => 'الإقرارات والتصريحات'
    ],
    'description' => [
        'en' => 'Create and notarize affidavits and statutory declarations quickly and legally.',
        'ar' => 'إعداد وتوثيق الإقرارات القانونية بسرعة وبشكل قانوني.'
    ],
    'hero_title' => [
        'en' => 'Legal Affidavits',
        'ar' => 'إقرارات قانونية'
    ],
    'hero_sub_title' => [
        'en' => 'Personal and business declarations notarized.',
        'ar' => 'توثيق الإقرارات الشخصية والتجارية.'
    ],
    'hero_description' => [
        'en' => 'We provide certified notarization for various affidavit types.',
        'ar' => 'نوفر توثيقاً معتمداً لأنواع مختلفة من الإقرارات.'
    ],
    'meta_title' => 'Affidavit Notary Dubai',
    'meta_description' => 'Dubai notary services for personal and official affidavits and declarations.',
    'type' => 'notary-service',
    'status' => 'published',
    'route_name' => 'front.notaryservices.show',
    'page_link_for' => 'header',
    'order_no' => 3,
],
[
    'slug' => 'power-of-attorney-notarization',
    'title' => [
        'en' => 'Power of Attorney (POA) Notarization',
        'ar' => 'توثيق الوكالة القانونية'
    ],
    'description' => [
        'en' => 'Draft and notarize your Power of Attorney documents quickly and securely.',
        'ar' => 'إعداد وتوثيق مستندات الوكالة القانونية بسرعة وأمان.'
    ],
    'hero_title' => [
        'en' => 'POA Notarization',
        'ar' => 'توثيق الوكالة'
    ],
    'hero_sub_title' => [
        'en' => 'Legally valid POA services in Dubai.',
        'ar' => 'خدمات وكالة قانونية صالحة في دبي.'
    ],
    'hero_description' => [
        'en' => 'We handle all types of Power of Attorney notarizations.',
        'ar' => 'نتولى جميع أنواع توثيق الوكالات القانونية.'
    ],
    'meta_title' => 'POA Notary Services Dubai',
    'meta_description' => 'Certified POA notarization services in Dubai for legal and business use.',
    'type' => 'notary-service',
    'status' => 'published',
    'route_name' => 'front.notaryservices.show',
    'page_link_for' => 'header',
    'order_no' => 4,
],
// Dubai Notary Services end

   // real estate         
  [
=======

            [
>>>>>>> 54e1aedfdbb10d950b5f4f55c41e6075f409747e
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
