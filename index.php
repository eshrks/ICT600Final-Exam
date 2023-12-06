<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="icon" href="assets/images/shark_icon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,700;1,200&display=swap" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            background-color: #010812;
            user-select: none;
        }

        #bg {
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            height: 99vh;
            z-index: -1;
        }

        .btn-primary {
            font-family: 'Poppins', sans-serif;
            font-size: 20px;
            border-radius: 50px;
            width: 150px;
            color: #000000;
            background-color: #004AAD;
        }

        h1 {
            font-family: 'Poppins', sans-serif;
            font-weight: bold;
            color: #C2DBFF;
            margin-bottom: 20px;
        }

        .head-der {
            position: fixed;
            top: 50%;
            left: 50%;
            width: 90%;
            transform: translate(-50%, -50%);
            padding: 20px;
            text-align: center;
        }
    </style>
</head>

<body>
    <div id="bg"></div>
    <div class="head-der">
        <h1>Welcome to Web Developement!</h1>
        <!-- <a class="btn btn-primary" href="user/index.php">Let's Go</a> -->
        <a class="btn btn-primary" href="loading.php">Let's Go</a>
    </div>

    <script src="particleJS/particles.min.js"></script>
    <script src="particleJS/custom.js"></script>
</body>

</html>