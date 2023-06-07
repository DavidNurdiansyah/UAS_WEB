<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>LOGIN</title>
</head>

<body>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Noto+Sans:wght@500&family=Poppins:wght@500&display=swap');

    body {
        background: url(/gambar/sign-up.png);
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: fixed;
        width: 100%;
        height: 100%;
        font-family: 'Poppins', 'sans-serif';
    }

    span {
        font-weight: bolder;
        color: #F57881;
        margin-top: 30px;
        padding: 10px;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: large;
    }

    .card {
        display: flex;
        border: 4px solid white;
        border-radius: 20px;
        width: 700px;
        justify-content: center;
        align-items: center;
        margin: 70px 50px 50px 250px;
        padding: 20px;
        box-shadow: 2px 0px 2px 0px rgba(0, 0, 0, 0.75);
    }

    .card-img {
        background-color: #F1AAAF;
        margin-top: 0px;
        padding: 4px;
        margin-right: 20px;
        height: 100%;
        border-radius: 20px;
    }

    .card:hover {
        box-shadow: 2px 0px 9px 2px rgba(0, 0, 0, 0.75);
    }

    .card-form input {
        background-color: #F57881;
        padding: 10px;
        border-radius: 10px;
        color: black;
        font-weight: bold;
    }

    .card-form {
        padding: 40px;
    }

    .card-form input:hover {
        background-color: #F1AAAF;
    }

    .card-form button {
        padding: 8px;
        border-radius: 5px;
        background-color: white;

    }

    .card-form button:hover {
        background-color: #FC8991;
        color: white;
    }

    @media screen and (max-width:700px) {
        .card {
            display: flex;
            flex-wrap: wrap;
            overflow: hidden;
            margin: 0;
            margin-left: 55px;
            margin-top: 40px;
            width: 300px;
            height: 100%;
            padding: 0;
            justify-content: center;
            align-items: center;
            box-shadow: 2px 0px 9px 2px rgba(0, 0, 0, 0.75);
        }

        .card-img {
            background-color: white;
            padding: 0;
        }

        span {
            text-align: center;
            margin-top: 100px;
        }

        button {
            margin-left: 70px;
        }
    }
    </style>
    </head>

    <body>
        <span>LOGIN</span>
        <div class="card">
            <div class="card-img">
                <lottie-player src="https://assets5.lottiefiles.com/packages/lf20_yLCHY6q3aU.json"
                    background="transparent" speed="1" style="width: 350px; height: 300px;" loop autoplay>
                </lottie-player>
            </div>
            <form action="/php/data-login.php" method="post">
                <div class="card-form">
                    <input type="email" name="email" required placeholder="email@gmail.com"><br><br>
                    <input type="password" name="password" required placeholder="password" minlength="6"><br><br>
                    <button type="submit" name="submit">LOGIN</button>
                </div>
            </form>

        </div>
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    </body>

</html>