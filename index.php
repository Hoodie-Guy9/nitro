<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visitor IP Address</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Your IP Address</h1>
        <p>
            <?php
                // Get the visitor's IP address
                $ip = $_SERVER['REMOTE_ADDR'];
                echo "Your IP address is: <strong>" . htmlspecialchars($ip) . "</strong>";
            ?>
        </p>
    </div>
</body>
</html>
