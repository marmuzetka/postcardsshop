<?php
    $link = false;
    function connectToDB () {
        global $link;
        if ($link) {
            return $link;
        }
        $link = mysql_connect('localhost', 'root', '');
        if (!$link) {
            die('Ошибка соединения: ' . mysql_error());
        } else {
            mysql_select_db('postcards', $link);
        }
        return $link;
    }
    
    function closeConnection () {
        global $g_link;
        if( $g_link != false )
            mysql_close($g_link);
        $g_link = false;
    }
    
    function query ($QUERY) {
        return mysql_query ($QUERY);
    }
?>