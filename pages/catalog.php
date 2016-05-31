<?php include_once('./includes/navigation.php'); ?>
<?php
    include_once ("/functions/catalog.php");
    
    function render_catalog() {
        $POST_CARDS = getPostCards();
        $RESULT = "<div class='post-cards'>";
        
        while ($POST_CARD = mysql_fetch_object($POST_CARDS)) {
            $RESULT .= "<div class='post-card-product' data-product-id=$POST_CARD->id>
                            <div class='post-card-hero-image'>
                                <img src=./$POST_CARD->image_path alt='product image' width='120' height='120'>
                            </div>
                            <div class='product-price'>
                                <b>Price - $POST_CARD->price</b>
                                <button class='add-to-card'type='button'>Add To Bag</button>
                            </div>
                        </div>";
        }
        
        $RESULT .= "<div class='clear'></div></div>";
        echo $RESULT;   
            
    }
    
    render_catalog();
?>