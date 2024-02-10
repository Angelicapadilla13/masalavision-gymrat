<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise</title>
</head>

<style>
    body {
    font-family: 'Arial';
    background: black;
    margin: 0;
    }

    .navbar {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    background-color: #333; 
    padding: 10px 20px;
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

    .nav-links-container {
    background-color: #333; 
    padding: 5px 10px;
    border-radius: 5px;
    margin-right: 15px;
    }

    .nav-links {
    display: flex;
    }

    .nav-links a {
    color: white;
    text-decoration: none;
    margin-right: 10px;
    padding: 5px 10px;
    border-radius: 5px;
    transition: background-color 0.3s ease-in-out;
    }

    .nav-links a:hover {
    background-color: rgb(0, 143, 122); 
    }

    .users {
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
    top: -15px;
    width: 100%;
    height: 4320px;
    text-align: center;
    background-color: rgb(0, 0, 0);
    }

    .chest {
    position: relative;
    top: 20px;
    background-color: rgb(0, 0, 0);
    height: 450px;
    }

    .back {
    position: relative;
    top: 160px;
    background-color: rgb(0, 0, 0);
    height: 450px;
    }

    .abs {
    position: relative;
    top: 300px;
    background-color: rgb(0, 0, 0);
    height: 450px;
    }

    .biceps {
    position: relative;
    top: 460px;
    background-color: rgb(0, 0, 0);
    height: 450px;
    }

    .triceps {
    position: relative;
    top: 600px;
    background-color: rgb(0, 0, 0);
    height: 450px;
    }

    .shoulder {
    position: relative;
    top: 740px;
    background-color: rgb(0, 0, 0);
    height: 450px;
    }
    
    .legs {
    position: relative;
    top: 880px;
    bottom: 0;
    background-color: rgb(0, 0, 0);
    height: 450px;
    }

    .footer {
    background-color: #008F7A;
    color: #fff;
    padding: 15px 0;
    text-align: center;
    font-size: 14px;
    position: fixed;
    bottom: 0;
    width: 100%;
    }


    @media only screen and (max-width: 601px) {
    
    .graph {
        width: 350px; 
        height: 200px; 
        left: -15px;
        margin-top: 130px;
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

    .chest, .back, .abs, .biceps, .triceps, .shoulder, .legs {
        height: 150px;
    }  

    }

</style>

<body>
      
<header class="navbar">
    <a href="{{url('Home')}}" class="arrow">⬅</a>
    <div class="nav-links-container">
        <nav class="nav-links">
            <a href="#most">Most Viewed</a>
            <a href="#chest">Chest</a>
            <a href="#back">Back</a>
            <a href="#abs">Abs</a>
            <a href="#biceps">Biceps</a>
            <a href="#triceps">Triceps</a>
            <a href="#shoulder">Shoulder</a>
            <a href="#legs">Legs</a>
        </nav>
    </div>
</header>
<body>

        <section class="workouts-container">
            <section class="users" id="user">
                <div class="graph" id="most">
                <br><br><br><h1 style="color: white;">MOST VIEWED EXERCISE</h1><br>
                    <canvas id="myChart"></canvas>
                </div>
                <div class="container">
                    <div class="line line-6"></div>
                    <div class="line line-1"></div>
                    <div class="line line-2"></div>
                    <div class="line line-3"></div>
                    <div class="line line-4"></div>
                    <div class="line line-5"></div>
                </div>
            </section>

            <section class="chest" id="chest">
            <br><br><br><br><br><br><h1 style="color: white;">CHEST</h1><br>
                <canvas id="010000" width="700" height="300;" style="margin: auto;"></canvas>
                <canvas id="020000" width="600" height="200"></canvas>
                <canvas id="030000" width="600" height="200"></canvas>
                <canvas id="040000" width="600" height="200"></canvas>
                <canvas id="050000" width="600" height="200"></canvas>
                <canvas id="060000" width="600" height="200"></canvas>
            </section>

                <section class="back" id="back">
                <br><br><br><br><br><br><h1 style="color: white;">BACK</h1><br>
                    <canvas id="011000" width="700" height="300;" style="margin: auto;"></canvas>
                    <canvas id="022000" width="600" height="200"></canvas>
                    <canvas id="033000" width="600" height="200"></canvas>
                    <canvas id="044000" width="600" height="200"></canvas>
                    <canvas id="055000" width="600" height="200"></canvas>
                    <canvas id="066000" width="600" height="200"></canvas>
                </section>

                <section class="abs" id="abs">
                <br><br><br><br><br><br><h1 style="color: white;">ABS</h1><br>
                    <canvas id="011100" width="700" height="300;" style="margin: auto;"></canvas>
                    <canvas id="022200" width="600" height="200"></canvas>
                    <canvas id="033300" width="600" height="200"></canvas>
                    <canvas id="044400" width="600" height="200"></canvas>
                    <canvas id="055500" width="600" height="200"></canvas>
                    <canvas id="066600" width="600" height="200"></canvas>
                </section>

                    <section class="biceps" id="biceps">
                    <br><br><br><br><br><br><h1 style="color: white;">BICEPS</h1><br>
                        <canvas id="011110" width="700" height="300;" style="margin: auto;"></canvas>
                        <canvas id="022220" width="600" height="200"></canvas>
                        <canvas id="033330" width="600" height="200"></canvas>
                        <canvas id="044440" width="600" height="200"></canvas>
                        <canvas id="055550" width="600" height="200"></canvas>
                        <canvas id="066660" width="600" height="200"></canvas>
                    </section>

                    <section class="triceps" id="triceps">
                    <br><br><br><br><br><br><h1 style="color: white;">TRICEPS</h1><br>
                        <canvas id="011111" width="700" height="300;" style="margin: auto;"></canvas>
                        <canvas id="022220" width="600" height="200"></canvas>
                        <canvas id="033330" width="600" height="200"></canvas>
                        <canvas id="044440" width="600" height="200"></canvas>
                        <canvas id="055550" width="600" height="200"></canvas>
                        <canvas id="066660" width="600" height="200"></canvas>
                    </section>

                    <section class="shoulder" id="shoulder">
                    <br><br><br><br><br><br><h1 style="color: white;">SHOULDER</h1><br>
                        <canvas id="0111111" width="700" height="300;" style="margin: auto;"></canvas>
                        <canvas id="022220" width="600" height="200"></canvas>
                        <canvas id="033330" width="600" height="200"></canvas>
                        <canvas id="044440" width="600" height="200"></canvas>
                        <canvas id="055550" width="600" height="200"></canvas>
                        <canvas id="066660" width="600" height="200"></canvas>
                    </section>

                    <section class="legs" id="legs">
                    <br><br><br><br><br><br><h1 style="color: white;">LEGS</h1><br>
                        <canvas id="01111111" width="700" height="300;" style="margin: auto;"></canvas>
                        <canvas id="022220" width="600" height="200"></canvas>
                        <canvas id="033330" width="600" height="200"></canvas>
                        <canvas id="044440" width="600" height="200"></canvas>
                        <canvas id="055550" width="600" height="200"></canvas>
                        <canvas id="066660" width="600" height="200"></canvas>
                    </section>
                </section>


    <footer class="footer">
    <p>&copy; 2024 GYMRAT. ALL RIGHTS RESERVED.</p>
    </footer>


        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            var ctx = document.getElementById('myChart').getContext('2d');
            var chart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['Exercise','Chest', 'Back', 'Abs', 'Biceps', 'Triceps', 'Shoulder', 'Legs'],
                    datasets: [{
                        label: 'User Loyalty',
                        backgroundColor: 'rgba(255, 255, 255, 0.2)',
                        borderColor: 'white',
                        data: [0, 15, 10, 20, 30, 20, 40, 50]
                    }]
                },
                options: {
                    legend: {
                        display: false
                    },
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
        </script>

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
                    label: 'Chest Workout',
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

            var data2 = {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'June'],
                datasets: [{
                    label: 'Back Workout',
                    backgroundColor: 'white',
                    borderColor: 'grey',
                    borderWidth: 1,
                    data: [100, 200, 300, 400, 500, 600]
                }]
            };

            var ctx1 = document.getElementById('011000').getContext('2d');
            new Chart(ctx1, {
                type: 'bar',
                data: data2,
                options: options
            });

            var data3 = {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'June'],
                datasets: [{
                    label: 'Abs Workout',
                    backgroundColor: 'white',
                    borderColor: 'grey',
                    borderWidth: 1,
                    data: [100, 200, 300, 400, 500, 600]
                }]
            };

            var ctx1 = document.getElementById('011100').getContext('2d');
            new Chart(ctx1, {
                type: 'bar',
                data: data3,
                options: options
            });

            var data4 = {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'June'],
                datasets: [{
                    label: 'Biceps Workout',
                    backgroundColor: 'white',
                    borderColor: 'grey',
                    borderWidth: 1,
                    data: [100, 200, 300, 400, 500, 600]
                }]
            };

            var ctx1 = document.getElementById('011110').getContext('2d');
            new Chart(ctx1, {
                type: 'bar',
                data: data4,
                options: options
            });

            var data5 = {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'June'],
                datasets: [{
                    label: 'Triceps Workout',
                    backgroundColor: 'white',
                    borderColor: 'grey',
                    borderWidth: 1,
                    data: [100, 200, 300, 400, 500, 600]
                }]
            };

            var ctx1 = document.getElementById('011111').getContext('2d');
            new Chart(ctx1, {
                type: 'bar',
                data: data5,
                options: options
            });
            
            var data6 = {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'June'],
                datasets: [{
                    label: 'Shoulder Workout',
                    backgroundColor: 'white',
                    borderColor: 'grey',
                    borderWidth: 1,
                    data: [100, 200, 300, 400, 500, 600]
                }]
            };

            var ctx1 = document.getElementById('0111111').getContext('2d');
            new Chart(ctx1, {
                type: 'bar',
                data: data6,
                options: options
            });

            var data7 = {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'June'],
                datasets: [{
                    label: 'Shoulder Workout',
                    backgroundColor: 'white',
                    borderColor: 'grey',
                    borderWidth: 1,
                    data: [100, 200, 300, 400, 500, 600]
                }]
            };

            var ctx1 = document.getElementById('01111111').getContext('2d');
            new Chart(ctx1, {
                type: 'bar',
                data: data7,
                options: options
            });

        </script>

</body>
</html>

