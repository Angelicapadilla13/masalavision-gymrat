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

            .navbar {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                background-color: grey;
                padding: 10px;
                display: flex;
                justify-content: space-between;
                align-items: center;
                z-index: 1000;
            }

            .navbar a {
                color: white;
                text-decoration: none;
                margin-right: 20px;
            }

            .navbar .arrow {
                font-size: 40px;
            }


             .about {
                position: relative;
                width: 100%;
                height: 585px;
                text-align: center;
                background-color: black;
                color: white;
            }

            .about-txt-container {
                position: relative;
                top: 50px;
            }

            .orange-line-container {
                text-align: center;
            }

            .orange-line {
                border-bottom: 2px solid rgb(236, 126, 0);
                width: 15%; 
                margin: 20px auto;
            }

            table {
                position: relative;
                top: 100px;
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

            footer {
            background-color: blue;
            color: white;
            padding: 5px;
            text-align: center;
            bottom: 0;
            left: 0; 
            width: 100%;
            font-size: small;
            font-family: Arial;
            font-weight: bold;
            z-index: 1; 
           }

            @media only screen and (max-width: 601px) {
                .footer {
                    top: 2120px;

                h1, h5, h6 {
                    font-size: small;
                }
                

                }

            }

    </style>
  </head>
<body>

        <header class="navbar">
        <a href="{{url('Home')}}" class="arrow">⬅</a>
        </header>


        <section class="about" id="abouts">
            <div class="about-txt-container"><br>
                <h5>OUR TEAM</h5>
                <h1>WE ARE MASALAVISION GROUP</h1>
                <div class="orange-line"></div>
                <h6>WE ARE THE MASALVISION GROUP AT PHINMA-UNIVERSITY OF PANGASINAN, 
                <br>WORKING ON ONE MAJOR PROJECT HANDLED BY FOUR PROFESSORS FROM CITE FACULTY.</h6>
            </div>
            <table>
        <tbody>
          <tr>
            <td><img src="{{URL('images/J.PNG')}}" alt="1"></td>
            <td><img src="{{URL('images/BL.jpg')}}" alt="2"></td>
            <td><img src="{{URL('images/K.PNG')}}" alt="3"></td>
          </tr>
          <tr>
            <td><img src="{{URL('images/BL.jpg')}}" alt="4"></td>
            <td><img src="{{URL('images/M.PNG')}}" alt="5"></td>
            <td><img src="{{URL('images/BL.jpg')}}" alt="6"></td>
          </tr>
          <tr>
            <td><img src="{{URL('images/B.PNG')}}" alt="7"></td>
            <td><img src="{{URL('images/BL.jpg')}}" alt="8"></td>
            <td><img src="{{URL('images/P.PNG')}}" alt="9"></td>
          </tr>
        </tbody>
      </table>
      
      <br><br><br><br><br>
      <br><br><br><br><br>

      <footer>
        <p>&copy; 2024 GYMRAT. ALL RIGHTS RESERVED.</p>
    </footer>
    </section>


</body>
</html>