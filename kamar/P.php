<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #ff7e5f, #feb47b);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: hidden;
        }

        .container {
            text-align: center;
            color: white;
        }

        h1 {
            font-size: 4em;
            margin: 0;
            animation: fadeIn 2s ease-in-out;
        }

        p {
            font-size: 1.5em;
            margin: 20px 0;
            animation: fadeIn 4s ease-in-out;
        }

        .button {
            padding: 10px 20px;
            font-size: 1.2em;
            background: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s, color 0.3s;
        }

        .button:hover {
            background: #ff7e5f;
            color: white;
        }
         .button a {
            color: #ff7e5f;
            text-decoration: none;
}
         
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
        footer {
            text-align: right;
            background-color: #333;
            color: #fff;
            position: fixed;
            width: 100%;
            height: 36.5px;
            line-height: 10px;
            bottom: 0;
            font-size: smaller;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome To Rock Bottom Hotel!!</h1>
        <p>Experience the beauty of simplicity and elegance.</p>
        <button class="button"><a href="Beranda.php">Started</a></button>

    </div>

    <footer>
        <p class="foot">&copy; 2023 Hotel Rock Bottom. All rights reserved.</p>
    </footer>
</body>
</html>