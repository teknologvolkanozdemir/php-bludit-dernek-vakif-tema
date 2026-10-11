<section class="hero">
	<div class="container hero-inner">
		<p class="eyebrow">Birlikte daha güçlüyüz</p>
		<h1><?php echo htmlspecialchars($site->slogan() ?: 'İyilik için bir aradayız', ENT_QUOTES, 'UTF-8'); ?></h1>
		<?php if ($site->description()) : ?>
			<p class="hero-description"><?php echo htmlspecialchars($site->description(), ENT_QUOTES, 'UTF-8'); ?></p>
		<?php endif; ?>
		<a class="button button-light" href="#calismalar">Çalışmalarımızı keşfedin <span aria-hidden="true">↓</span></a>
		<div class="hero-decoration" aria-hidden="true">♡</div>
	</div>
</section>

<section class="content-section container" id="calismalar" aria-labelledby="work-heading">
	<div class="section-heading">
		<p class="eyebrow">Dayanışma ve umut</p>
		<h2 id="work-heading">Çalışmalarımız</h2>
	</div>

	<?php if (empty($content)) : ?>
		<p class="empty-message">Henüz yayımlanmış bir içerik bulunmuyor.</p>
	<?php else : ?>
		<div class="content-grid">
			<?php foreach ($content as $item) : ?>
				<article class="content-card">
					<div class="card-accent" aria-hidden="true"></div>
					<div class="card-body">
						<h3>
							<a href="<?php echo htmlspecialchars($item->permalink(), ENT_QUOTES, 'UTF-8'); ?>">
								<?php echo htmlspecialchars($item->title(), ENT_QUOTES, 'UTF-8'); ?>
							</a>
						</h3>
						<?php if ($item->description()) : ?>
							<p><?php echo htmlspecialchars($item->description(), ENT_QUOTES, 'UTF-8'); ?></p>
						<?php else : ?>
							<div class="card-excerpt"><?php echo $item->contentBreak(); ?></div>
						<?php endif; ?>
						<a class="text-link" href="<?php echo htmlspecialchars($item->permalink(), ENT_QUOTES, 'UTF-8'); ?>">
							Devamını okuyun <span aria-hidden="true">→</span>
							<span class="visually-hidden">: <?php echo htmlspecialchars($item->title(), ENT_QUOTES, 'UTF-8'); ?></span>
						</a>
					</div>
				</article>
			<?php endforeach; ?>
		</div>
	<?php endif; ?>
</section>

<?php if (Paginator::numberOfPages() > 1) : ?>
	<nav class="pagination container" aria-label="Sayfalar arasında gezinme">
		<?php if (Paginator::showPrev()) : ?>
			<a href="<?php echo htmlspecialchars(Paginator::previousPageUrl(), ENT_QUOTES, 'UTF-8'); ?>" rel="prev">← Önceki</a>
		<?php endif; ?>
		<span aria-current="page"><?php echo (int) Paginator::currentPage(); ?> / <?php echo (int) Paginator::numberOfPages(); ?></span>
		<?php if (Paginator::showNext()) : ?>
			<a href="<?php echo htmlspecialchars(Paginator::nextPageUrl(), ENT_QUOTES, 'UTF-8'); ?>" rel="next">Sonraki →</a>
		<?php endif; ?>
	</nav>
<?php endif; ?>
