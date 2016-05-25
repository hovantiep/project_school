( function( $ ) {
$( document ).ready(function() {
$('#h-menu').prepend('<div id="menu-button">Menu</div>');
	$('#h-menu #menu-button').on('click', function(){
		var menu = $(this).next('ul');
		if (menu.hasClass('open')) {
			menu.removeClass('open');
		}
		else {
			menu.addClass('open');
		}
	});
});
} )( jQuery );
