<?php
    require_once("db_login.php");

    //povezava z bazo
    try {
        $db = new PDO($dsn, $db_user, $db_pass);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch (PDOException $e) {
        echo $e->getMessage();
    }
?>