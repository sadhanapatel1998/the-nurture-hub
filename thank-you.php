<?php
ob_start();
?>
<!-- Thank You Page start -->
<div class="error-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="error-page-content">
                    <div class="section-title">
                        <h2 class="text-anime-style-3" data-cursor="-opaque">
                            Thank You for Contacting Us!
                        </h2>
                    </div>
                    <div class="error-page-content-body">
                        <p class="wow fadeInUp" data-wow-delay="0.2s">
                            Your message has been sent successfully. Our team at The Nurture Hub Child Development Center
                            will get in touch with you shortly.
                        </p>
                        <a class="btn-default wow fadeInUp" data-wow-delay="0.4s" href="index.php">
                            Back to Home
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Thank You Page end -->

<?php
$content = ob_get_clean();
require 'layout.php';
?>
