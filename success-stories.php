<?php
ob_start();
$testimonials = [

    [
        "name" => "Mona Sharma",
        "image" => "assets/images/t1.png",
        "rating" => 5,
        "role"  => "Parent",
        "review" => "I am very happy with the care and support we received from the speech therapy centre. The therapists are kind, patient, and professional, and the sessions were engaging and helpful for my child."
    ],

    [
        "name" => "Rohit Bala",
        "image" => "assets/images/t2.png",
        "rating" => 5,
        "role"  => "Parent",
        "review" => "Highly recommended speech therapy centre with knowledgeable and caring therapists. The sessions were well planned, handled professionally, and helped us see positive improvement in a short time."
    ],

    [
        "name" => "Aparna Pashankar",
        "image" => "assets/images/t3.png",
        "rating" => 5,
        "role"  => "Parent",
        "review" => "One of the best therapy centres in Dwarka with experienced and humble therapists. They understand each child’s needs well and handle every session with patience and genuine care."
    ],

    [
        "name" => "Rakhi Jha",
        "image" => "assets/images/t4.png",
        "rating" => 5,
        "role"  => "Parent",
        "review" => "This is one of the best therapy clinics for children. The therapists are polite, caring, and supportive, and they always create a positive and comfortable environment."
    ],

    [
        "name" => "Rajat Gupta",
        "image" => "assets/images/t5.png",
        "rating" => 5,
        "role"  => "Parent",
        "review" => "A highly skilled team of therapists providing effective and progressive therapy services. Their professional approach and dedication truly help children grow with confidence."
    ],

    [
        "name" => "Sonali Yadav",
        "image" => "assets/images/t6.png",
        "rating" => 5,
        "role"  => "Parent",
        "review" => "Well trained and professional staff who are attentive and supportive. The overall experience has been very positive, and the care provided is truly commendable."
    ],
    [
        "name" => "Pooja Kumari",
        "image" => "assets/images/t7.png",
        "rating" => 5,
        "role"  => "Parent",
        "review" => "I felt safe and supported from the very first session, the environment is warm,and the staff are professional and genuinely caring"
    ],
    [
        "name" => "Harsh Kumar",
        "image" => "assets/images/t8.png",
        "rating" => 5,
        "role"  => "Parent",
        "review" => "Neha Ma'am is a blessing for children with speech and language delays. Her warm approach makes every session enjoyable. The clinic environment is safe, clean, and welcoming"
    ],
    [
        "name" => "Aditya Raj",
        "image" => "assets/images/t9.png",
        "rating" => 5,
        "role"  => "Parent",
        "review" => "We've seen such a positive transformation in our child's communication after visiting Neha Ma'am's clinic. Her understanding and customized therapy sessions are exceptional!"
    ],
    [
        "name" => "Radhika Devi",
        "image" => "assets/images/t10.png",
        "rating" => 5,
        "role"  => "Parent",
        "review" => "Excellent therapy services by Neha Ma'am! She gives personal attention to every child and involves parents in the process too. Very professional and Acaring."
    ],
    [
        "name" => "Surbhi Gupta",
        "image" => "assets/images/t11.png",
        "rating" => 5,
        "role"  => "Parent",
        "review" => "I highly recommend this clinic in Dwarka! The team of professionals are not only skilled but also incredibly kind and caring. They prioritize patient well-being and provide top-notch care."
    ],
    [
        "name" => "Ravi Patel",
        "image" => "assets/images/t12.png",
        "rating" => 5,
        "role"  => "Parent",
        "review" => "Ms. Bhawana is very experienced and trained Speech Therapist. Nurture hub is advance clinical setup with all therapeutic equipment."
    ]
];

?>

<!-- Page Header Section Start -->
<div class="page-header bg-section parallaxie">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-header-box">
                    <h1 class="text-anime-style-3" data-cursor="-opaque">Success Stories</h1>
                    <nav class="wow fadeInUp">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Success Stories</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Header Section End -->

<div class="page-testimonials">
    <div class="container">
        <div class="row section-row">
            <div class="col-lg-12 section-title section-title-center">
                <h3 class="wow fadeInUp">Success Stories</h3>
                <h2 class="text-anime-style-3" data-cursor="-opaque">
                    Real journeys, real progress, and inspiring child transformations
                </h2>
            </div>
        </div>
        <div class="row">
            <?php foreach ($testimonials as $item): ?>

                <div class="col-xxl-3 col-xl-4 col-md-6">
                    <div class="testimonial-item wow fadeInUp">
                        <div class="testimonial-item-header">

                            <!-- ⭐ Rating -->
                            <div class="testimonial-item-rating">
                                <?php for ($i = 0; $i < $item['rating']; $i++): ?>
                                    <i class="fa-solid fa-star"></i>
                                <?php endfor; ?>
                            </div>

                            <!-- ⭐ Review -->
                            <div class="testimonial-item-content">
                                <p>“<?= $item['review']; ?>”</p>
                            </div>
                        </div>

                        <div class="testimonial-item-footer">
                            <div class="testimonial-author-box">
                                <div class="testimonial-author-image">
                                    <figure class="image-anime">
                                        <img src="<?= $item['image']; ?>" alt="<?= $item['name']; ?>">
                                    </figure>
                                </div>

                                <div class="testimonial-author-content">
                                    <h3><?= $item['name']; ?></h3>
                                    <p><?= $item['role']; ?></p>
                                </div>
                            </div>

                            <div class="testimonial-item-quote">
                                <img src="assets/images/testimonial-item-quote-accent.svg" alt="">
                            </div>
                        </div>
                    </div>
                </div>

            <?php endforeach; ?>
        </div>
    </div>
</div>


<?php
$content = ob_get_clean();
require 'layout.php';
?>