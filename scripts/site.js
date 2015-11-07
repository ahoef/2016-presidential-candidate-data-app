$(function() {
	
    $('.add-quote button').on('click', function() {
    	$('#new-quote-form').show();
    });

    $('.drawer-toggle').on('click', function() {
    	$(this).toggleClass('rotate');

    	var $quotes = $(this).prev().children();

    	$quotes.each(function(){
    		if($(this).hasClass('drawer')) {
    			$(this).toggleClass('hidden');
    		}
    	});
    });

});