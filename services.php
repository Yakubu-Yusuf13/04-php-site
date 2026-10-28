<?php
declare(strict_types=1);

$pageTitle = 'Services';
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/functions.php';
require_once __DIR__ . '/includes/data.php';
require_once __DIR__ . '/includes/header.php';
?>

<section class="page-hero">
    <div class="container page-hero-inner">
        <p class="eyebrow">What we can do</p>
        <h1>The right clean for <span>your space.</span></h1>
        <p class="lead">From regular upkeep to a once-in-a-while reset, we’ll help make your home or workplace feel its best.</p>
    </div>
</section>
<section class="section section-soft">
    <div class="container service-grid">
        <?php foreach ($services as $service): ?>
            <?= renderServiceCard($service) ?>
        <?php endforeach; ?>
    </div>
</section>
<section class="section">
    <div class="container note-panel"><div class="note-icon" aria-hidden="true">✳</div><div><h2>A clean that works for you.</h2><p>Every space is different. Get in touch and tell us what you have in mind—we’ll talk through the options together.</p></div><a class="button button-primary" href="contact.php">Talk to our team</a></div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
