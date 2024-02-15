<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Information</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: #000;
            color: #fff;
            margin: 0;
            padding: 0;
        }

        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background-color: #333;
            padding: 20px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 1000;
        }

        .navbar .arrow {
            font-size: 24px;
            color: rgb(0, 191, 162);
            text-decoration: none;
            margin-right: 20px;
            transition: transform 0.3s ease-in-out;
        }

        .navbar .arrow:hover {
            transform: scale(1.2);
        }

        .container {
            max-width: 90%;
            margin: 80px auto;
            margin-top: 150px;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        input[type="text"], select {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }

        input[type="submit"]:hover {
            background-color: rgb(0, 191, 162);
        }

        .result {
            display: none;
            margin-top: 20px;
            padding: 10px;
            background-color: #f0f0f0;
            border-radius: 5px;
            color: black;
        }

        .container h2 {
            text-align: center;
            color: #333;
            font-size: 24px;
            margin-bottom: 20px;
        }

        .footer {
            background-color: #008F7A;
            color: #fff;
            padding: 20px 0;
            text-align: center;
            font-size: 14px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        @media only screen and (min-width: 600px) {
            .container {
                max-width: 600px;
            }
        }
    </style>
</head>

<body>
<header class="navbar">
    <a href="{{url('Home')}}" class="arrow">⬅</a>
</header>

<div class="container">
    <h2>User Information</h2>
    <form id="searchForm">
        <input type="text" id="searchInput" placeholder="Search by Name">
        <input type="submit" value="Search">
    </form>
    <div class="result" id="result">
        <p><strong>Name:</strong> <span id="name"></span></p>
        <p><strong>Age:</strong> <span id="age"></span></p>
        <p><strong>Gender:</strong> <span id="gender"></span></p>
    </div>
</div>

<footer class="footer">
    <p>&copy; 2024 GYMRAT. ALL RIGHTS RESERVED.</p>
</footer>

<script>
    const users = [
        { name: "Ange", age: 21, gender: "Female" },
        { name: "Princess", age: 21, gender: "Female" },
        { name: "Louise", age: 19, gender: "Male" },
        { name: "Miro", age: 20, gender: "Male" }
    ];

    const searchForm = document.getElementById("searchForm");
    const searchInput = document.getElementById("searchInput");
    const resultDiv = document.getElementById("result");

    searchForm.addEventListener("submit", function(event) {
        event.preventDefault();
        const searchTerm = searchInput.value.trim().toLowerCase();
        const user = users.find(u => u.name.toLowerCase() === searchTerm);
        if (user) {
            resultDiv.style.display = "block";
            document.getElementById("name").textContent = user.name;
            document.getElementById("age").textContent = user.age;
            document.getElementById("gender").textContent = user.gender;
        } else {
            resultDiv.style.display = "none";
            alert("User not found.");
        }
    });
</script>

</body>
</html>
