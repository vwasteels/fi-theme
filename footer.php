			<footer class="footer">
				<div class="footer-inner">
					<div class="footer-column">
						<h3 class="footer-column-title">Contact</h3>
						<div class="footer-column-description">
							<?= apply_filters('the_content', get_field('footer_column_1', 'option')) ?>
						</div>
					</div>
					<div class="footer-column">
						<h3 class="footer-column-title">Liens externes</h3>
						<div class="footer-column-description">
							<?= apply_filters('the_content', get_field('footer_column_2', 'option')) ?>
						</div>
					</div>
					<div class="footer-column">
						<div class="footer-column-description">
							<?= apply_filters('the_content', get_field('footer_column_3', 'option')) ?>
						</div>
					</div>
				</div>
			</footer>

		</main>

		<!--[if lte IE 9]>
		<? get_view('ie10'); ?>
		<![endif]-->
		
		<? wp_footer() ?>
	</body>
</html>