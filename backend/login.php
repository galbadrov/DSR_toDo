<?php
    include 'baza.php';

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];

        try{
        $sql = "SELECT * FROM Uporabnik WHERE uporabniskoIme = :username AND geslo = :password";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        }catch (PDOException $e) {
            echo "Napaka: " . $e->getMessage();
        }
        
        
        if($row) {
            $idUporabnika = $row['idUporabnik'];
            session_start();
            $_SESSION['idUporabnika'] = $idUporabnika;  
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            header("Location: http://localhost:8888/frontend/html/main.php");
            exit; 
        }else {
            header("Location: http://localhost:8888/frontend/html/index.php?sporocilo=". urlencode("Napacno uporabnisko ime ali geslo"));
            exit;
        }
    }
?>