<?php
ob_start();
?>
<!-- Page Header Section Start -->
<div class="page-header bg-section parallaxie">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-header-box">
                    <h1 class="text-anime-style-3" data-cursor="-opaque">Video gallery</h1>
                    <nav class="wow fadeInUp">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Video Gallery</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Header Section End -->

<!-- Page Video Gallery Start -->
<div class="page-video-gallery">
    <div class="container">
        <div class="row section-row">
            <div class="col-lg-12">
                <div class="section-title section-title-center">
                    <h3 class="wow fadeInUp">Video Gallery</h3>
                    <h2 class="text-anime-style-3" data-cursor="-opaque">
                        Real moments of therapy, learning, and joyful progress
                    </h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="video-gallery-image wow fadeInUp">
                    <a href="assets/images/reels/v1.mp4" class="popup-video" data-cursor-text="Play">
                        <figure>
                            <img src="assets/images/reels/v1.jpg" alt="">
                        </figure>
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="video-gallery-image wow fadeInUp" data-wow-delay="0.2s">
                    <a href="assets/images/reels/v2.mp4" class="popup-video" data-cursor-text="Play">
                        <figure>
                            <img src="assets/images/reels/v2.jpg" alt="">
                        </figure>
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="video-gallery-image wow fadeInUp" data-wow-delay="0.4s">
                    <a href="assets/images/reels/v3.mp4" class="popup-video" data-cursor-text="Play">
                        <figure>
                            <img src="assets/images/reels/v3.jpg" alt="">
                        </figure>
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="video-gallery-image wow fadeInUp" data-wow-delay="0.6s">
                    <a href="assets/images/reels/v4.mp4" class="popup-video" data-cursor-text="Play">
                        <figure>
                            <img src="assets/images/reels/v4.jpg" alt="">
                        </figure>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Video Gallery End -->




<?php
$content = ob_get_clean();
require 'layout.php';
?>