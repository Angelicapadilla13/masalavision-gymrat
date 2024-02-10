<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>GymRat</title>

    <style>
    @import url("https://fonts.googleapis.com/css2?family=Nunito:wght@200;400;500;700&display=swap");
    :root {
        --clr-primary: #29a396;
    }
    
    *,
    *::after,
    *::before {
        box-sizing: border-box;
        padding: 0;
        margin: 0;
        font-family: "Nunito", sans-serif;
    }
    
    body {
        width: 100%;
        min-height: 100vh;
        color: #fff;
        overflow-x: hidden;
        background-color: #1d1f1e;
    }
    
    .container {
        width: 80%;
        margin: 0 auto;
    }
    
    .flex {
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .header {
        width: 100%;
        padding: 20px 0;
        overflow: hidden;
        background-color: black;
    }
    
    .header::after,
    .header::before,
    .section::after,
    .section::before {
        content: "";
        background: url(https://raw.githubusercontent.com/programmercloud/pgc-gym/main/img/blur-1.png);
        position: absolute;
        width: 400px;
        height: 400px;
        background-position: center;
        background-repeat: no-repeat;
        background-size: contain;
        bottom: 0;
    }
    
    .header::after {
        left: -200px;
    }
    
    .header::before {
        right: -200px;
    }
    
    .mb {
        margin-bottom: 20px;
    }
    
    .mt {
        margin-top: 20px;
    }
    
    .section {
        position: relative;
        padding: 80px 0;
    }
    
    .section::after {
        left: -200px;
    }
    
    .section::before {
        width: 600px;
        right: -200px;
    }
    
    .section:nth-child(even) {
        background: #141615;
    }
    
    .section:nth-child(even)::after,
    .section:nth-child(even)::before {
        display: none;
    }
    
    .primary {
        font-size: 35px;
        font-weight: 700;
    }
    
    .secondary {
        font-size: 25px;
        font-weight: 700;
    }
    
    .tertiary {
        font-size: 15px;
    }

    .menu {
        width: 100%;
        background-color: black;
        padding: 12px 0;
    }
    
    .menu .container {
        justify-content: space-between;
    }
    
    .logo {
        cursor: pointer;
    }
    
    .logo img {
        width: 80px;
        height: auto;
        margin-top: 10px;
    }
    
    .nav {
        list-style: none;
    }
    
    .nav-item {
        display: inline-block;
        margin-right: 30px;
        font-size: 18px;
        font-weight: 400;
    }
    
    .nav-item a {
        text-decoration: none;
        color: #fff;
    }
    
    .nav-item:hover a {
        color: #29a396;
        transition: 0.3s linear;
    }
    
    .nav-item:last-of-type {
        margin-right: 0;
    }
    
    .text {
        width: 100%;
        margin-bottom: 30px;
        text-align: center;
    }
    
    .visual {
        width: 100%;
        text-align: center;
    }
    
    .visual img {
        width: 80%;
        max-width: 500px;
    }
    
    .header h1 {
        font-size: 50px;
        font-weight: 700;
    }
    
    .header h1 span {
        color: var(--clr-primary);
    }

    @media screen and (max-width: 768px) {
        .container {
        width: 90%;
        }
        .nav-item {
        font-size: 16px;
        }
        .header h1 {
        font-size: 40px;
        }
    }

    @media screen and (max-width: 480px) {
        .nav-item {
        font-size: 14px;
        margin-right: 20px;
        }
        .header h1 {
        font-size: 30px;
        }
    }
    </style>

</head>
<body>

<div class="menu">
  <div class="container flex">
    <div class="logo">
      <img src="{{URL('images/logo.png')}}" alt="logo"/>
    </div>
    <ul class="nav">
      <li class="nav-item"><a href="#home">Home</a></li>
      <li class="nav-item"><a href="{{URL('Admins')}}">Admins</a></li>
      <li class="nav-item"><a href="{{URL('Users')}}">Users</a></li>
      <li class="nav-item"><a href="{{URL('Account')}}">Account Center</a></li>
      <li class="nav-item"><a href="{{URL('Exercises')}}">Exercise Monitoring</a></li>
      <li class="nav-item"><a href="{{URL('Login')}}">Logout</a></li>
    </ul>
  </div>
</div>

<header class="header" id="home">
  <div class="container flex">
    <div class="text">
      <h1 class="mb">
        Complete Daily <br>
        Workout with <span>GYMRAT</span>
      </h1>
      <p class="mb">
        This web admin panel provides a centralized interface for managing
        and controlling various aspects of the website, such as account center and exercise monitoring.
      </p>
    </div>
    <div class="visual">
      <img src="{{URL('images/banner.png')}}" alt=""/>
    </div>
  </div>
</header>

</body>
</html>
