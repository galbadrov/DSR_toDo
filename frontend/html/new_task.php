<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>New Task</title>
  <link rel="stylesheet" href="../css/new_task.css">
</head>

<body>
  <header>
    <p class="naslov">Duties await</p>
  </header>
  <form action="../../backend/create_task.php" method="POST">
    <div class="form_body">
      <label for="naslov" class="label label-top">Title</label>
      <input type="text" class="input" id="naslov" name="naslov"></input>

      <label for="tipTaska" class="label">Type</label>
      <?php
        include '../../backend/fetchTipTaska.php';
      ?>
      <?php
      echo "<fieldset class=\"input\">";
        foreach ($rows as $tip) {
          echo "<input type=\"radio\" id=\"tipTaska\" value=\"" . $tip["idTipTaska"] . "\" name=\"tipTaska\"/><label for=\"tipTaska\">" . $tip["tipTaska"] . "</label>";
        }
      echo "</fieldset >";
      ?>

      <!--<input type="text" class="input" id="tipTaska" name="tipTaska"></input>-->

      <label for="datumKonca" class="label">Deadline</label>
      <input type="text" id="datumKonca" class="input" name="datumKonca" placeholder="YYYY-MM-DD" pattern="\d{4}-\d{2}-\d{2}" inputmode="numeric">

      <label for="opis" class="label">Description</label>
      <input type="text" class="input input-opis" id="opis" name="opis"></input>



      <button type="submit" class="add_task_button">ADD TASK</button>
    </div>
  </form>
</body>

</html>