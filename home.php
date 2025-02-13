<?php
session_start();

if(!isset($_SESSION['email'])){
  header("location:index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GREEN SPARK</title>
    <!--<link rel="stylesheet" href="{% static 'css/style.css' %}">
    <link rel="stylesheet" href="boxicons-2.0.9/css/boxicons.min.css">-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap');

*{
    margin: 0;
    padding: 0;
    
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

/* Smooth Scroll */
html{
    scroll-behavior: smooth;
}
body{
    background-image: url(static/images/homebg.jpg);
    background-repeat: no-repeat;
    background-size: 100% 100%;
    
}  

  
/* Utility Classes */
.text-secondary{
    color: #55BA53;
}
.text-center{
    text-align: center;
}
.bg-light{
    background: #cfcfcf;
}
.bg-secondary{
    background: #55BA53;
}

.py-0{padding: 16px 0;}
.py-1{padding: 24px 0;}
.py-2{padding: 32px 0;}
.py-3{padding: 48px 0;}

.p-0{padding: 16px;}
.p-1{padding: 24px;}
.p-2{padding: 32px;}
.p-3{padding: 48px;}
.p-4{padding: 1px;}

.wrapper{
    max-width: 1320px;
    padding: 0 50px;
    margin: 0 auto;
    flex-wrap: wrap;
}
.btn{
    display: inline-block;
    padding: 15px 25px;
    margin-right: 30px;
    margin-top: 10px;
    text-decoration: none;
    border-radius: 25px;
    color: #fff;
    font-size: 12px;
    font-weight: bold;
    overflow: hidden;
    transition: all 0.5s ease;
}


/* Showcase Area Styling */

.showcase{
    background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('/side\ img.jpg') no-repeat center center/cover;
    width: 100%;
    height: 100vh;
}

/* Top Navbar */

.showcase .navbar-top{
    width: 100%;
    display: flex;
    padding: 0 80px;
    margin: 0 auto;
    justify-content: space-between;
    align-items: center;
    background-color: #0A2940;
    top: 0;
    left: 0;
}
.showcase .left{
    display: flex;
    list-style: none;
}
.showcase .left li a{
    display: inline-block;
    font-size: 13px;
    text-decoration: none;
    color: #95A2BB;
    padding: 5px 15px;
    transition: all 0.5s ease;
}
.showcase .left li a:hover{
    color: #55BA53;
}
.showcase .left li:first-child{
    font-weight: 700;
    border-right: 1px solid #536DAF;
}
.showcase .right{
    display: flex;
    list-style: none;
}
.showcase .right li a{
    display: inline-block;
    padding: 5px 15px;
    text-decoration: none;
    color: #95A2BB;
    transition: all 0.5s ease;
}
.showcase .right li a:hover{
    color: #55BA53;
}

/* Bottom Navbar */
.showcase .navbar-bottom{
    width: 100%;
    background: #2b703b;
    padding: 25px 95px;
    align-items: center;
    margin:  auto;
    display: flex;
   position: fixed;
    justify-content: space-between;
    overflow: hidden;
}
.navbar-bottom.sticky{
    padding: 15px 95px;
    background: #fff;
    border-bottom: 1px solid #0A2940;
    color: #0A2940;
    top: 0;
    z-index: 999;
}
.showcase .navbar-bottom .brand-left{
    color: #55BA53;
    font-size: 20px;
    font-weight: 700;
    text-decoration: none;
    transition: all 0.5s ease;
}
.showcase .navbar-bottom.sticky .brand-left{
    color: #0A2940;
}
.showcase .navbar-bottom .brand-left:hover{
    color: #0A2940;
}
.showcase .navbar-bottom .menu-right{
    display: flex;
    list-style: none;
    font-size: 18px;
    font-weight: 600;
}
.showcase .navbar-bottom.sticky .menu-right li:last-child{
    display: none;
}
.showcase .navbar-bottom .menu-right a{
    text-decoration: none;
    display: inline-block;
    padding: 0 20px;
    color: #1A1B1E;
    transition: all 0.5s ease;
}
.showcase .navbar-bottom .menu-right a:hover{
    color: #0A2940;
}

/* Navbar Bottom Search Form */
.navbar-bottom .search-form{
    position: absolute;
    top: 60%;
    right: 10%;
    background: #f4f4f4;
    width: 350px;
    height: 28px;
    display: flex;
    align-items: center;
    transform: scaleY(0);
    transform-origin: top;
    transition: all 0.5s ease;
}
.navbar-bottom .search-form.active{
    transform: scaleY(1);
}

.navbar-bottom .search-form input{
    width: 100%;
    height: 100%;
    font-size: 20px;
    border: none;
    background: #f4f4f4;
    color: #1A1B1E;
    padding: 14px;
    text-transform: none;
    outline: none;
}
.navbar-bottom .search-form label{
    cursor: pointer;
    font-size: 30px;
    border: none;
    margin-right: 12px;
}
.navbar-bottom .search-form label:hover{
    color: #55BA53;
}

    

/* Showcase-content Section styling */
.showcase .showcase-content{
   
    max-width: 850px;
    margin-top: 15%;
    padding: 0 95px;
}
.showcase .showcase-content h1{
    color: #55BA53;
    
    font-size: 60px;
    margin: 15px 0;
}
.showcase .showcase-content span{
    color: #fff;
    font-family: 'Verdana', sans-serif;
    font-weight: 500;
}
.showcase .showcase-content p{
    color: #ceced4;
    line-height: 1.6;
    margin-bottom: 20px;
    text-align: justify;
}
.showcase .showcase-content .btn-left{
    background: linear-gradient(to right, #0a3609 , #55BA53);
}
.showcase .showcase-content .btn-right{
    background: linear-gradient(to right,#55BA53, #0a3609);
}

/* Services Section Styling */
#services .items{
    display: flex;
    padding-bottom: 40px;
}

#services .items .item{
    text-align: center;
    padding: 10px;
    margin: 10px;
    background: #0A2940;
    border-radius: 5px;
    box-shadow: 5px 5px 20px rgba(0,0,0,0.3), -5px -5px 20px rgba(0, 0, 0, 0.3);
    transition: all 0.5s ease;
}

#services .items .item h3{
    color: #55BA53;
    font-size: 16px;
    margin: 5px;
}
#services .items .item p{
    line-height: 1.4;
    color: #95A2BB;
}
#services .items .item i{
    color: #95A2BB;
}
#services .items .item:hover i{
    color: #55BA53;
}
#services .items .item:hover{
    background:#0A2940;
    transform: scale(1.05);
}
#services .items .item:hover h3{
    color: #f4f4f4;
}

/* Services Section Bottom */
#goal{
    display: flex;
    padding-top: 20px;
}
#goal div{
    flex: 1;
}
#goal .goal-img{
    display: inline-block;
    position: relative;
    width: 600px;
    height: 480px;
    overflow: hidden;
}
#goal .goal-img img{
    width: auto;
    height: 100%;
    object-fit: cover;
}
#goal .goal-text{
    margin: 0 40px;
}
#goal .goal-text a{
    color: #f4f4f4;
    background: #55BA53;
    text-decoration: none;
    font-size: 12px;
    border: 1px solid #55BA53;
    border-radius: 25px;
    padding: 3px 10px;
    transition: 0.5s;
}
#goal .goal-text a:hover{
    color: #55BA53;
    background: #0A2940;
}
#goal .goal-text h2{
    margin: 20px 0;
    color: #0A2940;
}
#goal .goal-text .contents{
    display: flex;
}
#goal .goal-text .contents .content{
    flex: none;
    padding: 10px;
}
#goal .goal-text .contents .content h3{
    font-size: 16px;
    padding-bottom: 5px;
    color: #55BA53;
}
#goal .goal-text .contents .content p{
    color: #1A1B1E;
}
#goal .goal-text .contents .content i{
    color: #55BA53;
    padding: 3px;
    background: #0A2940;
    align-self: flex-start;
    border-radius: 5px;
    margin-right: 5px;
}

/* Portfolio Section Styling  */
#portfolio{
    background: #0A2940;
}
.portfolio h3{
    color: #95A2BB;
    font-size: 14px;
    padding-bottom: 20px;
    text-transform: uppercase;
}
.portfolio h2{
    font-size: 40px;
    font-weight: 600;
    color: #95A2BB;
    margin-bottom: 20px;
}
.portfolio h2 span{
    font-weight: 500;
}
.portfolio p{
    color: #95A2BB;
    line-height: 1.6;
    margin-bottom: 100px;
}
.owl-carousel .item img{
    display: block;
    width: 700px;
    height: 300px;
    border: 2px solid #95A2BB;
    object-fit: cover;
}
.owl-dots{
    text-align: center;
    margin-top: 20px;
}
.owl-dot{
    height: 13px;
    width: 13px;
    margin: 0 5px;
    outline: none !important;
    border-radius: 50%;
    border: 2px solid #55BA53 !important;
}
.owl-dot.active{
    width: 35px;
    border-radius: 14px;
}
.owl-dot.active,
.owl-dot:hover{
    background: #55BA53 !important;
}

/* Teams Section Styling */
#teams h3{
    color: #0A2940;
    font-size: 14px;
    padding-bottom: 20px;
    text-transform: uppercase;
}
#teams h2{
    font-size: 40px;
    font-weight: 600;
    color: #0A2940;
    margin-bottom: 20px;
}
#teams h2 span{
    font-weight: 500;
}
#teams p{
    color: #0A2940;
    line-height: 1.6;
    margin-bottom: 100px;
}
#teams .wrapper .card-items{
    display: flex;
    margin-top: -50px;
    justify-content: space-evenly;
    overflow: hidden;
}
#teams .wrapper .card{
    margin: 20px;
    display: flex;
    flex-direction: column;
    background-color: #f6f6f6;
    border-radius: 5px;
    box-shadow: 0 2px 20px rgba(0,0,0,0.2);
    overflow: hidden;
    width: 280px;
    z-index: 1;
    transition: all 0.5s ease;
}
#teams .wrapper .card:hover{
    background: #0A2940;
    transform: scale(1.05);
    cursor: pointer;
}
#teams .wrapper .card .card-header{
    display: inline-block;
    width: 180px;
    height: 180px;
    overflow: hidden;
    border-radius: 50%;
    margin: 30px auto;
    transform: translateY(40px);
}
#teams .wrapper .card .card-header img{
    width: 100%;
    height: auto;
}
#teams .wrapper .card-body{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding: 20px;
    min-height: 200px;
}
#teams .wrapper .card h3{
    font-size: 16px;
    color: #95A2BB;
    padding-top: 30px;
}
#teams .wrapper .card .card-body h4{
    font-size: 14px;
    font-weight: 600;
    color: #55BA53;
    margin-top: 0px;
}
#teams .wrapper .card .card-body ul{
    display: flex;
    list-style: none;
    padding-top: 50px;
}
#teams .wrapper .card .card-body ul li i{
    padding: 5px;
    margin: 0 7px;
    border: 1px solid #95A2BB;
    border-radius: 50%;
    background: #0A2940;
    color: #55BA53;
    transition: all 0.3s ease;
}
#teams .wrapper .card .card-body ul li i:hover{
    background: #55BA53;
    color: #0A2940;
}

/* Blog Section Styling  */
#blog{
    background: #0A2940;
}
#blog .wrapper .header{
    display: flex;
    align-items: center;
    margin-bottom: 20px;
}
#blog .wrapper .header span{
    height: 1px;
    width: 4%;
    background: #95A2BB;
}
#blog .wrapper .header h4{
    color: #95A2BB;
    padding-left: 15px;
    text-transform: uppercase;
}
#blog .wrapper .blog-info{
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 20px;
}
#blog .wrapper .blog-info h2{
    font-size: 40px;
    color: #95A2BB;
    font-weight: 600;
}
#blog .wrapper .blog-info h2 span{
    font-weight: 500;
}
#blog .wrapper .blog-info a{
    text-decoration: none;
    padding: 10px 20px;
    background: #55BA53;
    color: #0A2940;
    text-transform: uppercase;
    font-weight: 600;
    font-size: 14px;
    border: 2px solid #55BA53;
    border-radius: 5px;
    transition: 0.5s;
}
#blog .wrapper .blog-info a:hover{
    background: none;
    color: #95A2BB;
}
#blog .wrapper .blog-card{
    display: flex;
    margin-top: -50px;
    justify-content: space-between;
    flex-wrap: wrap;
}
#blog .wrapper .card{
    margin: 70px 5px;
    background-color: #cfcfcf;
    border-radius: 5px;
    box-shadow: 0 2px 20px rgba(0,0,0,0.2);
    width: 370px;
    overflow: hidden;
    z-index: 1;
    transition: all 0.5s ease;
}
#blog .wrapper .card:hover{
    transform: scale(1.05);
}
#blog .wrapper .card .card-header img{
    width: 100%;
    height: 200px;
    object-fit: cover;
    display: block;
    margin-bottom: 10px;
}
#blog .wrapper .card .card-body .tag{
    background: #ccc;
    border-radius: 50px;
    font-size: 12px;
    margin: 30px;
    color: #fff;
    padding: 5px 10px;
    text-transform: uppercase;
    cursor: pointer;
}
#blog .wrapper .card .card-body .tag-yellow{
    background-color: yellow;
}
#blog .wrapper .card .card-body .tag-purple{
    background-color: #5C76BF;
}
#blog .wrapper .card .card-body .tag-pink{
    background-color: #CD5B9F;
}
#blog .wrapper .card .card-body h4{
    margin: 10px 30px;
    font-weight: 600;
    font-size: 24px;
    letter-spacing: 1px;
    line-height: 1.4;
    color: #0A2940;
}
#blog .wrapper .card .card-body .footer{
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin: 50px 10px 2px 30px;
    border-top: 1px solid #536DAF;
    padding: 5px 0;
}
#blog .wrapper .card .card-body .footer small{
    color: #1A1B1E;
    font-weight: 600;
}
#blog .wrapper .card .card-body .footer a{
    padding: 5px 10px;
    background: #55BA53;
    border-radius: 4px;
    color: #0A2940;
}

/* Contact Section Styling */
#contact h2{
    font-size: 40px;
    font-weight: 600;
    color: #fff;
    margin-bottom: 10px;
}
#contact p{
    color: #fff;
    line-height: 1.6;
    margin-bottom: 50px;
}
#contact .wrapper form{
    display: flex;
    flex-direction: column;
    max-width: 550px;
    margin: 0 auto;
}
#contact .wrapper form input{
    padding: 8px;
    border: #ddd 1px solid;
    outline: none;
    border-radius: 5px;
    margin: 15px 0;
}
#contact .wrapper form .button{
    padding: 8px;
    margin-bottom: 100px;
    background: #0A2940;
    color: #fff;
    font-size: 14px;
    font-weight: 600;
    border-radius: 5px;
    transition: all 0.3s ease;
}
#contact .wrapper form .button:hover{
    background: #1A1B1E;
    color: #fff;
    cursor: pointer;
}

/* Footer Section Styling  */
.footer-bottom{
    background: #1A1B1E;
    color: #536DAF;
}
.footer-bottom p{
    font-size: 14px;
    font-weight: 600;
}

/* Scroll up Styling */
.scroll-up-btn{
    position: fixed;
    height: 45px;
    width: 42px;
    border: 1px solid #fff;
    background: #0A2940;
    right: 30px;
    bottom: 10px;
    text-align: center;
    line-height: 45px;
    color: #fff;
    z-index: 9999;
    font-size: 30px;
    border-radius: 6px;
    cursor: pointer;
    opacity: 0;
    pointer-events: none;
    transition: all 0.3s ease;
}
.scroll-up-btn.show {
    opacity: 1;
    pointer-events: auto;
    bottom: 30px;
}
    </style>
</head>
<body id="home">
   
    <div class="scroll-up-btn">
        <i class="bx bx-up-arrow-alt bx-sm"></i>
    </div>
    <div class="showcase">
        -->

        <!-- navbar bottom section -->
       <div class="navbar-bottom">
            <a href="#home" class="brand-left">নির্মল BHOOMI</a>
            <ul class="menu-right">
                <li><a href="#home">HOME</a></li>
                <li><a href="#services">SERVICES</a></li>
                <li><a href="#portfolio">NATURE ON THE EDGE</a></li>
                <li><a href="#teams">ABOUT US</a></li>
                <li><a href="#contact">CONTACT US</a></li>
                <li><a href="ai.php">AI TOOL</a></li>
                <li><a href="profile.php"><i class="bx bxs-user"></i></a></li>

                <li><a href="#"><i class="bx bx-search bx-sm" id="search-btn"></i></a></li>
            </ul>
            <div class="search-form">
                <input type="search" name="search-box" id="search-box" placeholder="search here...">
                <label for="search-box" class="bx bx-search bx-sm"></label>
            </div>
       </div>
    
       <!-- Showcase content Section -->
        
       <div class="showcase-content">
           <h1><span>TOGETHER FOR</span> <br>GREENER FUTURE</h1>
           <p>we promote sustainable practices,reducing landfill waste, <br>and enhancing recycling efforts. Join us in creating a cleaner, greener future for our planets</p>
           <a href="#services" class="btn btn-left">EXPLORE MORE</a>
           <a href="#teams" class="btn btn-right">GET IN TOUCH</a>
         
       </div>
       

    <!-- Services / Goal Section  -->

    <section id="services" class="bg-light py-3">
        <div class="wrapper">
            <div class="items">
                <div class="item">
                    <i class="bx bxs-shield bx-lg"></i>
                    <h3>WASTE SEGREGATION</h3>
                    <p>INTERACTIVE AND LOCATION-SPECIFIC GUIDES FOR PROPER WASTE SEGREGATION (E.G., ORGANIC, RECYCLABLE, HAZARDOUS).</p>
                </div>
                <div class="item">
                    <i class="bx bxs-map bx-lg"></i>
                    <h3>RECYCLING CENTER LOCATOR</h3>
                    <p>A MAP THAT SHOWS NEARBY RECYCLING CENTERS, PICK-UP POINTS, AND E-WASTE DISPOSAL STATIONS.</p>
                </div>
                <div class="item">
                    <i class="bx bxs-pencil bx-lg"></i>
                    <h3>AI WASTE RECOGNITION TOOL</h3>
                    <p>UPLOAD IMAGES OF WASTE TO GET INSTANT RECOMMENDATIONS ON WHETHER ITEMS CAN BE RECYCLED OR COMPOSTED.</p>
                    <a href="ai">click here to use</a>
                </div>
                <div class="item">
                    <i class="bx bxs-bell-ring bx-lg"></i>
                    <h3>WASTE COLLECTION ALERTS</h3>
                    <p>USERS CAN CHECK THEIR LOCAL WASTE COLLECTION SCHEDULE. - PUSH NOTIFICATIONS OR EMAIL ALERTS FOR UPCOMING COLLECTION DAYS.</p>
                </div>
            </div>
            <div id="goal" class="goal">
                <div class="goal-img">
                    <img src="static/images/2nd_pg_img.jpg">
                </div>
                <div class="goal-text">
                    <a href="#">Our Priorities</a>
                    <h2>Nature is a model for waste management because it recycles resources and <br>has no waste. Here are some ways that nature can help with waste management:</h2>
                    <div class="contents">
                        <div class="content p-4">
                            <i class="bx bx-check bx-sm"></i>
                        </div>
                        <div class="content p-4">
                            <h3>Reducing waste- </h3>
                            <p>Using resources wisely and reducing waste <br>can protect the environment and save on disposal costs.</p>
                        </div>
                    </div>
                    <div class="contents">
                        <div class="content p-4">
                            <i class="bx bx-check bx-sm"></i>
                        </div>
                        <div class="content p-4">
                            <h3>Conserving nature resources-</h3>
                            <p>Recycling reduces the need to extract <br> resources and the potential for contamination.</p>
                        </div>
                    </div>
                    <div class="contents">
                        <div class="content p-4">
                            <i class="bx bx-check bx-sm"></i>
                        </div>
                        <div class="content p-4">
                            <h3>Protecting natural beauty-</h3>
                            <p>Waste management and recycling can help <br> conserve the planet's natural beauty.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio py-3">
        <h3 class="text-center">GREEN SPARK</h3>
        <h2 class="text-center">NATURE ON THE EDGE <span class="text-secondary"></span> </h2>
        <p class="text-center">"We Guide to you for a Cleaner Tomorrow." <br> "Recycle Right for Live Bright."</p>
        <div class="owl-carousel">
            <div class="item"><img src="static/images/article1.jpg"></div>
            <div class="item"><img src="static/images/article2.jpg"></div>
            <div class="item"><img src="static/images/article3.jpg"></div>
            <div class="item"><img src="static/images/article4.jpg"></div>
            <div class="item"><img src="static/images/article5.jpg"></div>
            <div class="item"><img src="static/images/article6.jpg"></div>
            <div class="item"><img src="static/images/article7.jpg"></div>
            <div class="item"><img src="static/images/article8.jpg"></div>
            <div class="item"><img src="static/images/article9.jpg"></div>
            <div class="item"><img src="static/images/article10.jpg"></div>
            <div class="item"><img src="static/images/article11.jpg"></div>
            <div class="item"><img src="static/images/article12.jpg"></div>
        </div>
    </section>

    <!-- Team Section -->
    <section id="teams" class="teams bg-light py-3">
        <h3 class="text-center">We are there for you</h3>
        <h2 class="text-center">Meet Our <span class="text-secondary">GREEN FIGHTERS</span></h2>
        <p class="text-center">We help you see the world differently, discover opportunities you may never have <br> imagined and achieve results that bridge what is with what can be</p>
        <div class="wrapper">
            <div class="card-items">
                <div class="card">
                    <div class="card-header">
                        <img src="static/images/gourab1.jpg">
                    </div>
                    <div class="card-body">
                        <h3>GOURAB SAMANTA</h3>
                        <h4>FRONTEND DEVELOPER</h4>
                        <ul>
                            <li><a href="https://github.com/Gourab69420"target="_blank"><i class="bx bxl-github bx-xs"></i></a></li>
                            <li><a href="https://www.linkedin.com/in/gourab-samanta-79a5b2296?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"target="_blank"><i class="bx bxl-linkedin bx-xs"></i></a></li>
                            <li><a href="https://www.facebook.com/share/B7rqk1Yan7AP1snM/"target="_blank"><i class="bx bxl-facebook bx-xs"></i></a></li>
                            <li><a href="https://www.instagram.com/gourab_2005_/profilecard/?igsh=ZzJ0ZjF0dnp0MHh6"target="_blank"><i class="bx bxl-instagram-alt bx-xs"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <img src="static/images/SUBROJOTIDADU.jpg">
                    </div>
                    <div class="card-body">
                        <h3>SUBHRAJYOTI BASU</h3>
                        <h4>BACKEND AND ML DEVELOPER</h4>
                        <ul>
                            <li><a href="https://github.com/Rangan2005"target="_blank"><i class="bx bxl-github bx-xs"></i></a></li>
                            <li><a href="https://www.linkedin.com/in/subhrajyoti-basu-47451b311?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"target="_blank"><i class="bx bxl-linkedin bx-xs"></i></a></li>
                            <li><a href="#"><i class="bx bxl-facebook bx-xs"></i></a></li>
                            <li><a href="#"><i class="bx bxl-instagram-alt bx-xs"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <img src="static/images/SUMITKAKA.jpg">
                    </div>
                    <div class="card-body">
                        <h3>SUMIT SILL</h3>
                        <h4>UI-UX DESIGNER </h4>
                        <ul>
                            <li><a href="https://github.com/Sumitsill"target="_blank"><i class="bx bxl-github bx-xs"></i></a></li>
                            <li><a href="https://www.linkedin.com/in/sumit-sill-3484b7332?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"target="_blank"><i class="bx bxl-linkedin bx-xs"></i></a></li>
                            <li><a href="#"><i class="bx bxl-facebook bx-xs"></i></a></li>
                            <li><a href="https://www.instagram.com/sumit_sill?igsh=MXBqbHFqenoxM3A2dg=="target="_blank"><i class="bx bxl-instagram-alt bx-xs"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <img src="static/images/shopnonil.jpg">
                    </div>
                    <div class="card-body">
                        <h3>SWAPNANIL GHOSH</h3>
                        <h4>APP DEVELOPER</h4>
                        <ul>
                            <li><a href="https://github.com/The5wapnanil"target="_blank"><i class="bx bxl-github bx-xs"></i></a></li>
                            <li><a href="https://www.linkedin.com/in/swapnanil-ghosh-289b46327?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"target="_blank"><i class="bx bxl-linkedin bx-xs"></i></a></li>
                            <li><a href="#"target="_blank"><i class="bx bxl-facebook bx-xs"></i></a></li>
                            <li><a href="https://www.instagram.com/the._dream._blue?igsh=OGQ5ZDc2ODk2ZA=="target="_blank"><i class="bx bxl-instagram-alt bx-xs"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section id="contact" class="contact bg-secondary py-3">
        <h2 class="text-center">Contact TO নির্মল BHOOMI</h2>
        <p class="text-center">A ADVANCE SOFTWARE FOR<br>WASTE MANAGEMENT AND RECYCLING.</p>
        <div class="wrapper">
            <form class="text-center" id="contactForm" method="POST">
                <input type="text" name="name" id="name" placeholder="Enter Name">
                <input type="text" name="problem" id="problem" placeholder="Share your problem with us">
                <input type="email" name="email" id="email" placeholder="Enter Email Address">
                <button class="button">Submit</button>
            </form>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="footer-bottom py-3 text-center">
        <p>Copyright &copy; 2024 by GREEN SPARK. All Rights Reserved.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="static/js/app.js"></script>
</body>
</html>