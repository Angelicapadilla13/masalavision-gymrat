<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise</title>
</head>

<style>
    body {
        font-family: 'Arial', sans-serif;
        background: #000;
        color: #fff;
        margin: 0;
        padding: 0;
    }

    .navbar {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        background-color: #333;
        padding: 20px 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        z-index: 1000;
    }

    .navbar .arrow {
        font-size: 24px;
        color: rgb(0, 191, 162);
        text-decoration: none;
        margin-right: 20px;
        transition: transform 0.3s ease-in-out;
    }

    .navbar .arrow:hover {
        transform: scale(1.2);
    }

    .about {
        text-align: center;
        padding-top: 100px;
    }

    .about h5 {
        color: rgb(0, 143, 122);
        font-size: 24px;
    }

    .about h1 {
        font-size: 30px;
        margin-bottom: 20px;
    }

    .about h6 {
        font-size: 15px;
        line-height: 1.5;
    }

    .orange-line {
        border-bottom: 2px solid #008F7A;
        width: 20%;
        margin: 20px auto;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 50px;
    }

    td {
        padding: 10px;
    }

    img {
        width: 100%;
        height: auto;
        transition: transform 0.3s ease-in-out;
    }

    img:hover {
        transform: scale(1.1);
    }

    .footer {
        background-color: #008F7A;
        color: #fff;
        padding: 20px 0;
        text-align: center;
        font-size: 14px;
        position: relative;
        bottom: 0;
        width: 100%;
    }

    @media only screen and (max-width: 600px) {
        .about h1 {
            font-size: small;
        }

        .about h5 {
            font-size: small;
        }

        .about h6 {
            font-size: small;
        }
    }

</style>

<body>
<header class="navbar">
    <a href="{{url('Home')}}" class="arrow">⬅</a>
</header>

<section class="about" id="abouts">
    <div>
        <h5>OUR TEAM</h5>
        <h1>WE ARE MASALAVISION GROUP</h1>
        <div class="orange-line"></div>
        <h6>WE ARE THE MASALAVISION GROUP AT PHINMA-UNIVERSITY OF PANGASINAN, <br>
            WORKING ON ONE MAJOR PROJECT HANDLED BY FOUR PROFESSORS FROM CITE FACULTY.</h6>
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
</section><br><br>

<footer class="footer">
    <p>&copy; 2024 GYMRAT. ALL RIGHTS RESERVED.</p>
</footer>

</body>
</html>
