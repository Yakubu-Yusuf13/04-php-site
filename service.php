<?php
declare(strict_types=1);

require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/functions.php';
require_once __DIR__ . '/includes/data.php';

$slug = $_GET['slug'] ?? '';
$service = null;

if (is_string($slug)) {
    foreach ($services as $item) {
        if ($item['slug'] === $slug) {
            $service = $item;
            break;
        }
    }
}

if ($service === null) {
    http_response_code(404);
    $pageTitle = 'Service not found';
} else {
    $pageTitle = $service['title'];
}

require_once __DIR__ . '/includes/header.php';
?>

<?php if ($service === null): ?>
    <section class="page-hero">
        <div class="container page-hero-inner">
            <p class="eyebrow">That page is taking a breather</p>
            <h1>We couldn’t find <span>that service.</span></h1>
            <p class="lead">The service may have moved or the link may be incorrect. Browse our available services to find the right clean for you.</p>
            <a class="button button-primary detail-back" href="services.php">Browse our services</a>
        </div>
    </section>
<?php else: ?>
    <section class="page-hero">
        <div class="container page-hero-inner">
            <p class="eyebrow">A little more about the service</p>
            <h1><?= e($service['title']) ?> for <span>your space.</span></h1>
            <p class="lead"><?= e($service['description']) ?></p>
        </div>
    </section>
    <section class="section section-soft">
        <div class="container service-detail">
            <div class="service-detail-icon" aria-hidden="true"><?= e($service['icon']) ?></div>
            <div>
                <p class="eyebrow">A thoughtful clean, made for you</p>
                <h2><?= e($service['title']) ?></h2>
                <p><?= e($service['description']) ?> We’ll work with you to understand your priorities and help make the visit fit your space.</p>
                <p class="detail-price">Starting from <strong><?= e(formatPrice($service['price'])) ?></strong></p>
                <div class="hero-actions">
                    <a class="button button-primary" href="contact.php">Ask about this service</a>
                    <a class="text-link" href="services.php">Back to services <span aria-hidden="true">&rarr;</span></a>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
