<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GymRat</title>

    <style>

        body {
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-color: black;
            font-family: Arial;
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
            font-family: Arial;
            font-weight: bold;
        }

        #default-message {
            font-size: small;
            margin: 10px 0;
            color: #888;
            font-family: Arial;
            font-style: Italic;
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

        #image {
            width: 100%;
            height: auto;
            max-width: 600px;
            margin-top: 15px;
        }

        #qr-code-container {
            width: 25%;
            max-width: 300px; 
            margin-top: 11%; 
            margin-left: 37%;
        }

        #qr-code {
            width: 100%;
            height: auto;
        }

    
        @media screen and (max-width: 600px) {
            #login-container {
                width: 90%;
            }
            input, button, #welcome-text, #default-message, #terms {
                padding: 10px;
                font-size: small;
            }
        }

    </style>
</head>
<body>

    <div id="login-container">
        <div id="welcome-text">WELCOME TO GYMRAT</div>
        <div id="default-message">This website is designed exclusively for administrators!</div><br>

        <form id="login-form">
            @csrf
            <input style="font-family: 'Inconsolata', monospace;" type="password" placeholder="ENTER THE ADMIN PINCODE" id="password" required><br>
            <button style="font-family: 'Inconsolata', monospace;" type="button" onclick="login()">CONTINUE</button>
        </form>

        <div id="terms">
            By clicking Continue, you agree to our <a href="{{url('Terms and Condition')}}">Terms and Conditions</a>.


        <div id="qr-code-container">
        <img id="qr-code" src="{{URL('images/QR.png')}}" alt="QR Code">
        </div>

        </div>
    </div>

    <center><img id="image" src="{{URL('images/ban.png')}}" alt="Image"></center>   


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
