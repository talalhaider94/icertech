(function($){

    // intercept clicks on the FAQ menu and hide and reveal those FAQs using Javascript.
    $('#list--faq-filter a').click(function(e){
        e.preventDefault();

        var link = $(this);
        var ipid = link.data('ipid');

        if(ipid==0){
            $('.faq').slideDown();
        } else {
            $('.faq').slideUp();
            $('.faq[data-ipid='+ipid+']').slideDown();
        }
        $('#faq-heading').html(link.html()+' FAQs');
    });

}(jQuery));
