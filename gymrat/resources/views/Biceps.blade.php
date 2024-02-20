<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercises</title>

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

        .exercise {
            position: relative;
            top: 450px;
            width: 90%;
            height: 600px;
            text-align: center;
            background-color: rgb(0, 0, 0);
            }

        .graph {
            position: relative;
            width: 750px; 
            height: 650px; 
            background-color: #000000;
            border-radius: 20px;
            margin: auto;
            top: -380px;
            left: 100px;
            }

        .graph canvas {
            width: 50%; 
            height: 50%; 
            background-color: #000000;
            border-radius: 10px;
            position: center;
        }

        .workouts-container {
            position: relative;
            top: 150px;
            bottom: 0;
            width: 100%;
            text-align: center;
            background-color: rgb(0, 0, 0);
        }

        .biceps {
            position: relative;
            background-color: rgb(0, 0, 0);
            height: 450px;
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

            #exercise {
                left: 10px;
            }

            .workouts-container {
                height: 100px;
            }

            .biceps {
                height: 150px;
            }  
        }

    </style>
</head>

<body>
    <header class="navbar">
    <a href="{{url('Home')}}" class="arrow">⬅</a>
        <nav class="nav-links">
                <a href="{{url('Chest')}}">Chest</a>
                <a href="{{url('Back')}}">Back</a>
                <a href="{{url('Biceps')}}">Biceps</a>
                <a href="{{url('Triceps')}}">Triceps</a>
                <a href="{{url('Shoulder')}}">Shoulder</a>
                <a href="{{url('Leg')}}">Legs</a>
        </nav>
        <div class="hamburger">&#9776;</div>
    </header>

    <section class="workouts-container">
            <section class="biceps">
            <h1 style="color: white;">BICEPS</h1><br>
                <canvas id="010000" width="700" height="300;" style="margin: auto;"></canvas>
                <canvas id="020000" width="600" height="200"></canvas>
                <canvas id="030000" width="600" height="200"></canvas>
                <canvas id="040000" width="600" height="200"></canvas>
                <canvas id="050000" width="600" height="200"></canvas>
                <canvas id="060000" width="600" height="200"></canvas>
            </section>
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
                    label: 'Biceps Workout',
                    backgroundColor: 'white',
                    borderColor: 'grey',
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

        </script>


</body>
</html>
