<?php

function db_connect() {
    $database = "inian";
    $connect = mysql_connect('localhost', 'root', 'bitnami');
    if (!$connect) {
        die(mysql_error());
    }
    $db_connect = mysql_select_db($database, $connect);
    if (!$db_connect) {
        die(mysql_error());
    }
}

?>
