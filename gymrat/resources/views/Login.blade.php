<!DOCTYPE html>
<html lang="en">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@300&display=swap" rel="stylesheet">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GymRat</title>

    <style>

        body {
            font-family: 'Inconsolata', monospace;
        }

        body {
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-color: #000000;
        }

        #login-container {
            width: 90%;
            max-width: 400px;
            padding: 20px;
            border-radius: 8px;
            background-color: #000000;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        #welcome-text {
            font-size: 35px;
            margin-top: 20px;
            color: white;
            /* font-family: fantasy; */
        }

        #default-message {
            font-size: small;
            margin: 10px 0;
            color: #888;
            /* font-family: Arial; */
        }

        form {
            margin-top: 20px;
        }

        input {
            width: 100%;
            padding: 15px;
            margin-bottom: 20px;
            box-sizing: border-box;
            border-radius: 8px;
            background-color: #646262f5;
            color: white;
            font-size: medium;
            font-weight: bold;
        }

        button {
            width: 100%;
            padding: 20px;
            background-color: #b3b3b3f5;
            color: #000000;
            border: none;
            border-radius: 15px;
            cursor: pointer;
            font-weight: bold;
            font-size: medium;
        }

        button:hover {
            background-color: #cacaca;
        }

        #terms {
            margin-top: 20px;
            font-size: 13px;
            color: #bbb9b9;
        }

        #terms a {
            text-decoration: none;
            font-weight: bold; 
        }

        #terms a:hover {
            text-decoration: none;
            color: #ff9d9d;
}

        #glitch-image {
            width: 100%;
            height: auto;
            max-width: 600px;
            animation: glitch 5s infinite;
        }

        @keyframes glitch {
            0% {
                transform: translate(0, 0);
            }
            25% {
                transform: translate(4px, -4px);
            }
            50% {
                transform: translate(-4px, 4px);
            }
            75% {
                transform: translate(2px, -2px);
            }
            100% {
                transform: translate(0, 0);
            }
        }

        @media screen and (max-width: 600px) {
            #login-container {
                width: 90%;
            }
            input, button, #welcome-text, #default-message, #terms {
                padding: 10px;
                font-size: small;
            }
            #glitch-image {
                max-width: 100%;
            }
        }

    </style>
</head>
<body>

    <center><img id="glitch-image" src="{{URL('images/logs.png')}}" alt="Glitch Image"></center>
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;

    <div id="login-container">
        <div id="welcome-text">Welcome to GymRat</div>
        <div id="default-message">Sign up to access and monitor GymRat!</div><br>

        <form id="login-form">
        @csrf
            <input style="font-family: 'Inconsolata', monospace;" type="password" placeholder="Enter the Pincode" id="password" required><br>
            <button style="font-family: 'Inconsolata', monospace;"; type="button" onclick="login()">Continue</button>
        </form>

        <div id="terms">
            By clicking Continue, you agree to our <a href="{{url('Terms and Condition')}}">Terms and Conditions</a>.
        </div>
    </div>

    <script>
        function login() {
        var enteredPin = document.getElementById('password').value;

        if (enteredPin.trim() === '') {
            alert('Please enter the Pincode.');
        } else if (enteredPin === '12345') {
            window.location.href = '{{url('Home')}}';
        } else {
            alert('Incorrect Pincode! Please try again.');
        }
    }
    </script>

</body>
</html>