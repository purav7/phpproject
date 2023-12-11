<?php
session_start();

if (!isset($_SESSION['userData'])) {
    header("Location: index3.php");
    exit();
}

$userData = $_SESSION['userData'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Employee Data</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
<?php include('header.php'); ?>

    <main class="main">
        <form action="index5.php" method="post">
            <fieldset id="head">
                <legend style="font-size: 2rem; text-align:center;"><strong>View Employee Data</strong></legend>
                <div class="name">
                    <label for="name">Enter Your Name:</label><br>
                    <input type="text" id="name" name="name" required><br><br>
                </div>
                <div class="button">
                    <input type="submit" value="Submit" class="button">
                </div>
            </fieldset>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $enteredName = $_POST['name'];

            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "project";

            $conn = mysqli_connect($servername, $username, $password, $database);

            if (!$conn) {
                die("Sorry, connection not found!" . mysqli_connect_error());
            } else {
                $sql = "SELECT `name`, `email` FROM `registration` WHERE `name` = '$enteredName'";
                $result = mysqli_query($conn, $sql);

                if ($result && mysqli_num_rows($result) > 0) {
                    $userData = mysqli_fetch_assoc($result);
                    echo "<h2>User Data</h2>";
                    echo "<h3>Welcome, {$userData['name']}!</h3>";
                    echo "<p>Email: {$userData['email']}</p>";
                } else {
                    echo "No data found for the entered name.";
                }
            }
        }
        ?>
    </main>
    <?php include('footer.php'); ?>

</body>

</html>
