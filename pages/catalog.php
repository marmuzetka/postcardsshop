<?php include_once('./includes/navigation.php'); ?>
<?php
    include_once ("/functions/catalog.php");
    
    function render_catalog() {
        $POST_CARDS = getPostCards();
        $RESULT = "<div class='post-cards'>";
        
        while ($POST_CARD = mysql_fetch_object($POST_CARDS)) {
            $RESULT .= "<div class='post-card-product'>
                            <div class='post-card-hero-image'>
                                <img src=./$POST_CARD->image_path alt='product image' width='120' height='120'>
                            </div>
                            <div class='product-price'>
                                <b>Price - $POST_CARD->price</b>
                            </div>
                        </div>";
        }
        
        $RESULT .= "<div class='clear'></div></div>";
        echo $RESULT;   
            
    }
    
    render_catalog();
?>