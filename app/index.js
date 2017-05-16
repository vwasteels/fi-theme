window.$ = jQuery;

require('./menu');


// exclude IE 10
if ( navigator.userAgent.indexOf('MSIE 10.0') !== -1 ) {
	location.href = '/ie10';
}