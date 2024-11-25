<?php
    include 'baza.php';

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_POST['task_id'];

        try{
            $sql= " DELETE FROM Task WHERE idTask = $id";
            $stmt = $db->prepare($sql);
            $stmt->execute();
            header("Location: http://localhost:8888/frontend/html/main.php");
        }catch (PDOException $e) {
            echo "Napaka: " . $e->getMessage();
        }
    }
?>