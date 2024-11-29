<?php

include 'baza.php';
$sql = "SELECT * from TipTaska";

$result = $db->query($sql);
$tip = $result->fetchall(PDO::FETCH_ASSOC);

?>