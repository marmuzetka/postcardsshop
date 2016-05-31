<?php
    include_once("db.php");
    
    function registerUser () {
        $RESULT = false;
        $FNAME = $_POST['fname']; // add validation 
        $LNAME = $_POST['lname']; // add validation ;
        $EMAIL = $_POST['email']; // add validation ;
        $PASSWORD = $_POST['password']; // add validation ;
        $QUERY = "INSERT INTO 'customer' (fname, lname, password, email)".
                  "VALUES ('$FNAME', '$LNAME', '$PASSWORD', '$EMAIL')";
        $CON = connectToDB(); 
        
        return ($CON) 
              ? query($QUERY)
              : $RESULT;
    }
    
    function loginUser () {
        $EMAIL = $_POST['email']; // add validation ;
        $PASSWORD = $_POST['password']; // add validation ;
        $QUERY = "SELECT * FROM `customer`".
                 "WHERE email='$EMAIL' AND password='$PASSWORD'";
                 
        $CON = connectToDB(); 
        
        $RESULT = ($CON) ? query($QUERY) : $RESULT;
        $RESULT = ($RESULT) ? mysql_fetch_assoc ($RESULT) : $RESULT;
       
        return addToSession($RESULT); 
    }
    
    function updateUser () {
        
    }
    
    function logoutUser () {
        unset($_SESSION);
        session_destroy();
    }
    
    function addToSession ($RESULT) {
        if (isset($RESULT['fname']) && isset($RESULT['lname'])) {
            $_SESSION['fname'] = $RESULT['fname'];
            $_SESSION['lname'] = $RESULT['lname'];
            return TRUE;
        } else {
            return FALSE;
        }
    }
    
    function isUserLogged () {
        $FNAME = (isset($_SESSION['fname'])) ? $_SESSION['fname'] : NULL;
        $LNAME = (isset($_SESSION['lname'])) ? $_SESSION['lname'] : NULL;
        
        if (isset($FNAME) && isset($LNAME)) {
            return TRUE;
        } else {
            return FALSE;
        } 
    }
?>