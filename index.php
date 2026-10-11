<!doctype html>
<html lang="<?php echo htmlspecialchars(Theme::lang(), ENT_QUOTES, 'UTF-8'); ?>">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="theme-color" content="#174d3b">
	<?php echo Theme::metaTagTitle(); ?>
	<?php echo Theme::metaTagDescription(); ?>
	<?php echo Theme::favicon('img/favicon.png'); ?>
	<?php echo Theme::css('css/style.css'); ?>
	<?php Theme::plugins('siteHead'); ?>
</head>
<body>
	<a class="skip-link" href="#main-content">Ana içeriğe geç</a>
	<?php Theme::plugins('siteBodyBegin'); ?>
	<header class="site-header">
		<div class="container header-inner">
			<a class="site-brand" href="<?php echo Theme::siteUrl(); ?>">
				<span class="brand-mark" aria-hidden="true">✳</span>
				<span><?php echo htmlspecialchars($site->title(), ENT_QUOTES, 'UTF-8'); ?></span>
			</a>
			<?php include THEME_DIR_PHP . 'navigation.php'; ?>
		</div>
	</header>

	<main id="main-content" tabindex="-1">
		<?php
		if ($WHERE_AM_I === 'page') {
			include THEME_DIR_PHP . 'page.php';
		} else {
			include THEME_DIR_PHP . 'home.php';
		}
		?>
	</main>

	<?php include THEME_DIR_PHP . 'footer.php'; ?>
	<?php Theme::plugins('siteBodyEnd'); ?>
</body>
</html>
