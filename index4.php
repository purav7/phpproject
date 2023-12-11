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
    <?php
session_start();

if (!isset($_SESSION['userData'])) {
    header("Location: index3.php");
    exit();
}

$userData = $_SESSION['userData'];

$servername = "localhost";
$username = "root";
$password = "";
$database = "project";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Sorry, connection not found!" . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update'])) {
    $newEmail = $_POST['new_email'];
    $newphone = $_POST['new_phone'];
    $newPassword = $_POST['new_password'];

    $updateSql = "UPDATE `registration` SET  `email` = '$newEmail', `phone` = $newphone, `pas` = '$newPassword' WHERE `id` = " . $userData['id'];
    $result = mysqli_query($conn, $updateSql);

    if ($result) {

        $userData['email'] = $newEmail;
        $userData['phone'] = $newphone;
        $_SESSION['userData'] = $userData;
        echo "Data updated successfully!";
    } else {
        echo "Error updating data: " . mysqli_error($conn);
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete'])) {

    $deleteSql = "DELETE FROM `registration` WHERE `id` = " . $userData['id'];
    $result = mysqli_query($conn, $deleteSql);

    if ($result) {
        session_destroy();
        header("Location: index3.php");
        exit();
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}

?>
    <main class="main">
        <h2>User Profile</h2>
        <h3>Welcome, <?php echo $userData['name']; ?>!</h3>
        <p>Email: <?php echo $userData['email']; ?></p>
        <p>Phone Number: <?php echo $userData['phone']; ?></p>
        <p>Password: <?php echo $userData['pas']; ?></p>

        <form action="index4.php" method="post">

            <label for="new_email">New Email:</label><br>
            <input type="email" id="new_email" name="new_email"><br><br>

            <label for="new_phone">New Phone Number:</label><br>
            <input type="number" id="new_phone" name="new_phone" min="0"><br><br>

            <label for="new_password">New Password:</label><br>
            <input type="password" id="new_password" name="new_password"><br><br>

            <input type="submit" name="update" value="Update Data">

            <br><br>
            <h3>delete all data</h3>
            <input type="submit" name="delete" value="Delete My Account">
        </form>
    </main>


<?php include('footer.php'); ?>

</body>

</html>
