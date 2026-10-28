<?php

$currentPage = basename($_SERVER['PHP_SELF']);
$slug = $_GET['slug'] ?? "";

/*
 |--------------------------------------------------
 | PAGE SEO (STATIC PAGES)
 |--------------------------------------------------
*/

$seoData = [

    "index.php" => [
        "title" => "The Nurture Hub Child Development Center | Therapy & Learning Support",
        "description" => "The Nurture Hub Child Development Center offers child-focused therapy services including speech therapy, occupational therapy, physiotherapy, special education and school readiness programs.",
        "keywords" => "The Nurture Hub, child development center, pediatric therapy, child therapy center",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    "about-us.php" => [
        "title" => "About The Nurture Hub | Child Development & Therapy Experts",
        "description" => "Learn about The Nurture Hub Child Development Center, our mission, vision, and expert team dedicated to supporting children’s developmental growth.",
        "keywords" => "about nurture hub, child development experts, pediatric therapists",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    "image-gallery.php" => [
        "title" => "Image Gallery | The Nurture Hub Child Development Center",
        "description" => "Explore our Image gallery showcasing therapy sessions, child-friendly spaces, learning activities, and developmental programs at The Nurture Hub.",
        "keywords" => "nurture hub gallery, therapy center photos, child therapy activities",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    "vedio-gallery.php" => [
        "title" => "Vedio Gallery | The Nurture Hub Child Development Center",
        "description" => "Explore our Vedio gallery showcasing therapy sessions, child-friendly spaces, learning activities, and developmental programs at The Nurture Hub.",
        "keywords" => "nurture hub gallery, therapy center photos, child therapy activities",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    "success-stories.php" => [
        "title" => "Success Stories | Real Progress at The Nurture Hub Child Development Center",
        "description" => "Read real success stories from parents and children at The Nurture Hub, highlighting therapy progress, developmental milestones, and positive outcomes.",
        "keywords" => "child therapy success stories, child development progress, therapy results nurture hub",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    "faqs.php" => [
        "title" => "FAQs | Child Therapy & Development Questions | The Nurture Hub",
        "description" => "Find answers to common questions about child development therapy, assessments, programs, and parental guidance at The Nurture Hub Child Development Center.",
        "keywords" => "child therapy FAQs, developmental therapy questions, speech therapy questions, nurture hub FAQs",
        "canonical" => "",
        "robots" => "index, follow"
    ],
    "contact-us.php" => [
        "title" => "Contact The Nurture Hub | Child Therapy & Development Support",
        "description" => "Contact The Nurture Hub Child Development Center for therapy enquiries, assessments, admissions, and personalized child development guidance.",
        "keywords" => "contact nurture hub, child therapy enquiry, developmental assessment",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    "thank-you.php" => [
        "title" => "Thank You | The Nurture Hub Child Development Center",
        "description" => "Thank you for contacting The Nurture Hub. Our team will get in touch with you shortly.",
        "keywords" => "thank you nurture hub, enquiry confirmation",
        "canonical" => "",
        "robots" => "noindex, nofollow"
    ],

    "error.php" => [
        "title" => "Page Not Found | The Nurture Hub",
        "description" => "The page you are looking for could not be found. Explore The Nurture Hub’s child development services.",
        "keywords" => "nurture hub 404, page not found",
        "canonical" => "",
        "robots" => "noindex, nofollow"
    ],
    "speech-therapy.php" => [
        "title" => "Speech Therapy for Children | The Nurture Hub",
        "description" => "Speech therapy services for children focusing on communication, language development, articulation, and confidence building.",
        "keywords" => "speech therapy for children, pediatric speech therapy",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    "occupational-therapy.php" => [
        "title" => "Occupational Therapy for Children | The Nurture Hub",
        "description" => "Occupational therapy to support fine motor skills, sensory integration, daily living skills, and independence in children.",
        "keywords" => "occupational therapy children, pediatric OT",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    "physiotherapy.php" => [
        "title" => "Pediatric Physiotherapy | The Nurture Hub Child Development Center",
        "description" => "Physiotherapy services to improve mobility, strength, posture, balance, and functional abilities in children.",
        "keywords" => "pediatric physiotherapy, child physiotherapy center",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    "behaviour-therapy.php" => [
        "title" => "Behaviour Therapy for Children | The Nurture Hub",
        "description" => "Behaviour therapy programs to support emotional regulation, social skills, attention, and positive behaviour development.",
        "keywords" => "behaviour therapy children, child behaviour support",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    "special-education.php" => [
        "title" => "Special Education Support | The Nurture Hub",
        "description" => "Individualized special education support for children with learning and developmental challenges.",
        "keywords" => "special education center, learning support for children",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    "learning-disability-support.php" => [
        "title" => "Learning Disability Support | The Nurture Hub",
        "description" => "Comprehensive learning disability support focusing on academic skills, attention, and confidence building.",
        "keywords" => "learning disability support, dyslexia support children",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    "school-readiness-program.php" => [
        "title" => "School Readiness Program | The Nurture Hub",
        "description" => "School readiness programs to prepare children for academic success through cognitive, social, and emotional development.",
        "keywords" => "school readiness program, preschool preparation",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    "counselling.php" => [
        "title" => "Child & Parent Counselling | The Nurture Hub",
        "description" => "Professional counselling services supporting children and families with emotional, behavioral, and developmental concerns.",
        "keywords" => "child counselling, parent counselling services",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    "voice-therapy.php" => [
        "title" => "Voice Therapy for Children | The Nurture Hub",
        "description" => "Voice therapy programs designed to improve vocal quality, pitch, and healthy voice use in children.",
        "keywords" => "voice therapy children, pediatric voice therapy",
        "canonical" => "",
        "robots" => "index, follow"
    ]
];

/*
 |--------------------------------------------------
 | DEFAULT META
 |--------------------------------------------------
*/

$defaultMeta = [
    "title" => "The Nurture Hub Child Development Center",
    "description" => "The Nurture Hub offers expert child development services including therapy, learning support, and family guidance.",
    "keywords" => "child development center, pediatric therapy services",
    "canonical" => "",
    "robots" => "index, follow"
];

/*
 |--------------------------------------------------
 | META SELECTOR
 |--------------------------------------------------
*/

if ($currentPage === "service-details.php" && isset($serviceSeo[$slug])) {
    $pageMeta = $serviceSeo[$slug];
} else {
    $pageMeta = $seoData[$currentPage] ?? $defaultMeta;
}
