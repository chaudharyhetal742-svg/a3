<?php
/**
 * QuarterHosiery — Official Web Portal & Technical Showcase
 * @package QuarterHosiery
 * @version 3.2.0
 */
declare(strict_types=1);

$siteTitle = "QuarterHosiery | Precision Quarter Socks & High-Gauge Performance Knitwear";
$metaDescription = "Engineered quarter-height socks crafted with 200-needle circular knitting, graduated plantar arch compression, and hand-linked seamless toe closures.";
$canonicalUrl = "https://quarterhosiery.com/";
$currentYear = (int)date('Y');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= htmlspecialchars($siteTitle); ?></title>
  <meta name="description" content="<?= htmlspecialchars($metaDescription); ?>">
  <link rel="canonical" href="<?= htmlspecialchars($canonicalUrl); ?>">
  <!-- Open Graph -->
  <meta property="og:type" content="website">
  <meta property="og:title" content="<?= htmlspecialchars($siteTitle); ?>">
  <meta property="og:description" content="<?= htmlspecialchars($metaDescription); ?>">
  <meta property="og:url" content="<?= htmlspecialchars($canonicalUrl); ?>">
  <meta property="og:image" content="assets/images/hero_quarter_socks_runner.jpg">
  <meta name="twitter:card" content="summary_large_image">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="icon" href="favicon.ico">
  <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-0LY0HY7L01"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-0LY0HY7L01');
</script>
</head>
<body>

<header class="site-header">
  <div class="reading-progress-bar"></div>
  <div class="container header-inner">
    <a href="index.php" class="site-logo">
      <div class="logo-symbol">
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><path d="M9 15h6"/><path d="M9 11h6"/></svg>
      </div>
      <span>QuarterHosiery</span>
    </a>
    <nav class="site-nav">
      <a href="index.php" class="nav-link active">Home</a>
      <a href="about.html" class="nav-link ">About Us</a>
      <a href="index.php#collections" class="nav-link">Collections</a>
      <a href="index.php#anatomy" class="nav-link">Anatomy</a>
      <a href="index.php#sizing" class="nav-link">Sizing Guide</a>
      <a href="blog.html" class="nav-link ">Journal</a>
      <a href="contact.html" class="nav-link ">Contact</a>
    </nav>
    <div class="header-actions">
      <a href="index.php#collections" class="btn btn-primary btn-sm">Shop Collections</a>
      <button class="mobile-toggle" aria-label="Toggle Menu">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="18" x2="21" y2="18"/></svg>
      </button>
    </div>
  </div>
</header>

<div class="drawer-backdrop"></div>
<div class="mobile-drawer">
  <div>
    <div class="mobile-drawer-header">
      <div class="site-logo">
        <div class="logo-symbol">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/></svg>
        </div>
        <span>QuarterHosiery</span>
      </div>
      <button class="mobile-drawer-close" style="background:none;border:none;cursor:pointer;padding:0.5rem;" aria-label="Close Menu">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
      </button>
    </div>
    <div class="mobile-nav-links">
      <a href="index.php" class="nav-link active">Home</a>
      <a href="about.html" class="nav-link ">About Us</a>
      <a href="index.php#collections" class="nav-link">Collections</a>
      <a href="index.php#anatomy" class="nav-link">Anatomy & Specs</a>
      <a href="index.php#sizing" class="nav-link">Sizing Guide</a>
      <a href="blog.html" class="nav-link ">Journal</a>
      <a href="contact.html" class="nav-link ">Contact</a>
      <hr style="border:none;border-top:1px solid #e2e8f0;margin:1rem 0;">
      <a href="privacy-policy.html" class="nav-link" style="font-size:0.9rem;color:#64748b;">Privacy Policy</a>
      <a href="terms-and-conditions.html" class="nav-link" style="font-size:0.9rem;color:#64748b;">Terms of Service</a>
      <a href="disclaimer.html" class="nav-link" style="font-size:0.9rem;color:#64748b;">Disclaimer</a>
      <a href="cookie-policy.html" class="nav-link" style="font-size:0.9rem;color:#64748b;">Cookie Policy</a>
    </div>
  </div>
  <div style="padding-top:2rem;">
    <a href="index.php#collections" class="btn btn-primary" style="width:100%;">Explore Quarter Socks</a>
  </div>
</div>

<main>
  <!-- SECTION 1: HERO SECTION -->
  <section class="hero-section" id="hero">
    <div class="container">
      <div class="hero-grid">
        <div class="hero-content">
          <div class="section-kicker">200-Needle Circular Precision Knit</div>
          <h1 class="hero-title">The Exact Elevation.<br><span class="text-highlight">Engineered Quarter</span> Socks.</h1>
          <p class="hero-desc">Rising exactly 2.5 to 3 inches above the shoe collar to guard the vulnerable Achilles tendon while delivering targeted midfoot compression, seamless comfort, and rapid thermal regulation.</p>
          <div class="hero-actions">
            <a href="#collections" class="btn btn-primary btn-lg">Explore Collections</a>
            <a href="#anatomy" class="btn btn-secondary btn-lg">View Technical Specs</a>
          </div>
          <div class="hero-stats">
            <div class="stat-item">
              <div class="stat-num">200<span>N</span></div>
              <div class="stat-label">Ultra-Fine Knit Density</div>
            </div>
            <div class="stat-item">
              <div class="stat-num">18<span>mmHg</span></div>
              <div class="stat-label">Graduated Arch Elasticity</div>
            </div>
            <div class="stat-item">
              <div class="stat-num">0<span>mm</span></div>
              <div class="stat-label">Flat Seamless Toe Seam</div>
            </div>
          </div>
        </div>
        <div class="hero-media">
          <div class="hero-image-wrapper">
            <img src="assets/images/hero_quarter_socks_runner.jpg" alt="Runner testing technical quarter hosiery on outdoor athletic trail" loading="eager" width="600" height="520">
            <div class="floating-badge badge-top">
              <div class="badge-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              </div>
              <div>
                <span class="badge-text-primary">Achilles Collar Shield</span>
                <span class="badge-text-sub">Zero Heel Collar Chafe</span>
              </div>
            </div>
            <div class="floating-badge badge-bottom">
              <div class="badge-icon" style="background:#ecfdf5;color:#10b981;">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
              </div>
              <div>
                <span class="badge-text-primary">Oeko-Tex Standard 100</span>
                <span class="badge-text-sub">Hypoallergenic Natural Fibers</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 2: PHILOSOPHY & ELEVATION EXCELLENCE -->
  <section class="section section-alt" id="philosophy">
    <div class="container">
      <div class="philosophy-grid">
        <div>
          <div class="section-kicker">Knitting Architecture</div>
          <h2>Bridging the Gap Between No-Show Slip and Crew Bulk</h2>
          <p>For decades, footwear enthusiasts were forced to compromise between no-show socks that slip down beneath the heel collar and tall crew socks that trap excess heat during vigorous movement. Quarter hosiery is the calibrated golden ratio of sock height.</p>
          <div class="quote-box">
            "A quarter sock is not a compromised cut. It is an intentional biomechanical barrier designed to shield the supramalleolar region without adding unwanted thermal weight."
          </div>
          <p>By positioning the elasticized ribbed welt precisely above the ankle bone and the padded shoe collar, QuarterHosiery establishes a locked-in fit that never bunches, never slides, and never creates friction hot spots.</p>
        </div>
        <div>
          <div style="border-radius:var(--radius-xl);overflow:hidden;box-shadow:var(--shadow-lg);">
            <img src="assets/images/featured_quarter_cushioned_sock.jpg" alt="Engineered quarter sock pair highlighting ribbed cuff and heel construction" loading="lazy" width="580" height="420">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 3: 5-POINT ANATOMICAL ARCHITECTURE -->
  <section class="section" id="anatomy">
    <div class="container">
      <div class="section-header">
        <div class="section-kicker">Engineered Anatomy</div>
        <h2 class="section-title">Five Precision Points of Sock Ergonomics</h2>
        <p class="section-subtitle">Every square millimeter of our quarter hosiery is mapped to physiological pressure zones, joint kinematics, and dynamic shoe collar interactions.</p>
      </div>
      <div class="anatomy-grid">
        <div class="anatomy-card">
          <span class="anatomy-number">01</span>
          <div class="anatomy-icon-wrap">
            <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
          </div>
          <h3>Dual-Rib Anti-Slip Welt</h3>
          <p>Woven with core-spun Lycra elastic that expands around the supramalleolar ankle perimeter without leaving constrictive red compression marks or sliding down during long runs.</p>
        </div>
        <div class="anatomy-card">
          <span class="anatomy-number">02</span>
          <div class="anatomy-icon-wrap">
            <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
          </div>
          <h3>Achilles Protection Tab</h3>
          <p>A reinforced cushion pad precisely aligns with the stiff Achilles collar of running and training sneakers, neutralizing blister-causing shear friction during plantar flexion.</p>
        </div>
        <div class="anatomy-card">
          <span class="anatomy-number">03</span>
          <div class="anatomy-icon-wrap">
            <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="m4.93 4.93 4.24 4.24M14.83 14.83l4.24 4.24M14.83 9.17l4.24-4.24M4.93 19.07l4.24-4.24"/></svg>
          </div>
          <h3>Plantar Arch Compression Band</h3>
          <p>A 360-degree elastic midfoot ribbon stabilizes the plantar fascia tendon, supporting natural foot arches and preventing the sock from twisting inside active footwear.</p>
        </div>
        <div class="anatomy-card">
          <span class="anatomy-number">04</span>
          <div class="anatomy-icon-wrap">
            <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect width="18" height="18" x="3" y="3" rx="2"/><path d="M3 9h18M9 21V9"/></svg>
          </div>
          <h3>High-Density Terry Sole</h3>
          <p>Micro-loop French terry cushioning absorbs ground reaction force under the calcaneus (heel) and metatarsal heads while preserving low-profile forefoot ground contact.</p>
        </div>
        <div class="anatomy-card">
          <span class="anatomy-number">05</span>
          <div class="anatomy-icon-wrap">
            <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m18 15-6-6-6 6"/></svg>
          </div>
          <h3>Hand-Linked Seamless Toe</h3>
          <p>Stitched stitch-by-stitch using an Italian Rosso looping system. Completely flat with zero abrasive ridges to eliminate toe rub, pressure ulcers, and runner black toenails.</p>
        </div>
        <div class="anatomy-card" style="background:linear-gradient(135deg,var(--color-carbon-900),var(--color-carbon-800));color:var(--color-white);">
          <span class="anatomy-number" style="color:rgba(255,255,255,0.2);">ISO</span>
          <div class="anatomy-icon-wrap" style="background:rgba(37,99,235,0.2);color:var(--color-cobalt-light);">
            <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>
          </div>
          <h3 style="color:var(--color-white);">VaporMesh Micro-Vents</h3>
          <p style="color:var(--color-slate-300);">Engineered open-knit diamond panels spanning the dorsal foot surface actively expel sweat vapor before humidity can break down epidermal skin barriers.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 4: SIGNATURE COLLECTIONS -->
  <section class="section section-alt" id="collections">
    <div class="container">
      <div class="section-header">
        <div class="section-kicker">Signature Collections</div>
        <h2 class="section-title">Built for Distinct Moving Disciplines</h2>
        <p class="section-subtitle">Every model is engineered with tailored yarn ratios, targeted gauge specifications, and calibrated zonal cushioning.</p>
      </div>
      <div class="collections-grid">
        <div class="collection-card">
          <div class="card-image-wrap">
            <img src="assets/images/athletic_pace_trainer.jpg" alt="Pace Runner Pro Quarter Socks" loading="lazy">
            <span class="card-badge">Endurance Runner</span>
          </div>
          <div class="card-body">
            <h3 class="card-title">Pace Runner Pro Quarter</h3>
            <div class="card-spec-tags">
              <span class="spec-pill">200-Needle</span>
              <span class="spec-pill">Moisture-Wick</span>
              <span class="spec-pill">Medium Cushion</span>
            </div>
            <p class="card-desc">Designed for road marathons and speed intervals. High-wicking polyamide blended with combed cotton to keep feet blistering-free across 26.2 miles.</p>
            <div class="card-footer">
              <span class="card-price">$18.00</span>
              <a href="contact.html" class="btn btn-outline btn-sm">Order Pack</a>
            </div>
          </div>
        </div>

        <div class="collection-card">
          <div class="card-image-wrap">
            <img src="assets/images/trail_running_performance.jpg" alt="All-Terrain Ridge Quarter Socks" loading="lazy">
            <span class="card-badge">Trail & Mountain</span>
          </div>
          <div class="card-body">
            <h3 class="card-title">All-Terrain Ridge Quarter</h3>
            <div class="card-spec-tags">
              <span class="spec-pill">Merino Blend</span>
              <span class="spec-pill">Dense Terry</span>
              <span class="spec-pill">Debris Seal</span>
            </div>
            <p class="card-desc">Reinforced with Cordura nylon at the heel and toe. The snug quarter collar blocks trail grit, stones, and pine needles from slipping into trail running shoes.</p>
            <div class="card-footer">
              <span class="card-price">$22.00</span>
              <a href="contact.html" class="btn btn-outline btn-sm">Order Pack</a>
            </div>
          </div>
        </div>

        <div class="collection-card">
          <div class="card-image-wrap">
            <img src="assets/images/urban_daily_footwear_stride.jpg" alt="Everyday Combed Luxe Quarter Socks" loading="lazy">
            <span class="card-badge">Daily Urban</span>
          </div>
          <div class="card-body">
            <h3 class="card-title">Everyday Combed Luxe</h3>
            <div class="card-spec-tags">
              <span class="spec-pill">100% Organic Cotton</span>
              <span class="spec-pill">Light Cushion</span>
              <span class="spec-pill">Zero Slip</span>
            </div>
            <p class="card-desc">The essential everyday sock for sneakers, low boots, and casual city walking. Made from combed long-staple cotton for unmatched velvet softness.</p>
            <div class="card-footer">
              <span class="card-price">$16.00</span>
              <a href="contact.html" class="btn btn-outline btn-sm">Order Pack</a>
            </div>
          </div>
        </div>

        <div class="collection-card">
          <div class="card-image-wrap">
            <img src="assets/images/knit_merino_textured_rib.jpg" alt="Merino Thermal Quarter Socks" loading="lazy">
            <span class="card-badge">All-Season Merino</span>
          </div>
          <div class="card-body">
            <h3 class="card-title">Alpine Merino Quarter</h3>
            <div class="card-spec-tags">
              <span class="spec-pill">18.5µ Merino</span>
              <span class="spec-pill">Odor Resistant</span>
              <span class="spec-pill">Thermal Balance</span>
            </div>
            <p class="card-desc">Superfine 18.5-micron New Zealand merino wool that warms in cold breezes and wicks moisture in summer heat without itching or harboring foot odors.</p>
            <div class="card-footer">
              <span class="card-price">$24.00</span>
              <a href="contact.html" class="btn btn-outline btn-sm">Order Pack</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 5: MATERIAL MATRIX & FIBER SCIENCE -->
  <section class="section" id="materials">
    <div class="container">
      <div class="section-header">
        <div class="section-kicker">Material Matrix</div>
        <h2 class="section-title">Scientific Comparison of Hosiery Fibers</h2>
        <p class="section-subtitle">We rigorously evaluate yarn tensile strength, water absorption rates, and abrasion resistance before selecting our knitting spools.</p>
      </div>
      <div class="matrix-container">
        <table class="matrix-table">
          <thead>
            <tr>
              <th>Fiber Formulation</th>
              <th>Primary Property</th>
              <th>Moisture Transport</th>
              <th>Tensile Durability</th>
              <th>Skin Comfort Rating</th>
              <th>Ideal Application</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <span class="fiber-badge">
                  <span style="width:10px;height:10px;border-radius:50%;background:#2563eb;display:inline-block;"></span>
                  <strong>Long-Staple Combed Cotton (75%)</strong>
                </span>
              </td>
              <td>Natural Breathability</td>
              <td>Moderate (Absorptive)</td>
              <td>High (Ring-Spun)</td>
              <td>Superior (Softest)</td>
              <td>Daily Walking, Casual Sneakers</td>
            </tr>
            <tr>
              <td>
                <span class="fiber-badge">
                  <span style="width:10px;height:10px;border-radius:50%;background:#10b981;display:inline-block;"></span>
                  <strong>Superfine 18.5µ Merino Wool (65%)</strong>
                </span>
              </td>
              <td>Active Thermoregulation</td>
              <td>Superior (Vapor Release)</td>
              <td>High (Multi-Ply Core)</td>
              <td>Exceptional (Zero Prickle)</td>
              <td>Endurance Running, Hiking, Trail</td>
            </tr>
            <tr>
              <td>
                <span class="fiber-badge">
                  <span style="width:10px;height:10px;border-radius:50%;background:#f43f5e;display:inline-block;"></span>
                  <strong>Recycled Polyamide 6.6 (20%)</strong>
                </span>
              </td>
              <td>Friction Resistance</td>
              <td>Rapid Surface Capillary</td>
              <td>Maximum (Military Spec)</td>
              <td>Smooth Filament</td>
              <td>Heel & Toe High-Impact Zones</td>
            </tr>
            <tr>
              <td>
                <span class="fiber-badge">
                  <span style="width:10px;height:10px;border-radius:50%;background:#8b5cf6;display:inline-block;"></span>
                  <strong>Core-Spun Lycra Spandex (5%)</strong>
                </span>
              </td>
              <td>Graduated Elastic Recovery</td>
              <td>Neutral Transport</td>
              <td>Resilient (500% Elongation)</td>
              <td>Conformal Contour</td>
              <td>Arch Compression & Welt Retention</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <!-- SECTION 6: BIOMECHANICAL IMPACT & BLISTER DEFENSE -->
  <section class="section section-alt" id="biomechanics">
    <div class="container">
      <div class="bio-grid">
        <div>
          <div class="section-kicker section-kicker-coral">Biomechanical Defense</div>
          <h2>Eliminating the Triad of Blister Formation</h2>
          <p>In athletic podiatry, friction blisters arise from three interdependent variables: <strong>Heat</strong>, <strong>Moisture</strong>, and <strong>Shear Movement</strong>. QuarterHosiery directly decouples this equation.</p>
          <ul class="feature-list">
            <li class="feature-item">
              <div class="feature-check">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              </div>
              <div class="feature-text">
                <h4>Shear Deflection via Anatomical Y-Gore Heel</h4>
                <p>The deep cup geometry anchors the sock against the calcaneus bone, preventing micro-sliding when the foot accelerates forward inside running shoes.</p>
              </div>
            </li>
            <li class="feature-item">
              <div class="feature-check">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              </div>
              <div class="feature-text">
                <h4>Plantar Fascia Tension Relief</h4>
                <p>Gentle 15-20 mmHg circumferential compression gently lifts the longitudinal arch, lowering micro-tearing risks during continuous ground strike impact.</p>
              </div>
            </li>
            <li class="feature-item">
              <div class="feature-check">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              </div>
              <div class="feature-text">
                <h4>Microclimate Vapor Diffusion</h4>
                <p>Engineered dorsal ventilation channels exhaust up to 48 grams of sweat vapor per hour per foot, keeping skin keratin firm and resistant to friction shear.</p>
              </div>
            </li>
          </ul>
        </div>
        <div>
          <div style="border-radius:var(--radius-xl);overflow:hidden;box-shadow:var(--shadow-xl);">
            <img src="assets/images/endurance_athlete_stretch.jpg" alt="Athletic runner stretching calf and achilles in quarter socks" loading="lazy" width="580" height="460">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 7: LABORATORY TESTING & TELEMETRY -->
  <section class="section section-dark" id="testing">
    <div class="container">
      <div class="section-header">
        <div class="section-kicker" style="background:rgba(37,99,235,0.2);color:var(--color-cobalt-light);border-color:rgba(37,99,235,0.4);">Laboratory Verification</div>
        <h2 class="section-title">Stress-Tested Beyond Standard Industry Thresholds</h2>
        <p class="section-subtitle">Every batch produced at our partner mills undergoes mechanical wear, tensile pull, and colorfastness validation before distribution.</p>
      </div>
      <div class="telemetry-grid">
        <div class="telemetry-card">
          <div class="telemetry-metric">50,000+</div>
          <div class="telemetry-label">Martindale Rub Cycles</div>
          <div class="telemetry-desc">Tested against wool abradant discs. Surpasses commercial socks benchmark of 20,000 cycles with zero yarn ruptures.</div>
        </div>
        <div class="telemetry-card">
          <div class="telemetry-metric">98.4%</div>
          <div class="telemetry-label">Elastic Recovery Rate</div>
          <div class="telemetry-desc">Measured after 100 consecutive commercial laundry cycles. Ribbed ankle welt retains full tension without sagging.</div>
        </div>
        <div class="telemetry-card">
          <div class="telemetry-metric">4.8 / 5</div>
          <div class="telemetry-label">Colorfastness to Washing</div>
          <div class="telemetry-desc">Standard ISO 105-C06 dye integrity testing confirms zero color bleed onto footwear linings or lighter garments.</div>
        </div>
        <div class="telemetry-card">
          <div class="telemetry-metric">0.05 mm</div>
          <div class="telemetry-label">Toe Seam Profile</div>
          <div class="telemetry-desc">Hand-linked automated closure profile is undetectable by sensitive digital cutaneous touch sensors.</div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 8: ATHLETE & CUSTOMER FIELD REPORTS -->
  <section class="section" id="reviews">
    <div class="container">
      <div class="section-header">
        <div class="section-kicker">Field Verification</div>
        <h2 class="section-title">Endorsed by Marathoners, Hikers & Commuters</h2>
        <p class="section-subtitle">Real feedback from athletes and daily professionals putting QuarterHosiery to the test over thousands of cumulative miles.</p>
      </div>
      <div class="reviews-grid">
        <div class="review-card">
          <div>
            <div class="stars">★★★★★</div>
            <p class="review-quote">"I ran the Chicago Marathon wearing the Pace Runner Pro Quarter socks straight out of the box. Zero hot spots, zero slipping, and the ankle height kept the heel collar from gnawing at my skin. Truly exceptional engineering."</p>
          </div>
          <div class="reviewer-profile">
            <div class="reviewer-avatar">MR</div>
            <div class="reviewer-info">
              <h5>Marcus Rodriguez</h5>
              <span class="reviewer-role">Sub-3hr Marathon Runner, Boston</span>
            </div>
          </div>
        </div>

        <div class="review-card">
          <div>
            <div class="stars">★★★★★</div>
            <p class="review-quote">"As an emergency nurse walking 14,000 steps per 12-hour hospital shift, cheap socks leave my arches burning by 2 PM. QuarterHosiery provides real, tangible arch support that doesn't feel suffocating. I ordered 10 pairs."</p>
          </div>
          <div class="reviewer-profile">
            <div class="reviewer-avatar">SL</div>
            <div class="reviewer-info">
              <h5>Sarah Lindqvist</h5>
              <span class="reviewer-role">Trauma Care Registered Nurse, NY</span>
            </div>
          </div>
        </div>

        <div class="review-card">
          <div>
            <div class="stars">★★★★★</div>
            <p class="review-quote">"The Merino Ridge quarter socks survived a 4-day trek across the White Mountains without a single hint of odor or dampness. They dry fast overnight and the seamless toe prevents the classic downhill bruising."</p>
          </div>
          <div class="reviewer-profile">
            <div class="reviewer-avatar">DC</div>
            <div class="reviewer-info">
              <h5>David Chen</h5>
              <span class="reviewer-role">Backpacking Guide & Trail Photographer</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 9: SIZING & FIT MATRIX -->
  <section class="section section-alt" id="sizing">
    <div class="container">
      <div class="section-header">
        <div class="section-kicker">Precision Fit</div>
        <h2 class="section-title">Anatomical Sock Sizing Guide</h2>
        <p class="section-subtitle">Proper sock tension requires an exact foot length match. Use our calibration chart to select your optimal sock size.</p>
      </div>
      <div class="sizing-table-wrapper">
        <table class="sizing-table">
          <thead>
            <tr>
              <th>Quarter Size</th>
              <th>US Men Shoe Size</th>
              <th>US Women Shoe Size</th>
              <th>EU Shoe Size</th>
              <th>Foot Length (cm)</th>
              <th>Ankle Circumference</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><strong>Small (S)</strong></td>
              <td>4 – 6.5</td>
              <td>5.5 – 8.0</td>
              <td>35 – 38</td>
              <td>22.0 – 24.0 cm</td>
              <td>19 – 21 cm</td>
            </tr>
            <tr>
              <td><strong>Medium (M)</strong></td>
              <td>7.0 – 9.5</td>
              <td>8.5 – 11.0</td>
              <td>39 – 42</td>
              <td>24.5 – 26.5 cm</td>
              <td>21 – 24 cm</td>
            </tr>
            <tr>
              <td><strong>Large (L)</strong></td>
              <td>10.0 – 12.5</td>
              <td>11.5 – 14.0</td>
              <td>43 – 46</td>
              <td>27.0 – 29.0 cm</td>
              <td>24 – 27 cm</td>
            </tr>
            <tr>
              <td><strong>Extra Large (XL)</strong></td>
              <td>13.0 – 15.0+</td>
              <td>14.5+</td>
              <td>47 – 50</td>
              <td>29.5 – 32.0 cm</td>
              <td>27 – 30 cm</td>
            </tr>
          </tbody>
        </table>
      </div>
      <p style="text-align:center;font-size:0.9rem;color:var(--color-slate-500);margin-top:1.5rem;">If your shoe size falls between two ranges, we recommend sizing down for athletic performance and sizing up for relaxed lounge comfort.</p>
    </div>
  </section>

  <!-- SECTION 10: EDITORIAL HIGHLIGHTS / JOURNAL -->
  <section class="section" id="journal">
    <div class="container">
      <div class="section-header">
        <div class="section-kicker">Hosiery Science Journal</div>
        <h2 class="section-title">In-Depth Guides on Foot Health & Sock Engineering</h2>
        <p class="section-subtitle">Explore our technical publications examining fiber mechanics, blister prevention protocols, laundry longevity, and footwear styling.</p>
      </div>
      <div class="blog-grid">
        <div class="blog-card">
          <div class="blog-card-media">
            <img src="assets/images/blog_running_biomechanics.jpg" alt="Biomechanics of Quarter Socks in Endurance Running" loading="lazy">
          </div>
          <div class="blog-card-body">
            <div class="blog-meta">
              <span class="blog-category-tag">Biomechanics</span>
              <span>•</span>
              <span>10 Min Read</span>
            </div>
            <h3 class="blog-card-title"><a href="blog/the-biomechanics-of-quarter-height-socks-in-endurance-running.html">The Biomechanics of Quarter-Height Socks in Endurance Running</a></h3>
            <p class="blog-card-excerpt">A clinical examination of Achilles tendon shear, supramalleolar cuff dynamics, and how quarter-height collars eliminate friction during marathon mileage.</p>
            <a href="blog/the-biomechanics-of-quarter-height-socks-in-endurance-running.html" class="blog-card-link">Read Full Guide &rarr;</a>
          </div>
        </div>

        <div class="blog-card">
          <div class="blog-card-media">
            <img src="assets/images/textile_yarn_weave_macro.jpg" alt="Cotton vs Merino Wool Knitting Technologies" loading="lazy">
          </div>
          <div class="blog-card-body">
            <div class="blog-meta">
              <span class="blog-category-tag">Textile Science</span>
              <span>•</span>
              <span>9 Min Read</span>
            </div>
            <h3 class="blog-card-title"><a href="blog/cotton-vs-merino-wool-knitting-technologies-for-active-hosiery.html">Cotton vs. Merino Wool Knitting Technologies for Active Hosiery</a></h3>
            <p class="blog-card-excerpt">Analyzing moisture vapor sorption isotherms, fiber hollow structures, and thermal regulation across natural combed cotton and merino wool blends.</p>
            <a href="blog/cotton-vs-merino-wool-knitting-technologies-for-active-hosiery.html" class="blog-card-link">Read Full Guide &rarr;</a>
          </div>
        </div>

        <div class="blog-card">
          <div class="blog-card-media">
            <img src="assets/images/hand_linked_seamless_finishing.jpg" alt="Hand-Linked Seamless Toe Construction" loading="lazy">
          </div>
          <div class="blog-card-body">
            <div class="blog-meta">
              <span class="blog-category-tag">Manufacturing</span>
              <span>•</span>
              <span>8 Min Read</span>
            </div>
            <h3 class="blog-card-title"><a href="blog/hand-linked-seamless-toe-construction-eliminating-foot-friction.html">Hand-Linked Seamless Toe Construction: Eliminating Foot Friction</a></h3>
            <p class="blog-card-excerpt">How Italian Rosso linking machines loop individual yarn ends to create truly flat toe seams that eliminate blisters and black toenails in athletic footwear.</p>
            <a href="blog/hand-linked-seamless-toe-construction-eliminating-foot-friction.html" class="blog-card-link">Read Full Guide &rarr;</a>
          </div>
        </div>
      </div>
      <div style="text-align:center;margin-top:2.5rem;">
        <a href="blog.html" class="btn btn-secondary">View All 6 Research Publications &rarr;</a>
      </div>
    </div>
  </section>

  <!-- SECTION 11: FREQUENTLY ASKED QUESTIONS -->
  <section class="section section-alt" id="faq">
    <div class="container">
      <div class="section-header">
        <div class="section-kicker">Knowledge Base</div>
        <h2 class="section-title">Frequently Asked Questions</h2>
        <p class="section-subtitle">Everything you need to know about quarter sock fit, knitting gauges, care instructions, and footwear compatibility.</p>
      </div>
      <div class="faq-list">
        <div class="faq-item">
          <button class="faq-question">
            <span>What exactly is a "quarter-height" sock?</span>
            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-answer">
            <p>A quarter sock rises approximately 2.5 to 3 inches above the heel line, terminating just above the medial and lateral malleoli (ankle bones). This height is specifically designed to sit slightly above the padded collar of running sneakers and low-cut boots, preventing heel chafe while maintaining lightweight breathability.</p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-question">
            <span>Why does 200-needle density matter in sock knitting?</span>
            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-answer">
            <p>Most commercial athletic socks are knit using 96 to 144 needles on circular looms. A 200-needle machine packs significantly more micro-loops per square inch. This creates a denser, softer, more durable fabric that resists yarn snags, conforms closer to foot anatomy, and preserves compression through dozens of laundry cycles.</p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-question">
            <span>How do quarter socks prevent running blisters?</span>
            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-answer">
            <p>Blisters are caused by shear friction when moisture softens the skin. QuarterHosiery integrates three defenses: moisture-wicking core filaments that pump sweat away from the skin, a 360-degree plantar arch compression band that anchors the sock in place, and a padded rear Achilles tab that absorbs friction from the shoe's heel counter.</p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-question">
            <span>How should I wash and dry my QuarterHosiery socks?</span>
            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-answer">
            <p>Machine wash inside-out in cold or lukewarm water (max 30°C / 86°F) using gentle detergent. Avoid chlorine bleach and fabric softeners, as softeners coat technical fibers and destroy moisture-wicking capability. Tumble dry on low heat or hang dry in the shade to preserve elastic recovery.</p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-question">
            <span>Can quarter socks be worn with low-top sneakers and dress casual shoes?</span>
            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-answer">
            <p>Yes! Our Everyday Combed Luxe quarter socks are styled with a clean, low-profile ribbed cuff that looks sharp with classic canvas sneakers, retro trainers, and minimalist leather shoes. The cuff peeks cleanly above the collar without the casual bulk of athletic crew socks.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 12: SUSTAINABILITY & FINAL CTA -->
  <section class="section">
    <div class="container">
      <div class="cta-banner">
        <div class="section-kicker" style="background:rgba(255,255,255,0.15);color:#ffffff;border-color:rgba(255,255,255,0.3);">Closed-Loop Knitting Commitment</div>
        <h2>Experience the Elevation Difference in Every Stride</h2>
        <p>Subscribe to the QuarterHosiery Technical Dispatch for quarterly textile innovations, podiatric research briefs, and exclusive batch access.</p>
        <form class="cta-form">
          <input type="email" class="cta-input" required aria-label="Email address">
          <button type="submit" class="btn btn-primary">Join Dispatch</button>
        </form>
        <p style="font-size:0.8rem;color:var(--color-slate-400);margin-top:1.25rem;">Zero spam. Strict privacy protected under our published Privacy Policy.</p>
      </div>
    </div>
  </section>
</main>

<footer class="site-footer">
  <div class="container">
    <div class="footer-grid">
      <div class="footer-brand">
        <a href="index.php" class="site-logo">
          <div class="logo-symbol">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><path d="M9 15h6"/><path d="M9 11h6"/></svg>
          </div>
          <span>QuarterHosiery</span>
        </a>
        <p>QuarterHosiery engineers high-gauge quarter-height socks engineered with 200-needle density, targeted plantar arch compression, and hand-linked seamless toe construction. Precision comfort for daily movement and endurance performance.</p>
      </div>
      <div class="footer-col">
        <h4>Navigation</h4>
        <ul class="footer-links">
          <li><a href="index.php">Home</a></li>
          <li><a href="about.html">About QuarterHosiery</a></li>
          <li><a href="index.php#collections">Signature Collections</a></li>
          <li><a href="index.php#anatomy">Anatomical Architecture</a></li>
          <li><a href="index.php#sizing">Sizing Chart & Fit</a></li>
          <li><a href="blog.html">Hosiery Science Journal</a></li>
          <li><a href="contact.html">Contact Us</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>Legal & Policy</h4>
        <ul class="footer-links">
          <li><a href="privacy-policy.html">Privacy Policy</a></li>
          <li><a href="terms-and-conditions.html">Terms and Conditions</a></li>
          <li><a href="disclaimer.html">Product Disclaimer</a></li>
          <li><a href="cookie-policy.html">Cookie Policy</a></li>
          <li><a href="sitemap.xml">XML Sitemap</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>Contact & Atelier</h4>
        <div class="footer-contact-item">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink:0;margin-top:2px;color:var(--color-cobalt);"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
          <span>181 Mercer Street, New York, NY 10012, United States</span>
        </div>
        <div class="footer-contact-item">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink:0;margin-top:2px;color:var(--color-cobalt);"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
          <span>+1-888-777-5845</span>
        </div>
        <div class="footer-contact-item">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink:0;margin-top:2px;color:var(--color-cobalt);"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
          <span>concierge@quarterhosiery.com</span>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <p>&copy; 2026 QuarterHosiery. All rights reserved. Precision-engineered knitted socks.</p>
      <div class="footer-policy-inline">
        <a href="privacy-policy.html">Privacy</a>
        <a href="terms-and-conditions.html">Terms</a>
        <a href="disclaimer.html">Disclaimer</a>
        <a href="cookie-policy.html">Cookies</a>
      </div>
    </div>
  </div>
</footer>
<script src="assets/js/main.js"></script>

</body>
</html>
