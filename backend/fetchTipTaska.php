<?php

include 'baza.php';
$sql = "SELECT * from TipTaska";

$result = $db->query($sql);
$rows = $result->fetchall(PDO::FETCH_ASSOC);

?>