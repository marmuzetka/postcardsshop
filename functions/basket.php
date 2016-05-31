<?php
     include_once("db.php");
     
     function addToBasket ($PRODUCT_ID) {
        $RESULT = FALSE;
        $CUSTOMER_ID = $_SESSION['id'];
        if (isset($CUSTOMER_ID)) {
            $QUERY = "INSERT INTO `basket` (product_id, customer_id, qty)".
                    "VALUES ('$PRODUCT_ID', '$CUSTOMER_ID', 1)";   
                        
            $CON = connectToDB(); 
            
            return ($CON) 
                ? query($QUERY)
                : $RESULT;
        } else {
            return false;
        }        
     }
     
     function getBasket () {
        $RESULT = FALSE;
        $CUSTOMER_ID = $_SESSION['id'];
        $QUERY = "SELECT * FROM `basket` WHERE customer_id=$CUSTOMER_ID";
        
        if (isset($CUSTOMER_ID)) {
            $CON = connectToDB(); 
        
            return ($CON) 
                ? mysql_num_rows(query($QUERY))
                : $RESULT;    
        } else {
            return 0;
        }
               
     } 
     
     function deleteBasket () {
        $RESULT = FALSE;
        $CUSTOMER_ID = $_SESSION['id'];
        $QUERY = "DELETE FROM `basket` WHERE customer_id=$CUSTOMER_ID";
        //echo $QUERY;
        if (isset($CUSTOMER_ID)) {
            $CON = connectToDB(); 
            //echo query($QUERY);
            return ($CON) 
                ? query($QUERY)
                : $RESULT;    
        } else {
            return 0;
        }
     }
?>