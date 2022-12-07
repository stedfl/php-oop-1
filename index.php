<?php
include __DIR__  . '/db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <title>Movies</title>
</head>

<body>
  <header>
    <div class="container w-100 h-100 d-flex justify-content-center align-items-center">
      <img src="img/logo-boolflix.png" alt="logo-boolflix">
    </div>
  </header>
  <main class="py-5">
    <div class="container">
      <div class="row row-cols-lg-2 row-cols-xl-3">
        <?php foreach($movies as $movie) : ?>
        <div class="col mb-4 px-5">
          <div class="card">
            <div class="poster">
              <img src="<?php echo $movie->poster ?>" alt="poster">
            </div>
            <div class="general text-center px-4">
              <h2><?php echo $movie->title ?></h2>
              <h3><?php echo $movie->original_title ?></h3>
              <p>"<?php echo $movie->description ?>"</p>
            </div>
            <div class="info px-4">
              <ul>
                <li>Cast: <?php echo $movie->crew->get_cast_list() ?>  </li>
                <li>Regista: <?php echo $movie->crew->director ?> </li>
                <li>Produttore: <?php echo $movie->crew->production ?? 'Non disponibile' ?></li>
                <li>Casa di Distribuzione: <?php echo $movie->crew->distribution ?? 'Non disponibile' ?></li>
              </ul>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </main>
  
</body>
</html>