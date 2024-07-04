<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic PHP, CSS, and JS Example</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="container">
    <h1>Welcome to My Webpage</h1>
    <p>This is a simple example of a PHP page using CSS and JavaScript. test1</p>
    <button onclick="showAlert()">Click Me</button>

    <?php
    include 'functions.php';
    $result = add(2, 3);
    echo "<p>The result of adding 2 and 3 is: $result</p>";
    ?>
</div>
<script src="scripts.js"></script>
</body>
</html>