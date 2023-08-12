<?php


    echo "<h1>Home Page</h1>";
    include "config/config.php";

    $config = new Config();
    $res_connect = $config->connect();

    if($res_connect)
    {
        echo "Database connect successfuly";
    }
    else
    {
        echo "Database connection failed";
    }

?>