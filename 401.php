<?php http_response_code(401); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>401 Unauthorized</title>
    <style>
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
            100% { transform: translateY(0px); }
        }

        @keyframes backgroundAnimation {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(-45deg, #f3f3f3, #e6e6e6, #d9d9d9, #cccccc);
            background-size: 400% 400%;
            animation: backgroundAnimation 15s ease infinite;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            color: #333;
        }

        .error-container {
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.08);
            padding: 3rem;
            text-align: center;
            max-width: 90%;
            width: 500px;
            animation: fadeIn 0.8s ease-out, float 6s ease-in-out infinite;
        }

        h1 {
            font-size: 3.5rem;
            margin: 0;
            color: #000;
            font-weight: 700;
        }

        .error-subtitle {
            font-size: 1.5rem;
            color: #666;
            margin: 1rem 0 2rem;
        }

        .error-description {
            color: #444;
            margin-bottom: 2rem;
            line-height: 1.6;
        }

        .action-buttons {
            display: flex;
            flex-direction: column;
            gap: 1rem;
            margin-bottom: 2rem;
        }

        .action-button {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            background-color: #000;
            color: #fff;
            text-decoration: none;
            padding: 1rem;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .action-button:hover {
            background-color: #333;
            transform: translateY(-2px);
        }

        .footer {
            margin-top: 2rem;
            text-align: center;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="error-container">
        <h1>401</h1>
        <div class="error-subtitle">Unauthorized Access</div>
        <p class="error-description">
            Sorry, you don't have permission to access this page. 
            Please log in or contact the administrator for access.
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