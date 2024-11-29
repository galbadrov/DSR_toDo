<?php
require 'baza.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $username_register = $_POST['username_register'];
    $passwordregister = SHA1($_POST['passwordregister']); // varno shranjevanje hashiranega gesla

    try {
        $sql = "INSERT INTO Uporabnik (ime, priimek, gmail, geslo, uporabniskoIme) VALUES (:name, :surname, :email, :password, :username)";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':surname', $surname);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':username', $username_register);
        $stmt->bindParam(':password', $passwordregister);
        $stmt->execute();

        header("Location: http://localhost:8888/frontend/html/index.php");
    } catch (PDOException $e) {
        echo "Napaka: " . $e->getMessage();
    }
} else {
    echo "Podatki niso popolni!";
}
