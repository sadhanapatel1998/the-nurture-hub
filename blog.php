<?php
ob_start();
?>
<!-- Page Header Section Start -->
<div class="page-header bg-section parallaxie">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-header-box">
                    <h1 class="text-anime-style-3" data-cursor="-opaque">Latest Blog</h1>
                    <nav class="wow fadeInUp">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Blog</li>
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
                <h3 class="wow fadeInUp">From Our Blog</h3>
                <h2 class="text-anime-style-3" data-cursor="-opaque">
                    Stories, tips, and knowledge to help children grow, learn, and thrive
                </h2>
            </div>
        </div>
        <div class="row">

            <!-- Blog 1 -->
            <div class="col-xl-3 col-md-6">
                <div class="post-item wow fadeInUp">
                    <div class="post-featured-image">
                        <a href="javascript:void(0)" data-cursor-text="View">
                            <figure class="image-anime">
                                <img src="assets/images/services/speech-therapy.jpg" alt="Speech practice at home">
                            </figure>
                        </a>
                    </div>

                    <div class="post-item-body">
                        <div class="post-item-content">
                            <h2>
                                <a href="javascript:void(0)">5 Simple Speech Practice Tips for Home</a>
                            </h2>
                            <p class="mt-3">
                                Easy daily activities parents can use to improve communication skills, vocabulary development, and confidence through fun home-based speech practice.
                            </p>
                        </div>

                        <div class="post-item-btn">
                            <a href="javascript:void(0)" class="readmore-btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Blog 2 -->
            <div class="col-xl-3 col-md-6">
                <div class="post-item wow fadeInUp" data-wow-delay="0.2s">
                    <div class="post-featured-image">
                        <a href="javascript:void(0)" data-cursor-text="View">
                            <figure class="image-anime">
                                <img src="assets/images/services/behaviour-therapy.jpg" alt="Early developmental signs">
                            </figure>
                        </a>
                    </div>

                    <div class="post-item-body">
                        <div class="post-item-content">
                            <h2>
                                <a href="javascript:void(0)">Recognizing Early Developmental Delay Signs</a>
                            </h2>
                            <p class="mt-3">
                                Learn key developmental milestones and early warning signs so parents can seek timely support and ensure better developmental outcomes.
                            </p>
                        </div>

                        <div class="post-item-btn">
                            <a href="javascript:void(0)" class="readmore-btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Blog 3 -->
            <div class="col-xl-3 col-md-6">
                <div class="post-item wow fadeInUp" data-wow-delay="0.4s">
                    <div class="post-featured-image">
                        <a href="javascript:void(0)" data-cursor-text="View">
                            <figure class="image-anime">
                                <img src="assets/images/services/counselling.jpg" alt="Parent guidance support">
                            </figure>
                        </a>
                    </div>

                    <div class="post-item-body">
                        <div class="post-item-content">
                            <h2>
                                <a href="javascript:void(0)">How Parents Support Therapy Progress</a>
                            </h2>
                            <p class="mt-3">
                                Practical ways parents can reinforce therapy goals at home through routines, encouragement, and structured learning activities.
                            </p>
                        </div>

                        <div class="post-item-btn">
                            <a href="javascript:void(0)" class="readmore-btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Blog 4 -->
            <div class="col-xl-3 col-md-6">
                <div class="post-item wow fadeInUp" data-wow-delay="0.6s">
                    <div class="post-featured-image">
                        <a href="javascript:void(0)" data-cursor-text="View">
                            <figure class="image-anime">
                                <img src="assets/images/services/occupational-therapy.jpg" alt="Therapy activities at home">
                            </figure>
                        </a>
                    </div>

                    <div class="post-item-body">
                        <div class="post-item-content">
                            <h2>
                                <a href="javascript:void(0)">Simple Therapy Activities Parents Can Try</a>
                            </h2>
                            <p class="mt-3">
                                Engaging activities designed to improve motor skills, focus, coordination, and independence while making learning enjoyable at home.
                            </p>
                        </div>

                        <div class="post-item-btn">
                            <a href="javascript:void(0)" class="readmore-btn">Read More</a>
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