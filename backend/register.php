<?php
require 'baza.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if(preg_match('/[\w\.]@[\w-]\.[\w]/', $_POST['email'])){
        if(preg_match('/[\w]/', $_POST['username_register'])){
            if(preg_match('/.{10,}/', $_POST['passwordregister'])){
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
                include './posiljMaila.php';
            }else{
                header("Location: http://localhost:8888/frontend/html/index.php?sporocilo=". urlencode("Entered password is not valid! Password must be at least 10 characters long."));
            }
        }else{
            header("Location: http://localhost:8888/frontend/html/index.php?sporocilo=". urlencode("Entered username is not valid! Username can only contain letters, numbers and underscores."));
        }
    }else{
        header("Location: http://localhost:8888/frontend/html/index.php?sporocilo=". urlencode("Entered email is not valid! Email must be structured as: [name]@[domain]"));
    }
} else {
    echo "Invalid request method";
}

?>