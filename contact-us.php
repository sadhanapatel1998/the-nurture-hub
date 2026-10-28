<?php
ob_start();
include_once("php-mailer.php");
?>
<!-- Page Header Section Start -->
<div class="page-header bg-section parallaxie">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-header-box">
                    <h1 class="text-anime-style-3" data-cursor="-opaque">Contact Us</h1>
                    <nav class="wow fadeInUp">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Header Section End -->

<!-- Page Contact Us Start -->
<div class="page-contact-us">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="contact-us-content">
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Contact Us</h3>

                        <h2 class="text-anime-style-3" data-cursor="-opaque">
                            Connect with our child development experts
                        </h2>

                        <p class="wow fadeInUp" data-wow-delay="0.2s">
                            Our team is here to support you and your child every step of the way. Whether you have questions about
                            therapies, assessments, or programs, feel free to reach out and speak with our caring professionals.
                        </p>
                    </div>


                    <div class="contact-info-list wow fadeInUp" data-wow-delay="0.4s">
                        <div class="contact-info-item">
                            <div class="icon-box">
                                <img src="assets/images/icon-phone-white.svg" alt="">
                            </div>
                            <div class="contact-info-item-content">
                                <h3>Contact Us</h3>
                                <p><a href="tel:9643966126">+91 9643966126</a><br>
                                    <a href="tel:8700550422">+91 8700550422</a>
                                </p>
                            </div>
                        </div>

                        <div class="contact-info-item">
                            <div class="icon-box">
                                <img src="assets/images/icon-mail-white.svg" alt="">
                            </div>
                            <div class="contact-info-item-content">
                                <h3>Email Address</h3>
                                <p><a href="mailto:cdc.thenurture@gmail.com">cdc.thenurture@gmail.com</a></p>
                            </div>
                        </div>

                        <div class="contact-info-item">
                            <div class="icon-box">
                                <img src="assets/images/icon-location-white.svg" alt="">
                            </div>
                            <div class="contact-info-item-content">
                                <h3>Our Locations</h3>
                                <p>Plot No. -86, Sector-12A, Dwarka, New Delhi-110078</p>
                            </div>
                        </div>

                        <div class="contact-info-item">
                            <div class="icon-box">
                                <img src="assets/images/icon-clock-white.svg" alt="">
                            </div>
                            <div class="contact-info-item-content">
                                <h3>Opening Hours</h3>
                                <p>Mon : Sat: 11:00AM - 07:00PM</p>
                            </div>
                        </div>
                    </div>

                    <div class="contact-us-content-footer wow fadeInUp" data-wow-delay="0.6s">
                        <h3>Follow The Social Media:</h3>
                        <ul>
                            <li> <a href="https://www.instagram.com/thenurture_hub/" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="https://www.facebook.com/thenurturehubs" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href="https://in.linkedin.com/in/the-nurture-hub-child-development-centre-a3572339a?trk=public_post_feed-actor-name" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-xl-6">
                <div class="contact-us-form">
                    <div class="section-title">
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Send your message here</h2>
                    </div>

                    <div class="contact-form">
                        <form action="" method="POST" class="wow fadeInUp">

                            <div class="row">

                                <!-- NAME -->
                                <div class="form-group col-md-6 mb-4">
                                    <input type="text" name="name" class="form-control"
                                        value="<?php echo htmlspecialchars($name ?? ''); ?>"
                                        placeholder="Full Name">
                                    <span class="text-danger"><?php echo $nameErr ?? ''; ?></span>
                                </div>

                                <!-- EMAIL -->
                                <div class="form-group col-md-6 mb-4">
                                    <input type="email" name="email" class="form-control"
                                        value="<?php echo htmlspecialchars($email ?? ''); ?>"
                                        placeholder="Email Address">
                                    <span class="text-danger"><?php echo $emailErr ?? ''; ?></span>
                                </div>

                                <!-- PHONE -->
                                <div class="form-group col-md-6 mb-4">
                                    <input type="text" name="phone" class="form-control"
                                        value="<?php echo htmlspecialchars($phone ?? ''); ?>"
                                        placeholder="Phone Number">
                                    <span class="text-danger"><?php echo $phoneErr ?? ''; ?></span>
                                </div>

                                <!-- SUBJECT -->
                                <div class="form-group col-md-6 mb-4">
                                    <input type="text" name="subject" class="form-control"
                                        value="<?php echo htmlspecialchars($subject ?? ''); ?>"
                                        placeholder="Subject">
                                    <span class="text-danger"><?php echo $subjectErr ?? ''; ?></span>
                                </div>

                                <!-- MESSAGE -->
                                <div class="form-group col-md-12 mb-4">
                                    <textarea name="message" class="form-control"
                                        rows="4"
                                        placeholder="Your Message"><?php echo htmlspecialchars($message ?? ''); ?></textarea>
                                    <span class="text-danger"><?php echo $messageErr ?? ''; ?></span>
                                </div>

                                <div class="col-md-12">
                                    <button type="submit" class="btn-default">
                                        Send Message
                                    </button>
                                </div>

                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Contact Us End -->

<!-- Google Map Start -->
<div class="google-map">
    <div class="container">
        <div class="row section-row">
            <div class="col-lg-12">
                <div class="section-title section-title-center">
                    <h3 class="wow fadeInUp">Our Location</h3>
                    <h2 class="text-anime-style-3" data-cursor="-opaque">Reach out and let's weave success together</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="google-map-iframe wow fadeInUp" data-wow-delay="0.2s">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3503.070385464898!2d77.04189380000001!3d28.597665199999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d1b773dfc0e5f%3A0x67ce1197be52325e!2sThe%20Nurture%20Hub%20Child%20Development%20Center!5e0!3m2!1sen!2sin!4v1767954235775!5m2!1sen!2sin" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Google Map End -->






<?php
$content = ob_get_clean();
require 'layout.php';
?>