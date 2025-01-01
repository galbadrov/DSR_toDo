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
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> <!-- za animacije -->
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
    <div data-aos="zoom-in-up" data-aos-duration="700" data-aos-offset="50">
        <div class="add_task">
            <form action="new_task.php" method="POST">
                <button type="submit" class="add_task_button" action="new_task.php">ADD TASK</button>
            </form>
        </div>
    </div>
    <div class="body_task">

        <!--IZPIS VSEH TASKOV DOLOCENEGA UPORABNIKA-->
        <?php
        foreach ($rows as $row) {
            echo "
        <div class='task' data-aos=\"fade-right\" data-aos-delay=\"400\">
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
    <footer>
        <div class="container_footer">
            <hr class="footer_hr">
            <p class="footer_text1">TASK NEST</p>
            <hr class="footer_hr">
        </div>
        <div class="footer_text">&copy; 2024 TaskNest. All rights reserved.</div>
        <div class="footer_text">- Gal Badrov -</div>
    </footer>

    <script>
    AOS.init({
        duration: 1000, // Trajanje animacije v milisekundah
        easing: 'ease-in-out', // Učinek animacije
        once: true // Animacija se sproži le ob prvem skrolanju
    });
</script>
</body>
</html>