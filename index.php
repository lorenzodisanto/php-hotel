<?php require "./main.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
        crossorigin="anonymous">
</head>

<body> 
    <div class="container">
        <h1 class="text-center mb-4" >Hotel</h1>
        <table class="table">
            <thead>
                <tr class="table-secondary">
                <th scope="col">Nome Hotel</th>
                <th scope="col">Descrizione</th>
                <th scope="col">Parcheggio</th>
                <th scope="col">Voto</th>
                <th scope="col">Distanza dal centro</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($hotels as $hotel): ?>
                <tr>
                    <td><?= $hotel["name"]?></td>
                    <td><?= $hotel["description"]?></td>
                    <td><?= $hotel["parking"]?></td>
                    <td><?= $hotel["vote"]?></td>
                    <td><?= $hotel["distance_to_center"]?> km</td>
                </tr>
                <?php endforeach?>
            </tbody>
        </table>
    </div>
</body>
</html>