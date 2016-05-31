<div id='nav-bar'>
    <?php include_once('/customer.php'); ?>
    <div class='basket'>
        <?php
            include_once('./includes/basket.php');
            
            render_basket_status();
        ?>
    </div>
</div>
