<?php 
include 'baza.php';

if (isset($_POST['name'], $_POST['surname'], $_POST['email'], $_POST['username_register'], $_POST['passwordregister'])) {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $username_register = $_POST['username_register'];
    $passwordregister = $_POST['passwordregister'];

    try {
        $sql = "INSERT INTO Uporabnik (ime, priimek, gmail, geslo, uporabniskoIme) VALUES (:name, :surname, :email, :password, :username)";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':surname', $surname);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':username', $username_register);
        $stmt->bindParam(':password', $passwordregister);
        $stmt->execute();

        header("Location: ../frontend/html/main.php");
        exit;
    } catch (PDOException $e) {
        echo "Napaka: " . $e->getMessage();
    }
} else {
    echo "Podatki niso popolni!";
}
?>