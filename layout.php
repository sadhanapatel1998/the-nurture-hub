<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'seo.php'; ?>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <meta name="description" content="<?php echo htmlspecialchars($pageMeta['description']); ?>">
    <meta name="keywords" content="<?php echo htmlspecialchars($pageMeta['keywords']); ?>">
    <meta name="author" content="The Nurture Hub Child Development Center">
    <meta name="robots" content="<?php echo $pageMeta['robots']; ?>">

    <?php if (!empty($pageMeta['canonical'])): ?>
        <link rel="canonical" href="<?php echo $pageMeta['canonical']; ?>">
    <?php endif; ?>

    <title><?php echo htmlspecialchars($pageMeta['title']); ?></title>

    <!-- Favicon Icon -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/favicon/site.webmanifest">
    <!-- Google Fonts Css-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=TikTok+Sans:opsz,wght@12..36,300..900&display=swap"
        rel="stylesheet">
    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/slicknav.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <link href="assets/css/all.min.css" rel="stylesheet" media="screen">
    <link href="assets/css/animate.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/mousecursor.css">
    <link href="assets/css/custom.css" rel="stylesheet" media="screen">

</head>

<body>
    <!-- Preloader Start -->
    <!-- <div class="preloader">
        <div class="loading-container">
            <div class="loading"></div>
            <div id="loading-icon"><img src="assets/images/loader.svg" alt=""></div>
        </div>
    </div> -->
    <!-- Preloader End -->



    <?php require_once("include/header.php"); ?>


    <?= $content ?? ''; ?>


    <?php require_once('include/footer.php') ?>

    <!-- Javascript Files
    ================================================== -->
    <script src="assets/js/jquery-3.7.1.min.js"></script>
    <!-- Bootstrap js file -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Validator js file -->
    <script src="assets/js/validator.min.js"></script>
    <!-- SlickNav js file -->
    <script src="assets/js/jquery.slicknav.js"></script>
    <!-- Swiper js file -->
    <script src="assets/js/swiper-bundle.min.js"></script>
    <!-- Counter js file -->
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <!-- Magnific js file -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!-- SmoothScroll -->
    <script src="assets/js/SmoothScroll.js"></script>
    <!-- Parallax js -->
    <script src="assets/js/parallaxie.js"></script>
    <!-- MagicCursor js file -->
    <script src="assets/js/gsap.min.js"></script>
    <script src="assets/js/magiccursor.js"></script>
    <!-- Text Effect js file -->
    <script src="assets/js/SplitText.min.js"></script>
    <script src="assets/js/ScrollTrigger.min.js"></script>
    <!-- YTPlayer js File -->
    <script src="assets/js/jquery.mb.YTPlayer.min.js"></script>
    <!-- Wow js file -->
    <script src="assets/js/wow.min.js"></script>
    <!-- Main Custom js file -->
    <script src="assets/js/function.js"></script>
    <script>
        (function() {

            const header = document.querySelector(".header-sticky");
            const topbar = document.querySelector(".topbar");

            let isSticky = false;

            window.addEventListener("scroll", function() {

                let scrollPos = window.scrollY;

                // ADD sticky after 120px
                if (scrollPos > 120 && !isSticky) {
                    header.classList.add("active");
                    if (topbar) topbar.classList.add("d-none");
                    isSticky = true;
                }

                // REMOVE sticky only when almost top
                if (scrollPos < 60 && isSticky) {
                    header.classList.remove("active");
                    if (topbar) topbar.classList.remove("d-none");
                    isSticky = false;
                }

            });

        })();
    </script>

    <script>
        // Scroll-triggered fade-up animations
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(e => {
                if (e.isIntersecting) {
                    e.target.classList.add('visible');
                }
            });
        }, {
            threshold: 0.12
        });
        document.querySelectorAll('.fade-up').forEach(el => observer.observe(el));
    </script>

</body>

</html>