<!DOCTYPE html>
<html lang="en">
<head>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <link rel="stylesheet" href="styles.css">

    

</head>
<body>
    <center>
    <h2>Add Product</h2>
</center>

    <?php
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get form data
        $id = $_POST[" "];
        $name = $_POST["name"];

        // Validate form data (you can add more validation)
        if (empty($id) || empty($name)) {
            echo "Please fill out all fields.";
        } else {
            // Database connection
            $servername = "mysqli";
            $username = "root";
            $password = " ";
            $dbname = "fake";

            $conn = new mysqli($mysqli, $root, $password, $fake);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Insert data into the database
            $sql = "INSERT INTO product (id, name) VALUES ('id', '$name')";

            if ($conn->query($sql) === TRUE) {
                echo "Product added successfully!";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            // Close the database connection
            $conn->close();
        }
    }
    ?>

    <!-- Product form -->
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="name">Product Id:</label>
        <input type="text" name="number" required><br>

        <label for="name">Product Name:</label>
        <input type="name" name="name" required><br>

        <input type="submit" value="Add Product">
    </form>
</body>
</html>
