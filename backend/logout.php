<?php
// Preverite, ali je seja inicializirana 
if (session_id() == '' || !isset($_SESSION)) { 
    session_start(); } 
// Uničite sejo 
session_destroy(); 

// Preprečite prikaz napak preden pošiljate glave 
ini_set('display_errors', 0); 
error_reporting(0); 

// Preusmeritev na stran 
header("Location: http://localhost:8888/frontend/html/index.php"); 
exit();
?>