<?php
ob_start();
include_once('include/service-data.php');
?>
<!-- Page Header Section Start -->
<div class="page-header bg-section parallaxie">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-header-box">
                    <h1 class="text-anime-style-3" data-cursor="-opaque">All Services</h1>
                    <nav class="wow fadeInUp">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">All Services</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Header Section End -->

<!-- Our Program Section Start -->
<div class="our-programs-silver">
    <div class="container">
        <div class="row section-row">
            <div class="col-lg-12">
                <div class="section-title section-title-center">
                    <h3 class="wow fadeInUp">Our Core Services </h3>
                    <h2 class="text-anime-style-3" data-cursor="-opaque">Expert Therapy Services for Child Development
                    </h2>
                </div>
            </div>
        </div>

        <div class="row">
            <?php foreach (array_slice($services, 0, 8) as $service): ?>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                    <div class="program-item-silver wow fadeInUp">

                        <div class="program-item-image-silver">
                            <div class="program-item-image">
                                <a href="<?php echo $service['link']; ?>" style="cursor:pointer">
                                    <img src="<?php echo $service['image'];  ?>" alt="">
                                </a>
                            </div>
                            <div class="program-item-Body-silver">
                                <div class="program-item-content-silver">
                                    <h2><a href="<?php echo $service['link']; ?>"><?php echo $service['title']; ?></a>
                                    </h2>
                                    <p><?php echo $service['desc']; ?></p>
                                </div>
                                <div class="program-item-btn-silver">
                                    <a href="<?php echo $service['link']; ?>" class="readmore-btn">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach;
            ?>
        </div>
    </div>
</div>
<!-- Our Program Section End -->
<?php
$content = ob_get_clean();
require 'layout.php';
?>