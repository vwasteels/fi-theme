<?
global $post;
the_post();
get_header('compiled');
?>
<div class="standard">
	<a class="standard-back" href="<?= get_post_type_archive_link('post') ?>">&larr; Tous les articles</a>
	<h1 class="standard-title"><? the_title() ?></h1>
	<div class="standard-body">
		<div class="standard-main">
			<div class="standard-meta">Publié le <?= date_i18n('j F Y') ?></div>
			<div class="standard-content"><? the_content(); ?></div>
		</div>
		<!-- <? get_view('sidebar') ?> -->
	</div>
</div>
<?
get_footer('compiled');
?>