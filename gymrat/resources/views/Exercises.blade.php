<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@300&display=swap" rel="stylesheet">
        <title>Gymrat</title>
    </head>
    <body style="background-color: black;">
        <style>
            * {
                font-family: 'Inconsolata', monospace;
            }

            html {
                scroll-behavior: smooth;
            }
            .navbar {
                position: fixed;
                text-align: center;
                background-color: grey;
                z-index: 4;
                left: -0.1px;
                top: -0.1px;
                width: 100%;
                height: 50px;
            }

            button {
                border-radius: 5px;
            }
            

            #Gymrat-logo {
                position: relative;
                left: -600px;
                color: white;
                font-family: fantasy;
            }

            .interaction {
                position: relative;
                margin-top: -35px;
                left: 300px;
            }
            
            .users {
                position: relative;
                top: 50px;
                width: 100%;
                height: 585px;
                text-align: center;
                background-color: rgb(0, 0, 0);
            }

            #phone {
                position: relative;
                top: 50px;
                left: -450px;
                width: 250px;
                height: auto;
            }
            
            #users {
                position: relative;
                font-size: 30px;
                width: 100px;
                top: -400px;
                left: 140px;
                margin: auto;
                color: white;
            }

            .graph {
                position: relative;
                width: 650px; 
                height: 330px; 
                background-color: #000000;
                border-radius: 20px;
                margin: auto;
                top: -380px;
                left: 150px;
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

            #workout-p {
                position: relative;
                top: 50px;
                font-size: 80px;
                color: white;
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
                background-color: rgb(0, 0, 0);
                height: 450px;
            }

            footer {
            background-color: #5f3f3f;
            color: white;
            padding: 5px;
            text-align: center;
            position: relative;
            bottom: 0;
            left: 0; 
            width: 100%;
            font-size: small;
            font-family: Arial;
            font-weight: bold;
            z-index: 1; 
           }

            @media only screen and (max-width: 601px) {
                
                .navbar {
                    content-visibility: hidden;    
                }

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

                #workout-p {
                    left: -100px;
                    font-size: small;
                    color: white;
                }

                #phone {
                    visibility: hidden;
                }

                .workouts-container {
                    height: 100px;
                }

                .chest, .back, .abs, .biceps, .triceps, .shoulder, .legs {
                    height: 150px;
                }  

                .footer {
                    top: 2120px;

                h1, h5, h6 {
                    font-size: small;
                }
                

                }

            }

        </style>
        <section class="navbar">
            <p id="Gymrat-logo">GYMRAT</p>
            <section class="interaction">
                <a href="#user"><button>Users</button></a>
                <a href="#chest"><button>Chest</button></a>
                <a href="#back"><button>Back</button></a>
                <a href="#abs"><button>Abs</button></a>
                <a href="#biceps"><button>Biceps</button></a>
                <a href="#triceps"><button>Triceps</button></a>
                <a href="#shoulder"><button>Shoulder</button></a>
                <a href="#legs"><button>Legs</button></a>
                <a href="#abouts"><button>About us</button></a>
                <a href="{{url('Login')}}"><button>Logout</button></a>
            </section>
        </section>


        <section class="users" id="user">
            <img  id="phone" src="{{URL('images/phone.png')}}">
            <p id="users">Users</p>
            <div class="graph">
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

        <section class="workouts-container">
            <p id="workout-p">Workout</p>
            <section class="chest" id="chest">
                <br><h1 style="color: white;">CHEST</h1><br>
                <canvas id="010000" width="700" height="300;" style="margin: auto;"></canvas
                <canvas id="020000" width="600" height="200"></canvas>
                <canvas id="030000" width="600" height="200"></canvas>
                <canvas id="040000" width="600" height="200"></canvas>
                <canvas id="050000" width="600" height="200"></canvas>
                <canvas id="060000" width="600" height="200"></canvas>
            </section>
                <section class="back" id="back">
                    <br><h1 style="color: white;">BACK</h1><br>
                    <canvas id="011000" width="700" height="300;" style="margin: auto;"></canvas>
                    <canvas id="022000" width="600" height="200"></canvas>
                    <canvas id="033000" width="600" height="200"></canvas>
                    <canvas id="044000" width="600" height="200"></canvas>
                    <canvas id="055000" width="600" height="200"></canvas>
                    <canvas id="066000" width="600" height="200"></canvas>
                </section>
                    <section class="abs" id="abs">
                        <br><h1 style="color: white;">ABS</h1><br>
                        <canvas id="011100" width="700" height="300;" style="margin: auto;"></canvas>
                        <canvas id="022200" width="600" height="200"></canvas>
                        <canvas id="033300" width="600" height="200"></canvas>
                        <canvas id="044400" width="600" height="200"></canvas>
                        <canvas id="055500" width="600" height="200"></canvas>
                        <canvas id="066600" width="600" height="200"></canvas>
                    </section>
                        <section class="biceps" id="biceps">
                            <br><h1 style="color: white;">BICEPS</h1><br>
                            <canvas id="011110" width="700" height="300;" style="margin: auto;"></canvas>
                            <canvas id="022220" width="600" height="200"></canvas>
                            <canvas id="033330" width="600" height="200"></canvas>
                            <canvas id="044440" width="600" height="200"></canvas>
                            <canvas id="055550" width="600" height="200"></canvas>
                            <canvas id="066660" width="600" height="200"></canvas>
                        </section>
                    <section class="triceps" id="triceps">
                        <br><h1 style="color: white;">TRICEPS</h1><br>
                        <canvas id="011111" width="700" height="300;" style="margin: auto;"></canvas>
                        <canvas id="022220" width="600" height="200"></canvas>
                        <canvas id="033330" width="600" height="200"></canvas>
                        <canvas id="044440" width="600" height="200"></canvas>
                        <canvas id="055550" width="600" height="200"></canvas>
                        <canvas id="066660" width="600" height="200"></canvas>
                    </section>
                <section class="shoulder" id="shoulder">
                    <br><h1 style="color: white;">SHOULDER</h1><br>
                    <canvas id="0111111" width="700" height="300;" style="margin: auto;"></canvas>
                    <canvas id="022220" width="600" height="200"></canvas>
                    <canvas id="033330" width="600" height="200"></canvas>
                    <canvas id="044440" width="600" height="200"></canvas>
                    <canvas id="055550" width="600" height="200"></canvas>
                    <canvas id="066660" width="600" height="200"></canvas>
                </section>
            <section class="legs" id="legs">
                <br><h1 style="color: white;">LEGS</h1><br>
                <canvas id="01111111" width="700" height="300;" style="margin: auto;"></canvas>
                <canvas id="022220" width="600" height="200"></canvas>
                <canvas id="033330" width="600" height="200"></canvas>
                <canvas id="044440" width="600" height="200"></canvas>
                <canvas id="055550" width="600" height="200"></canvas>
                <canvas id="066660" width="600" height="200"></canvas>
            </section>
        </section>

        <footer>
        <p>&copy; 2024 GYMRAT. ALL RIGHTS RESERVED.</p>
    </footer>
    </section>




        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            var ctx = document.getElementById('myChart').getContext('2d');
            var chart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['2024', '2025', '2026', '2027', '2028', '2029', '2030'],
                    datasets: [{
                        label: 'User Loyalty',
                        backgroundColor: 'rgba(255, 255, 255, 0.2)',
                        borderColor: 'white',
                        data: [1050, 2000, 2050, 3000, 3050, 4000, 4050]
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