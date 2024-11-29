<?php
include '../../backend/baza.php';
$idUporabnika = $_SESSION['idUporabnika'];
$username = $_SESSION['username'];
$sql = "SELECT * FROM Task 
INNER JOIN TipTaska 
ON Task.TipTaska_idTipTaska = TipTaska.idTipTaska
WHERE Task.Uporabnik_idUporabnik = $idUporabnika";

$result = $db->query($sql);
$rows = $result->fetchall(PDO::FETCH_ASSOC);

?>