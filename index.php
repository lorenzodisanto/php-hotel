<?php require "./main.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel</title>
</head>
<body> 
    <h1>Hotel</h1>
       <!-- stampa lista hotel -->
    <ul>
    <?php foreach($hotels as $hotel): ?>
      <li>
        <?= $hotel["name"]?><br>
        <?= $hotel["description"]?><br>
        <?= $hotel["parking"]?><br>
        <?= $hotel["vote"]?><br>
        <?= $hotel["distance_to_center"]?><hr>
      </li>
      <?php endforeach?>
    </ul>
</body>
</html>