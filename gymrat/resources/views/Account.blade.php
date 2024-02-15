<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Center</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: black;
        }
        .navbar {
            background-color: #333;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: fixed; 
            top: 0; 
            left: 0;
            width: 100%; 
            z-index: 1000; 
        }
        .nav-links {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: row; 
            align-items: center;
            margin-right: 20px;
        }
        .nav-links li {
            margin-bottom: 10px; 
        }
        .nav-links a {
            color: white;
            text-decoration: none;
            display: block; 
            padding: 10px 20px; 
            border-radius: 5px; 
            transition: background-color 0.3s, color 0.3s; 
        }
        .nav-links a:hover {
            background-color: rgb(0, 143, 122); 
        }
        .hamburger {
            display: none;
            color: white;
            font-size: 25px;
            cursor: pointer;
            margin-right: 20px;
            transition: transform 0.3s ease; 
        }

        .hamburger.clicked {
            transform: rotate(90deg);
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

        .workouts-container {
            margin-top: 20px; 
            text-align: center;
            background-color: rgb(0, 0, 0);
        }

        .users {
            position: relative;
            top: 20px;
            background-color: rgb(0, 0, 0);
            height: 450px;
        }

        .gender {
            margin-top: 20%;
        }

        .gender h1 {
            color: white;
        }

        .age {
            margin-top: 20px;
        }

        .age h1 {
            color: white;
        }

        .footer {
            background-color: #008F7A;
            color: #fff;
            padding: 10px 0;
            text-align: center;
            font-size: 14px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }



        @media only screen and (max-width: 768px) {
            .nav-links {
                display: none;
            }
            .nav-links.active {
                display: flex;
                flex-direction: column;
                position: absolute;
                top: 50px;
                left: 0;
                background-color: #333;
                width: 100%;
                padding: 10px 20px;
            }
            .nav-links.active li {
                margin-right: 0;
                margin-bottom: 10px;
            }
            .hamburger {
                display: block;
            }

            canvas {
                width: 400px;
            }

            #user {
                left: 10px;
            }

            .workouts-container {
                height: 100px;
            }

            .users {
                height: 150px;
            }  
        }
    </style>
</head>

<body>
    <header class="navbar">
    <a href="{{url('Home')}}" class="arrow">⬅</a>
        <nav class="nav-links">
                <a href="#users">Users</a>
                <a href="#gender">Gender</a>
                <a href="#age">Age</a>
        </nav>
        <div class="hamburger">&#9776;</div>
    </header>

    <section class="workouts-container">
            <section class="users" id="users">
                <br><br><br><br><br><br><h1 style="color: white;">USERS</h1><br>
                <canvas id="010000" width="700" height="300;" style="margin: auto;"></canvas>
                <canvas id="020000" width="600" height="200"></canvas>
                <canvas id="030000" width="600" height="200"></canvas>
                <canvas id="040000" width="600" height="200"></canvas>
                <canvas id="050000" width="600" height="200"></canvas>
                <canvas id="060000" width="600" height="200"></canvas>
            </section><br><br><br><br>

            <section class="gender" id="gender">
                <br><br><br><br><br><h1>GENDER</h1>
                <canvas id="genderChart" width="700" height="300" style="margin: auto;"></canvas>
            </section><br><br>

            <section class="age" id="age">
                <br><br><br><br><br><h1>AGE</h1>
                <canvas id="ageChart" width="700" height="300" style="margin: auto;"></canvas>
            </section><br><br><br><br><br>
        </section>

        <footer class="footer">
            <p>&copy; 2024 GYMRAT. ALL RIGHTS RESERVED.</p>
        </footer>

    <script>
        document.querySelector('.hamburger').addEventListener('click', function() {
            document.querySelector('.nav-links').classList.toggle('active');
            this.classList.toggle('clicked');
        });

        window.addEventListener('resize', function() {
            if (window.innerWidth > 768) {
                document.querySelector('.nav-links').classList.remove('active');
            }
        });
    </script>





    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        var options = {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        };

        var data1 = {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'June'],
            datasets: [{
                label: 'Users Loyalty',
                backgroundColor: 'grey',
                borderColor: 'white',
                borderWidth: 1,
                data: [100, 200, 300, 400, 500, 600]
            }]
        };

        var ctx1 = document.getElementById('010000').getContext('2d');
        new Chart(ctx1, {
            type: 'bar',
            data: data1,
            options: options
        });

        var genderData = {
            labels: ['Male', 'Female', 'Unknown'],
            datasets: [{
                label: 'Gender Distribution',
                backgroundColor: ['blue', 'pink', 'grey'],
                borderColor: 'white',
                data: [50, 40, 10] 
            }]
        };

        var genderCtx = document.getElementById('genderChart').getContext('2d');
        new Chart(genderCtx, {
            type: 'doughnut',
            data: genderData,
            options: {
                legend: {
                    display: true,
                    position: 'bottom',
                    labels: {
                        fontColor: 'white'
                    }
                }
            }
        });

        var ageData = {
            labels: ['12-20', '21-30', '31-40', '41-50', '51-60'],
            datasets: [{
                label: 'Age Distribution',
                backgroundColor: ['yellow', 'grey', 'blue', 'indigo','pink'],
                borderColor: 'white',
                data: [10, 20, 30, 40, 50, 60, 70, 80, 90] 
            }]
        };

        var ageCtx = document.getElementById('ageChart').getContext('2d');
        new Chart(ageCtx, {
            type: 'pie',
            data: ageData,
            options: {
                legend: {
                    display: true,
                    position: 'bottom',
                    labels: {
                        fontColor: 'white'
                    }
                }
            }
        });
    </script>
    
</body>
</html>
