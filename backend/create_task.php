<?php
include 'baza.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //pridobivanje podatkov
    $naslov = $_POST['naslov'];
    $datumKonca = $_POST['datumKonca'];
    $opis = $_POST['opis'];
    $tipTaska = $_POST['tipTaska'];
    $user = $_SESSION['idUporabnika'];


    $sql = "INSERT INTO Task (naslov, datumKonca, opis, TipTaska_idTipTaska, Uporabnik_idUporabnika) VALUES 
        (:naslov, :datumKonca, :opis, :tipTaska, :user)";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':naslov', $naslov);
    $stmt->bindParam(':datumKonca', $datumKonca);
    $stmt->bindParam(':opis', $opis);
    $stmt->bindParam(':tipTaska', $tipTaska);
    $stmt->bindParam(':user', $user);
    $stmt->execute();
} else {
    header('Location: ../html/new_task.php');
}