
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
<?php include('header.php'); ?>

    <main class="main">
        <h1>Start Your Trade</h1>
        <form action="index9.php" method="post" enctype="multipart/form-data">
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name" required><br><br>
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required><br><br>

            <label for="image">Product image:</label><br>
            <input type="file" id="image" name="image" accept="image/*" required><br><br>

            <label for="image-description">Image Description:</label><br>
            <textarea id="image-description" name="image-description" rows="4" cols="50" required></textarea><br><br>

            <label for="price">Price:</label><br>
            <input type="number" id="price" name="price" required><br><br>

            <input type="submit" value="Upload">
        </form>
    </main>

    <?php include('footer.php'); ?>

</body>

</html>
