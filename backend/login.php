<?php
    include 'baza.php';

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM Uporabnik WHERE uporabniskoIme = :username AND geslo = :password";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);
        $stmt->execute();

        if($stmt->rowCount() > 0) {
            session_start();
            $_SESSION['username'] = $username;
            header("Location: http://localhost:8888/frontend/html/main.php");
            exit; 
        }else {
            header("Location: http://localhost:8888/frontend/html/index.php");
            exit;
        }
    }
?>