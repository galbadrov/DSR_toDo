<?php include '../../backend/baza.php'; ?>
<?php  
    if(isset($_POST['name']) && isset($_POST['surname'])&& isset($_POST['email']) && isset($_POST['username_register']) && isset($_POST['passwordregister'])) {
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $email = $_POST['email'];
        $username_register = $_POST['username_register'];
        $passwordregister = $_POST['passwordregister'];

        $sql = "INSERT INTO Uporabnik (ime, priimek, gmail, geslo, uporabniskoIme) VALUES ('$name', '$surname', '$email', '$passwordregister', '$username_register')";
        echo("registracija uspesna!");
    }else{
        echo("Podatki niso popolni!");
    }
?>