<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar</title>
    <style>
      body {
        height: 100vh;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        }

        .container {
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%,-50%);
        padding: 20px 25px;
        width: 300px;
        background-color: rgba(0,0,0,.2);
        box-shadow: 0 0 10px rgba(255,255,255,.3);
        }

        h1 {
            color: #1d3557;
            font-size: 28px;
            text-align: center;
            margin-bottom: 20px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border-radius: 6px;
            border: 1px solid #ccc;
            box-sizing: border-box;
            font-size: 16px;
            transition: border-color 0.3s ease;
        }

        .button-container {
            display: flex;
            justify-content: space-between; 
            gap: 15px;
            margin-top: 20px;
        }

        button {
            padding: 12px 20px;
            border: none;
            border-radius: 6px;
            background-color: #1d3557;
            color: #fff;
            cursor: pointer;
            font-size: 16px;
            transition: all 0.3s ease;
        }

        button:hover {
            background-color: #457b9d;
            transform: translateY(-2px);
        }

        button:active {
            background-color: #1d3557;
            transform: translateY(2px);
        }

        footer {
            font-size: 12px;
            text-align: center;
            margin-top: 20px;
        }

        .highlight {
            color: #d97706;
            font-weight: bold;
        }

        @media (max-width: 600px) {
            .container {
                padding: 20px;
                width: 90%;
            }

            h1 {
                font-size: 24px;
            }
            .button-container {
                flex-direction: column;
                gap: 10px;
            }
        }
    </style>
</head>
<body>
    <div class="container border">
        <div class="row align-items-center py-3 px-xl-5">
            <div>
                <h1>DAFTAR</h1>

                <form action="" method="POST">
                    <label for="nama">Nama :</label><br>
                    <input type="teks" name="name" id="name"><br><br>
                    <label for="email">Email :</label><br>
                    <input type="email" name="email" id="email"><br><br>
                    <label for="password">Password :</label><br>
                    <input type="password" name="password" id="password"><br><br>
                    <div class="button-container">
                        <a href="{{ route('login') }}">
                            <button type="button">Daftar</button>
                        </a>
                        <a href="{{ route('home') }}">
                            <button type="button">Kembali</button>
                        </a>
                    </div>
                </form>
            </div>
        </div>     
    </div>
</body>
</html>
