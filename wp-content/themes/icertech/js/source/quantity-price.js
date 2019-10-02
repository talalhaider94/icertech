;(function($){

    // when a variation is selected for display, change the dropdown to show price information
    $( ".single_variation_wrap" ).on( "show_variation", function ( event, variation ){

        console.log(variation);

        // set default values if non are specified
        if(!variation.min_qty) variation.min_qty = 1;
        if(!variation.max_qty) variation.max_qty = 20;
        if(!variation.step) variation.step = 1;

        var options = '';
        for(var q=parseInt(variation.min_qty); q<=parseInt(variation.max_qty); q+=parseInt(variation.step)){
            options += '<option value="' + q + '">' + q + ' at £' + variation.display_price.toFixed(2) + ' each (£' + (parseInt(q)*variation.display_price).toFixed(2) + ')</option>';
        }

        $('.quantity_select select').html(options);
    });

    // when a variation is cleared, remove any price information from the dropdown
    $( ".single_variation_wrap" ).on( "hide_variation", function(){
        $('.quantity_select select option').each(function(){
            var q = $(this).attr('value');
            $(this).text(q);
        });
    });


})(jQuery);
