<article class="article container">
	<header class="article-header">
		<p class="eyebrow">Hikâyemizden</p>
		<h1><?php echo htmlspecialchars($page->title(), ENT_QUOTES, 'UTF-8'); ?></h1>
		<?php if ($page->description()) : ?>
			<p class="article-description"><?php echo htmlspecialchars($page->description(), ENT_QUOTES, 'UTF-8'); ?></p>
		<?php endif; ?>
		<?php if ($page->coverImage()) : ?>
			<img class="article-cover" src="<?php echo htmlspecialchars($page->coverImage(), ENT_QUOTES, 'UTF-8'); ?>" alt="<?php echo htmlspecialchars($page->title(), ENT_QUOTES, 'UTF-8'); ?>" fetchpriority="high">
		<?php endif; ?>
	</header>
	<?php Theme::plugins('pageBegin'); ?>
	<div class="article-content">
		<?php echo $page->content(); ?>
	</div>
	<?php Theme::plugins('pageEnd'); ?>
</article>
