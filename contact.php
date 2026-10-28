<?php
declare(strict_types=1);

$pageTitle = 'Contact';
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/functions.php';
require_once __DIR__ . '/includes/header.php';
?>

<section class="page-hero">
    <div class="container page-hero-inner">
        <p class="eyebrow">We’d love to hear from you</p>
        <h1>Tell us what <span>you need.</span></h1>
        <p class="lead">Have a question or want to talk through a cleaning plan? Send us an email and our friendly team will be in touch.</p>
    </div>
</section>
<section class="section section-soft">
    <div class="container contact-grid">
        <div class="contact-card">
            <span class="contact-icon" aria-hidden="true">✉</span>
            <p class="eyebrow">Email us</p>
            <h2>Let’s start with a hello.</h2>
            <p>Tell us a little about your space, what kind of cleaning you’re looking for, and a good time to reach you.</p>
            <a class="button button-primary" href="mailto:<?= e($contactEmail) ?>">Email Prime Cleaners</a>
            <a class="contact-email" href="mailto:<?= e($contactEmail) ?>"><?= e($contactEmail) ?></a>
        </div>
        <aside class="contact-aside">
            <p class="eyebrow">A good visit starts here</p>
            <h2>What would you like cleaned?</h2>
            <p>When you get in touch, it helps to share:</p>
            <ul class="contact-checklist"><li>The type of space</li><li>How often you’d like a clean</li><li>Any details or priorities to keep in mind</li></ul>
            <div class="contact-note"><span aria-hidden="true">✦</span><p>No pressure, no fuss—just a friendly conversation about what would work for you.</p></div>
        </aside>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
