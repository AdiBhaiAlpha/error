<?php http_response_code(503); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>503 Service Unavailable</title>
    <style>
        /* Same styles as 401.php */
    </style>
</head>
<body>
    <div class="error-container">
        <h1>503</h1>
        <div class="error-subtitle">Service Unavailable</div>
        <p class="error-description">
            Sorry, the server is temporarily unable to handle your request.
            Please try again later.
        </p>
        <div class="action-buttons">
            <a href="http://chitron.kesug.com/index.html" class="action-button">
                Return to Homepage
            </a>
        </div>
    </div>
    <footer class="footer">
        <p>&copy; <?php echo date("Y"); ?> Chitron Bhattacharjee. All rights reserved.</p>
    </footer>
</body>
</html>