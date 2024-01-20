<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ratings</title>

    <style>
        
        body {
            margin: 15px;
            background-color: rgb(0, 0, 0);
        }

        nav {
            background-color: #504f4fcc;
            overflow: hidden;
            border-radius: 20px; 
            width: 31%; 
            float: left; 
            margin-right: 10px;
        }

        nav a {
            float: right;
            display: block;
            color: white;
            text-align: center;
            font-family: Arial;
            font-size: small;
            padding: 5px 10px;
            text-decoration: none;
            margin: 16px;
            border: 2px solid #fff;
            border-radius: 10px;
            transition: background-color 0.3s; 
        }

        nav a:hover {
            background-color: white; 
            color: black; 
        }

        .hidden {
            display: none;
        }

        .expand-btn {
            float: left;
            display: block;
            color: white;
            text-align: center;
            font-family: Arial;
            font-size: small;
            padding: 5px 10px;
            text-decoration: none;
            margin: 16px;
            border: 2px solid #fff;
            border-radius: 10px;
            transition: background-color 0.3s;
        }

        .expand-btn:hover {
            background-color: white;
            color: black;
        }


        .brand {
            float: left;
            font-size: 30px;
            padding: 14px 16px;
            color: white;
            font-family: fantasy;
        }

        main {
            max-width: 500px;
            margin: 10px auto;
            padding: 10px;
            background-color: rgb(0, 0, 0);
        }

        .container {
            display: flex;
            justify-content: space-between;
            align-items: center; 
        }
    
        .phone {
            position: absolute;
            top: 150px;
            left: 120px;
            width: 235px;
            height: 400px;
            border-radius: 20px;
            border: thin solid rgb(0, 0, 0);
            padding: 10px;
        }
    
        .phone img {
            width: 115%;
            height: 130%; 
            border-radius: 10px;
        }
    
        .ratings {
            border-radius: 40px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: right;
            margin-right: 60px;
        }
    
        .ratings h2 {
            position: absolute;
            top: 100px;
            left: 850px;
            font-size: 50px;
            margin-bottom: 40px;
            color: rgb(254, 254, 254);
        }

        .graph {
            position: absolute;
            width: 650px; 
            height: 400px; 
            background-color: #000000;
            border-radius: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 20px;
            top: 200px;
            left: 620px;
        }

        .graph h3 {
            font-size: 18px;
            margin-bottom: 10px;
            color: #ffffff;
            left: 500%;
            display: flex;
        }
    
        .graph canvas {
            width: 50%; 
            height: 50%; 
            background-color: #000000;
            border-radius: 10px;
            position: center;
        }

        @media screen and (max-width: 640px) {
            nav {
                width: 100%;
                border-radius: 0;
                margin-right: 0;
                background-color: black;
            }

            nav a {
                visibility: hidden;
            }

            .graph {
                position: absolute;
                width: 350px; 
                height: 250px; 
                background-color: #000000;
                border-radius: 20px;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                padding: 20px;
                left: 50px;
                top: 200px;
            }

            .ratings h2 {
                position: absolute;
                top: 100px;
                left: 150px;
            }

            .brand {
                display: block;
                float: left;
                text-align: center;
                margin-bottom: 10px;
            }

            .phone {
                visibility: hidden;
            }
            
        }

    </style>
</head>
<body>
    <br>
    <nav>
    <span class="brand">GymRat</span>
        <a id="accountsBtn" class="expand-btn">Accounts Center</a>
        <div id="accountsSubMenu" class="hidden">
            <a href="{{url('Login')}}">LOGOUT</a>
            <a href="{{url('Profile')}}">PROFILE</a>
          </div>
            
        <a id="monitoringBtn" class="expand-btn">Monitoring</a>
        <div id="monitoringSubMenu" class="hidden">
            <a href="{{url('Ratings')}}">RATINGS</a>
            <a href="{{url('Home')}}">HOME</a>
        </div>
    </nav>

    <br><br><br>


    <div class="ratings">
        <h2>RATINGS</h2>
        <div class="graph">
            <h3>Chest and Biceps</h3>
            <canvas id="myChart"></canvas>
        </div>

     <div class="phone">
            <img src="{{URL('images/phone.png')}}" alt="phone">
        </div>

        




<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>

document.getElementById("monitoringBtn").addEventListener("click", function () {
            var submenu = document.getElementById("monitoringSubMenu");
            submenu.classList.toggle("hidden");
            adjustNavWidth(); 
        });
    
        document.getElementById("accountsBtn").addEventListener("click", function () {
            var submenu = document.getElementById("accountsSubMenu");
            submenu.classList.toggle("hidden");
            adjustNavWidth(); 
        });
    
        function adjustNavWidth() {
            var nav = document.querySelector("nav");
            var expandedSubmenus = document.querySelectorAll(".expand-btn:not(.hidden)");
    
            if (expandedSubmenus.length > 0) {
                nav.style.width = "100%"; 
            } else {
                nav.style.width = "31%";
            }
        }


    var ctx = document.getElementById('myChart').getContext('2d');
    var chart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['6:00', '7:00', '8:00', '9:00', '10:00', '11:00', '12:00', '13:00'],
            datasets: [{
                label: 'STATISTICS',
                backgroundColor: 'rgba(255, 255, 255, 0.2)',
                borderColor: 'white',
                data: [1000, 1200, 1300, 1400, 1500, 1700, 1800, 2000]
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
</body>
</html>