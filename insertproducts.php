<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zafar Perfume - Insert Products</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Zafar Perfume</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Admin LogOut</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Admin Panel -->
    <div class="container mt-2">
        <div class="btn-group mt-2 d-flex justify-content-center " role="group">
            <a class="btn btn-primary" href="insertproducts.php">Insert Item</a>
            <a class="btn btn-primary" href="showproducts.php">Show Products</a>
        </div>
    </div>

    <div id="insertItem" class="container">
        <h3 class="text-center">Insert Item</h3>
        <hr class="h-50 w-50 bg-warning">
        <!-- Implement the form submission logic with PHP and a database -->
        <form action="insertproductdata.php" method="POST" enctype="multipart/form-data">
            <div class="mb-2">
                <label for="cnic" class="form-label">CNIC:</label>
                <input type="text" class="form-control" name="cnic" required>
            </div>

            <div class="mb-2">
                <label for="name" class="form-label">Name:</label>
                <input type="text" class="form-control" name="name" required>
            </div>

            <div class="mb-2">
                <label for="cell_phone" class="form-label">Cell Phone:</label>
                <input type="text" class="form-control" name="cell_phone" required>
            </div>

            <div class="mb-2">
                <label for="disease" class="form-label">Disease:</label>
                <input type="text" class="form-control" name="disease" required>
            </div>

            <div class="mb-2">
                <label for="day" class="form-label">Day:</label>
                <input type="text" class="form-control" name="day" required>
            </div>

            <div class="mb-2">
                <label for="time" class="form-label">Time:</label>
                <input type="text" class="form-control" name="time" required>
            </div>

            <div class="mb-2">
                <label for="priority" class="form-label">Priority:</label>
                <input type="text" class="form-control" name="priority" required>
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Insert</button>
        </form>
    </div>
</body>

</html>
