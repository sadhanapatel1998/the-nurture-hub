<?php
ob_start();
?>
<!-- error Page start -->
<div class="error-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="error-page-content">
                    <div class="section-title">
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Oops! page not found</h2>
                    </div>
                    <div class="error-page-content-body">
                        <p class="wow fadeInUp" data-wow-delay="0.2s">The page you are looking for does not exist.</p>
                        <a class="btn-default wow fadeInUp" data-wow-delay="0.4s" href="/">back to home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- error Page end -->

<?php
$content = ob_get_clean();
require 'layout.php';
?>