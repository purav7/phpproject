<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $imageDescription = $_POST['image-description'];
    $price = $_POST['price'];

    $servername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $database = "project";

    $conn = mysqli_connect($servername, $dbUsername, $dbPassword, $database);

    if (!$conn) {
        die("Sorry, connection not found!" . mysqli_connect_error());
    }

    $uploadDir = 'uploads/';
    $uploadFile = $uploadDir . basename($_FILES['image']['name']);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadFile)) {
        $insertSql = "INSERT INTO `trade` (`name`, `image`, `image-description`, `price`) VALUES (?, ?, ?, ?)";
        $stmt = mysqli_prepare($conn, $insertSql);
        mysqli_stmt_bind_param($stmt, "ssss", $name, $uploadFile, $imageDescription, $price);
        $insertResult = mysqli_stmt_execute($stmt);

        if ($insertResult) {
            echo "Registration successful!";
            header("Location: index7.php");
            exit();
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        echo "Image upload failed.";
    }

    mysqli_close($conn);
}
?>


