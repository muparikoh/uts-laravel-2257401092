<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
    color: #7e57c2;
    font-size: 26px;
    margin-bottom: 15px;
    font-weight: 700;
}

input[type="email"], input[type="password"] {
    width: 100%;
    padding: 14px;
    margin: 12px 0;
    border-radius: 8px;
    border: 1px solid #d1c4e9;
    box-sizing: border-box;
    font-size: 16px;
    transition: all 0.3s ease;
    background-color: #f9f6fc;
}

input[type="email"]:focus, input[type="password"]:focus {
    border-color: #7e57c2;
    background-color: #ffffff;
    outline: none;
    box-shadow: 0 0 5px rgba(126, 87, 194, 0.3);
}

.button-container {
    display: flex;
    justify-content: space-between; 
    gap: 15px;
    margin-top: 20px;
}

button {
    padding: 14px 20px;
    border: none;
    border-radius: 8px;
    background-color: #7e57c2;
    color: #ffffff;
    cursor: pointer;
    font-size: 16px;
    font-weight: bold;
    transition: all 0.3s ease;
    width: 100%;
}

button:hover {
    background-color: #9575cd;
    transform: translateY(-2px);
}

button:active {
    background-color: #7e57c2;
    transform: translateY(1px);
}

footer {
    font-size: 13px;
    margin-top: 20px;
    color: #666666;
}

footer .highlight {
    color: #ab47bc;
    font-weight: bold;
}

/* Responsive Design for Mobile */
@media (max-width: 600px) {
    .container {
        padding: 20px;
        width: 90%;
    }

    h1 {
        font-size: 22px;
    }

    .button-container {
        flex-direction: column;
        gap: 10px;
    }

    button {
        padding: 12px;
    }
}

@media (max-width: 600px) {
    .container {
        padding: 20px;
        width: 90%;
    }

    h1 {
        font-size: 22px;
    }

    .button-container {
        flex-direction: column;
        gap: 10px;
    }

    button {
        padding: 12px;
    }
}

    </style>
</head>
<body>
    <div class="container border">
        <div class="row align-items-center py-3 px-xl-5">
            <div>
                <h1>LOGIN</h1>

                <form action="" method="POST">
                    <label for="email">Email :</label><br>
                    <input type="email" name="email" id="email"><br><br>
                    <label for="password">Password :</label><br>
                    <input type="password" name="password" id="password"><br><br>
                    <div class="button-container">
                        <a href="{{ route('dashboard') }}">
                            <button type="button">Login</button>
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