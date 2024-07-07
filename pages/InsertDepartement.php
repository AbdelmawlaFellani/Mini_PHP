<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Insert Department</title>
</head>

<body>
    <?php
    require_once('../db.php');
    include_once('../includes/nav.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $departmentName = trim($_POST['departmentName']);

        if (!empty($departmentName)) {
            // Prepare SQL and bind parameters
            $sql = "INSERT INTO departement (nom_departement) VALUES (:nom_departement)";
            $stmt = $pdo->prepare($sql);

            if ($stmt->execute(['nom_departement' => $departmentName])) {
                echo '<div class="alert alert-success" role="alert">Department added successfully!</div>';
            } else {
                echo '<div class="alert alert-danger" role="alert">Error inserting department.</div>';
            }
        } else {
            echo '<div class="alert alert-danger" role="alert">Please enter a department name.</div>';
        }
    }
    ?>

    <div class="container">
        <form action="" method="post">
            <h1 class="text-center fw-semibold p-5">INSERT DEPARTMENT</h1>

            <div class="mb-3">
                <label for="departmentName" class="form-label">Department Name</label>
                <input type="text" name="departmentName" class="form-control" id="departmentName" aria-describedby="departmentHelp">
                <div id="departmentHelp" class="form-text">Make sure the department name isn't already used.</div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
