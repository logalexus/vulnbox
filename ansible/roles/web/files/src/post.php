<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Blog Post</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container">
        <header>
            <img src="images/logo.png" alt="Blog Logo">
            <h1>Blog Post</h1>
        </header>
        <div class="content">
            <?php
            if (isset($_GET['post'])) {
                $post = $_GET['post'];
                $filePath = "posts/$post";

                // Уязвимость LFI: нет проверки на допустимость имени файла
                if (file_exists($filePath)) {
                    include($filePath);
                } else {
                    echo "<p>Post not found.</p>";
                }
            } else {
                echo "<p>No post selected.</p>";
            }
            ?>
        </div>
        <nav>
            <ul>
                <li><a href="index.php">Back to Home</a></li>
            </ul>
        </nav>
    </div>
</body>
</html>
