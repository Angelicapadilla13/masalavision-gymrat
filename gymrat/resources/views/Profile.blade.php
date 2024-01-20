
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>

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

        h5, h6 {
            color: #929090;
            text-align: center;
            font-weight: bold;
            font-family: Arial;
        }

        h1 {
            color: #f8f6f6;
            text-align: center;
            font-weight: bold;
            font-family: Arial;
        }

        .orange-line-container {
            text-align: center;
        }

        .orange-line {
            border-bottom: 2px solid rgb(236, 126, 0);
            width: 25%; 
            margin: 20px auto;
        }

        table {
            border-collapse: collapse;
            width: 100%;
         }

         th, td {
            border: 1px solid #000000;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #000000;
        }

        img {
            width: 100%; 
            height: auto; 
        }

        img:hover {
            transform: scale(1.1);
        }
        
        
        footer {
            background-color: #5f3f3f;
            color: white;
            padding: 5px;
            text-align: center;
            position: fixed;
            bottom: 0;
            left: 0; 
            width: 100%;
            font-size: small;
            font-family: Arial;
            font-weight: bold;
            z-index: 1; 
        }

        @media screen and (max-width: 600px) {
            nav {
                width: 100%;
                border-radius: 0;
                margin-right: 0;
            }

            nav a {
                padding: 10px 8px;
                margin: 4px;
            }

            .brand {
                display: block;
                float: left;
                text-align: center;
                margin-bottom: 10px;
            }

            h5, h1, h6 {
                font-size: smaller;
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
    <main>
        <h5>OUR TEAM</h5>
        <h1>MEET EXPERT TEAM</h1>
        <div class="orange-line"></div>
        <h6>WE ARE THE MASALVISION GROUP AT PHINMA-UNIVERSITY OF PANGASINAN, <br>WORKING ON ONE MAJOR PROJECT HANDLED BY FOUR PROFESSORS FROM CITE FACULTY.</h6>
    </main>

    <table>
        <tbody>
          <tr>
            <td><img src="{{URL('images/J.PNG')}}" alt="1"></td>
            <td><img src="{{URL('images/Bl.jpg')}}" alt="2"></td>
            <td><img src="{{URL('images/K.PNG')}}" alt="3"></td>
          </tr>
          <tr>
            <td><img src="{{URL('images/Bl.jpg')}}" alt="4"></td>
            <td><img src="{{URL('images/M.PNG')}}" alt="5"></td>
            <td><img src="{{URL('images/Bl.jpg')}}" alt="6"></td>
          </tr>
          <tr>
            <td><img src="{{URL('images/B.PNG')}}" alt="7"></td>
            <td><img src="{{URL('images/Bl.jpg')}}" alt="8"></td>
            <td><img src="{{URL('images/P.PNG')}}" alt="9"></td>
          </tr>
        </tbody>
      </table>
      
    </div>
    <br><br><br><br><br>

    <footer>
        <p>&copy; 2024 GYMRAT. ALL RIGHTS RESERVED.</p>
    </footer>

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
    </script>
    

</body>
</html>