<?php
$base_url = '/test/Formation/mini_formation_php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gybBYn0E5eKeL5UczZZlzgJoa6A4k3ScK3zKAPFQ7SkTTwqxZl" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-7Tbwtpeb+O8aQ6U+LfjiWOr0Njp5o8nF8sqI8Tuc8mK5YpeIbuV0sd3+Q6N5CW5I" crossorigin="anonymous"></script>
    <title>Mini Annuaire ENS</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo $base_url; ?>">Mini Annuaire ENS</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?php echo $base_url; ?>">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Actions
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="<?php echo $base_url; ?>/pages/InsertEtudiant.php">Insertion Etudiants</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="<?php echo $base_url; ?>/pages/InsertDepartement.php">Insertion Departements</a></li>
                <li><a class="dropdown-item" href="<?php echo $base_url; ?>/pages/InsertFiliere.php">Insertion Filieres</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Listes
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="<?php echo $base_url; ?>/pages/ListEtudiant.php">Liste des Etudiants</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="<?php echo $base_url; ?>/pages/ListDepartement.php">Liste des Departements</a></li>
                <li><a class="dropdown-item" href="<?php echo $base_url; ?>/pages/ListFiliere.php">Liste des Filieres</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" aria-disabled="true">Disabled</a>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
</body>
</html>
