<?php include_once('./includes/navigation.php'); ?>
<?php
    include_once ("./functions/login.php");
      
    function render_main() {
        $LINKS_BUY = "Buy Cards";
        $LINKS_LOGIN = "Sign Up";
        $BLOCK_SIZE = (!isUserLogged()) ? "double-block" : "single-block";
        $SING_UP_BLOCK = (!isUserLogged()) 
                                     ? "<div class='sing-up double-block'>
                                            <div class='link-wrapper link-wrapper-login'>
                                                <a class='btn' href='/login.php'>$LINKS_LOGIN</a>
                                            </div>
                                        </div>"
                                     : "";     
        
        echo ("<div id='main-content'>
                <div class='buy-cards $BLOCK_SIZE'>
                    <div class='link-wrapper link-wrapper-ctg'>
                        <a class='btn' href='/catalog.php'>$LINKS_BUY</a>
                    </div>
                </div>
                $SING_UP_BLOCK
                <div class='clear'></div>
            </div>");
    }
    
    render_main();
?>