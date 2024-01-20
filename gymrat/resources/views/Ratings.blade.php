
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ratings</title>

    <style>
        
        body {
            margin: 15px;
            background-color: black;
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

    
        .graph {
            position: absolute;
            top: 120px;
            left: 50px;
            width: 60%;
            height: 100%;
            background-color: #000000;
            border-radius: 20px;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin-left: 20px;
            margin-top: 80  px;
        }    
        
        .graph h3 {
            font-size: 25px;
            margin-bottom: 10px;
            color: white;
            font-family: fantasy;
        }

        .graph canvas {
            width: 100%;
            height: 100%;
            background-color: #000000;
            border-radius: 10px;
        }


        .gray-container {
            position: absolute;
            top: 200px;
            left: 1000px;
            background-color: #3e3e3e;
            width: 200px;
            height: 140px;
            border-radius: 10px;
            text-align: center;
            align-items: center;
            justify-content: center;
            display: flex;
            font-family: fantasy;
            transition: transform 0.3s ease;
        }
        
        .gray-container:hover{
            transform: scale(1.1);
            background-color: #2d2d2d;
        }
        
        .gray-container h2{
            color: #bbbbbb;
        }
        
        
        .gray-container h2:hover{
            color: rgb(255, 255, 255);
        }
        
        .gray-container-2 {
            position: absolute;
            top: 400px;
            left: 1000px;
            background-color: #3e3e3e;
            width: 200px;
            height: 140px;
            border-radius: 10px;
            text-align: center;
            align-items:  center;
            justify-content: center;
            display: flex;
            font-family: fantasy;
            transition: transform 0.3s ease;
        }
        
        .gray-container-2:hover {
            transform: scale(1.1);
            background-color: #2d2d2d;
        }
        
        .gray-container-2 h3{
            color: #bbbbbb;
        }
        
        .gray-container-2 h3:hover{
            color: rgb(255, 255, 255);
        }


        @media screen and (max-width: 600px) {
            nav {
                width: 100%;
                border-radius: 0;
                margin-right: 0;
                background: black;
            }

            nav a {
                visibility: hidden;
            }

            .brand {
                display: block;
                float: left;
                text-align: center;
                margin-bottom: 10px;
            }
            
            .graph h3 {
                position: absolute;
                left: 70px;
                top: -70px;
            }

            .graph {
                width: 70%;
                top: 150px;
            }
 
            .gray-container {
                top: 370px;
                left: 140px;
            }

            .gray-container-2 {
                top: 600px;
                left: 140px;
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

    <br><br><br><br><br>
    <br><br><br><br><br>

    <div class="ratings">
        <div class="graph">
            <h3>CHEST AND TRICEPS</h3>
            <canvas id="myChart"></canvas>
        </div>
    </div>


    <div class="gray-container">
        <h2>BACK AND TRICEPS</h2>
    </div>

    <div class="gray-container-2">
        <h3>LEG AND LOWER BODY</h3>
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
                nav.style.width = "30%";
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