<?php
$resolvedTitle = $pageTitle ?? "DR. RAJA'S VEIN & INTERVENTION CLINIC";
$resolvedDescription = $pageDescription ?? "Dr. Raja's Vein & Intervention Clinic in Bathinda provides advanced varicose veins treatment and image-guided intervention care.";
$resolvedKeywords = $pageKeywords ?? "varicose veins treatment Bathinda, Dr Ambrish Raja, vein clinic Bathinda";
$resolvedCanonical = $canonicalUrl ?? "";
?>
<title><?php echo htmlspecialchars($resolvedTitle, ENT_QUOTES, 'UTF-8'); ?></title>
<meta name="description" content="<?php echo htmlspecialchars($resolvedDescription, ENT_QUOTES, 'UTF-8'); ?>">
<meta name="keywords" content="<?php echo htmlspecialchars($resolvedKeywords, ENT_QUOTES, 'UTF-8'); ?>">
<meta name="robots" content="index, follow">
<meta property="og:title" content="<?php echo htmlspecialchars($resolvedTitle, ENT_QUOTES, 'UTF-8'); ?>">
<meta property="og:description" content="<?php echo htmlspecialchars($resolvedDescription, ENT_QUOTES, 'UTF-8'); ?>">
<meta property="og:type" content="website">
<meta property="og:image" content="assets/images/dr-raja.jpg">
<?php if ($resolvedCanonical !== ""): ?>
<link rel="canonical" href="<?php echo htmlspecialchars($resolvedCanonical, ENT_QUOTES, 'UTF-8'); ?>">
<?php endif; ?>
<?php if (!empty($additionalHead)) { echo $additionalHead; } ?>
</head>
<body>
    <div class="search">
        <div class="search__close">
            <i class="fa-solid fa-circle-xmark"></i>
        </div>
        <div class="search__area">
            <form action="#">
                <input type="text" name="s" placeholder="Search Here...">
                <button type="submit"><img src="assets/images/header/icon/04.png" alt="Search"></button>
            </form>
        </div>
    </div>
    <header class="header header--two premium-header">
        <div class="header-trust-strip">
            <div class="container">
                <span><i class="fa-solid fa-circle-check"></i> No Cuts</span>
                <span><i class="fa-solid fa-circle-check"></i> No Stitches</span>
                <span><i class="fa-solid fa-circle-check"></i> Same-Day Discharge</span>
                <span><i class="fa-solid fa-location-dot"></i> Bathinda | Serving Punjab</span>
            </div>
        </div>
        <div class="header__top premium-header-top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-5 col-5">
                        <div class="logo">
                            <a href="index.php"><img class="premium-logo" src="assets/images/logo.png" alt="Dr Raja Vein Clinic Bathinda"></a>
                        </div>
                    </div>
                    <div class="col-xl-7 col-12 d-none d-xl-block">
                        <div class="info">
                            <ul>
                                <li>
                                    <div class="info__icon"><i class="icofont-email"></i></div>
                                    <div class="info__content"><span>Email Us</span><a href="mailto:drrajaveinclinic@gmail.com"><p><b>drrajaveinclinic@gmail.com</b></p></a></div>
                                </li>
                                <li>
                                    <div class="info__icon"><i class="icofont-ui-cell-phone"></i></div>
                                    <div class="info__content"><span>Instant Consultation</span><a href="tel:+919034242189"><p><b>+91 90342 42189</b></p></a></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-6 d-xl-none">
                        <div class="header__bararea justify-content-end">
                            <div class="header__bar d-xl-none"><span></span><span></span><span></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header__bottom premium-header-bottom">
            <div class="container">
                <div class="area">
                    <div class="main-menu">
                        <div class="menu">
                            <ul>
                                <li><a style="color:#0b2239;" href="index.php" class="active">Home</a></li>
                                <li><a style="color:#0b2239;" href="about.php">About</a></li>
                                <li><a style="color:#0b2239;" href="varicose.php">Varicose Veins</a></li>
                                <li style="color:#0b2239;">
                                    <a style="color:#0b2239;" href="treatment.php">Treatment Methods</a>
                                    <ul>
                                        <li><a href="treatment.php">Endovenous Laser Ablation</a></li>
                                        <li><a href="moca.php">MOCA</a></li>
                                        <li><a href="foam-sclerotherapy.php">Foam Sclerotherapy</a></li>
                                        <li><a href="ultraspound.php">Ultrasound Guided Procedure</a>
                                            <ul>
                                                <li><a href="ultraspound.php#Paris">USG Guided FNAC</a></li>
                                                <li><a href="ultraspound.php#Paris">USG Guided Biopsy</a></li>
                                                <li><a href="ultraspound.php#bbb">USG Guided Drainage Procedures</a></li>
                                                <li><a href="ultraspound.php#aaa">Trans Rectal EUS Guided Biopsy</a></li>
                                                <li><a href="ultraspound.php#ccc">USG Liver Abscess Drainage</a></li>
                                                <li><a href="ultraspound.php#ddd">USG Percutaneous TransHepatic Biliary Drainage</a></li>
                                                <li><a href="ultraspound.php#eee">USG Percutaneous Nephrostomy</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="ct-guide.php">CT Guided Procedures</a>
                                            <ul>
                                                <li><a href="ct-guide.php">CT Guide FNAC</a></li>
                                                <li><a href="ct-guide.php">CT Guided Biopsy</a></li>
                                                <li><a href="ct-guide.php">CT Guided Drainage Procedures</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a style="color:#0b2239;" href="media.php">Media</a></li>
                                <li><a style="color:#0b2239;" href="testimonial.php">Testimonial</a></li>
                                <li><a style="color:#0b2239;" href="blog.php">Blog</a></li>
                                <li><a style="color:#0b2239;" href="contact.php">Contact</a></li>
                            </ul>
                            <a href="contact.php" class="lab-btn premium-appointment">Appointment<i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="floating-contact floating-whatsapp"><a href="https://wa.me/919034242189?text=Hi%2C%20I%20would%20like%20to%20get%20some%20information."><img src="assets/images/whatsap.webp" alt="WhatsApp Dr Raja Vein Clinic" width="44"><span>WhatsApp</span></a></div>
        <div class="floating-contact floating-call"><a href="tel:+919034242189"><img src="assets/images/call.png" alt="Call Dr Raja Vein Clinic" width="44"><span>Call Now</span></a></div>
    </header>
