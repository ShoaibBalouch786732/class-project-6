<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zafar Perfume - Detail Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="scripts.js"></script>
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Zafar Perfume</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Go Back to Explore Fragrance</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Product Details -->
    <div class="container mt-5 d-flex justify-content-center flex-column">
        <h3 class="text-center">PRODUCT DETAIL</h3>
        <hr class="bg-warning text-warning w-50 h-100">

        <?php
        include "connection.php";

        // Assuming $ID is set from the URL parameter
        if (isset($_GET['id'])) {
            $ID = $_GET['id'];

            // Fetch details for the specific product with the given ID
            $sql = "SELECT * FROM products WHERE id = $ID";
            $result = mysqli_query($conn, $sql);

            // Check if a valid result is obtained
            if ($result && mysqli_num_rows($result) > 0) {
                $rows = mysqli_fetch_assoc($result);

                echo "<div class='col-12'>";
                echo "<div class='product-details d-flex justify-content-around mx-auto'>";

                // Display product image
                $img = $rows['my_file'];
                echo "<img src='$img' class='product-image' alt='Product Image' style='height: 300px; border-radius: 20px'>";

                // Display product details
                echo "<div class='product-info my-5'>";
                echo "<h6 class='product-title'>CNIC: " . $rows["cnic"] . "</h6>";
                echo "<p class='product-text'>Name: " . $rows['name'] . "</p>";
                echo "<p class='product-text'>Cell Phone: " . $rows['cell_phone'] . "</p>";
                echo "<p class='product-text'>Disease: " . $rows['disease'] . "</p>";
                echo "<p class='product-text'>Day: " . $rows['day'] . "</p>";
                echo "<p class='product-text'>Time: " . $rows['time'] . "</p>";
                echo "<p class='product-text'>Priority: " . $rows['priority'] . "</p>";

                echo "</div>"; // Close product-info
                echo "</div>"; // Close product-details
                echo "</div>"; // Close col-md-4
            } else {
                echo "<p>No product found with the specified ID.</p>";
            }
        } else {
            echo "<p>No product ID specified.</p>";
        }
        ?>
    </div>

    <!-- Footer -->
    <footer class="bg-light py-3 mt-5">
        <div class="container text-center">
            <p>All rights reserved by Zafar Perfume &copy;2023</p>
        </div>
    </footer>

</body>

</html>
