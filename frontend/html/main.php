<?php 
    session_start();
    include '../../backend/baza.php';
    $idUporabnika = $_SESSION['idUporabnika'];
    $sql = "SELECT * FROM task WHERE $idUporabnika = Uporabnik_idUporabnik" ; 
    $result = $db->query($sql);
    $row = $result->fetch(PDO::FETCH_ASSOC);
    echo "Id prijavljenega uporabnika: ".$idUporabnika;
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
        <div class="title">TaskNest</div>
    </header>
    <div class="body_task">
        <div class="task">
            <div class="task_naslov"></div>
            <div class="datum_zacetek"></div>
            <div class="datum_konec"></div>
            <div class="tip"></div>
            <div class="nujnost"></div>
            <div class="opis"></div>
        </div>
        <div class="task">Task 2</div>
        <div class="task">Task 3</div>
        <div class="add_task">
            <a href="new_task.html" class="new_t_link"><div class="new_t">NEW TASK</div></a>
        </div>
    </div>
</body>
</html>