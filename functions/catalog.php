<?php
    include_once("db.php");
    
    function getPostCards () {
        $QUERY = "SELECT * FROM `postcards`";
        
        $CON = connectToDB(); 
        
        return ($CON) 
              ? query($QUERY)
              : $RESULT;
    }
?>