<?php
    include_once ("/functions/basket.php");
    function render_basket_status() {
        $BASKET = getBasket();
        echo ("<div class='basket-status'>
                    In basket - $BASKET
               </div>");
    }
    
    function render_error() {
        $BASKET = 0;
        echo ("<div class='error'>
                    Please Login
               </div>");
    }
?> 