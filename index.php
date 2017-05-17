<?
get_header('compiled');
?>
<div class="standard">
	<a class="standard-back" href="<?= home_url() ?>">&larr; Retour à l'accueil</a>
	<h1 class="standard-title">Tous nos articles</h1>
	<div class="standard-body">
		<div class="standard-main">
			<?
			$posts = get_posts([
				'post_type' => 'post',
				'posts_per_page' => -1,
				// 'paged' => get_query_var('paged') ? get_query_var('paged') : 1,
				]);
			$style = 'dark';
			foreach($posts as $item) {
				global $item, $style;
				get_view('preview');
			}
			?>
		</div>
		<? get_view('sidebar') ?>
	</div>
</div>
<?
get_footer('compiled');
?>