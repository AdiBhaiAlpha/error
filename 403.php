<?php http_response_code(403); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>403 Forbidden</title>
    <style>
        /* Same styles as 401.php */
    </style>
</head>
<body>
    <div class="error-container">
        <h1>403</h1>
        <div class="error-subtitle">Access Forbidden</div>
        <p class="error-description">
            Sorry, you don't have permission to access this resource.
            This area is restricted.
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