<?php
// Just test a basic redirection
header("Location: http://localhost:8888/frontend/html/main.php");
exit;
?>
<?php 
    include 'baza.php';
    $sql = "SELECT * FROM Uporabnik" ; 
    $result = $db->query($sql);
    $row = $result->fetch(PDO::FETCH_ASSOC);
    #echo($row['ime'] . " " . $row['priimek']);
?>