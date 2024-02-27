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

    .user-infor {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100%;
    }

    .user-infor h1 {
      font-size: 30px;
      color: #333;
      text-align: center;
      border-radius: 10px;
      margin-bottom: 0;
      margin-left:250px;
      margin-top: 50px;
    }
    
    #search-container {
      text-align: center;
      margin: 20px auto;
      background-color: #ffffff;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      padding: 15px;
      border-radius: 10px;
      width: 600px;
      margin-left: 460px;
    }

    #result-container {
      text-align: center;
      margin-top: 20px;
      margin-left:250px;
    }

    #user-info {
      border: 1px solid #ddd;
      padding: 20px;
      border-radius: 8px;
      background-color: #fff;
      max-width: 300px;
      margin: 0 auto;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    #search-container h1 {
      margin-bottom: 10px;
    }

    #search-form {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    #search-form label,
    #search-form input {
      margin: 5px;
    }
    
    #search-form button {
      margin: 5px;
      background-color: #3e9890;
    }

    #search-form label {
      font-weight: bold;
    }

    #username {
      padding: 8px;
      border: 1px solid #ddd;
      border-radius: 4px;
    }

    button {
      padding: 8px 16px;
      background-color: #333;
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    button:hover {
      background-color: #555;
    }

    #fullname {
      padding: 8px;
      border: 1px solid #ddd;
      border-radius: 4px;
      font-size: 15px; 
      color: #333; 
      transition: border-color 0.3s ease; 
    }

    #fullname::placeholder {
      color: #999; 
    }

    #fullname:focus {
      border-color: #3e9890; 
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

      #search-container {
        width: 90%;
        margin-left: 0;
      }

      #result-container {
        width: 100%;
        margin-left: 0;
      }

      #user-info {
        max-width: 100%;
        margin-left: 0;
      }

      .user-infor h1 {
        margin-top: 100px;
        margin-left: 0;
      }

      .content {
        margin-left: 0;
        margin-top: 400px;
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

<div class="content">
    <div class="user-infor">
      <h1>User Information</h1> 
    </div>
    
    <div id="search-container">
      <form id="search-form">
        <label for="fullname">Enter full name:</label>
        <input type="text" id="fullname" name="fullname" placeholder="Full Name" required>
        <button type="button" onclick="searchUser()">Search</button>
      </form>
    </div>
  
    <div id="result-container">
      <div id="user-info"></div>
    </div>
    
    <div class="chart-container" id="UserInfo">
      <canvas id="userIn"></canvas>
    </div>
  </div>

  <script>
    const mockUsersData = [
      {
        name: "Angelica Padilla",
        email: "ange.padi@example.com",
        age: 21,
        gender: "Female",
      },
      {
        name: "Miro Asuncion",
        email: "miro.asuncion@example.com",
        age: 21,
        gender: "Male",
      },
    ];
  
    function searchUser() {
      const fullnameInput = document.getElementById("fullname");
      const userInput = fullnameInput.value.toLowerCase();
  
      const foundUser = mockUsersData.find(user => user.name.toLowerCase() === userInput);
  
      const userInfoContainer = document.getElementById("user-info");
  
      if (foundUser) {
        userInfoContainer.innerHTML = `
          <h2>${foundUser.name}</h2>
          <p><strong>Age:</strong> ${foundUser.age}</p>
          <p><strong>Gender:</strong> ${foundUser.gender}</p>
          <p><strong>Email:</strong> ${foundUser.email}</p>
        `;
      } else {
        userInfoContainer.innerHTML = `<p>User not found.</p>`;
      }
  

      fullnameInput.value = "";
  
      fullnameInput.focus();
    }
  </script>
  
</body>
</html>
