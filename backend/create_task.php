<?php
include 'baza.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //pridobivanje podatkov
    $naslov = $_POST['naslov'];
    $datumKonca = $_POST['datumKonca'];
    $opis = $_POST['opis'];
    $tipTaska = $_POST['tipTaska'];
    $user = $_SESSION['idUporabnika'];


    $sql = "INSERT INTO Task (naslov, datumKonca, opis, TipTaska_idTipTaska, Uporabnik_idUporabnik) VALUES 
        (:naslov, :datumKonca, :opis, :tipTaska, :user)";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':naslov', $naslov);
    $stmt->bindParam(':datumKonca', $datumKonca);
    $stmt->bindParam(':opis', $opis);
    $stmt->bindParam(':tipTaska', $tipTaska);
    $stmt->bindParam(':user', $user);
    $stmt->execute();
    header('Location: ../frontend/html/main.php');
} else {
    header('Location: ../html/new_task.php');
}