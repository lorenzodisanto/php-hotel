<?php require_once __DIR__ . "/config/init.php"; ?>

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
        
        <!-- FORM -->
        <form  method="GET">            
          <!-- filtro parcheggio -->
          <div class="form-check form-switch mb-3">
            <input class="form-check-input" type="checkbox" role="switch" id="filter-parking" name="filter-parking"
            <?= $filter_parking ? "checked" : "" ?>
            >
            <label class="form-check-label" for="filter-parking">Con Parcheggio</label>
          </div>       
          <!-- filtro distanza -->
          <div class="form-check form-switch mb-3">
              <input class="form-check-input" type="checkbox" role="switch" id="filter-distance" name="filter-distance"
               <?= $filter_distance ? "checked" : "" ?>
              >
              <label class="form-check-label" for="filter-distanza">Distanza inferiore a 10km</label>
          </div>
          <!-- filtro voto -->
          <div class="input-group flex-nowrap mb-3">
              <span class="input-group-text" id="addon-wrapping">Voto</span>
              <input type="number" class="form-control" id="filter-vote" name="filter-vote" min="1" max="5" >
          </div>     
          <!-- pulsante filtra -->
          <div class="mb-3">
              <button type="submit" class="btn btn-primary mb-3">Filtra</button>
          </div>
        </form>

         <!-- Tabella hotel -->
        <table class="table table-hover">
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