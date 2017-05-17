<?
global $post;
the_post();
get_header();
?>
<div class="standard">
	<a class="standard-back" href="<?= home_url() ?>">&larr; Retour à l'accueil</a>
	<h1 class="standard-title"><? the_title() ?></h1>
	<div class="standard-body">
		<div class="standard-main">
			<div class="standard-content"><? the_content(); ?></div>
		</div>
	</div>
</div>
<?
get_footer();
?>