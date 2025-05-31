<section class="wrapper bg-soft-green">
    <div class="container mt-14 pb-18 mt-md-16 pb-md-22 text-center">
        <div class="row justify-content-center mt-15 mb-12">
            <div class="col-md-6 col-sm-12 text-center ">{!! __('home-page.services_title') !!}
                <p>{!! __('home-page.services_subtitle') !!}</p>
            </div>
        </div>
    </div>
    <!-- /.container -->
</section>
<!-- /section -->
<section class="wrapper bg-light">
    <div class="container py-14 py-md-16">
        <div class="pricing-wrapper position-relative mt-n22 mt-md-n24">
            <div class="shape bg-dot red rellax w-16 h-18" data-rellax-speed="1" style="top: 2rem; right: -2.4rem;"></div>
            <div class="shape rounded-circle bg-line red rellax w-18 h-18 d-none d-lg-block" data-rellax-speed="1"
                style="bottom: 0.5rem; left: -2.5rem;"></div>

            <div class="row gy-6">
                <div class="col-md-6 col-lg-4">
                    <div class="pricing card text-center h-100 hover-card">
                        <div class="card-header">
                            <a href="/amerServices.html"><img src="assets/static/amer-card.webp"
                                    class=" card-img-top w-50 text-center justify-content-center" alt="" /></a>

                        </div>
                        <div class="card-body pt-4 pb-4 h-100 d-flex flex-column align-items-center">

                            <ul class="icon-list bullet-bg bullet-soft-red mt-4 mb-4 text-start align-items-center">
                                <li><i class="uil uil-angle-right text-red"></i><span><strong><a
                                                href="{{ route('front.residency.visa') }}" class="hover-black">Residency
                                                Visa Issuance/Renewal</a> </strong></span></li>
                                <li><i class="uil uil-angle-right text-red"></i><span><strong><a
                                                href="{{ route('front.open.file') }}" class="hover-black">Open
                                                File</strong></a></span></li>
                                <li><i class="uil uil-angle-right text-red"></i><span><strong><a
                                                href="{{ route('front.visa.cancellation') }}" class="hover-black">Visa
                                                Cancellations</a></strong></span></li>
                                <li><i class="uil uil-angle-right text-red"></i><span><strong><a
                                                href="{{ route('front.emirate.id') }}" class="hover-black">Emirates ID
                                                Applications</a></strong></span></li>
                                <li><i class="uil uil-angle-right text-red"></i><span><strong><a
                                                href="{{ route('front.medical.fitness.test') }}"
                                                class="hover-black">Medical Fitness Tests</a></strong></span></li>
                                <li><i class="uil uil-angle-right text-red"></i><span><strong><a
                                                href="{{ route('front.entry.permit') }}" class="hover-black">Entry
                                                Permit </a></strong></span></li>
                                <li><i class="uil uil-angle-right text-red"></i><span><strong><a
                                                href="{{ route('front.visit.visa') }}" class="hover-black">Visit Visas
                                            </a></strong></span></li>
                                <li><i class="uil uil-angle-right text-red"></i><span><strong><a
                                                href="{{ route('front.domestic.worker.visa') }}"
                                                class="hover-black">Domestic Worker Visa </a></strong></span></li>

                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="pricing card text-center h-100 hover-card d-flex">
                        <div class="card-header">
                            <img src="assets/static/tasheel-card.webp"
                                class=" card-img-top w-50 text-center justify-content-center" alt="" />

                        </div>

                        <div class="card-body pt-4 pb-4 h-100 d-flex flex-column align-items-center">

                            <ul class="icon-list bullet-bg bullet-soft-red mt-4 mb-4 text-start align-items-center">
                                <li><i class="uil uil-angle-right text-red"></i><span><strong><a
                                                href="{{ route('front.tasheel.government') }}"
                                                class="hover-black">Goverment Transaction</a></strong></span></li>
                                <li><i class="uil uil-angle-right text-red"></i><span><strong><a
                                                href="{{ route('front.tasheel.mohre') }}" class="hover-black">Mohre
                                                Services </a></strong></span></li>
                                <li><i class="uil uil-angle-right text-red"></i><span><strong><a
                                                href="{{ route('front.tasheel.translation') }}"
                                                class="hover-black">Legal Transaction</a></strong></span></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="pricing card text-center h-100 hover-card">
                        <div class="card-header">
                            <img src="assets/static/DED-card.webp"
                                class=" card-img-top w-50 text-center justify-content-center" alt="" />

                        </div>
                        <div class="card-body pt-4 pb-4 h-100 d-flex flex-column align-items-center">

                            <ul class="icon-list bullet-bg bullet-soft-red mt-4 mb-4 text-start ">
                                <li><i class="uil uil-angle-right text-red"></i><span><strong><a href="{{ route('front.dedservices.business_setup') }}"
                                                class="hover-black">Business Setup and Licensing</a></strong></span></li>
                                <li><i class="uil uil-angle-right text-red"></i><span><strong><a href="{{ route('front.dedservices.trade_name') }}"
                                                class="hover-black">Trade Name  Reservation</a></strong></span></li>
                                <li><i class="uil uil-angle-right text-red"></i><span><strong><a href="{{ route('front.dedservices.initial_approval') }}"
                                                class="hover-black">Initial Approval </a></strong></span></li>
                                <li><i class="uil uil-angle-right text-red"></i><span> <strong><a href="{{ route('front.dedservices.license_renewal') }}"
                                                class="hover-black">License Renewal and Amendments</a></strong></span></li>
                                <li><i class="uil uil-angle-right text-red"></i><span> <strong><a href="{{ route('front.dedservices.deregistration') }}"
                                                class="hover-black">Company Deregistration</a></strong></span></li>
                                <li><i class="uil uil-angle-right text-red"></i><span> <strong><a href="{{ route('front.dedservices.commercial_permits') }}"
                                                class="hover-black">Commercial Permits</a></strong></span></li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="pricing card text-center h-100 hover-card">
                        <div class="card-header">
                            <img src="assets/static/legal-card.webp"
                                class=" card-img-top w-50 text-center justify-content-center" alt="" />

                        </div>
                        <div class="card-body pt-4 pb-4 h-100 d-flex flex-column align-items-center">

                            <ul class="icon-list bullet-bg bullet-soft-red mt-4 mb-4 text-start ">
                                <li><i class="uil uil-angle-right text-red"></i><span><strong><a href="{{ route('legal.document_drafting') }}"
                                                class="hover-black">Document Drafting</a></strong></span></li>
                                <li><i class="uil uil-angle-right text-red"></i><span><strong><a href="{{ route('legal.consultations') }}"
                                                class="hover-black">Consultations</a></strong></span></li>
                                <li><i class="uil uil-angle-right text-red"></i><span><strong><a href="{{ route('legal.representation') }}"
                                                class="hover-black">Representation</a></strong></span></li>
                                <li><i class="uil uil-angle-right text-red"></i><span> <strong><a href="{{ route('legal.dispute_resolution') }}"
                                                class="hover-black">Dispute Resolution </a></strong></span></li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="pricing card text-center h-100 hover-card">
                        <div class="card-header">
                            <img src="assets/static/DHA-card.webp"
                                class=" card-img-top w-50 text-center justify-content-center" alt="" />

                        </div>
                        <div class="card-body pt-4 pb-4 h-100 d-flex flex-column align-items-center">

                            <ul class="icon-list bullet-bg bullet-soft-red mt-4 mb-4 text-start ">
                                <li><i class="uil uil-angle-right text-red"></i><span><strong><a href="{{ route('dha.medical_fitness_tests') }}"
                                                class="hover-black">Medical Fitness Tests</a></strong></span></li>
                                <li><i class="uil uil-angle-right text-red"></i><span><strong><a href="{{ route('dha.health_insurance_approvals') }}"
                                                class="hover-black">Health Insurance Approvals</a></strong></span></li>


                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="pricing card text-center h-100 hover-card">
                        <div class="card-header">
                            <img src="assets/static/Notary-card.webp"
                                class=" card-img-top w-50 text-center justify-content-center" alt="" />

                        </div>
                        <div class="card-body pt-4 pb-4 h-100 d-flex flex-column align-items-center">

                            <ul class="icon-list bullet-bg bullet-soft-red mt-4 mb-4 text-start ">
                                <li><i class="uil uil-angle-right text-red"></i><span><strong><a href="{{ route('front.dubai-notary.authentication') }}"
                                                class="hover-black">Document Authentication</a></strong></span></li>
                                <li><i class="uil uil-angle-right text-red"></i><span><strong><a href="{{ route('front.dubai-notary.transactions') }}"
                                                class="hover-black">Real Estate Transactions</a></strong></span></li>
                                <li><i class="uil uil-angle-right text-red"></i><span><strong><a href="{{ route('front.dubai-notary.affidavits-declarations') }}"
                                                class="hover-black">Affidavits and Declarations</a></strong></span>
                                </li>
                                <li><i class="uil uil-angle-right text-red"></i><span><strong><a href="{{ route('front.dubai-notary.attorney') }}"
                                                class="hover-black">Power of Attorney (POA) Notarization</a></strong></span>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="pricing card text-center h-100 hover-card">
                        <div class="card-header">
                            <img src="assets/static/attest-card.webp"
                                class=" card-img-top w-50 text-center justify-content-center" alt="" />

                        </div>
                        <div class="card-body pt-4 pb-4 h-100 d-flex flex-column align-items-center">

                            <ul class="icon-list bullet-bg bullet-soft-red mt-4 mb-8 text-start ">
                                <li><i class="uil uil-angle-right text-red"></i><span><strong><a href="{{ route('typing.police_clearance') }}"
                                                class="hover-black">Police Clearance</a></strong></span></li>
                                <li><i class="uil uil-angle-right text-red"></i><span><strong><a href="{{ route('typing.new_passport_request') }}"
                                                class="hover-black">New Passport Request</a></strong></span></li>
                                <li><i class="uil uil-angle-right text-red"></i><span><strong><a href="{{ route('typing.passport_renewal') }}"
                                                class="hover-black">Passport Renewal</a></strong></span></li>
                                <li><i class="uil uil-angle-right text-red"></i><span> <strong><a href="{{ route('typing.passport_lost_report') }}"
                                                class="hover-black">Passport Lost Report</a></strong></span></li>
                                <li><i class="uil uil-angle-right text-red"></i><span> <strong><a href="{{ route('typing.mofa_attestation') }}"
                                                class="hover-black">MOFA Attestation</a></strong></span></li>
                                <li><i class="uil uil-angle-right text-red"></i><span> <strong><a href="{{ route('typing.power_of_attorney_drafting') }}"
                                                class="hover-black">Power of Attorney (POA) Drafting
                                                Court</a></strong></span></li>
                                <li><i class="uil uil-angle-right text-red"></i><span> <strong><a href="{{ route('typing.document_typing_formatting') }}"
                                                class="hover-black">Document Typing and Formatting
                                                Court</a></strong></span></li>


                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
