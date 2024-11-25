<?php 
    include 'baza.php';
    $sql = "SELECT Task FROM Uporabnik" ; 
    $result = $db->query($sql);
    $row = $result->fetch(PDO::FETCH_ASSOC);
    return $row;
?>