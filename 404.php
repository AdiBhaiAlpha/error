<?php http_response_code(404); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 Not Found</title>
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
            position: relative;
            overflow: hidden;
        }

        .action-button:before {
            content: "";
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(
                120deg,
                transparent,
                rgba(255, 255, 255, 0.3),
                transparent
            );
            transition: all 0.6s;
        }

        .action-button:hover:before {
            left: 100%;
        }

        .action-button:hover {
            background-color: #333;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
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
        <h1>404</h1>
        <div class="error-subtitle">Page Not Found</div>
        <p class="error-description">
            The page you were looking for could not be found!
            Please check the URL or navigate back to the homepage.
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
    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            const container = document.querySelector('.error-container');
            container.style.opacity = '0';
            container.style.transform = 'translateY(-20px)';

            setTimeout(() => {
                container.style.transition = 'opacity 0.8s ease-out, transform 0.8s ease-out';
                container.style.opacity = '1';
                container.style.transform = 'translateY(0)';
            }, 100);

            const link = document.querySelector('.action-button');
            link.addEventListener('mouseover', () => {
                link.style.transition = 'all 0.3s ease';
                link.style.transform = 'translateY(-2px)';
                link.style.boxShadow = '0 4px 8px rgba(0, 0, 0, 0.2)';
            });

            link.addEventListener('mouseout', () => {
                link.style.transform = 'translateY(0)';
                link.style.boxShadow = 'none';
            });
        });
    </script>
</body>
</html>

