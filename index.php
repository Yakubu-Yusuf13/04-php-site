<?php
$pageTitle = 'Home';
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/header.php';
?>

<section class="hero">
    <div class="container hero-grid">
        <div class="hero-copy">
            <p class="eyebrow">A cleaner kind of clean</p>
            <h1>Come home to <span>fresh.</span></h1>
            <p class="lead">More time for your life. Less time worrying about the mess. Our friendly team brings thoughtful, reliable cleaning to the places you live and work.</p>
            <div class="hero-actions">
                <a class="button button-primary" href="services.php">Explore our services</a>
                <a class="text-link" href="contact.php">Ask us a question <span aria-hidden="true">&rarr;</span></a>
            </div>
            <div class="trust-note"><span class="trust-dot" aria-hidden="true"></span> Dependable people. Thoughtful details. Lovely results.</div>
        </div>
        <div class="hero-art" role="img" aria-label="Illustration of a bright, freshly cleaned living room">
            <div class="sun-disc"></div>
            <div class="art-window"><span></span><span></span><span></span><span></span></div>
            <div class="plant plant-one"><i></i><i></i><i></i><b></b></div>
            <div class="sofa"><div class="sofa-back"></div><div class="sofa-seat"></div><div class="sofa-arm"></div><div class="sofa-pillow"></div><div class="sofa-leg"></div></div>
            <div class="art-table"><span></span></div>
            <div class="sparkle sparkle-one">✦</div><div class="sparkle sparkle-two">✦</div>
            <div class="art-caption"><span class="caption-icon" aria-hidden="true">✦</span><span><strong>A little brighter</strong><small>One room at a time</small></span></div>
        </div>
    </div>
</section>

<section class="section section-soft">
    <div class="container">
        <div class="section-heading">
            <p class="eyebrow">A good feeling, built in</p>
            <h2>Clean spaces. Clear minds.</h2>
            <p>We make it easy to enjoy the space you’re in, with care that feels personal and a finish you can see.</p>
        </div>
        <div class="feature-grid">
            <article class="feature-card"><span class="feature-icon icon-sun" aria-hidden="true">☼</span><h3>Made for your routine</h3><p>Choose a one-off refresh or a regular visit that fits your week and your space.</p></article>
            <article class="feature-card"><span class="feature-icon icon-leaf" aria-hidden="true">✳</span><h3>Care in the details</h3><p>From the high-touch spots to the last cushion, we take pride in the little things.</p></article>
            <article class="feature-card"><span class="feature-icon icon-heart" aria-hidden="true">♡</span><h3>People you can trust</h3><p>Friendly, respectful cleaners who treat your home or workplace with care.</p></article>
        </div>
    </div>
</section>

<section class="section">
    <div class="container cta-banner">
        <div><p class="eyebrow">Ready when you are</p><h2>Let’s make room for fresh.</h2><p>Tell us what you need and we’ll help you find the right clean.</p></div>
        <a class="button button-light" href="contact.php">Get in touch <span aria-hidden="true">&rarr;</span></a>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
