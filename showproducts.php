<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zafar Perfume - Show Data</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="scripts.js"></script>
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
                <a class="nav-link" href="adminform.php">Admin Login</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Admin Panel -->
    <div class="container mt-5">
        <div class="btn-group my-3 d-flex justify-content-center " role="group">
            <a class="btn btn-primary" href="insertproducts.php">Insert Item</a>
            <a class="btn btn-primary" href="showproducts.php">Show Products</a>
        </div>
    </div>
    <div class="container" align="center">
        <div class="hero">
            <h2 class="text-center mb-4 ">All Listed Products</h2>
            <hr class="h-50 w-50 bg-warning">
            <div class="table-container table-responsive">
                <table class="table table-condensed">
                    <caption class="table-caption">All Products</caption>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>CNIC</th>
                            <th>Name</th>
                            <th>Cell Phone</th>
                            <th>Disease</th>
                            <th>Day</th>
                            <th>Time</th>
                            <th>Priority</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include "connection.php";
                        $sql = "SELECT * FROM your_table_name"; // Replace your_table_name with the actual table name
                        $result = mysqli_query($conn, $sql);
                        while ($rows = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo "<td>" . $rows["ID"] . "</td>";
                            echo "<td>" . $rows['cnic'] . "</td>";
                            echo "<td>" . $rows['name'] . "</td>";
                            echo "<td>" . $rows['cell_phone'] . "</td>";
                            echo "<td>" . $rows['disease'] . "</td>";
                            echo "<td>" . $rows['day'] . "</td>";
                            echo "<td>" . $rows['time'] . "</td>";
                            echo "<td>" . $rows['priority'] . "</td>";
                            echo "<td><a class='btn btn-success btn-success-new' href='updateproducts.php?id=" . $rows['ID'] . "'>Update</a></td>";
                            echo "<td><a class='btn btn-danger btn-danger-new' href='deleteproducts.php?id=" . $rows['ID'] . "'>Delete</a></td>";
                            echo "</tr>";
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
