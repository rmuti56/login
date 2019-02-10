<?php


function DB()
{
    try {
        $link = @mysqli_connect("localhost","root","1234","login");
        return $link;
    } catch (mysqli_sql_exception $e) {
        return $e;
        exit;
    }
}

?>