<?php
    session_start();
    if (isset($_GET['ajax']) && isset($_GET['productId'])){
        include_once ("./functions/basket.php");
        include_once ("./includes/basket.php");
        (addToBasket($_GET['productId']))  
                ? render_basket_status()
                : render_error();
    } else {
        render_basket_page();
    }
    
    function render_basket_page () {
        include_once ("/includes/header.php");
        include_once ("/pages/basket.php");
        include_once ("/includes/footer.php");        
    }

?>