<?php
// Set the HTTP response code
http_response_code(400);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>400 Bad Request</title>
    <style>
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
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
            color: #000;
            font-size: 2.8rem;
            margin-bottom: 1.5rem;
            font-weight: 700;
            letter-spacing: -1px;
        }

        .error-code {
            font-size: 1.2rem;
            color: #666;
            margin-bottom: 1.5rem;
            font-weight: 300;
        }

        p {
            color: #444;
            font-size: 1.1rem;
            margin-bottom: 1.5rem;
            line-height: 1.6;
        }

        .home-link {
            display: inline-block;
            background-color: #000;
            color: #fff;
            text-decoration: none;
            padding: 0.8rem 1.5rem;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s ease;
            margin-top: 1rem;
            position: relative;
            overflow: hidden;
        }

        .home-link:before {
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

        .home-link:hover:before {
            left: 100%;
        }

        .home-link:hover {
            background-color: #333;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .icon {
            font-size: 4rem;
            margin-bottom: 1rem;
            animation: pulse 2s infinite;
        }

        .footer {
            margin-top: 2rem;
            font-size: 0.9rem;
            color: #666;
            text-align: center;
            width: 100%;
            padding: 1rem 0;
            background-color: rgba(255, 255, 255, 0.8);
        }
    </style>
</head>
<body>
    <div class="error-container">
        <div class="icon">⚠️</div>
        <h1>Bad Request</h1>
        <div class="error-code">Error 400</div>
        <p>We're sorry, but we couldn't process your request due to invalid syntax.</p>
        <p>Please check your request parameters and try again.</p>
        <a href="index.html" class="home-link">Return to Homepage</a>
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

            const link = document.querySelector('.home-link');
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

