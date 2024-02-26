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

    .content {
      margin-left: 250px;
      padding: 20px;
      width: calc(100% - 250px);
    }

    .content div {
      margin-bottom: 20px;
      width: calc(100% - 40px);
    }

    .chart-container {
      padding: 20px;
      border-radius: 10px;
      margin-bottom: 20px;
    }

    .account-center {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100%;
    }

    .account-center h1 {
      font-size: 2.5rem;
      color: #333;
      text-align: center;
      border-radius: 10px;
      margin-bottom: 0;
      margin-top: 5px;
    }

    #barChartContainer {
      background-color: rgb(255, 255, 255);
      height: 250;
      width: fit-content; 
      float: left;
      margin-left: 100px;
    }

    #genderChartContainer {
      background-color: #ffffff;
      height: 250px;
      width: fit-content;
      float: left;
      margin-left: 30px;
    }

    #ageChartContainer {
      background-color: #ffffff;
      height: 160px;
      width: fit-content;
      float: left;
      margin-top: 10px;
      margin-left: 300px;
    }


    @media only screen and (max-width: 600px) {

      #barChartContainer {
        margin-left: 0;
      }

      #ageChartContainer {
        margin-left: 0;
      }

      #ageChartContainer {
        margin-left: 0;
      }

      .account-center h1 {
        font-size: 2rem; 
      }

      .sidebar {
        width: 100%;
        top: 0;
        height: auto;
        position: static;
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

      .content {
        margin-left: 0;
        padding-top: 100px;
        width: 100%;
      }

      .content div {
        width: calc(100% - 40px);
      }

      .chart-container {
        height: 200px; 
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
      <li><a href="#" id="home"><i class="fas fa-home"></i> Home</a></li>
      <li><a href="#" id="users"><i class="fas fa-users"></i> Users</a></li>
      <li><a href="#" id="account"><i class="fas fa-user"></i> Account Center</a></li>
      <li>
        <a href="#" id="exercise"><i class="fas fa-dumbbell"></i> Exercise Monitoring &nbsp;<i class="fas fa-caret-down"></i></a>
        <ul class="submenu">
          <li><a href="#"><i class="fas fa-angle-right"></i> Chest</a></li>
          <li><a href="#"><i class="fas fa-angle-right"></i> Triceps</a></li>
          <li><a href="#"><i class="fas fa-angle-right"></i> Biceps</a></li>
          <li><a href="#"><i class="fas fa-angle-right"></i> Back</a></li>
          <li><a href="#"><i class="fas fa-angle-right"></i> Legs</a></li>
          <li><a href="#"><i class="fas fa-angle-right"></i> Shoulders</a></li>
        </ul>
      </li>
    </ul>
  </div>

  <div class="content">
    <div class="account-center">
      <h1>Account Center</h1> 
    </div>
    <div class="chart-container" id="barChartContainer">
      <canvas id="barChart" width="500"></canvas>
    </div>
    <div class="chart-container" id="genderChartContainer">
      <canvas id="pieChart"></canvas>
    </div>
    <div class="chart-container" id="ageChartContainer">
      <canvas id="ageChart"></canvas>
    </div>
  </div>
  
  

  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const userData = {
        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
        values: [100, 150, 200, 250, 300, 350, 400] 
      };

      const genderData = {
        labels: ['Male', 'Female', 'Unknown'],
        values: [60, 30, 10] 
      };

      const ageData = {
        labels: ['12-20', '21-30', '31-40', '41-50', '51-60'],
        values: [20, 35, 50, 45, 30]
      };

      // Bar Chart
      var barChart = new Chart(document.getElementById('barChart'), {
        type: 'bar',
        data: {
          labels: userData.labels,
          datasets: [{
            label: 'Number of Users',
            backgroundColor: '#4d98bb',
            data: userData.values
          }]
        },
        options: {
          legend: { display: false },
          title: {
            display: true,
            text: 'Number of Users by Month'
          }
        }
      });

      // Pie Chart
      var pieChart = new Chart(document.getElementById('pieChart'), {
        type: 'pie',
        data: {
          labels: genderData.labels,
          datasets: [{
            backgroundColor: ['#3e95cd', '#8e5ea2', '#3cba9f'],
            data: genderData.values
          }]
        },
        options: {
          title: {
            display: true,
            text: 'Gender Distribution'
          }
        }
      });

      // Age Chart
      var ageChart = new Chart(document.getElementById('ageChart'), {
        type: 'line',
        data: {
          labels: ageData.labels,
          datasets: [{
            data: ageData.values,
            label: 'Age Distribution',
            borderColor: '#3e9890',
            fill: false
          }]
        },
        options: {
          title: {
            display: true,
            text: 'Age Distribution'
          }
        }
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
