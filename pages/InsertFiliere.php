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
    ?>
    <div class="container">

        <form action="" method="post">
            <h1 class="text-center fw-semibold p-5">INSERT FILIERE</h1>

            <div class="mb-3">
                <label for="departementName" class="form-label">Nom Departement</label>
                <input type="text" class="form-control" id="departementName" aria-describedby="departmentHelp">
                <div id="departmentHelp" class="form-text">Make sure the department name isn't used already done.</div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>

        </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>