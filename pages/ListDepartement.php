<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <?php
    require_once('../db.php');
    include_once('../includes/nav.php');
    //Request
    $sqlState = $pdo->query('SELECT * FROM departement');
    //Get Value
    $departements = $sqlState->fetchAll(PDO::FETCH_OBJ);
    ?>
    <div class="container">
            <h1 class="text-center fw-semibold p-5">LISTES DES DEPARTEMENTS</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#ID</th>
                    <th scope="col">NOM DEPARTEMENT</th>
                    <th scope="col">ACTIONS</th>
                </tr>
            </thead>
            <tbody>

                <?php 
                    foreach ($departements as $d){
                ?>
                    <tr>
                        <td><?= $d->id_departement//$e['CNE']; ?></td>
                        <td><?= $d->nom_departement//$e['nom_etudiant'] ; ?></td>
                        <td>
                            <form action="post">
                                <input class="btn btn-success" type="submit" value="Modifier" name="modifier">
                                <input class="btn btn-danger" type="submit" value="Supprimer" name="supprimer">
                            </form>
                        </td>
                    </tr>
                    <?php } ?>
            </tbody>
        </table>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>