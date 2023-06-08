<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INPUT TIM ANDA</title>

    <style>
    @import url('https://fonts.googleapis.com/css2?family=Noto+Sans:wght@500&family=Poppins:wght@500&display=swap');

    body {
        background: url(/gambar/home.png);
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: fixed;
        width: 100%;
        height: 100%;
        font-family: 'Poppins', 'sans-serif';
        overflow-x: scroll;
    }

    span {
        font-weight: bolder;
        color: #B5BCF7;
        margin-top: 30px;
        padding: 10px;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: large;
    }

    button {
        padding: 10px;
        border-radius: 10px;
        background-color: #B5BCF7;
        margin-top: 50px;
    }

    .container {
        display: flex;
        justify-content: space-evenly;
        margin-top: 30px;
        width: 90%;
        border-radius: 20px;
        margin-left: 50px;
        margin-right: 50px;
        padding-bottom: 4px;

    }

    .container-1 input {
        width: 200px;
        height: 50px;
        border-radius: 15px;
        color: black;
        font-size: larger;
        font-weight: bolder;
        text-align: center;
    }

    .container-1 .txt {
        margin: 20px;
        padding: 10px;
    }

    input {
        background-color: #B5BCF7;
    }


    .container-2 {
        margin-left: 100px;
    }

    .container-2 input {
        width: 250px;
        height: 50px;
        border-radius: 15px;
        color: black;
        font-size: larger;
        font-weight: bolder;
        text-align: center;
        margin-top: 100px;
    }

    .container-2 button {
        width: 100px;
        padding: 10px;
        font-weight: bolder;
        cursor: pointer;
    }

    .container-3 input {
        width: 200px;
        height: 50px;
        border-radius: 15px;
        color: black;
        font-size: larger;
        font-weight: bolder;
        text-align: center;
        margin-left: 100px;
    }

    .container-3 .txt {
        margin: 20px;
        padding: 10px;
    }

    @media screen and (max-width:700px) {
        body {
            width: 100%;
            margin: 0;
            background-position: center;
            background-size: cover;
            background: url(/gambar/mobile.png);
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        span {
            color: #324073;
        }

        .container {
            overflow: auto;
            width: 100%;
            margin: 0;
            display: block;
        }

        .container-1 {
            width: 100px;
            margin: 0;
            padding: 4px;
        }

        .container-2 {
            width: 100px;
            margin-left: 100px;
            margin-bottom: 70px;
        }

        .container-3 {
            width: 100px;
            margin-left: 0;
        }

        .container-1 input {
            width: 100px;
            height: 30px;
            border-radius: 5px;
        }

        .container-2 input {
            width: 100px;
            height: 30px;
            border-radius: 5px;
            margin-left: 60px;

        }

        .container-2 button {
            width: 70px;
            padding: 5px;
            margin-left: 0;

        }

        .container-3 input {
            width: 100px;
            margin-left: 17px;
            height: 30px;
            border-radius: 5px;
        }

    }
    </style>
</head>

<body>
    <span>MASUKKAN NAMA TIM ANDA</span>
    <form action="/php/data-tim.php" method="post">
        <div class="container">
            <div class="container-1">
                <div class="txt"><input type="text" name="tim1" id="" placeholder="tim 1"
                        style="background-color:#FC8991">
                </div>
                <div class="txt"><input type="text" name="tim2" id="" class="inpt" placeholder="tim 2"></div>
                <div class="txt"><input type="text" name="tim3" id="" placeholder="tim 3"
                        style="background-color:#FC8991">
                </div>
                <div class="txt"><input type="text" name="tim4" id="" class="inpt" placeholder="tim 4"></div>
            </div>
            <div class="container-2">
                <div class="txt"><input type="text" placeholder="FINALIS 1" name="finalis1"></div>
                <div class="txt"><input type="text" placeholder="FINALIS 2" style="background-color:#FC8991"
                        name="finalis2"></div>
                <button type="submit" style="margin-left: 80px;">INPUT</button>
            </div>
            <div class="container-3">
                <div class="txt"><input type="text" name="tim5" id="" placeholder="tim 5"
                        style="background-color:#FC8991">
                </div>
                <div class="txt"><input type="text" name="tim6" id="" class="inpt" placeholder="tim 6"></div>
                <div class="txt"><input type="text" name="tim7" id="" placeholder="tim 7"
                        style="background-color:#FC8991">
                </div>
                <div class="txt"><input type="text" name="tim8" id="" class="inpt" placeholder="tim 8"></div>
            </div>
    </form>
</body>

</html>