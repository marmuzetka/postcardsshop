<?php
    include_once ("/functions/login.php");
    function render_customer () {
        //session_start();
        $LOG_OUT = "";
        if (isUserLogged()) {
            $FULL_NAME = 'Hello '.$_SESSION['fname'].' '.$_SESSION['lname'];
            $LOG_OUT = "<div class='customer-logout'>
                            <form action='login.php' method='post'>
                                <input type='submit' name='logout' value='Logout'><br>
                            </form>
                        </div>";
        } else {
            $FULL_NAME = 'Hello anonymous';
            $LOG_OUT = "<div class='customer-login'>
                            <a href='login.php'>Login</a>
                        </div>";
        }
              
        echo ("
            <div class='customer-name'>
                <b>$FULL_NAME</b> 
            </div>
            $LOG_OUT
            <div class='clear'></div>
        ");
    } 
    
    render_customer();
?>