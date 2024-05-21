<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>blog</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Navbar start -->
    <nav class="navbar">
        <div class="container-navbar">
            <ul class="ul-navbar">
                <li class="li-navbar">
                    <a href="index.html">Home</a>
                </li>
                <li class="li-navbar">
                    <a href="gallery.html">Gallery</a>
                </li>
                <li class="li-navbar">
                    <a href="blog.php">Blog</a>
                </li>
                <li class="li-navbar">
                    <a href="contact.php">Contact</a>
                </li>
                <li class="li-navbar">
                    <a href="about.html">About</a>
                </li>
            </ul>
    </nav>
    <!-- Navbar End -->
    <h1 style="color: rgb(250, 250, 175)"> Blog page</h1>
    <?php
    include "datablog.php";

    $sql = "SELECT title, content FROM blogpost";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {
            echo "<h2>" . $row["title"] . "</h2><p>" . $row["content"] . "</p>";
        }
    } else {
        echo "0 results";
    }

    $conn->close();
    ?>
    <script src="script.js"></script>
</body>

</html>