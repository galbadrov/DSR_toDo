<?php include '../../backend/baza.php'; ?>
<?php  
    if(isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM Uporabnik WHERE uporabniskoIme = '$username' AND geslo = '$password'";
        $result = $db->query($sql);

        if($result->rowCount() > 0) {
            session_start();
            $_SESSION['username'] = $username;
            print_r("Prijava uspesna. Pozdravljeni $username!");
        }else {
            echo("Napacno uporabnisko ime ali geslo!"); 
        }
    }
?>