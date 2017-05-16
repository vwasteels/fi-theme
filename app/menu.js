var $menuMobile = $('.menuMobile');
var $toggle = $('.header-menuToggle');

$toggle.on('click', function() {
	$menuMobile.toggleClass('is-visible');
	$toggle.toggleClass('is-active');
});