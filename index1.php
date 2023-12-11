<!--Purav Sidhu 200555445 PHP assignment 2 -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>assignment2</title>
    <!-- linking the page to add css -->
    <link rel="stylesheet" href="styles.css">
</head>

<body>
<?php include('header.php'); ?>

    <main class="main">
        <form action="index1.php" method="post" enctype="multipart/form-data">
            <fieldset id="head">
                <legend style="font-size: 2rem; text-align:center;"><strong>Sign Up</strong></legend>
                <div class="name">
                    <label for="name">Name:</label><br>
                    <input type="text" id="name" name="name" required><br><br>
                </div>
                <div class="pas">
                    <label for="pas">Password:</label><br>
                    <input type="password" id="pas" name="pas"><br><br>
                </div>
                <div class="phone">
                    <label for="phone">Phone number:</label><br>
                    <input type="number" id="phone" name="phone" min="0" required><br><br>
                </div>
                <div class="email">
                    <label for="email">Email;:</label><br>
                    <input type="email" id="email" name="email" min="0"><br><br>
                </div>
                <div class="button">
                    <input type="submit" value="Submit" class="button">
                </div>

            </fieldset>
        </form>
    </main>
    <?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['name'])) {
        $name = $_POST['name'];
    }
    if (isset($_POST['pas'])) {
        $pas = $_POST['pas'];
    }
    if (isset($_POST['phone'])) {
        $phone = $_POST['phone'];
    }
    if (isset($_POST['email'])) {
        $email = $_POST['email'];
    }

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "project";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn) {
        die("Sorry, connection not found!" . mysqli_connect_error());
    } else {
        $sql = "INSERT INTO `registration` (`name`, `pas`, `phone`, `email`) VALUES ('$name', '$pas', $phone, '$email')";
        $result = mysqli_query($conn, $sql); 

        if ($result) {
            echo "";
        } else {
            echo "Data has not been inserted due to " . mysqli_error($conn);
        }
    }
}
?>

<?php include('footer.php'); ?>

</body>
</html>