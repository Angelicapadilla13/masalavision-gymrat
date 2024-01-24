<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet">
<title>Home</title>

<style>@import 'https://fonts.googleapis.com/css?family=Montserrat:300, 400, 700&display=swap';
* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

html {
    font-size: 10px;
    font-family: 'Montserrat', sans-serif;
    scroll-behavior: smooth;
}

a {
    text-decoration: none;
}

.container {
    min-height: 100vh;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.section-title {
    font-size: 4rem;
    font-weight: 300;
    color: rgb(255, 255, 255);
    margin-bottom: 10px;
    text-transform: uppercase;
    letter-spacing: 0.2rem;
    text-align: center;
}

.section-title span {
    color: rgb(173, 81, 99);
}

.cta {
    display: inline-block;
    padding: 10px 30px;
    color: rgb(255, 255, 255);
    background-color: transparent;
    border: 2px solid rgb(82, 82, 82);
    font-size: 2rem;
    text-transform: uppercase;
    letter-spacing: 0.1rem;
    margin-top: 30px;
    transition: 0.3s ease;
    transition-property: background-color, color;
}

.cta:hover {
    color: rgb(173, 81, 99);
}

.brand h1 {
    font-size: 3rem;
    text-transform: uppercase;
    color: white;
}

.brand h1 span {
    color: rgb(173, 81, 99);
}

/* Header section */
#header {
    position: fixed;
    z-index: 1000;
    left: 0;
    top: 0;
    width: 100vw;
    height: auto;
}

#header .header {
    min-height: 8vh;
    background-color: #504f4fcc;
    transition: 0.3s ease background-color;
}

#header .nav-bar {
    display: flex;
    align-items: center;
    justify-content: space-between;
    width: 100%;
    height: 100%;
    max-width: 1300px;
    padding: 0 10px;
}

#header .nav-list ul li {
    display: inline-block;
    margin: 5px;
}

#header .nav-list ul li a {
    font-size: small;
    font-weight: lighter;
    letter-spacing: 0.1rem;
    text-decoration: none;
    color: rgb(255, 255, 255);
    text-transform: uppercase;
    padding: 5px;
    display: block;
    border-radius: 10px;
    border: 2px solid rgb(255, 255, 255);
    transition: 0.3s ease;
}

#header .nav-list ul li:hover a {
    color: rgb(173, 81, 99);
    background-color: rgb(255, 255, 255);
    font-weight: bold;
}


#header .nav-list ul.active {
    left: 0%;
}


#header .nav-list ul a::after {
    content: attr(data-after);
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%) scale(0);
    color: rgba(240, 248, 255, 0.021);
    font-size: 13rem;
    letter-spacing: 50px;
    z-index: -1;
    transition: 0.3s ease letter-spacing;
}

#header .nav-list ul li:hover a::after {
    transform: translate(-50%, -50%) scale(1);
    letter-spacing: initial;
}

#header .nav-list ul {
    list-style: none;
    position: absolute;
    background-color: rgb(223, 96, 96);
    width: 100vw;
    height: 100vh;
    left: 100%;
    top: 0;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    z-index: 1;
    overflow-x: hidden;
    transition: 0.5s ease left;
}

#header .hamburger {
    height: 60px;
    width: 60px;
    display: inline-block;
    border: 3px solid white;
    border-radius: 50%;
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 100;
    cursor: pointer;
    transform: scale(0.8);
    margin-right: 20px;
}

#header .hamburger:after {
    position: absolute;
    content: '';
    height: 100%;
    width: 100%;
    border-radius: 50%;
    border: 3px solid white;
    animation: hamburger_puls 1s ease infinite;
}

#header .hamburger .bar {
    height: 2px;
    width: 30px;
    position: relative;
    background-color: white;
    z-index: -1;
}

#header .hamburger .bar::after,
#header .hamburger .bar::before {
    content: '';
    position: absolute;
    height: 100%;
    width: 100%;
    left: 0;
    background-color: white;
    transition: 0.3s ease;
    transition-property: top, bottom;
}


#header .hamburger .bar::after {
    top: 8px;
}

#header .hamburger .bar::before {
    bottom: 8px;
}

#header .hamburger.active .bar::before {
    bottom: 0;
}

#header .hamburger.active .bar::after {
    top: 0;
}
/* End Header section */


/* Home Section */
#home {
    background-color: black;
    background-size: cover;
    background-position: top center;
    position: relative;
    z-index: 1;
}

#home::after {
    content: '';
    position: absolute;
    left: 0;
    top: 0;
    height: 100%;
    width: 100%;
    background-color: black;
    opacity: 0.7;
    z-index: -1;
}

#home .home {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 50px;
    justify-content: flex-start;
}

#home h1 {
    display: block;
    width: fit-content;
    font-size: 4rem;
    position: relative;
    color: transparent;
    animation: text_reveal 0.5s ease forwards;
    animation-delay: 1s;
}

#home h1:nth-child(1) {
    animation-delay: 1s;
}

#home h1:nth-child(2) {
    animation-delay: 2s;
}

#home h1:nth-child(3) {
    animation: text_reveal_name 0.5s ease forwards;
    animation-delay: 3s;
}

#home h1 span {
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 0;
    background-color: rgb(95, 18, 34);
    animation: text_reveal_box 1s ease;
    animation-delay: 0.5s;
}

#home h1:nth-child(3) span {
    animation-delay: 2.5s;
}
/* End Home Section */

/* Users Section */
#users .users {
    flex-direction: column;
    text-align: center;
    max-width: 1500px;
    margin: 0 auto;
    padding: 100px 0;
    background-color: rgb(0, 0, 0);
}

#users .users-top {
    max-width: 500px;
    margin: 0 auto;
}

#users .users-bottom {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
    margin-top: 50px;
}
/* End Users Section */

/* Projects section */
#projects .projects {
    flex-direction: column;
    max-width: 100%;
    margin: 0 auto;
    padding: 100px 0;
    background-color: black;
}
/* End Projects section */

/* About Section */
#about .about {
    flex-direction: column-reverse;
    text-align: center;
    max-width: 100%;
    margin: 0 auto;
    padding: 100px 20px;
    background-color: black;
}

main {
    max-width: 100%;
    margin: 0;
    padding: 10px;
    background-color: black;
}

h3,
h4 {
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
    width: 20%;
    margin: 20px auto;
}

table {
    border-collapse: collapse;
    width: 100%;
}

th,
td {
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
/* End About Section */

/* contact Section */
#contact .contact {
    flex-direction: column;
    max-width: 100%;
    margin: 0 auto;
    background-color: black;
}
/* End contact Section */

/* Footer */
#footer {
    background-color: rgb(173, 81, 99);
}

#footer .footer {
    min-height: 50px;
    flex-direction: column;
    padding-top: 10px;
    padding-bottom: 10px;
}

#footer p {
    color: rgb(0, 0, 0);
    font-size: medium;
    font-weight: bold;
}
/* End Footer */

/* Keyframes */
@keyframes hamburger_puls {
    0% {
        opacity: 1;
        transform: scale(1);
    }
    100% {
        opacity: 0;
        transform: scale(1.4);
    }
}

@keyframes text_reveal_box {
    50% {
        width: 100%;
        left: 0;
    }
    100% {
        width: 0;
        left: 100%;
    }
}

@keyframes text_reveal {
    100% {
        color: white;
    }
}

@keyframes text_reveal_name {
    100% {
        color: rgb(173, 81, 99);
        font-weight: 500;
    }
}
/* End Keyframes */

/* Media Query For Tablet */
@media only screen and (min-width: 768px) {
    .cta {
        font-size: 2.5rem;
        padding: 20px 60px;
    }
    h1.section-title {
        font-size: 6rem;
    }
    /* Home */
    #home h1 {
        font-size: 7rem;
    }
}

/* Media Query For Desktop */
@media only screen and (min-width: 1200px) {
    /* header */
    #header .hamburger {
        display: none;
    }
    #header .nav-list ul {
        position: initial;
        display: block;
        height: auto;
        width: fit-content;
        background-color: transparent;
    }
    #header .nav-list ul li {
        display: inline-block;
    }
    #header .nav-list ul li a {
        font-size: 1.8rem;
    }
    #header .nav-list ul a:after {
        display: none;
    }
    /* End header */
}

    
</style>

</head>
<body>
<!-- Header -->
<section id="header">
<div class="header container">
<div class="nav-bar">
<div class="brand">
<a href="#hero">
<h1><span>G</span>ym<span>R</span>at</h1>
</a>
</div>
<div class="nav-list">
<div class="hamburger">
<div class="bar"></div>
</div>
<ul>
<li><a href="#home" data-after="Home">Home</a></li>
<li><a href="#users" data-after="Service">Users</a></li>
<li><a href="#projects" data-after="Projects">Exercises</a></li>
<li><a href="#about" data-after="About">About Us</a></li>
<li><a href="#contact" data-after="Contact">Others</a></li>
<li><a href="{{url('Login')}}" data-after="Contact">Logout</a></li>
</ul>
</div>
</div>
</div>
</section>
<!-- End Header -->

<!-- Home Section -->
<section id="home">
  <div class="home container">
    <div>
      <h1>Welcome, </h1>
      <h1>this is </h1>
      <h1>GYMRAT<span></span></h1>
      <a href="#users" type="button" class="cta">Get started</a>
    </div>
  </div>
</section>
<!-- End Home Section -->




<!-- Users Section -->
<section id="users">
<div class="users container">
     

</div>
</section>
<!-- End Users Section -->



<!-- Projects Section -->
<section id="projects">
<div class="projects container">

</div>
</section>
<!-- End Projects Section -->


<!-- About Section -->
<section id="about">
    <div class="about container">
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

      <main>
        <h3>OUR TEAM</h3><br>
        <h1>THIS IS MASALVISION GROUP</h1>
        <div class="orange-line"></div>
        <h4>WE ARE THE MASALVISION GROUP AT PHINMA-UNIVERSITY OF PANGASINAN,
             <br>WORKING ON ONE MAJOR PROJECT HANDLED BY FOUR PROFESSORS FROM CITE FACULTY.</h4>
      </main>
      
    </div>
  </section>
  <!-- End About Section -->
  

<!-- Contact Section -->
<section id="contact">
<div class="contact container">

</div>
</section>
<!-- End Contact Section -->
<!-- Footer -->
<section id="footer">
<div class="footer container">
<p>© 2024 Gymrat. All rights reserved</p>
</div>
</section>


<script>
const hamburger = document.querySelector('.header .nav-bar .nav-list.hamburger');
const mobile_menu = document.querySelector('.header .nav-bar .nav-list ul');
const menu_item = document.querySelectorAll('.header .nav-bar .nav-list ul li a');
const header = document.querySelector('.header.container');
hamburger.addEventListener('click', () => {
hamburger.classList.toggle('active');
mobile_menu.classList.toggle('active');
});
document.addEventListener('scroll', () => {
var scroll_position = window.scrollY;
if (scroll_position > 250) {
header.style.backgroundColor = '#29323c';
} else {
header.style.backgroundColor = 'transparent';
}
});
menu_item.forEach((item) => {
item.addEventListener('click', () => {
hamburger.classList.toggle('active');
mobile_menu.classList.toggle('active');
});
});

</script>
</body>
</html>