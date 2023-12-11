<!--Purav Sidhu 200555445 PHP assignment 1 -->
<!-- creating main page for the assingment to collect data -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Employee Data</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
<?php include('header.php'); ?>

    <main class="main">
        <form action="index3.php" method="post">
            <fieldset id="head">
                <legend style="font-size: 2rem; text-align:center;"><strong>Login</strong></legend>
                <div class="name">
                    <label for="name">Username:</label><br>
                    <input type="text" id="nmae" name="name" required><br><br>
                </div>
                <div class="pas">
                    <label for="pas">Password:</label><br>
                    <input type="password" id="pas" name="pas" required><br><br>
                </div>
                <div class="button">
                    <input type="submit" value="Login" class="button">
                </div>
            </fieldset>
        </form>
    </main>

    <?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "project";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn) {
        die("Sorry, connection not found!" . mysqli_connect_error());
    } else {
        $enteredUsername = $_POST['name'];
        $enteredPassword = $_POST['pas'];

        $sql = "SELECT * FROM `registration` WHERE `name` = '$enteredUsername' AND `pas` = '$enteredPassword'";
        $result = mysqli_query($conn, $sql);

        if ($result && mysqli_num_rows($result) > 0) {
            session_start();
            $_SESSION['userData'] = mysqli_fetch_assoc($result);

            header("Location: index4.php");
            exit();
        } else {
            echo "Invalid username or password.";
        }
    }
}
?>


<?php include('footer.php'); ?>

</body>

</html>