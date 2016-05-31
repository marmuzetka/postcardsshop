<?php
    session_start();
    include_once ("/functions/login.php");
    if (isset($_POST['register'])) {
        $EXTRA = 'catalog.php';
        (registerUser()) 
            ? header("Location: $EXTRA")
            : render_login();
        exit();
    } elseif (isset($_POST['login'])) {
        $EXTRA = 'catalog.php';
        (loginUser()) 
            ? header("Location: $EXTRA")
            : render_login();
        exit();
    } elseif (isset($_POST['logout'])) {
        include_once ("./functions/basket.php");
        $EXTRA = 'index.php';
        deleteBasket();
        logoutUser();
        header("Location: $EXTRA");
        exit();
    } else {
       render_login();
    }
    
    function render_login() {
        include_once ("/includes/header.php");
        include_once ("/pages/login.php");
        include_once ("/includes/footer.php");   
    }
?>