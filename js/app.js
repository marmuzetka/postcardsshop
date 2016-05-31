(function name($, app) {
    var $document = $(document);
    
    function initEvents (){
        $document.find('.add-to-card').on('click', function name() {
            var $this = $(this),
                productId = $this.parents('.post-card-product').data('product-id');
            
            if (!!productId) {
                $.ajax({
                    method: "GET",
                    url: "basket.php?ajax=1&productId=" + productId,
                })
                .done(function name(result) {
                    var $result = $(result);
                    if (!$result.hasClass('error')) {
                        $document.find('.basket').html(result);
                    } else {
                        alert ($result.html());
                    }
                });
            }
        })
        
    }
    initEvents();
})(jQuery, window.app = window.app || {});