<?php
ob_start();
?>
<!-- Page Header Section Start -->
<div class="page-header bg-section parallaxie">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-header-box">
                    <h1 class="text-anime-style-3" data-cursor="-opaque">FAQ`s</h1>
                    <nav class="wow fadeInUp">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">FAQ`s</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Header Section End -->

<!-- Page Blog Start -->
<div class="page-blog">
    <div class="container">
        <div class="row section-row">
            <div class="col-lg-12 section-title section-title-center">
                <h3 class="wow fadeInUp">FAQs   </h3>
                <h2 class="text-anime-style-3" data-cursor="-opaque">
                    Answers to Your Common Questions
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10 offset-1">
                <div class="faq-accordion" id="accordion">

                    <!-- FAQ 1 -->
                    <div class="accordion-item wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <h2 class="accordion-header" id="heading1">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1">
                                1. What children do you support at Nurture Hub?
                            </button>
                        </h2>

                        <div id="collapse1" class="accordion-collapse collapse show" data-bs-parent="#accordion">
                            <div class="accordion-body">
                                <p>
                                    We support children with speech and language delays, learning difficulties,
                                    behavioural concerns,
                                    developmental delays, attention challenges, and other early childhood developmental
                                    needs.
                                </p>
                            </div>
                        </div>
                    </div>


                    <!-- FAQ 2 -->
                    <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                        <h2 class="accordion-header" id="heading2">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2">
                                2. Do I need a doctor’s referral to start therapy?
                            </button>
                        </h2>

                        <div id="collapse2" class="accordion-collapse collapse " data-bs-parent="#accordion">
                            <div class="accordion-body">
                                <p>
                                    No referral is required. Parents can directly contact us to book an assessment.
                                    If needed, our team will guide you regarding medical referrals at a later stage.
                                </p>
                            </div>
                        </div>
                    </div>


                    <!-- FAQ 3 -->
                    <div class="accordion-item wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                        <h2 class="accordion-header" id="heading3">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3">
                                3. How do you decide which therapy is right for my child?
                            </button>
                        </h2>

                        <div id="collapse3" class="accordion-collapse collapse" data-bs-parent="#accordion">
                            <div class="accordion-body">
                                <p>
                                    We begin with a detailed assessment to understand your child’s strengths,
                                    challenges,
                                    and developmental needs. Based on this, we create a personalized therapy plan.
                                </p>
                            </div>
                        </div>
                    </div>


                    <!-- FAQ 4 -->
                    <div class="accordion-item wow fadeInUp" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                        <h2 class="accordion-header" id="heading4">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4">
                                4. How long will my child need therapy?
                            </button>
                        </h2>

                        <div id="collapse4" class="accordion-collapse collapse" data-bs-parent="#accordion">
                            <div class="accordion-body">
                                <p>
                                    Therapy duration varies for every child. Some children show progress within a few
                                    weeks,
                                    while others may benefit from longer-term support depending on their goals and
                                    needs.
                                </p>
                            </div>
                        </div>
                    </div>


                    <!-- FAQ 5 -->
                    <div class="accordion-item wow fadeInUp" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInUp;">
                        <h2 class="accordion-header" id="heading5">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5">
                                5. Are parents involved during the therapy process?
                            </button>
                        </h2>

                        <div id="collapse5" class="accordion-collapse collapse" data-bs-parent="#accordion">
                            <div class="accordion-body">
                                <p>
                                    Yes, parent involvement is very important to us. We regularly share progress updates
                                    and simple home strategies so parents can support their child’s development
                                    confidently.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


<!-- Page Blog End -->

<?php
$content = ob_get_clean();
require 'layout.php';
?>