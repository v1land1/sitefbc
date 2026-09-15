<?php

require_once __DIR__ . '/includes/bootstrap.php';
require_once __DIR__ . '/includes/idioma.php';
require_once __DIR__ . '/includes/geo.php';

$translations = loadTranslations($app['default_language'], SITE_ROOT);
$detectedCountry = detectCountry($polos);

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/menu.php';
?>
<main>
	<section class="hero" aria-labelledby="hero-title">
		<p class="eyebrow"><?= e(t('global_portal', $translations)) ?></p>
		<h1 id="hero-title"><?= e(t('welcome', $translations)) ?></h1>
		<p>Conhecimento que atravessa fronteiras, com polos preparados para acompanhar sua jornada.</p>
	</section>

	<?php require __DIR__ . '/includes/country-confirmation.php'; ?>
	<?php require __DIR__ . '/includes/country-selector.php'; ?>
	<?php require __DIR__ . '/includes/world-map.php'; ?>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
