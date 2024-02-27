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


    @media only screen and (max-width: 600px) {

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
        <li><a href="{{url('Exercises')}}" id="exercise"><i class="fas fa-dumbbell"></i> Exercise Monitoring</a></li>
        <li><a href="{{url('Login')}}" id="logout"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
    </ul>
</div>



</body>
</html>
