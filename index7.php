<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View All Employee Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        main {
            padding: 20px;
        }

        h2 {
            color: #333;
        }

        div {
            background-color: white;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        img {
            max-width: 100%;
            max-height: 200px;
            margin-top: 10px;
        }
        header {
  display: flex;
  align-items: center;
  justify-content: space-between;
  background-color: #333;
  color: #ecf1f2;
  padding: 10px;
}

.logo {
  font-size: 24px;
}

nav ul {
  list-style: none;
  display: flex;
  gap: 30px;
}

nav li {
  margin-left: 20px;
}

nav a {
  color: #fff;
  text-decoration: none;
}
header img{
  border-radius: 5px;
  border-width: 20px;
}
footer {
  display: flex;
  justify-content: space-between;
  background-color: #333;
  color: #fff;
  padding: 10px;
  margin-top: auto;
  
}

    </style>
</head>

<body>
<header>
        <nav>
            <ul>
                <div class="logo">Sidhu's Trade shop</div>
                <li><a href="index1.php">Sign Up</a></li>
                <li><a href="index7.php">View</a></li>
                <li><a href="index3.php">Log in</a></li>
                <li><a href="index8.php">upload</a></li>
            </ul>
        </nav>
        <img src="images/OIP.jpeg" height="9%" width="9%">
    </header>

    <main class="main">
        <h2>Products in Trade</h2>

        <?php
        $servername = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $database = "project";

        $conn = mysqli_connect($servername, $dbUsername, $dbPassword, $database);

        if (!$conn) {
            die("Sorry, connection not found!" . mysqli_connect_error());
        } else {
            $sql = "SELECT * FROM `trade`";
            $result = mysqli_query($conn, $sql);

            if ($result && mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<div>";
                    echo "<p><strong>Product number:</strong> " . $row['id'] . "</p>";
                    echo "<p><strong>Name:</strong> " . $row['name'] . "</p>";
                    echo "<p><strong>description:</strong> " . $row['image-description'] . "</p>";
                    echo "<p><strong>price:</strong> " . $row['price'] . "</p>";
                    echo "<p><strong>email:</strong> " . $row['email'] . "</p>";

                    echo "<img src='" . $row['image'] . "' alt='Profile Image'>";

                    echo "</div><hr>";
                }
            } else {
                echo "No data found.";
            }
        }
        ?>
    </main>

    <footer>
        <div class="copyright">© Purav Sidhu Assignment. 200555445.</div>
        <div class="social-media">
            <a href="#">WhatsApp</a>
            <a href="#">Twitter</a>
            <a href="#">Instagram</a>
        </div>
    </footer>

</body>

</html>

