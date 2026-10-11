<nav class="primary-navigation" aria-label="Ana menü">
	<ul>
		<li>
			<a href="<?php echo Theme::siteUrl(); ?>"<?php echo ($WHERE_AM_I === 'home') ? ' aria-current="page"' : ''; ?>>Ana sayfa</a>
		</li>
		<?php foreach ($staticContent as $staticPage) : ?>
			<li>
				<a href="<?php echo htmlspecialchars($staticPage->permalink(), ENT_QUOTES, 'UTF-8'); ?>"<?php echo (isset($page) && $page && $page->key() === $staticPage->key()) ? ' aria-current="page"' : ''; ?>>
					<?php echo htmlspecialchars($staticPage->title(), ENT_QUOTES, 'UTF-8'); ?>
				</a>
			</li>
		<?php endforeach; ?>
	</ul>
</nav>
