			<footer class="footer">
				© Le Firmament Pneumatique - firmament.pneumatique@gmail.com
			</footer>

		</main>
		
		<div id="svg-store"><!-- inject:svg --><!-- endinject --></div>

		<!--[if lte IE 9]>
		<? get_view('ie10'); ?>
		<![endif]-->
		
		<? wp_footer() ?>
		
		<script src="<?= get_stylesheet_directory_uri() ?>/assets/js/jquery.min.js"></script>
		<script src="<?= get_stylesheet_directory_uri() ?>/assets/js/lodash.min.js"></script>
		<script src="<?= get_stylesheet_directory_uri() ?>/app.js<%= killCache %>"></script>
	</body>
</html>