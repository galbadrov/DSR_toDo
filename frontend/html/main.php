<?php
session_start();
include '../../backend/fetchTasks.php';
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
            <p class="naslov">TaskNest</p> 
            <form action="../../backend/logout.php" method="POST" class="logoutButton-form">
                <p class="naziv"><?php echo "Welcome ". $username ?></p>
                <button class="logoutButton">LOG OUT</button>
            </form>
        </header>
    </header>

    <!--DODAJANJE NOVEGA TASKA UPORABNIKU-->
    <div class="add_task">
        <form action="new_task.php" method="POST">
            <button type="submit" class="add_task_button" action="new_task.php">ADD TASK</button>
        </form>
    </div>

    <div class="body_task">

        <!--IZPIS VSEH TASKOV DOLOCENEGA UPORABNIKA-->
        <?php
        foreach ($rows as $row) {
            echo "
            <div class='task'>
                <div class=\"task_inner\">
                    <div class=\"podatki\">
                        <div class=\"task_naslov\">"
                            .  $row['naslov'] .
                        "</div>
                        <div class=\"tip\">"
                        . $row['tipTaska'] .
                        "</div>
                        <div class=\"opis\">"
                        . $row['opis'] .
                        "</div>
                    </div>
                <div class=\"datumi\">
                    <div class=\"datum_zacetek\">
                        <p class=\"datum_z_txt\">Last interaction: </p>"
                        . $row['datumVpisa'] .
                    "</div>
                    <div class=\"datum_konec\">
                        <p class=\"datum_k_txt\">Complete until:  </p>"
                        . $row['datumKonca'] .
                    "</div>
                    <div class=\"task_gumbi\">
                        <form class=\"form_delete\" action=\"../../backend/delete.php\" method=\"POST\">
                            <button class=\"delete_t\" name=\"task_id\" value=\"" . $row['idTask'] . "\">COMPLETED</button>
                        </form>
                    </div>
                </div>
                </div>
            </div>";
        } 
        ?>
    </div>
</body>
</html>