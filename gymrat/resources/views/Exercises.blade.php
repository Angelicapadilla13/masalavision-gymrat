<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GymRat Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #eaeaea;
        }

        .sidebar {
            background-color: #121323;
            color: #fff;
            width: 250px;
            height: 100vh;
            padding: 10px;
            position: fixed;
        }

        .sidebar h2 {
            margin-bottom: 50px;
            text-align: center;
            margin-top: 40px;
        }

        .sidebar .logo {
            margin-bottom: 20px;
        }

        .sidebar ul {
            list-style-type: none;
            padding: 0;
        }

        .sidebar li {
            margin-bottom: 20px;
            margin-left: 5px;
        }

        .sidebar a {
            color: #fff;
            text-decoration: none;
            display: flex;
            align-items: center;
        }

        .sidebar a i {
            margin-right: 10px;
            color: #3e9890;
        }

        .sidebar .submenu {
            display: none;
            margin-top: 10px;
        }

        .sidebar .submenu.show {
            display: block;
        }

        .sidebar a {
            background-color: #121323;
            color: rgb(255, 255, 255);
            border-radius: 5px;
            padding: 5px;
            transition: background-color 0.5s, color 0.5s;
        }

        .sidebar a:hover {
            background-color: #e6e2e274;
            color: black;
        }

        .sidebar a:hover i {
            color: #000000;
        }

        .chart-container {
            margin-bottom: 200px;
            margin-top: 10px;
            background-color: #fff; 
            border-radius: 5px; 
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); 
            width: 900px;
            margin-left: 340px;
        }

        .exercise-monitoring {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }

        .exercise-monitoring h1 {
            text-align: center;
            font-size: 30px;
            color: #333;
            margin-left: 270px;
            margin-top: 40px;
            margin-bottom: 30px;
        }

        @media only screen and (max-width: 600px) {

        .chart-container{
            margin-left: 0;
            width: 100%;
        }

        .exercise-monitoring h1 {
            margin-top: 500px;
            margin-left: 0;
        }

        .sidebar {
          width: 100%;
          top: 0;
          height: auto;
          position: fixed;
        }

        .sidebar h2 {
          margin-bottom: 10px;
        }

        .sidebar .logo {
          text-align: center;
        }

        .sidebar ul {
          padding-left: 10px;
        }

        .sidebar li {
          margin-left: 0;
        }

        .sidebar a {
          padding: 10px;
        }

        .sidebar .submenu {
          margin-left: 20px;
        }
        }
        </style>
    
</head>
<body>

<div class="sidebar">
    <div class="logo">
        <h2><i class="fas fa-chart-line"></i> GymRat</h2>
    </div>
    <ul>
        <li><a href="{{url('Dashboard')}}" id="dashboard"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
        <li><a href="{{url('Users')}}" id="users"><i class="fas fa-users"></i> Users</a></li>
        <li><a href="{{url('Account')}}" id="account"><i class="fas fa-user"></i> Account Center</a></li>
        <li>
            <a href="#" id="exercise"><i class="fas fa-dumbbell"></i> Exercise Monitoring &nbsp;<i class="fas fa-caret-down"></i></a>
            <ul class="submenu">
                <li><a href="#chestChart"><i class="fas fa-angle-right"></i> Chest</a></li>
                <li><a href="#tricepsChart"><i class="fas fa-angle-right"></i> Triceps</a></li>
                <li><a href="#bicepsChart"><i class="fas fa-angle-right"></i> Biceps</a></li>
                <li><a href="#backChart"><i class="fas fa-angle-right"></i> Back</a></li>
                <li><a href="#legsChart"><i class="fas fa-angle-right"></i> Legs</a></li>
                <li><a href="#shouldersChart"><i class="fas fa-angle-right"></i> Shoulders</a></li>
            </ul>
        </li>
        <li><a href="{{url('Login')}}" id="logout"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
    </ul>
</div>


<div class="main-content">
    <div class="exercise-monitoring">
      <h1>Exercise Monitoring</h1> 
    </div>
    <div class="chart-container">
        <canvas id="chestChart"></canvas>
    </div>
    <div class="chart-container">
        <canvas id="tricepsChart"></canvas>
    </div>
    <div class="chart-container">
        <canvas id="bicepsChart"></canvas>
    </div>
    <div class="chart-container">
        <canvas id="backChart"></canvas>
    </div>
    <div class="chart-container">
        <canvas id="legsChart"></canvas>
    </div>
    <div class="chart-container">
        <canvas id="shouldersChart"></canvas>
    </div>
</div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const chestData = {
            labels: ['January', 'February', 'March', 'April', 'May', 'June'],
            datasets: [{
                label: 'Chest Activity Level',
                backgroundColor: 'rgba(255, 99, 132, 0.5)',
                borderColor: 'rgba(255, 99, 132, 1)',
                borderWidth: 1,
                data: [12, 15, 18, 20, 22, 25],
            }]
        };

        const tricepsData = {
            labels: ['January', 'February', 'March', 'April', 'May', 'June'],
            datasets: [{
                label: 'Triceps Activity Level',
                backgroundColor: 'rgba(54, 162, 235, 0.5)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1,
                data: [8, 10, 12, 15, 18, 20],
            }]
        };

        const bicepsData = {
            labels: ['January', 'February', 'March', 'April', 'May', 'June'],
            datasets: [{
                label: 'Biceps Activity Level',
                backgroundColor: 'rgba(255, 206, 86, 0.5)',
                borderColor: 'rgba(255, 206, 86, 1)',
                borderWidth: 1,
                data: [10, 12, 14, 16, 18, 20],
            }]
        };

        const backData = {
            labels: ['January', 'February', 'March', 'April', 'May', 'June'],
            datasets: [{
                label: 'Back Activity Level',
                backgroundColor: 'rgba(75, 192, 192, 0.5)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1,
                data: [15, 18, 20, 22, 25, 28],
            }]
        };

        const legsData = {
            labels: ['January', 'February', 'March', 'April', 'May', 'June'],
            datasets: [{
                label: 'Legs Activity Level',
                backgroundColor: 'rgba(153, 102, 255, 0.5)',
                borderColor: 'rgba(153, 102, 255, 1)',
                borderWidth: 1,
                data: [20, 22, 25, 28, 30, 32],
            }]
        };

        const shouldersData = {
            labels: ['January', 'February', 'March', 'April', 'May', 'June'],
            datasets: [{
                label: 'Shoulders Activity Level',
                backgroundColor: 'rgba(255, 159, 64, 0.5)',
                borderColor: 'rgba(255, 159, 64, 1)',
                borderWidth: 1,
                data: [18, 20, 22, 25, 28, 30],
            }]
        };

        const options = {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        };

        ['chest', 'triceps', 'biceps', 'back', 'legs', 'shoulders'].forEach((exercise, index) => {
            const ctx = document.getElementById(`${exercise}Chart`).getContext('2d');
            let chartData;
            switch (exercise) {
                case 'chest':
                    chartData = chestData;
                    break;
                case 'triceps':
                    chartData = tricepsData;
                    break;
                case 'biceps':
                    chartData = bicepsData;
                    break;
                case 'back':
                    chartData = backData;
                    break;
                case 'legs':
                    chartData = legsData;
                    break;
                case 'shoulders':
                    chartData = shouldersData;
                    break;
                default:
                    chartData = {};
            }
            new Chart(ctx, {
                type: 'bar',
                data: chartData,
                options: options
            });
        });
    });
</script>


<script>
    document.addEventListener("DOMContentLoaded", function() {
      const submenus = document.querySelectorAll('.submenu');
      submenus.forEach(submenu => {
        const parentMenuItem = submenu.parentElement.querySelector('a'); 
        parentMenuItem.addEventListener('click', function(e) {
          e.preventDefault();
          submenu.classList.toggle('show');
        });
      });
    });
  </script>


</body>
</html>
