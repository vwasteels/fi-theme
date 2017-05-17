<?
get_header('compiled');
?>
<div class="accueil">

	<div class="accueil-candidats">
		
		<?
		if(get_field('candidats_banner')):
			?>
			<div class="accueil-candidats-banner" style="background-image:url(<?= get_field('candidats_banner')['url'] ?>);"></div>
			<?
		endif;
		?>

		<div class="accueil-candidats-inner">
			<div class="accueil-candidats-list">
				<div class="accueil-candidats-item">
					<h2 class="accueil-candidats-item-name"><?= get_field('candidat1_name') ?></h2>
					<h3 class="accueil-candidats-item-title"><?= get_field('candidat1_title') ?></h3>
					<div class="accueil-candidats-item-description"><?= get_field('candidat1_description') ?></div>
				</div>
				<div class="accueil-candidats-item">
					<h2 class="accueil-candidats-item-name"><?= get_field('candidat2_name') ?></h2>
					<h3 class="accueil-candidats-item-title"><?= get_field('candidat2_title') ?></h3>
					<div class="accueil-candidats-item-description"><?= get_field('candidat2_description') ?></div>
				</div>
			</div>

			<?
			if(get_field('candidats_page')):
				?>
				<a class="accueil-candidats-cta" href="<?= get_field('candidats_page') ?>">Découvrez nos candidats</a>
				<?
			endif;
			?>
		</div>
	</div>

	<div class="accueil-merci">
		<img class="accueil-merci-visual" src="<?= get_stylesheet_directory_uri() ?>/assets/images/jlm.jpg">
		<div class="accueil-merci-description"><?= get_field('merci') ?></div>
	</div>

	<div class="accueil-programme">
		<h2 class="accueil-programme-title">La France Insoumise</h2>
		<div class="accueil-programme-inner">
			<div class="accueil-programme-description"><?= get_field('programme_description') ?></div>
			<div class="accueil-programme-list">
				<div class="accueil-programme-item">
					<a class="accueil-programme-item-cta" href="https://laec.fr/" target="_blank">Le programme en ligne</a>
				</div>
				<div class="accueil-programme-item">
					<a class="accueil-programme-item-cta" href="https://avenirencommun.fr/livrets-thematiques/" target="_blank">Les livrets thématiques</a>
				</div>
			</div>
			<div class="accueil-programme-network">
				<div class="accueil-programme-network-title">Sur les réseaux</div>
				<div class="accueil-programme-network-list">
					<a class="accueil-programme-network-item" href="https://www.youtube.com/channel/UCKHKSD-yanY2ZwwU_4Tgf0w/featured" target="_blank">
						<img src="<?= get_stylesheet_directory_uri() ?>/assets/images/yt_logo.svg">
					</a>
					<a class="accueil-programme-network-item" href="https://www.facebook.com/lafranceinsoumise/" target="_blank">
						<img src="<?= get_stylesheet_directory_uri() ?>/assets/images/fb_logo.svg">
					</a>
					<a class="accueil-programme-network-item" href="https://twitter.com/FranceInsoumise" target="_blank">
						<img src="<?= get_stylesheet_directory_uri() ?>/assets/images/tw_logo.svg">
					</a>
				</div>
			</div>
		</div>
	</div>

	<div class="accueil-actus">
		<div class="accueil-actus-inner">
			<h2 class="accueil-actus-title">Actualités</h2>
			<div class="accueil-actus-list">
				<iframe class="accueil-actus-facebook" src="https://www.facebook.com/plugins/page.php?href=<?= get_field('fb_page', 'option') ?>&tabs=timeline&width=500&height=500&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=false&appId=194878077586805" width="500" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
				<div class="accueil-actus-news">
					<?
					$posts = get_posts([
						'post_type' => 'post',
						'posts_per_page' => 3
						]);
					$style = 'light';
					foreach($posts as $item):
						global $item, $style;
						get_view('preview');
					endforeach;
					?>
					<a class="accueil-actus-news-cta" href="<?= get_post_type_archive_link('post') ?>">Tous les articles</a>
				</div>
			</div>
		</div>
	</div>

	<? get_view('follow') ?>

</div>
<?
get_footer('compiled');
?>