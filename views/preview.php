<?
global $item, $style;
$visual = wp_get_attachment_image_src( get_post_thumbnail_id($item->ID), 'thumbnail' )[0];
?>
<a class="preview style-<?= $style ?>" href="<?= get_permalink($item->ID) ?>">
	<?
	if($visual):
		?>
		<img class="preview-visual" src="<?= $visual ?>">
		<?
	endif;
	?>
	<div class="preview-main">
		<h3 class="preview-title"><?= $item->post_title ?></h3>
		<div class="preview-description">
			<?= tokenTruncate($item->post_content, 200) ?> 
			<span class="preview-more">Lire la suite</span> &rarr;
		</div>
	</div>
</a>