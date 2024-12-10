<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Form</title>
    <style>
   body {
    font-family: Arial, sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    background-size: cover;
    background-repeat: no-repeat;
    }

    .container {
        text-align: center;
        background-color: blue;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 8px;
        width: 300px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    h1 {
        color: white;
        font-size: 24px;
        margin-bottom: 20px;
    }

    .button-container {
        display: flex;
        justify-content: center;
        gap: 10px;
        margin-bottom: 20px;
    }

    button {
        padding: 10px 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #e8d8c3;
        color: #333;
        cursor: pointer;
        font-size: 14px;
        transition: background-color 0.3s;
    }

    button:hover {
        background-color: #d7c1a7;
    }

    footer {
        font-size: 12px;
        color: white;
    }

    .highlight {
        color: white;
        font-weight: bold;
    }  
    </style>
</head>
<body>
    <div class="container border">
        <div class="row align-items-center py-3 px-xl-5">
            <div>
                <h1>SELAMAT DATANG</h1>

                <form action="" method="POST">
                    <div class="button-container">
                    <a href="{{ route('daftar') }}">
                        <button type="button">Daftar</button>
                    </a>
                    <a href="{{ route('login') }}">
                        <button type="button">Login</button>
                    </a>
                    </div>

                    <footer>
                        <p>Created by<br> Muparikoh, <span class="highlight">MI22A</span></p>
                    </footer>
                </form>

            </div>
        </div>     
    </div>
</body>
</html>