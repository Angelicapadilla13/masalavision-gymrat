<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Terms and Conditions</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #eaeaea;
        }

        #container {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 0;
        }

        h1 {
            color: #333;
            font-size: 32px;
        }

        p {
            line-height: 1.5;
            color: #555;
            font-size: 18px;
        }

        ol {
            padding-left: 20px;
            font-size: 18px;
        }

        #acceptCheckbox {
            margin-top: 20px;
            font-size: 18px;
        }

        #acceptLabel {
            font-weight: bold;
        }

        #submitBtn {
            margin-top: 20px;
            padding: 15px 20px;
            font-size: 18px;
            background-color: #4caf50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        #submitBtn:hover {
            background-color: #45a049;
        }

        @media screen and (max-width: 600px) {
            h1 {
                font-size: 28px;
            }

            p, ol, #acceptCheckbox, #submitBtn {
                font-size: 16px;
            }
        }

        @media screen and (max-width: 400px) {
            h1 {
                font-size: 24px;
            }

            p, ol, #acceptCheckbox, #submitBtn {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>

    <br><br><br><br><br><br><br><br>
    <div id="container">
        <h1>Admin Terms and Conditions</h1>
        
        <p>Welcome, Admin! Before accessing the admin panel, please read and agree to the following terms and conditions:</p>
        
        <ol>
            <li><strong>Access Authorization:</strong> Admin access is granted solely to authorized personnel.</li>
            <li><strong>Confidentiality:</strong> Admins must maintain the confidentiality of sensitive information and user data.</li>
            <li><strong>Responsibility:</strong> Admins are responsible for their actions and must follow all established procedures.</li>
            <li><strong>Security:</strong> Admins must report any security vulnerabilities or suspicious activities immediately.</li>
            <li><strong>Termination:</strong> Admin access may be terminated at any time for violation of terms or misuse of privileges.</li>
        </ol>

        <div id="acceptCheckbox">
            <input type="checkbox" id="accept" required>
            <label for="accept" id="acceptLabel">I have read and accept the terms and conditions.</label>
        </div>

        <button id="submitBtn" onclick="submitForm()">Accept and Access</button>
    </div>

    <script>
        function submitForm() {
            if (document.getElementById('accept').checked) {
                alert('Thank you for accepting the terms and conditions. You can now enter the pin to access the admin panel.');
                window.location.href = "{{url('/')}}";
            } else {
                alert('Please accept the terms and conditions to access the admin panel.');
            }
        }

    </script>

</body>
</html>
