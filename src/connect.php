<?php

    try {
        $connection = new PDO('mysql:host=mysql;dbname=shop;charset=utf8', 'root', 'root');
    } catch (Throwable $th) {
        echo "Error: connect db error.";
    }

?>