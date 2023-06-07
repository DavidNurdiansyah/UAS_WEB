<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGN UP</title>
    <script src="https://cdn.tailwindcss.com"></script>
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
            color: #485584;
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
            background-color: #B5BCF7;
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
            background-color: #485584;
            padding: 10px;
            border-radius: 10px;
            font-weight: bold;
            color: black;
        }

        .card-form {
            padding: 40px;
        }

        .card-form input:hover {
            background-color: #B5BCF7;
        }

        .card-form button {
            width: 100px;
            /* padding: 10px; */
            border-radius: 5px;

        }

        .card-form button:hover {
            background-color: #485584;
            color: white;
        }

        .btn {
            display: flex;
            gap: 0 70px;
            font-size: small;
        }

        p {
            font-size: small;

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
                margin-top: 60px;
            }

            button {
                margin-left: 70px;
            }
        }
    </style>
</head>

<body>
    <span>SIGN UP</span>
    <div class="card">
        <div class="card-img">
            <lottie-player src="https://assets5.lottiefiles.com/packages/lf20_2TNH9OeQxN.json" background="transparent" speed="1" style="width: 350px; height: 300px;" loop autoplay></lottie-player>
        </div>
        <form action="/php/data-sign.php" method="post">
            <div class="card-form">
                <input type="text" name="username" required placeholder="username"><br><br>
                <input type="email" name="email" required placeholder="email@gmail.com"><br><br>
                <input type="password" name="password" required placeholder="password" minlength="6"><br><br>
                <div class="btn">
                    <button type="submit" name="submit">SIGN UP</button>
                    <p>Sudah punya akun? <a href="login.php">Login</a></p>
                </div>

            </div>
        </form>

    </div>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
</body>

</html>