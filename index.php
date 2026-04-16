<?php
$pageTitle = "Advanced Varicose Veins Treatment in Bathinda | Dr. Ambrish Raja";
$pageDescription = "Get advanced varicose veins treatment in Bathinda with laser, glue treatment, sclerotherapy and minimally invasive vein care by Dr. Ambrish Raja. No cuts, no stitches, same-day discharge.";
$pageKeywords = "varicose veins treatment in Bathinda, varicose veins doctor in Bathinda, laser treatment for varicose veins, vein specialist in Punjab, swelling in legs treatment, venous ulcer treatment Bathinda";
$canonicalUrl = "https://drrajavein.com/";

$faqSchema = [
    "@context" => "https://schema.org",
    "@type" => "FAQPage",
    "mainEntity" => [
        ["@type" => "Question", "name" => "Is varicose veins treatment painful?", "acceptedAnswer" => ["@type" => "Answer", "text" => "Modern varicose veins treatment is usually much less painful than older surgery. Laser, glue treatment and sclerotherapy are minimally invasive procedures with mild discomfort for most patients."]],
        ["@type" => "Question", "name" => "Can I walk after varicose veins treatment?", "acceptedAnswer" => ["@type" => "Answer", "text" => "Yes. Most patients can walk soon after modern minimally invasive varicose veins treatment and may go home the same day depending on the advised procedure."]],
        ["@type" => "Question", "name" => "What test is required before varicose veins treatment?", "acceptedAnswer" => ["@type" => "Answer", "text" => "A Doppler ultrasound of leg veins is commonly used to identify venous reflux, leaking valves and the exact diseased veins before planning treatment."]],
        ["@type" => "Question", "name" => "Is surgery always required for varicose veins?", "acceptedAnswer" => ["@type" => "Answer", "text" => "Not always. Many patients can be treated with minimally invasive options like endovenous laser treatment, glue treatment, MOCA or foam sclerotherapy depending on the condition."]],
        ["@type" => "Question", "name" => "When should I see a varicose veins specialist?", "acceptedAnswer" => ["@type" => "Answer", "text" => "You should seek evaluation if you have leg heaviness, visible bulging veins, ankle swelling, itching, burning, skin darkening or a non-healing wound near the ankle."]]
    ]
];

$medicalBusinessSchema = [
    "@context" => "https://schema.org",
    "@type" => "MedicalBusiness",
    "name" => "Dr. Raja's Vein & Intervention Clinic",
    "description" => $pageDescription,
    "medicalSpecialty" => ["Vascular", "Interventional Radiology", "Varicose Veins Treatment"],
    "address" => [
        "@type" => "PostalAddress",
        "streetAddress" => "Star Imaging, Bhatti Rd, near Beri Wala Baba",
        "addressLocality" => "Bathinda",
        "postalCode" => "151001",
        "addressRegion" => "Punjab",
        "addressCountry" => "IN"
    ],
    "telephone" => "+91 90342 42189",
    "email" => "drrajaveinclinic@gmail.com",
    "areaServed" => ["Bathinda", "Mansa", "Barnala", "Faridkot", "Muktsar", "Dabwali", "Malout", "Kotkapura", "Punjab"],
    "url" => $canonicalUrl
];

$additionalHead = '<script type="application/ld+json">' . json_encode($faqSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>' . "\n" . '<script type="application/ld+json">' . json_encode($medicalBusinessSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>';

$appointmentMessage = "";

function home_db_connection()
{
    mysqli_report(MYSQLI_REPORT_OFF);
    $connection = @mysqli_connect("localhost", "kzwyxklz_drrajavaricose", "nOo8w2UD", "kzwyxklz_drrajavaricose");
    if ($connection instanceof mysqli) {
        @mysqli_set_charset($connection, "utf8mb4");
        return $connection;
    }
    return null;
}

function home_clean($value)
{
    return htmlspecialchars((string) $value, ENT_QUOTES, "UTF-8");
}

function home_fetch_rows($query)
{
    $connection = home_db_connection();
    if (!$connection) {
        return [];
    }
    $result = @mysqli_query($connection, $query);
    if (!$result) {
        @mysqli_close($connection);
        return [];
    }
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    @mysqli_free_result($result);
    @mysqli_close($connection);
    return $rows;
}

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["btn2"])) {
    $connection = home_db_connection();
    if ($connection) {
        $name = trim($_POST["enqnam"] ?? "");
        $email = trim($_POST["enqeml"] ?? "");
        $mobile = trim($_POST["enqmob"] ?? "");
        $subject = trim($_POST["enqsub"] ?? "Varicose Veins Consultation");
        $message = trim($_POST["enqmsg"] ?? "");
        $added = "Home Page Enquiry";
        $stmt = mysqli_prepare($connection, "INSERT INTO tbenq(enqnam,enqeml,enqmob,enqsub,enqmsg,date,added) VALUES (?,?,?,?,?,CURDATE(),?)");
        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "ssssss", $name, $email, $mobile, $subject, $message, $added);
            $appointmentMessage = mysqli_stmt_execute($stmt) ? "Thank you. Your enquiry has been submitted successfully." : "Unable to submit enquiry right now. Please call or WhatsApp us.";
            mysqli_stmt_close($stmt);
        } else {
            $appointmentMessage = "Unable to submit enquiry right now. Please call or WhatsApp us.";
        }
        mysqli_close($connection);
    } else {
        $appointmentMessage = "Database connection is not available in this environment. Please call or WhatsApp us for appointment.";
    }
}

$testimonialVideos = home_fetch_rows("SELECT link FROM tbvideo ORDER BY id DESC LIMIT 6");
$galleryImages = home_fetch_rows("SELECT pic1 FROM tbimg ORDER BY id DESC LIMIT 8");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/images/favii.ico" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/icofont.min.css">
    <link rel="stylesheet" href="assets/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/odometer.css">
    <link rel="stylesheet" href="assets/css/lightcase.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <?php include('header.php'); ?>

    <main class="home-seo-page">
        <section class="vein-hero">
            <div class="container">
                <div class="row align-items-center g-5">
                    <div class="col-lg-7 hero-entry-left">
                        <div class="hero-copy">
                            <span class="eyebrow">No Cuts • No Stitches • No Bed Rest • Same-Day Discharge</span>
                            <h1><span class="keyword-highlight light">Advanced Varicose Veins Treatment in Bathinda</span> | No Surgery, Fast Recovery</h1>
                            <p>Get advanced, minimally invasive treatment for <span class="keyword-highlight light">varicose veins</span> with <span class="keyword-highlight light">Laser & Glue technology</span> by Dr. Ambrish Raja — a trusted vein specialist with 1500+ successful cases across India and globally. Say goodbye to leg pain, <span class="keyword-highlight light">swelling</span>, visible veins and <span class="keyword-highlight light">non-healing ulcers</span> with safe, effective treatment that lets you walk immediately after the procedure.</p>
                            <p>Serving patients from <span class="keyword-highlight light">Bathinda</span>, Mansa, Barnala, Faridkot, Muktsar and across <span class="keyword-highlight light">Punjab</span> with modern, non-surgical solutions for varicose veins and venous ulcers.</p>
                            <div class="trust-grid">
                                <span><i class="fa-solid fa-circle-check"></i>1500+ Happy Patients Treated Globally</span>
                                <span><i class="fa-solid fa-circle-check"></i>Advanced Laser & Glue Treatment</span>
                                <span><i class="fa-solid fa-circle-check"></i>No Major Surgery Required</span>
                                <span><i class="fa-solid fa-circle-check"></i>Walk Immediately After Procedure</span>
                                <span><i class="fa-solid fa-circle-check"></i>Same Day Discharge</span>
                            </div>
                            <strong class="warning-line">Ignoring leg pain today can lead to serious complications tomorrow.</strong>
                            <div class="hero-actions">
                                <a href="tel:+919034242189" class="lab-btn">Call Now – Instant Consultation <i class="fa-solid fa-phone"></i></a>
                                <a href="https://wa.me/919034242189?text=Hi%20Doctor%2C%20I%20want%20to%20share%20my%20reports%20for%20varicose%20veins%20consultation." class="lab-btn bg-title">WhatsApp Your Reports <i class="fa-brands fa-whatsapp"></i></a>
                                <a href="#appointment" class="text-btn">Book Appointment Today</a>
                            </div>
                            <small>Free Initial Consultation Available • Limited Slots Per Day</small>
                        </div>
                    </div>
                    <div class="col-lg-5 hero-entry-right">
                        <div class="hero-visual-card">
                            <span class="location-badge"><i class="fa-solid fa-location-dot"></i> Bathinda | Serving All Punjab</span>
                            <img src="assets/images/dr-raja.jpg" alt="Dr. Ambrish Raja varicose veins specialist in Bathinda" loading="eager">
                            <div class="moving-strip">Walk Immediately After Treatment</div>
                            <div class="mini-stat"><strong>1500+</strong><span>Vein Cases Managed</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="symptom-section padding-tb">
            <div class="container">
                <div class="section__header text-center wow fadeInUp" data-wow-delay=".2s">
                    <h2>Are You Facing These Early Signs of Varicose Veins in Your Legs?</h2>
                        <p><span class="keyword-highlight">Varicose veins</span> often start with mild, ignored symptoms that gradually worsen over time. These signs are caused by improper blood circulation in the leg veins, where blood starts pooling instead of flowing back to the heart.</p>
                </div>
                <div class="row g-4 align-items-center">
                    <div class="col-lg-5 wow fadeInUp" data-wow-delay=".3s">
                        <div class="image-stack">
                            <img src="assets/images/home-vein-illustration.svg" alt="Leg vein diagram showing varicose veins symptoms" loading="lazy">
                            <div class="image-note">If you are experiencing even 2–3 symptoms, it’s time to get your veins checked.</div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="symptom-grid">
                            <article class="symptom-card wow fadeInUp" data-wow-delay=".1s"><i class="icofont-leg"></i><h3>Heaviness or Tiredness</h3><p>After long standing or sitting, legs may feel heavy, tight or fatigued — a common early sign of vein dysfunction.</p></article>
                            <article class="symptom-card wow fadeInUp" data-wow-delay=".15s"><i class="icofont-eye-alt"></i><h3>Visible Blue or Bulging Veins</h3><p>Twisted enlarged veins become visible on the skin, especially on calves or thighs.</p></article>
                            <article class="symptom-card wow fadeInUp" data-wow-delay=".2s"><i class="icofont-fire-burn"></i><h3>Burning or Itching Near Ankles</h3><p>Persistent irritation around the lower leg due to increased pressure in the veins.</p></article>
                            <article class="symptom-card wow fadeInUp" data-wow-delay=".25s"><i class="icofont-water-drop"></i><h3>Swelling in Feet and Ankles</h3><p>Fluid accumulation after prolonged standing may reduce after rest but keeps recurring.</p></article>
                            <article class="symptom-card wow fadeInUp" data-wow-delay=".3s"><i class="icofont-night"></i><h3>Night Cramps or Restless Legs</h3><p>Sudden cramps and discomfort during sleep can disturb rest and quality of life.</p></article>
                            <article class="symptom-card wow fadeInUp" data-wow-delay=".35s"><i class="icofont-bandage"></i><h3>Non-Healing Wounds or Ulcers</h3><p>Open wounds near the ankle indicate advanced venous disease and need urgent evaluation.</p></article>
                        </div>
                    </div>
                </div>
                <div class="soft-alert wow fadeInUp" data-wow-delay=".2s">Most people ignore these warning signs as fatigue or age, but untreated vein problems can silently progress into serious complications.</div>
            </div>
        </section>

        <section class="education-section padding-tb bg-color">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".2s">
                        <span class="eyebrow dark">Patient-Friendly Vein Education</span>
                        <h2>What Are Varicose Veins & Why Are They Becoming So Common in India?</h2>
                        <p>Varicose veins are enlarged, twisted and damaged veins, most commonly seen in the legs, that develop when the valves inside the veins stop working properly.</p>
                        <p>Under normal conditions, veins carry blood upward towards the heart with the help of one-way valves. When these valves weaken or fail, blood starts flowing backward and pooling in the veins, leading to <span class="keyword-highlight">swelling</span>, heaviness, pain, burning discomfort and visible blue or bulging veins.</p>
                        <p>In India, <span class="keyword-highlight">varicose veins</span> are increasing due to long working hours, standing jobs, sedentary routines and lifestyle changes. The condition is often ignored in rural and semi-urban areas until complications appear.</p>
                        <a href="varicose.php" class="lab-btn">Understand Varicose Veins <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="impact-box">
                            <h3>Who Is Most Affected?</h3>
                            <ul class="check-list">
                                <li>People standing for long hours like teachers, shopkeepers, factory workers, security guards and healthcare staff</li>
                                <li>Women, especially after pregnancy</li>
                                <li>Aging individuals with weak vein walls and valves</li>
                                <li>Drivers and office workers with long sitting hours</li>
                                <li>People with family history of vein weakness</li>
                            </ul>
                            <div class="quote-strip">What starts as a small visible vein or mild heaviness can slowly turn into a painful and serious condition if ignored.</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="causes-section padding-tb">
            <div class="container">
                <div class="section__header text-center wow fadeInUp" data-wow-delay=".2s">
                    <h2>Why Do Varicose Veins Happen? Understanding the Real Causes</h2>
                    <p><span class="keyword-highlight">Varicose veins</span> develop when the veins in the legs are no longer able to send blood back to the heart efficiently. This root problem is often <span class="keyword-highlight">vein valve failure</span> and <span class="keyword-highlight">venous reflux</span>.</p>
                </div>
                <div class="row g-4 align-items-center">
                    <div class="col-lg-5 wow fadeInUp" data-wow-delay=".25s">
                        <div class="vein-compare">
                            <img src="assets/images/normal-vs-varicose-vein.svg" alt="Normal vein vs varicose vein valve failure illustration" loading="lazy">
                            <span>Root Cause: Weak Vein Valves + Increased Venous Pressure</span>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="cause-grid">
                            <div class="cause-card wow fadeInUp" data-wow-delay=".1s"><i class="fa-solid fa-person-standing"></i><h3>Long Standing or Sitting</h3><p>Standing jobs and prolonged sitting increase pressure inside leg veins and reduce calf muscle pumping.</p></div>
                            <div class="cause-card wow fadeInUp" data-wow-delay=".15s"><i class="fa-solid fa-weight-scale"></i><h3>Obesity</h3><p>Excess body weight puts additional pressure on pelvic and leg veins, worsening swelling and fatigue.</p></div>
                            <div class="cause-card wow fadeInUp" data-wow-delay=".2s"><i class="fa-solid fa-person-pregnant"></i><h3>Pregnancy</h3><p>Blood volume, hormones and pressure from the uterus can weaken vein valves in women.</p></div>
                            <div class="cause-card wow fadeInUp" data-wow-delay=".25s"><i class="fa-solid fa-dna"></i><h3>Genetics</h3><p>Family history may mean naturally weaker vein walls, connective tissue and valve structure.</p></div>
                            <div class="cause-card wow fadeInUp" data-wow-delay=".3s"><i class="fa-solid fa-person-cane"></i><h3>Ageing</h3><p>Vein walls and valves naturally lose strength and elasticity with age.</p></div>
                            <div class="cause-card wow fadeInUp" data-wow-delay=".35s"><i class="fa-solid fa-couch"></i><h3>Lack of Movement</h3><p>Low activity slows circulation and allows blood to pool in the lower legs.</p></div>
                        </div>
                    </div>
                </div>
                <div class="soft-alert wow fadeInUp" data-wow-delay=".2s">The sooner the root cause is identified, the easier it becomes to prevent long-term complications and choose the right treatment.</div>
            </div>
        </section>

        <section class="complication-section padding-tb">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".2s">
                        <h2>Ignoring Varicose Veins Can Lead To Serious Complications</h2>
                        <p>Varicose veins are not just a cosmetic issue. If left untreated, venous reflux can gradually worsen and lead to painful, long-term health problems.</p>
                    </div>
                    <div class="col-lg-6">
                        <div class="complication-list wow fadeInUp" data-wow-delay=".3s">
                            <span>Severe pain & swelling</span><span>Skin discoloration</span><span>Venous ulcers</span><span>Blood clot risk</span><span>Bleeding veins</span>
                        </div>
                        <strong class="cta-line">Early treatment is simple. Late treatment becomes complicated.</strong>
                    </div>
                </div>
            </div>
        </section>

        <section class="treatments-section padding-tb bg-color">
            <div class="container">
                <div class="section__header text-center wow fadeInUp" data-wow-delay=".2s">
                    <h2><span class="keyword-highlight">Advanced Varicose Veins Treatment in Bathinda</span> – Safe, Modern & Minimally Invasive</h2>
                    <p>Dr. Ambrish Raja offers advanced, evidence-based treatments for all stages of vein disease — from mild spider veins to severe <span class="keyword-highlight">venous ulcers</span>.</p>
                </div>
                <div class="treatment-cards">
                    <article class="treatment-card wow fadeInUp" data-wow-delay=".1s"><img src="assets/images/en.png" alt="Laser treatment for varicose veins in Bathinda" loading="lazy"><div><h3>Laser Treatment for Varicose Veins (EVLT)</h3><p>Endovenous Laser Treatment uses laser energy to close damaged veins so blood redirects to healthy veins. It is preferred for large varicose veins, pain, heaviness and swelling.</p><a href="treatment.php">Know More</a></div></article>
                    <article class="treatment-card wow fadeInUp" data-wow-delay=".15s"><img src="assets/images/moca.png" alt="MOCA treatment for varicose veins" loading="lazy"><div><h3>MOCA for Selected Vein Patients</h3><p>Mechanical Occlusive Chemical Ablation is a non-thermal, non-tumescent option for selected patients who need modern minimally invasive vein care.</p><a href="moca.php">Know More</a></div></article>
                    <article class="treatment-card wow fadeInUp" data-wow-delay=".2s"><img src="assets/images/foam.png" alt="Foam sclerotherapy for spider veins" loading="lazy"><div><h3>Sclerotherapy for Spider Veins & Small Varicose Veins</h3><p>A special solution is injected into small veins so they collapse and fade over time. Useful for spider veins, cosmetic concerns and early-stage veins.</p><a href="foam-sclerotherapy.php">Know More</a></div></article>
                    <article class="treatment-card wow fadeInUp" data-wow-delay=".25s"><img src="assets/images/vari.png" alt="Venous ulcer and advanced varicose veins treatment" loading="lazy"><div><h3>Advanced Treatment for Non-Healing Leg Ulcers</h3><p>Untreated varicose veins can cause venous ulcers. Treatment focuses on vein reflux, wound care, infection control and long-term relief.</p><a href="varicose.php">Know More</a></div></article>
                </div>
            </div>
        </section>

        <section class="doctor-trust padding-tb">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-5 wow fadeInUp" data-wow-delay=".2s"><img class="doctor-photo" src="assets/images/doctor-big.jpg" alt="Dr. Ambrish Raja Bathinda vein specialist" loading="lazy"></div>
                    <div class="col-lg-7 wow fadeInUp" data-wow-delay=".3s">
                        <span class="eyebrow dark">Experience • Precision • Personalized Care</span>
                        <h2>Why Patients Trust Dr. Ambrish Raja for Varicose Veins Treatment in Bathinda</h2>
                        <p>At Dr. Raja’s Vein & Intervention Clinic, every patient is evaluated carefully to understand the stage of vein disease, symptoms, lifestyle factors, venous reflux and risk of complications before planning treatment.</p>
                        <div class="trust-columns">
                            <div><h3>Specialist-Led Care</h3><p>Experience in early varicose veins, chronic venous insufficiency, skin changes, swelling and venous ulcers.</p></div>
                            <div><h3>Root-Cause Treatment</h3><p>The focus is not only visible veins, but identifying the faulty vein and treating reflux at its source.</p></div>
                            <div><h3>Modern Technology</h3><p>Laser ablation, MOCA, foam sclerotherapy and image-guided diagnosis-driven treatment planning.</p></div>
                            <div><h3>Fast Recovery Focus</h3><p>Minimally invasive care designed for faster return to daily routine and better long-term relief.</p></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="process-section padding-tb bg-color">
            <div class="container">
                <div class="section__header text-center wow fadeInUp" data-wow-delay=".2s">
                    <h2>How Modern Varicose Veins Treatment Works</h2>
                        <p>The process is designed to be safe, <span class="keyword-highlight">minimally invasive</span> and focused on long-term relief — not just temporary symptom control.</p>
                </div>
                <div class="process-timeline">
                    <div class="process-step wow fadeInUp" data-wow-delay=".1s"><span>1</span><i class="fa-solid fa-user-doctor"></i><h3>Consultation</h3><p>Symptoms, leg pain, swelling and visible veins are evaluated.</p></div>
                    <div class="process-step wow fadeInUp" data-wow-delay=".15s"><span>2</span><i class="fa-solid fa-wave-square"></i><h3>Doppler Ultrasound</h3><p>Leaking valves and venous reflux are mapped accurately.</p></div>
                    <div class="process-step wow fadeInUp" data-wow-delay=".2s"><span>3</span><i class="fa-solid fa-clipboard-check"></i><h3>Personal Plan</h3><p>Laser, glue, MOCA or sclerotherapy is selected as suitable.</p></div>
                    <div class="process-step wow fadeInUp" data-wow-delay=".25s"><span>4</span><i class="fa-solid fa-bolt"></i><h3>Treatment</h3><p>Diseased veins are closed using minimally invasive methods.</p></div>
                    <div class="process-step wow fadeInUp" data-wow-delay=".3s"><span>5</span><i class="fa-solid fa-person-walking"></i><h3>Walk & Recover</h3><p>Most patients resume normal life quickly with medical advice.</p></div>
                </div>
                <div class="quote-strip text-center">No Surgery • Same-Day Discharge • Walk Immediately</div>
            </div>
        </section>

        <section class="risk-section padding-tb">
            <div class="container">
                <div class="section__header text-center wow fadeInUp" data-wow-delay=".2s">
                    <h2>Who Is More Likely to Develop Varicose Veins?</h2>
                    <p>Varicose veins are more common in people whose daily routine places continuous pressure on the leg veins.</p>
                </div>
                <div class="risk-grid">
                    <div class="risk-card wow fadeInUp" data-wow-delay=".1s"><i class="fa-solid fa-chalkboard-user"></i><h3>Teachers</h3><p>Long standing during classes can cause evening heaviness and ankle swelling.</p></div>
                    <div class="risk-card wow fadeInUp" data-wow-delay=".15s"><i class="fa-solid fa-store"></i><h3>Shopkeepers</h3><p>Standing in one place for long hours increases lower limb pressure.</p></div>
                    <div class="risk-card wow fadeInUp" data-wow-delay=".2s"><i class="fa-solid fa-industry"></i><h3>Factory Workers</h3><p>Extended shifts and repetitive strain can worsen venous pressure.</p></div>
                    <div class="risk-card wow fadeInUp" data-wow-delay=".25s"><i class="fa-solid fa-wheat-awn"></i><h3>Farmers</h3><p>Field work, lifting and hot conditions can stress leg veins in Punjab.</p></div>
                    <div class="risk-card wow fadeInUp" data-wow-delay=".3s"><i class="fa-solid fa-user-nurse"></i><h3>Nurses & Healthcare Staff</h3><p>Long duty hours and limited breaks can affect venous circulation.</p></div>
                    <div class="risk-card wow fadeInUp" data-wow-delay=".35s"><i class="fa-solid fa-car-side"></i><h3>Drivers & Office Workers</h3><p>Long sitting reduces calf muscle activity and slows blood circulation.</p></div>
                </div>
                <div class="soft-alert wow fadeInUp" data-wow-delay=".2s">If your work keeps you standing, sitting or physically straining your legs every day, your veins may be under stress too.</div>
            </div>
        </section>

        <?php if (!empty($testimonialVideos) || !empty($galleryImages)): ?>
        <section class="proof-section padding-tb bg-color">
            <div class="container">
                <div class="row g-5">
                    <?php if (!empty($testimonialVideos)): ?>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".2s">
                        <h2>What Our Patients Say</h2>
                        <div class="video-grid">
                            <?php foreach ($testimonialVideos as $video): ?>
                                <?php $videoId = preg_replace('/[^A-Za-z0-9_-]/', '', $video['link'] ?? ''); ?>
                                <?php if ($videoId !== ''): ?>
                                <iframe loading="lazy" src="https://www.youtube.com/embed/<?php echo home_clean($videoId); ?>" title="Patient testimonial for varicose veins treatment" allowfullscreen></iframe>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php if (!empty($galleryImages)): ?>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                        <h2>Clinic Media & Real Care Environment</h2>
                        <div class="media-grid">
                            <?php foreach ($galleryImages as $image): ?>
                                <?php if (!empty($image['pic1'])): ?>
                                <img src="admin/assets/images/upload/product/gallery/<?php echo home_clean($image['pic1']); ?>" alt="Dr Raja vein clinic media" loading="lazy">
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>
        <?php endif; ?>

        <section class="faq-section padding-tb">
            <div class="container">
                <div class="row g-5 align-items-start">
                    <div class="col-lg-5 wow fadeInUp" data-wow-delay=".2s">
                        <span class="eyebrow dark">Patient Questions</span>
                        <h2>Frequently Asked Questions About Varicose Veins Treatment</h2>
                        <p>Patients often search online about pain, recovery, walking after treatment, surgery, cost, recurrence and insurance. These answers explain common concerns in simple language.</p>
                    </div>
                    <div class="col-lg-7 wow fadeInUp" data-wow-delay=".3s">
                        <div class="accordion home-faq" id="homeFaq">
                            <div class="accordion-item"><h3 class="accordion-header"><button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqOne">Is varicose veins treatment painful?</button></h3><div id="faqOne" class="accordion-collapse collapse show" data-bs-parent="#homeFaq"><div class="accordion-body">Modern treatment is usually much less painful than patients expect. Minimally invasive options are designed to treat veins with minimal discomfort compared with older surgery.</div></div></div>
                            <div class="accordion-item"><h3 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqTwo">Can I walk after treatment?</button></h3><div id="faqTwo" class="accordion-collapse collapse" data-bs-parent="#homeFaq"><div class="accordion-body">Yes. Same-day walking is one of the biggest advantages of modern varicose veins treatment, and many patients go home the same day.</div></div></div>
                            <div class="accordion-item"><h3 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqThree">What test is done before treatment?</button></h3><div id="faqThree" class="accordion-collapse collapse" data-bs-parent="#homeFaq"><div class="accordion-body">A Doppler ultrasound helps identify leaking vein valves, abnormal blood flow, venous reflux and the exact veins that need treatment.</div></div></div>
                            <div class="accordion-item"><h3 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqFour">Is surgery required for varicose veins?</button></h3><div id="faqFour" class="accordion-collapse collapse" data-bs-parent="#homeFaq"><div class="accordion-body">Not always. Many patients can be treated with endovenous laser treatment, foam sclerotherapy, MOCA or other catheter-based treatments depending on the vein condition.</div></div></div>
                            <div class="accordion-item"><h3 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqFive">When should I see a specialist?</button></h3><div id="faqFive" class="accordion-collapse collapse" data-bs-parent="#homeFaq"><div class="accordion-body">You should get evaluated if you have heaviness, pain, visible bulging veins, ankle swelling, burning, itching, skin darkening or a wound that is not healing.</div></div></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="location-section padding-tb bg-color">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-7 wow fadeInUp" data-wow-delay=".2s">
                        <h2>Varicose Veins Treatment in Bathinda & Nearby Areas of Punjab</h2>
                        <p>Our clinic provides <span class="keyword-highlight">advanced varicose veins treatment in Bathinda</span> using modern minimally invasive techniques such as <span class="keyword-highlight">laser treatment</span>, glue therapy and sclerotherapy.</p>
                        <p>Patients visit us from Bathinda, Mansa, Barnala, Faridkot, Muktsar, Dabwali, Malout, Kotkapura and nearby areas for specialized vein care, <span class="keyword-highlight">Doppler diagnosis</span> and non-surgical treatment options.</p>
                        <div class="location-tags"><span>Bathinda</span><span>Mansa</span><span>Barnala</span><span>Faridkot</span><span>Muktsar</span><span>Dabwali</span><span>Malout</span><span>Kotkapura</span></div>
                    </div>
                    <div class="col-lg-5 wow fadeInUp" data-wow-delay=".3s">
                        <div class="address-card">
                            <h3>Book Your Vein Evaluation</h3>
                            <p><i class="icofont-location-pin"></i> Star Imaging, Bhatti Rd, near Beri Wala Baba, Bathinda 151001</p>
                            <p><i class="icofont-ui-cell-phone"></i> <a href="tel:+919034242189">+91 90342 42189</a></p>
                            <p><i class="icofont-email"></i> <a href="mailto:drrajaveinclinic@gmail.com">drrajaveinclinic@gmail.com</a></p>
                            <a href="#appointment" class="lab-btn">Book Appointment <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="appointment" class="appointment-section padding-tb">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".2s">
                        <span class="eyebrow dark">Final Step</span>
                        <h2>Don’t Ignore Your Leg Pain, Swelling or Visible Veins Anymore</h2>
                        <p>Varicose veins are progressive — what starts as mild heaviness or visible veins can slowly turn into pain, skin damage or non-healing ulcers if ignored.</p>
                        <p>Early diagnosis makes treatment simpler, faster and more effective. Modern treatment options allow you to walk immediately and recover quickly.</p>
                        <div class="final-actions"><a href="tel:+919034242189" class="lab-btn">Call Now for Expert Consultation</a><a href="https://wa.me/919034242189?text=Hi%20Doctor%2C%20I%20have%20leg%20pain%2C%20swelling%20or%20visible%20veins.%20Please%20guide%20me." class="lab-btn bg-title">WhatsApp Symptoms / Reports</a></div>
                        <strong class="warning-line">Limited daily slots available for consultation.</strong>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="appointment-card">
                            <h3>Book Appointment Today</h3>
                            <?php if ($appointmentMessage !== ""): ?><div class="form-status"><?php echo home_clean($appointmentMessage); ?></div><?php endif; ?>
                            <form method="POST">
                                <div class="row g-3">
                                    <div class="col-md-6"><input type="text" placeholder="Your Name*" name="enqnam" required></div>
                                    <div class="col-md-6"><input type="email" placeholder="Your Email*" name="enqeml" required></div>
                                    <div class="col-md-6"><input type="text" placeholder="Treatment" name="enqsub" value="Varicose Veins Consultation"></div>
                                    <div class="col-md-6"><input type="text" placeholder="Your Number*" name="enqmob" required></div>
                                    <div class="col-12"><textarea name="enqmsg" rows="5" placeholder="Tell us your symptoms or concern*" required></textarea></div>
                                    <div class="col-12"><button type="submit" name="btn2" class="lab-btn border-0">Submit Enquiry <i class="fa-solid fa-arrow-right"></i></button></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php include('footer.php'); ?>
</body>
</html>
