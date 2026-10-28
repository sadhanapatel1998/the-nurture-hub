<?php
ob_start();
include_once('include/service-data.php');
?>

<!-- Hero Section Start -->
<div class="hero bg-section dark-section parallaxie">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="hero-content">
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Care, Learn, and Grow</h3>

                        <h1 class="text-anime-style-3" data-cursor="-opaque">
                            Nurturing Every Child’s Potential
                        </h1>

                        <p class="wow fadeInUp" data-wow-delay="0.2s">
                            Expert speech, occupational, and developmental therapies in a safe, supportive
                            environment.
                        </p>
                    </div>

                    <div class="hero-content-footer wow fadeInUp" data-wow-delay="0.4s">
                        <div class="hero-btn">
                            <a href="contact-us.php" class="btn-default btn-highlighted">Book a Free Consultation</a>
                        </div>

                        <div class="hero-client-box">
                            <div class="satisfy-client-images">
                                <div class="satisfy-client-image">
                                    <figure class="image-anime">
                                        <img src="assets/images/t4.png" alt="">
                                    </figure>
                                </div>
                                <div class="satisfy-client-image">
                                    <figure class="image-anime">
                                        <img src="assets/images/t2.png" alt="">
                                    </figure>
                                </div>
                                <div class="satisfy-client-image">
                                    <figure class="image-anime">
                                        <img src="assets/images/t5.png" alt="">
                                    </figure>
                                </div>
                                <div class="satisfy-client-image add-more">
                                    <i class="fa fa-solid fa-plus"></i>
                                </div>
                            </div>
                            <div class="satisfy-client-content">
                                <span>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </span>
                                <p><span class="counter">4.9</span> / 5 kinds Reviews</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hero Section End -->

<!-- About Us Section Start -->
<div class="about-us">
    <div class="container">
        <div class="row align-items-center">

            <!-- IMAGE -->
            <div class="col-xl-6 order-xl-1 order-2">
                <div class="about-us-image-box wow fadeInUp">
                    <div class="about-us-image-box-1">
                        <div class="about-us-image">
                            <figure class="image-anime">
                                <img src="assets/images/about-us-image-2.jpg" alt="">
                            </figure>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CONTENT -->
            <div class="col-xl-6 order-xl-2 order-1">
                <div class="about-us-content">
                    <div class="section-title">
                        <h3 class="wow fadeInUp">About Us</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">
                            Supporting every child with expertise
                        </h2>

                        <p class="wow fadeInUp" data-wow-delay="0.2s">
                            Led by experienced child development professionals, Nurture Hub provides evidence-based
                            therapy and structured learning experiences that empower children to achieve measurable
                            developmental progress with confidence and care.
                        </p>
                    </div>

                    <div class="about-us-body wow fadeInUp" data-wow-delay="0.4s">
                        <div class="about-us-items-list">
                            <div class="about-us-item">
                                <div class="icon-box">
                                    <img src="assets/images/icon-about-body-item-1.svg" alt="">
                                </div>
                                <div class="about-us-item-content">
                                    <h3>Qualified & Child-Friendly Therapists</h3>
                                    <p>
                                        Experienced therapists providing supportive care to help children improve
                                        communication,
                                        behavior, and essential developmental skills.
                                    </p>
                                </div>
                            </div>

                            <div class="about-us-item">
                                <div class="icon-box">
                                    <img src="assets/images/new-icon.png" alt="" style="max-width:40px;">
                                </div>
                                <div class="about-us-item-content">
                                    <h3>Personalized Therapy Plans</h3>
                                    <p>
                                        Customized therapy programs designed around each child’s needs to support
                                        confident learning
                                        and steady developmental progress.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- <div class="about-us-list">
                            <ul>
                                <li>Evidence-based therapy approach</li>
                                <li>Focus on speech, behavior & learning</li>
                                <li>Parental guidance & regular progress reviews</li>
                                <li>Safe, supportive & child-centered environment</li>
                            </ul>
                        </div> -->
                    </div>

                    <div class="about-us-footer wow fadeInUp" data-wow-delay="0.6s">
                        <a href="about-us.php" class="btn-default">Know More About Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- About Us Section End -->


<!-- Our services Section Start -->
<div class="our-programs-silver bg-section">
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
            <?php foreach (array_slice($services, 0, 4) as $service): ?>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
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

            <div class="col-lg-12">
                <div class="section-footer-text section-satisfy-img wow fadeInUp" data-wow-delay="0.4s">
                    <div class="satisfy-client-images">
                        <div class="satisfy-client-image">
                            <figure class="image-anime">
                                <img src="assets/images/t5.png" alt="">
                            </figure>
                        </div>
                        <div class="satisfy-client-image add-more">
                            <img src="assets/images/icon-phone-white.svg" alt="">
                        </div>
                    </div>
                    <p>Fun filled programs nurturing young minds with love daily. <a href="all-services.php"> View All
                            Programs</a></p>
                    <ul>
                        <li><span class="counter">4.9</span></li>
                        <li>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </li>
                        <li>Highly Rated by Happy Parents</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Our services Section End -->

<!-- Why Choose Us Section Start -->
<div class="why-choose-us-gold">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="why-choose-us-content-gold fadeInUp" data-wow-delay="0.4s">
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Why Choose Nurture Hub</h3>

                        <h2 class="text-anime-style-3" data-cursor="-opaque">
                            Trusted Expertise. Personalized Care. Proven Progress.
                        </h2>

                        <p class="wow fadeInUp" data-wow-delay="0.2s">
                            We combine expert therapy, parent collaboration, and individualized programs
                            to deliver meaningful developmental progress for every child.
                        </p>
                    </div>

                    <div class="row our-features-silver py-0">
                        <div class="col-xl-6 col-md-6">
                            <div class="feature-item-silver wow fadeInUp" data-wow-delay="0.2s"
                                style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                                <div class="feature-item-content-box-silver">
                                    <div class="feature-item-content-silver">
                                        <div class="d-flex align-items-center mb-2">
                                            <div class="icon-box">
                                                <img src="assets/images/why-choose/therapy.png" alt="Icon">
                                            </div>
                                            <h3>Personalized Therapy Plans</h3>
                                        </div>
                                        <p>
                                            Each child receives an individualized therapy program based on detailed
                                            assessment, ensuring focused support and measurable progress.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6 col-md-6">
                            <div class="feature-item-silver highlighted-box wow fadeInUp" data-wow-delay="0.4s"
                                style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                                <div class="feature-item-content-box-silver">
                                    <div class="feature-item-content-silver">
                                        <div class="d-flex align-items-center mb-2">
                                            <div class="icon-box">
                                                <img src="assets/images/why-choose/medal.png" alt="Icon">
                                            </div>
                                            <h3>Multidisciplinary Expert Team</h3>
                                        </div>
                                        <p>
                                            Our specialists collaborate across therapies to provide holistic care
                                            supporting communication, behavior, learning, and motor development.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-6">
                            <div class="feature-item-silver highlighted-box wow fadeInUp" data-wow-delay="0.4s"
                                style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                                <div class="feature-item-content-box-silver">
                                    <div class="feature-item-content-silver">
                                        <div class="d-flex align-items-center mb-2">
                                            <div class="icon-box">
                                                <img src="assets/images/why-choose/progress.png" alt="Icon">
                                            </div>
                                            <h3>Parent-Guided Progress Reviews</h3>
                                        </div>
                                        <p>
                                            Regular updates, goal tracking, and home strategies keep parents actively
                                            involved in their child’s developmental journey.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-6">
                            <div class="feature-item-silver wow fadeInUp" data-wow-delay="0.2s"
                                style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                                <div class="feature-item-content-box-silver">
                                    <div class="feature-item-content-silver">
                                        <div class="d-flex align-items-center mb-2">
                                            <div class="icon-box">
                                                <img src="assets/images/why-choose/rating.png" alt="Icon">
                                            </div>
                                            <h3>4.9/5 Parent Satisfaction</h3>
                                        </div>
                                        <p>
                                            Trusted by families for compassionate care, professional expertise,
                                            and consistent developmental outcomes.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="why-choose-item-list-gold wow fadeInUp" data-wow-delay="0.4s">
                        <!-- <div class="why-choose-item-gold">
                            <div class="icon-box">
                                <img src="assets/images/icon-why-choose-item-1-gold.svg" alt="">
                            </div>

                            <div class="why-choose-item-content-gold">
                                <h3>Personalized Therapy Plans</h3>
                                <p>
                                    Each child receives an individualized therapy program based on detailed
                                    assessment, ensuring focused support and measurable progress.
                                </p>
                            </div>
                        </div>

                        <div class="why-choose-item-gold">
                            <div class="icon-box">
                                <img src="assets/images/icon-why-choose-item-2-gold.svg" alt="">
                            </div>

                            <div class="why-choose-item-content-gold">
                                <h3>Multidisciplinary Expert Team</h3>
                                <p>
                                    Our specialists collaborate across therapies to provide holistic care
                                    supporting communication, behavior, learning, and motor development.
                                </p>
                            </div>
                        </div>

                        <div class="why-choose-item-gold">
                            <div class="icon-box">
                                <img src="assets/images/icon-why-choose-item-3-gold.svg" alt="">
                            </div>

                            <div class="why-choose-item-content-gold">
                                <h3>Parent-Guided Progress Reviews</h3>
                                <p>
                                    Regular updates, goal tracking, and home strategies keep parents actively
                                    involved in their child’s developmental journey.
                                </p>
                            </div>
                        </div>

                        <div class="why-choose-item-gold">
                            <div class="icon-box">
                                <img src="assets/images/icon-why-choose-item-1-gold.svg" alt="">
                            </div>

                            <div class="why-choose-item-content-gold">
                                <h3>4.9/5 Parent Satisfaction</h3>
                                <p>
                                    Trusted by families for compassionate care, professional expertise,
                                    and consistent developmental outcomes.
                                </p>
                            </div>
                        </div> -->
                        <!-- <div class="why-choose-counter-boxes-gold wow fadeInUp">
                            <div class="why-choose-counter-item-gold">
                                <div class="why-choose-counter-header-gold">
                                    <div class="why-choose-counter-info-gold">
                                        <div class="why-choose-counter-no-gold">
                                            <h2><span class="counter">10</span>+</h2>
                                        </div>
                                    </div>
                                    <div class="why-choose-counter-title-gold">
                                        <h3>Years of Trusted Learn</h3>
                                    </div>
                                </div>
                            </div>

                            <div class="why-choose-counter-item-gold">
                                <div class="why-choose-counter-header-gold">
                                    <div class="why-choose-counter-info-gold">
                                        <div class="why-choose-counter-no-gold">
                                            <h2><span class="counter">15</span>+</h2>
                                        </div>
                                    </div>
                                    <div class="why-choose-counter-title-gold">
                                        <h3>Qualified Teachers</h3>
                                    </div>
                                </div>
                            </div>

                            <div class="why-choose-counter-item-gold">
                                <div class="why-choose-counter-header-gold">
                                    <div class="why-choose-counter-info-gold">
                                        <div class="why-choose-counter-no-gold">
                                            <h2><span class="counter">500</span>+</h2>
                                        </div>
                                    </div>
                                    <div class="why-choose-counter-title-gold">
                                        <h3>Happy Learners</h3>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="why-choose-us-image-box-gold wow fadeInUp" data-wow-delay="0.2s">
                    <div class="why-choose-us-image-gold">
                        <figure class="image-anime">
                            <img src="assets/images/hero/side2.jpg" alt="">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Why Choose Section End -->

<!-- Cta Box Section Start -->
<div class="cta-box bg-section dark-section">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-md-5">
                <div class="cta-box-image">
                    <figure>
                        <img src="assets/images/hero/cta-box-image.png" alt="">
                    </figure>
                </div>
            </div>
            <div class="col-xl-6 col-md-7">
                <div class="cta-box-content">
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Programs & Outcomes</h3>

                        <h2 class="text-anime-style-3" data-cursor="-opaque">
                            What Your Child Gains
                        </h2>

                        <p class="wow fadeInUp" data-wow-delay="0.2s">
                            Our therapy programs focus on meaningful developmental outcomes,
                            helping children build essential skills, confidence, and independence
                            for everyday learning and social growth.
                        </p>
                    </div>

                    <div class="why-choose-item-list-silver w-100">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="why-choose-item-silver">
                                    <div class="icon-box">
                                        <img src="assets/images/new-icon.png" alt="" style="max-width:30px;">
                                    </div>
                                    <div class="why-choose-item-content-silver">
                                        <h3>Clearer Communication Skills</h3>
                                        <p>Improved speech clarity and better expression of thoughts and needs.</p>
                                    </div>
                                </div>

                                <div class="why-choose-item-silver">
                                    <div class="icon-box">
                                        <img src="assets/images/guidance-icon.png" alt="" style="max-width:30px;">
                                    </div>
                                    <div class="why-choose-item-content-silver">
                                        <h3>Better Focus & Confidence</h3>
                                        <p>Enhanced attention, classroom readiness, and growing self-confidence.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="why-choose-item-silver">
                                    <div class="icon-box">
                                        <img src="assets/images/new-icon.png" alt="" style="max-width:30px;">
                                    </div>
                                    <div class="why-choose-item-content-silver">
                                        <h3>Improved Motor Skills</h3>
                                        <p>Stronger coordination, posture, and independence in daily activities.</p>
                                    </div>
                                </div>

                                <div class="why-choose-item-silver">
                                    <div class="icon-box">
                                        <img src="assets/images/guidance-icon.png" alt="" style="max-width:30px;">
                                    </div>
                                    <div class="why-choose-item-content-silver">
                                        <h3>Positive Behavior Growth</h3>
                                        <p>Better emotional regulation, social interaction, and adaptive behavior.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cta-box-item-list">

                        <!-- <div class="cta-box-item wow fadeInUp" data-wow-delay="0.4s">
                            <div class="icon-box">
                                <img src="assets/images/new-icon.png" alt="" style="max-width:40px;">
                            </div>

                            <div class="cta-box-item-content">
                                <h3>Clearer Communication Skills</h3>
                                <p>Improved speech clarity and better expression of thoughts and needs.</p>
                            </div>
                        </div> -->

                        <!-- <div class="cta-box-item wow fadeInUp" data-wow-delay="0.6s">
                            <div class="icon-box">
                                <img src="assets/images/guidance-icon.png" alt="" style="max-width:40px;">
                            </div>

                            <div class="cta-box-item-content">
                                <h3>Better Focus & Confidence</h3>
                                <p>Enhanced attention, classroom readiness, and growing self-confidence.</p>
                            </div>
                        </div> -->

                        <!-- <div class="cta-box-item wow fadeInUp" data-wow-delay="0.8s">
                            <div class="icon-box">
                                <img src="assets/images/new-icon.png" alt="" style="max-width:40px;">
                            </div>

                            <div class="cta-box-item-content">
                                <h3>Improved Motor Skills</h3>
                                <p>Stronger coordination, posture, and independence in daily activities.</p>
                            </div>
                        </div>

                        <div class="cta-box-item wow fadeInUp" data-wow-delay="1s">
                            <div class="icon-box">
                                <img src="assets/images/guidance-icon.png" alt="" style="max-width:40px;">
                            </div>

                            <div class="cta-box-item-content">
                                <h3>Positive Behavior Growth</h3>
                                <p>Better emotional regulation, social interaction, and adaptive behavior.</p>
                            </div>
                        </div> -->

                    </div>

                    <div class="cta-box-btn wow fadeInUp" data-wow-delay="1.2s">
                        <a href="contact-us.php" class="btn-default btn-highlighted">
                            Schedule Assessment
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Cta Box Section End -->


<!--1. WHO WE ARE
══════════════════════════════════════ -->
<section id="who-we-are" class="bg-white pb-5">
    <div class="container">
        <div class="row align-items-center gy-5">
            <div class="col-lg-6 fade-up" style="transition-delay:.15s">

                <div class="section-title mb-2">
                    <h3 class="wow fadeInUp">Who We Are</h3>

                    <h2 class="text-anime-style-3 mb-0" data-cursor="-opaque">
                        Meet Nurture Hub
                    </h2>
                </div>

                <p class="section-sub mt-0">
                    The Nurture Hub is a dedicated child development and therapy centre committed to supporting every child’s unique journey of growth. Through personalized therapies, expert guidance, and a compassionate approach, our multidisciplinary team works closely with families to build confidence, independence, and lifelong developmental skills.
                </p>

                <div class="about-us-content-list-gold wow fadeInUp" data-wow-delay="0.4s">
                    <ul class="d-block">
                        <li>Child-centered therapy programs designed for holistic development</li>
                        <li>Experienced therapists specializing in speech, occupational, behavioral & developmental support</li>
                        <li>Evidence-based practices focused on measurable progress and family involvement</li>
                    </ul>
                </div>

                <div class="who-stat-row">
                    <div class="who-stat">
                        <div class="who-stat-num">500+</div>
                        <div class="who-stat-label">Children Supported</div>
                    </div>
                    <div class="who-stat">
                        <div class="who-stat-num">15+</div>
                        <div class="who-stat-label">Expert Specialists</div>
                    </div>
                    <div class="who-stat">
                        <div class="who-stat-num">4.9★</div>
                        <div class="who-stat-label">Parent Satisfaction</div>
                    </div>
                    <div class="who-stat">
                        <div class="who-stat-num">10+</div>
                        <div class="who-stat-label">Years of Experience</div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 fade-up">
                <div class="who-img-wrap">
                    <!-- Replace src with your actual image -->
                    <img src="assets/images/services/school-readiness-program.jpg" alt="Our Centre" />
                    <!-- <div class="who-badge-float">
                        <span>8+</span>
                        Years of<br>Excellence
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ══════════════════════════════════════
     3. PATH PLAN
══════════════════════════════════════ -->
<section id="path-plan" class="our-programs-silver bg-section ">
    <div class="container">
        <div class="section-title text-center">
            <h3 class="wow fadeInUp">Our Process</h3>

            <h2 class="text-anime-style-3 mb-0" data-cursor="-opaque">
                Your Child's Path to Progress
            </h2>

            <p class="wow fadeInUp" data-wow-delay="0.2s mb-4">
                A clear, compassionate roadmap — from your very first call to watching your child flourish.
            </p>
        </div>

        <div class="path-timeline mt-md-5 mt-4">

            <div class="path-step left fade-up">
                <div class="path-step-content" style="border: 1px solid #8ac302;">
                    <span class="path-step-tag">STEP 01</span>
                    <p class="path-step-title">Free Discovery Call</p>
                    <p class="path-step-text">A warm 15-minute conversation to understand your child's needs, answer your questions, and see if we're the right fit for your family.</p>
                </div>
                <div class="path-step-node">1</div>
            </div>

            <div class="path-step right fade-up">
                <div class="path-step-content" style="border:1px solid #f47920;">
                    <span class="path-step-tag">STEP 02</span>
                    <p class="path-step-title">Comprehensive Assessment</p>
                    <p class="path-step-text">Our multidisciplinary team conducts a thorough evaluation — identifying your child's strengths and areas where targeted support will make the biggest difference.</p>
                </div>
                <div class="path-step-node">2</div>
            </div>

            <div class="path-step left fade-up">
                <div class="path-step-content" style="border: 1px solid #8ac302;">
                    <span class="path-step-tag">STEP 03</span>
                    <p class="path-step-title">Personalised Therapy Plan</p>
                    <p class="path-step-text">We co-create a custom programme tailored to your child's unique profile — combining evidence-based therapy with play-based, joyful learning.</p>
                </div>
                <div class="path-step-node">3</div>
            </div>

            <div class="path-step right fade-up">
                <div class="path-step-content" style="border:1px solid #f47920;">
                    <span class="path-step-tag">STEP 04</span>
                    <p class="path-step-title">Therapy Begins & Progress Tracked</p>
                    <p class="path-step-text">Regular sessions kick off, with monthly progress reviews, parent coaching sessions, and home strategies so growth continues around the clock.</p>
                </div>
                <div class="path-step-node">4</div>
            </div>

            <div class="path-step left fade-up">
                <div class="path-step-content" style="border: 1px solid #8ac302;">
                    <span class="path-step-tag">STEP 05</span>
                    <p class="path-step-title">Celebrate & Transition to Independence</p>
                    <p class="path-step-text">We celebrate every milestone together and help transition your child to mainstream settings — equipped with confidence, skills, and a brighter future.</p>
                </div>
                <div class="path-step-node">5</div>
            </div>

        </div>
    </div>
</section>

<!-- ══════════════════════════════════════
     2. TEAM
══════════════════════════════════════ -->
<section id="team">
    <div class="container">
        <div class="section-title text-center">
            <h3 class="wow fadeInUp">Our Team</h3>

            <h2 class="text-anime-style-3 mb-0" data-cursor="-opaque">
                Meet the Experts Behind Every Milestone
            </h2>

            <p class="wow fadeInUp" data-wow-delay="0.2s">
                Each of our specialists brings deep expertise, genuine warmth, and a passion for making a difference in every child's journey.
            </p>
        </div>

        <div class="row gy-4 mt-md-5 mt-4">

            <div class="col-md-6 col-lg-3 fade-up">
                <div class="team-card">
                    <div class="team-card-img">
                        <img src="https://images.unsplash.com/photo-1607746882042-944635dfe10e?w=400&q=80" alt="Dr. Priya Sharma" />
                        <div class="team-card-role">Lead Speech Therapist</div>
                    </div>
                    <div class="team-card-body">
                        <p class="team-name">Dr. Priya Sharma</p>
                        <p class="team-exp">12 Years Experience</p>
                        <div class="team-tags">
                            <span class="team-tag">Speech Delay</span>
                            <span class="team-tag">Autism</span>
                            <span class="team-tag">Fluency</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 fade-up" style="transition-delay:.1s">
                <div class="team-card">
                    <div class="team-card-img">
                        <img src="https://images.unsplash.com/photo-1582750433449-648ed127bb54?w=400&q=80" alt="Anita Verma" />
                        <div class="team-card-role">Occupational Therapist</div>
                    </div>
                    <div class="team-card-body">
                        <p class="team-name">Anita Verma</p>
                        <p class="team-exp">9 Years Experience</p>
                        <div class="team-tags">
                            <span class="team-tag">Sensory</span>
                            <span class="team-tag">Fine Motor</span>
                            <span class="team-tag">ADL</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 fade-up" style="transition-delay:.2s">
                <div class="team-card">
                    <div class="team-card-img">
                        <img src="https://images.unsplash.com/photo-1559839734-2b71ea197ec2?w=400&q=80" alt="Rahul Nair" />
                        <div class="team-card-role">Paediatric Physiotherapist</div>
                    </div>
                    <div class="team-card-body">
                        <p class="team-name">Rahul Nair</p>
                        <p class="team-exp">7 Years Experience</p>
                        <div class="team-tags">
                            <span class="team-tag">Gross Motor</span>
                            <span class="team-tag">CP</span>
                            <span class="team-tag">Gait</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 fade-up" style="transition-delay:.3s">
                <div class="team-card">
                    <div class="team-card-img">
                        <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=400&q=80" alt="Sneha Kapoor" />
                        <div class="team-card-role">Special Educator</div>
                    </div>
                    <div class="team-card-body">
                        <p class="team-name">Sneha Kapoor</p>
                        <p class="team-exp">10 Years Experience</p>
                        <div class="team-tags">
                            <span class="team-tag">Learning Disabilities</span>
                            <span class="team-tag">ADHD</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ══════════════════════════════════════
     4. CTA & ELEVATING PITCH
══════════════════════════════════════ -->
<section id="cta-pitch">
    <div class="cta-blob cta-blob-1"></div>
    <div class="cta-blob cta-blob-2"></div>
    <div class="container">
        <div class="cta-inner fade-up">
            <p class="cta-headline">
                Every Day of Early Intervention<br>
                is a <em>Gift to Your Child's Future</em>
            </p>
            <p class="cta-sub">
                Research shows that children who receive early therapy support develop faster, build stronger social bonds, and achieve greater independence. Don't wait — the best time to start is today.
            </p>
            <div class="cta-btns">
                <a href="contact-us.php" class="btn-cta-main"><i class="fas fa-calendar-check me-2"></i>Book a Free Consultation</a>
                <a href="tel:9643966126" class="btn-cta-outline"><i class="fas fa-phone me-2"></i>Call Us Now</a>
            </div>
            <div class="cta-trust-row mt-5">
                <div class="cta-trust-item"><i class="fas fa-shield-alt"></i> No-pressure, no-obligation</div>
                <div class="cta-trust-item"><i class="fas fa-star"></i> 4.9/5 from 471+ parents</div>
                <div class="cta-trust-item"><i class="fas fa-clock"></i> Response within 24 hours</div>
                <div class="cta-trust-item"><i class="fas fa-heart"></i> Trusted by 500+ families</div>
            </div>
        </div>
    </div>
</section>

<!-- ══════════════════════════════════════
     5. SPECIALITY
══════════════════════════════════════ -->
<section id="speciality">
    <div class="container">
        <!-- <div class="text-center fade-up">
            <span class="section-badge">Our Specialities</span>
            <h2 class="section-title">Expertise Across Every Area of <span>Child Development</span></h2>
            <p class="section-sub mt-2 mx-auto" style="max-width:560px">We take a holistic view — addressing communication, movement, learning, behaviour, and emotional wellbeing under one caring roof.</p>
        </div> -->
        <div class="row">
            <div class="col-xl-8 offset-xl-2">
                <div class="section-title mb-2 text-center">
                    <h3 class="wow fadeInUp">Our Specialities</h3>

                    <h2 class="text-anime-style-3 mb-0" data-cursor="-opaque">
                        Expertise Across Every Area of Child Development
                    </h2>
                </div>
            </div>
        </div>
        <div class="spec-grid fade-up" style="transition-delay:.1s">
            <div class="spec-card">
                <div class="spec-icon-wrap"><i class="fas fa-comments"></i></div>
                <p class="spec-card-title">Speech & Language Therapy</p>
                <p class="spec-card-text">From first words to fluent conversation — we address speech delays, autism, stuttering, and more.</p>
            </div>
            <div class="spec-card">
                <div class="spec-icon-wrap"><i class="fas fa-hands"></i></div>
                <p class="spec-card-title">Occupational Therapy</p>
                <p class="spec-card-text">Building sensory processing, fine motor skills, and independence in everyday activities.</p>
            </div>
            <div class="spec-card">
                <div class="spec-icon-wrap"><i class="fas fa-walking"></i></div>
                <p class="spec-card-title">Physiotherapy</p>
                <p class="spec-card-text">Strengthening gross motor, posture, coordination and movement for active, confident kids.</p>
            </div>
            <div class="spec-card">
                <div class="spec-icon-wrap"><i class="fas fa-brain"></i></div>
                <p class="spec-card-title">Behaviour Therapy (ABA)</p>
                <p class="spec-card-text">Evidence-based ABA strategies to reduce challenging behaviours and build positive skills.</p>
            </div>
            <div class="spec-card">
                <div class="spec-icon-wrap"><i class="fas fa-book-open"></i></div>
                <p class="spec-card-title">Special Education</p>
                <p class="spec-card-text">Remedial learning programmes for dyslexia, ADHD, dyscalculia, and academic challenges.</p>
            </div>
            <div class="spec-card">
                <div class="spec-icon-wrap"><i class="fas fa-child"></i></div>
                <p class="spec-card-title">School Readiness</p>
                <p class="spec-card-text">Preparing children socially, cognitively, and emotionally for a smooth transition into school.</p>
            </div>
        </div>
    </div>
</section>

<!-- Our Testimonial Section Start -->
<div class="our-testimonials bg-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-4">
                <div class="testimonial-content">
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Success Stories</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Real Stories, Real Progress</h2>
                        <p>Real experiences from parents who have trusted us with their child’s growth, care, and
                            developmental progress.</p>
                    </div>

                    <div class="testimonial-rating-box wow fadeInUp" data-wow-delay="0.2s">
                        <div class="icon-box">
                            <img src="assets/images/icon-google.svg" alt="">
                        </div>
                        <div class="testimonial-rating-info">
                            <div class="testimonial-rating-header">
                                <h2><span class="counter">4.9</span>/5</h2>
                                <p>
                                    <i class="fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>
                                </p>
                            </div>

                            <div class="testimonial-rating-review-content">
                                <p>Based on 250 review</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-8">
                <div class="testimonial-slider wow fadeInUp" data-wow-delay="0.2s">
                    <div class="testimonial-slider-box">
                        <div class="swiper">
                            <div class="swiper-wrapper" data-cursor-text="Drag">
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="testimonial-item-body">
                                            <div class="testimonial-item-header">
                                                <div class="testimonial-item-rating">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                                <div class="testimonial-item-content">
                                                    <p>“I am very happy with the care and support we received from the
                                                        speech therapy centre. The therapists are kind, patient, and
                                                        professional, and the sessions were engaging and helpful for my
                                                        child.”</p>
                                                </div>


                                            </div>
                                            <div class="testimonial-item-footer">
                                                <div class="testimonial-author">
                                                    <div class="testimonial-author-image">
                                                        <img src="assets/images/t1.png" alt="">
                                                    </div>

                                                    <div class="testimonial-author-content">
                                                        <h3>Mona Sharma</h3>
                                                    </div>
                                                </div>

                                                <div class="testimonial-item-quote">
                                                    <img src="assets/images/testimonial-item-quote-accent.svg" alt="">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="testimonial-item-body">
                                            <div class="testimonial-item-header">
                                                <div class="testimonial-item-rating">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                                <div class="testimonial-item-content">
                                                    <p>“Highly recommended speech therapy centre with knowledgeable and
                                                        caring therapists. The sessions were well planned, handled
                                                        professionally, and helped us see positive improvement in a
                                                        short time.”</p>
                                                </div>

                                            </div>
                                            <div class="testimonial-item-footer">
                                                <div class="testimonial-author">
                                                    <div class="testimonial-author-image">
                                                        <img src="assets/images/t2.png" alt="">
                                                    </div>

                                                    <div class="testimonial-author-content">
                                                        <h3>Rohit Bala</h3>
                                                    </div>
                                                </div>

                                                <div class="testimonial-item-quote">
                                                    <img src="assets/images/testimonial-item-quote-accent.svg" alt="">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="testimonial-item-body">
                                            <div class="testimonial-item-header">
                                                <div class="testimonial-item-rating">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                                <div class="testimonial-item-content">
                                                    <p>“One of the best therapy centres in Dwarka with experienced and
                                                        humble therapists. They understand each child’s needs well and
                                                        handle every session with patience and genuine care.”</p>
                                                </div>

                                            </div>
                                            <div class="testimonial-item-footer">
                                                <div class="testimonial-author">
                                                    <div class="testimonial-author-image">
                                                        <img src="assets/images/t3.png" alt="">
                                                    </div>

                                                    <div class="testimonial-author-content">
                                                        <h3>Aparna Pashankar</h3>
                                                    </div>
                                                </div>

                                                <div class="testimonial-item-quote">
                                                    <img src="assets/images/testimonial-item-quote-accent.svg" alt="">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="testimonial-item-body">
                                            <div class="testimonial-item-header">
                                                <div class="testimonial-item-rating">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                                <div class="testimonial-item-content">
                                                    <p>“This is one of the best therapy clinics for children. The
                                                        therapists are polite, caring, and supportive, and they always
                                                        create a positive and comfortable environment.”</p>
                                                </div>

                                            </div>
                                            <div class="testimonial-item-footer">
                                                <div class="testimonial-author">
                                                    <div class="testimonial-author-image">
                                                        <img src="assets/images/t4.png" alt="">
                                                    </div>

                                                    <div class="testimonial-author-content">
                                                        <h3>Rakhi Jha</h3>
                                                    </div>
                                                </div>

                                                <div class="testimonial-item-quote">
                                                    <img src="assets/images/testimonial-item-quote-accent.svg" alt="">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="testimonial-item-body">
                                            <div class="testimonial-item-header">
                                                <div class="testimonial-item-rating">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                                <div class="testimonial-item-content">
                                                    <p>“A highly skilled team of therapists providing effective and
                                                        progressive therapy services. Their professional approach and
                                                        dedication truly help children grow with confidence.”</p>
                                                </div>

                                            </div>
                                            <div class="testimonial-item-footer">
                                                <div class="testimonial-author">
                                                    <div class="testimonial-author-image">
                                                        <img src="assets/images/t5.png" alt="">
                                                    </div>

                                                    <div class="testimonial-author-content">
                                                        <h3>Rajat Gupta</h3>
                                                    </div>
                                                </div>

                                                <div class="testimonial-item-quote">
                                                    <img src="assets/images/testimonial-item-quote-accent.svg" alt="">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="testimonial-item-body">
                                            <div class="testimonial-item-header">
                                                <div class="testimonial-item-rating">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                                <div class="testimonial-item-content">
                                                    <p>“Well trained and professional staff who are attentive and
                                                        supportive. The overall experience has been very positive, and
                                                        the care provided is truly commendable.”</p>
                                                </div>

                                            </div>
                                            <div class="testimonial-item-footer">
                                                <div class="testimonial-author">
                                                    <div class="testimonial-author-image">
                                                        <img src="assets/images/t6.png" alt="">
                                                    </div>

                                                    <div class="testimonial-author-content">
                                                        <h3>Sonali Yadav</h3>
                                                    </div>
                                                </div>

                                                <div class="testimonial-item-quote">
                                                    <img src="assets/images/testimonial-item-quote-accent.svg" alt="">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="testimonial-btn">
                            <div class="testimonial-button-prev"></div>
                            <div class="testimonial-button-next"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Testimonial Slider End -->
        </div>
    </div>
</div>
<!-- Our Testimonial Section End -->

<!-- Our Faq Section Start  -->
<div class="our-faqs">
    <div class="container">
        <div class="row">

            <div class="col-xl-5">
                <div class="faqs-content">

                    <div class="section-title">
                        <h3 class="wow fadeInUp">Frequently Asked Questions</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">
                            Answers to common questions parents ask us
                        </h2>
                    </div>

                    <div class="faq-cta-box wow fadeInUp" data-wow-delay="0.2s">

                        <div class="faq-cta-content-box">

                            <div class="faq-cta-header">
                                <div class="icon-box">
                                    <img src="assets/images/icon-faq.svg" alt="">
                                </div>

                                <div class="faq-cta-header-content">
                                    <h3>Still Unsure? We’re happy to help.</h3>
                                </div>
                            </div>

                            <div class="faq-cta-contact-list">
                                <ul>
                                    <li>
                                        <img src="assets/images/icon-phone-white.svg" alt="">
                                        <a href="tel:+9643966126">+91 9643966126</a>,
                                        <a href="tel:+8700550422">8700550422</a>
                                    </li>

                                    <li>
                                        <img src="assets/images/icon-mail-white.svg" alt="">
                                        <a href="mailto:cdc.thenurture@gmail.com">cdc.thenurture@gmail.com</a>
                                    </li>
                                </ul>
                            </div>

                        </div>

                        <div class="faq-location-info">
                            <div class="icon-box">
                                <img src="assets/images/icon-location-white.svg" alt="">
                            </div>

                            <div class="faq-location-info-content">
                                <h3>Plot No. -86, Sector-12A, Dwarka, New Delhi-110078</h3>
                            </div>
                        </div>

                    </div>

                </div>
            </div>


            <div class="col-xl-7">

                <div class="faq-accordion" id="accordion">

                    <!-- FAQ 1 -->
                    <div class="accordion-item wow fadeInUp">
                        <h2 class="accordion-header" id="heading1">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse1">
                                1. What children do you support at Nurture Hub?
                            </button>
                        </h2>

                        <div id="collapse1" class="accordion-collapse collapse" data-bs-parent="#accordion">
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
                    <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s">
                        <h2 class="accordion-header" id="heading2">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse2">
                                2. Do I need a doctor’s referral to start therapy?
                            </button>
                        </h2>

                        <div id="collapse2" class="accordion-collapse collapse show" data-bs-parent="#accordion">
                            <div class="accordion-body">
                                <p>
                                    No referral is required. Parents can directly contact us to book an assessment.
                                    If needed, our team will guide you regarding medical referrals at a later stage.
                                </p>
                            </div>
                        </div>
                    </div>


                    <!-- FAQ 3 -->
                    <div class="accordion-item wow fadeInUp" data-wow-delay="0.4s">
                        <h2 class="accordion-header" id="heading3">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse3">
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
                    <div class="accordion-item wow fadeInUp" data-wow-delay="0.6s">
                        <h2 class="accordion-header" id="heading4">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse4">
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
                    <div class="accordion-item wow fadeInUp" data-wow-delay="0.8s">
                        <h2 class="accordion-header" id="heading5">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse5">
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
<!-- Our Faq Section End  -->

<!-- Our Gallery Section Start -->
<div class="our-gallery bg-section">
    <div class="container">
        <div class="row section-row">
            <div class="col-lg-12">
                <!-- Section Title Start -->
                <div class="section-title section-title-center">
                    <h3 class="wow fadeInUp">Our Reels</h3>
                    <h2 class="text-anime-style-3" data-cursor="-opaque">
                        Real moments of learning, therapy, and joyful progress
                    </h2>
                </div>
                <!-- Section Title End -->
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <!-- Gallery Slider Start -->
                <div class="gallery-slider wow fadeInUp reels-section" data-wow-delay="0.2s">
                    <div class="swiper">
                        <div class="swiper-wrapper gallery-items" data-cursor-text="Drag">
                            <div class="swiper-slide">
                                <div class="image-gallery-item">
                                    <div class="gallery-image">
                                        <video autoplay muted loop playsinline>
                                            <source src="assets/images/reels//reel-1.mp4" type="video/mp4">
                                        </video>
                                    </div>


                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="image-gallery-item">
                                    <div class="gallery-image">
                                        <video autoplay muted loop playsinline>
                                            <source src="assets/images/reels//reel-2.mp4" type="video/mp4">
                                        </video>
                                    </div>


                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="image-gallery-item">
                                    <div class="gallery-image">
                                        <video autoplay muted loop playsinline>
                                            <source src="assets/images/reels//reel-6.mp4" type="video/mp4">
                                        </video>
                                    </div>


                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="image-gallery-item">
                                    <div class="gallery-image">
                                        <video autoplay muted loop playsinline>
                                            <source src="assets/images/reels//reel-4.mp4" type="video/mp4">
                                        </video>
                                    </div>


                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="image-gallery-item">
                                    <div class="gallery-image">
                                        <video autoplay muted loop playsinline>
                                            <source src="assets/images/reels//reel-5.mp4" type="video/mp4">
                                        </video>
                                    </div>


                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="image-gallery-item">
                                    <div class="gallery-image">
                                        <video autoplay muted loop playsinline>
                                            <source src="assets/images/reels//reel-3.mp4" type="video/mp4">
                                        </video>
                                    </div>


                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="image-gallery-item">
                                    <div class="gallery-image">
                                        <video autoplay muted loop playsinline>
                                            <source src="assets/images/reels//reel-7.mp4" type="video/mp4">
                                        </video>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <div class="gallery-pagination"></div>
                    </div>
                </div>
                <!-- Gallery Slider End -->
            </div>
        </div>
    </div>
</div>
<!-- Our Gallery Section End -->

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