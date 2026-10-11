<footer class="site-footer">
	<div class="container footer-inner">
		<div>
			<p class="footer-title"><?php echo htmlspecialchars($site->title(), ENT_QUOTES, 'UTF-8'); ?></p>
			<?php if ($site->description()) : ?>
				<p><?php echo htmlspecialchars($site->description(), ENT_QUOTES, 'UTF-8'); ?></p>
			<?php endif; ?>
		</div>
		<a class="back-to-top" href="#main-content">Başa dön <span aria-hidden="true">↑</span></a>
	</div>
	<div class="container footer-bottom">
		<p>&copy; <?php echo date('Y'); ?> <?php echo htmlspecialchars($site->title(), ENT_QUOTES, 'UTF-8'); ?></p>
	</div>
</footer>
