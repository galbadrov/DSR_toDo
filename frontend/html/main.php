<?php
session_start();
include '../../backend/baza.php';
$idUporabnika = $_SESSION['idUporabnika'];
$sql = "SELECT * FROM task WHERE $idUporabnika = Uporabnik_idUporabnik";
$result = $db->query($sql);
$rows = $result->fetchall(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>To Do</title>
    <link rel="stylesheet" href="../css/main.css">
</head>

<body>
    <header class="header">
        <header>
            <p class="naslov">TaskNest</p> <button class="logoutButton">Log out</button>
        </header>
    </header>
    <div class="body_task">
        <!--DODAJANJE NOVEGA TASKA UPORABNIKU-->
        <div class="add_task">
            <a href="new_task.html" class="new_t_link">
                <div class="new_t">NEW TASK</div>
            </a>
        </div>

        <!--IZPIS VSEH TASKOV DOLOCENEGA UPORABNIKA-->
        <?php
        foreach ($rows as $row) {
            echo "
            <div class='task'>
                <div class=\"task_naslov\">"
                .  $row['naslov'] .
                "</div>
                <div class=\"datum_zacetek\">"
                . $row['datumVpisa'] .
                "</div>
                <div class=\"datum_konec\">"
                . $row['datumKonca'] .
                "</div>
                <div class=\"tip\">"
                . $row['naslov'] .
                "</div>
                <div class=\"opis\">"
                . $row['opis'] .
                "</div>
            </div>";
        } ?>
    </div>
</body>

</html>