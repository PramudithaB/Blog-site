<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


        <title>Laravel</title>

        <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,600;0,700;1,400&display=swap');
            *{
                font-family: 'Poppins', sans-serif;
                margin: 0;
                padding: 0;
                scroll-behavior: smooth;
                scroll-padding-top: 2rem;
                box-sizing: border-box;
            }
            
            /* root values */
            :root{
                --container-color: #1a1e21;
                --second-color: rgba(77, 228, 255);
                --text-color: #172317;
                --bg-color: #fff;
            }
            
            ::selection{
                color: var(--bg-color);
                background: var(--second-color);
            }
            
            a{
                text-decoration: none;
            }
            
            li{
                list-style: none;
            }
            
            img{
                width: 100%;
            }
            
            section{
                padding: 3rem 0 2rem;
            }
            
            .container{
                max-width: 1068px;
                margin: auto;
                width: 100%;
            }
            
            a{
                color: #fff;
            }
            
            /* Header */
            header{
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                z-index: 200;
            }
            
            header.shadow{
                background: var(--bg-color);
                box-shadow: 0 1px 4px hsl(0 4% 14% / 10%);
                transition: .5s;
            }
            
            header.shadow .logo{
                color: var(--text-color);
            }
            
            .nav{
                display: flex;
                align-items: center;
                justify-content: space-between;
                padding: 18px 0;
            }
            
            .logo{
                font-size: 1.5rem;
                font-weight: 600;
                color: var(--bg-color);
            }
            
            .logo span{
                color: var(--second-color);
            }
            
            .login{
                padding: 8px 14px;
                text-transform: uppercase;
                font-weight: 500;
                border-radius: 4px;
                background: var(--second-color);
                color: var(--bg-color);
            }
            
            .login:hover{
                background: hsl(199, 98%, 56%);
                transition: .5s;
            }
            
            .home{
                width: 100%;
                min-height: 440px;
                background: url("images/banner2.png");
                display: grid;
                justify-content: center;
                align-items: center;
            }
            
            .home-text{
                color: var(--bg-color);
                text-align: center;
            }
            
            .home-title{
                font-size: 3.5rem;
            }
            
            .home-subtitle{
                font-size: 1rem;
                font-weight: 400;
            }
            
            .about{
                position: relative;
                width: 100%;
                display: flex !important;
                justify-content: center;
                align-items: center;
            }
            
            .about .contentBx{
                max-width: 50%;
                width: 50%;
                text-align: left;
                padding-right: 40px;
            }
            
            .titleText{
                font-weight: 600;
                color: #111;
                font-size: 2rem;
                margin-bottom: 10px;
            }
            
            .title-text{
                color: #111;
                font-size: 1em;
            }
            
            .about .imgBx{
                position: relative;
                min-width: 50%;
                width: 50%;
                min-height: 500px;
            }
            
            .btn2{
                position: relative;
                display: inline-block;
                margin-top: 30px;
                padding: 10px 30px;
                background: #fff;
                border: .8px solid #111;
                color: #333;
                text-decoration: none;
                transition: 0.5s;
            }
            
            .btn2:hover{
                background-color: var(--second-color);
                border: none;
                color: #fff;
            }
            
            .post-filter{
                display: flex;
                justify-content: center;
                align-items: center;
                column-gap: 1.5rem;
                margin-top: 2rem !important;
            }
            
            .filter-item{
                font-size: 0.9rem;
                font-weight: 500;
                cursor: pointer;
            }
            
            .active-filter{
                background: var(--second-color);
                color: var(--bg-color);
                padding: 4px 10px;
                border-radius: 4px;
            }
            
            .post{
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(280px, auto));
                justify-content: center;
                gap: 1.5rem;
            }
            
            .post-box{
                background: var(--bg-color);
                box-shadow: 0 4px 14px hsl(35deg 25% 15% / 10%);
                padding: 15px;
                border-radius: 0.5rem;
            }
            
            .post-img{
                width: 100%;
                height: 200px;
                object-fit: cover;
                object-position: center;
                border-radius: 0.5rem;
            }
            
            .category{
                font-size: 0.9rem;
                font-weight: 500;
                text-transform: uppercase;
                color: var(--second-color);
            }
            
            .post-title{
                font-size: 1.3rem;
                font-weight: 600;
                color: var(--text-color);
                display: -webkit-box;
                -webkit-line-clamp: 2;
                -webkit-box-orient: vertical;
                overflow: hidden;
            }
            
            .post-date{
                display: flex;
                font-size: 0.875rem;
                text-transform: uppercase;
                margin-top: 4px;
                font-weight: 400;
            }
            
            .post-description{
                font-size: 0.9rem;
                line-height: 1.5rem;
                margin: 5px 0 10px;
                display: -webkit-box;
                -webkit-line-clamp: 2;
                -webkit-box-orient: vertical;
                overflow: hidden;
            }
            
            .profile{
                display: flex;
                align-items: center;
                gap: 10px;
            }
            
            .profile-img{
                width: 35px;
                height: 35px;
                border-radius: 50%;
                object-fit: cover;
                object-position: center;
                border: 2px solid var(--second-color);
            }
            
            .profile-name{
                font-size: .8rem;
                font-weight: 500;
            }
            
            footer{
                position: relative;
                width: 100%;
                height: auto;
                padding: 50px 100px;
                margin-top: 3rem;
                background: #111;
                display: flex;
                font-family: sans-serif;
                justify-content: space-between;
            }
            
            .footer-container{
                display: flex;
                justify-content: space-between;
                flex-wrap: wrap;
                flex-direction: row;
            }
            
            .footer-container .sec{
                margin-right: 30px;
            }
            
            .footer-container .sec.aboutus{
                width: 40%;
            }
            
            .footer-container h2{
                position: relative;
                color: #fff;
                margin-bottom: 15px;
            }
            
            .footer-container h2::before{
                content: '';
                position: absolute;
                bottom: -5px;
                left: 0;
                width: 50px;
                height: 2px;
                background: rgb(77, 228, 255);
            }
            
            footer p{
                color: #fff;
            }
            
            .sci{
                margin: 20px;
                display: flex;
            }
            
            .sci li{
                list-style: none;
            }
            
            .sci li a{
                display: inline-block;
                width: 40px;
                height: 40px;
                background: #222;
                display: flex;
                justify-content: center;
                align-items: center;
                margin-right: 10px;
                text-decoration: none;
                border-radius: 4px;
                transition: .5s;
            }
            
            .sci li a:hover{
                background: rgb(77, 228, 255);
            }
            
            .sci i a .bx{
                color: #fff;
                font-size: 20px;
            }
            
            .quicklinks{
                position: relative;
                width: 25%;
            }
            
            .quicklinks ul li{
                list-style: none;
            }
            
            .quicklinks ul li a{
                color: #999;
                text-decoration: none;
                margin-bottom: 10px;
                display: inline-block;
                transition: .3s;
            }
            
            .quicklinks ul li a:hover{
                color: #fff;
            }
            
            .footer-container .contactBx{
                width: calc(35% - 60px);
                margin-right: 0 !important;
            }
            
            .contactBx .info{
                position: relative;
            }
            
            .contactBx .info li{
                display: flex !important;
                margin-bottom: 16px;
            }
            
            .contactBx .info li span:nth-child(1){
                color: #fff;
                font-size: 20px;
                margin-right: 10px;
            }
            
            .contactBx .info li span{
                color: #999;
            }
            
            .contactBx .info li a{
                color: #999;
                text-decoration: none;
                transition: .5s;
            }
            
            .contactBx .info li a:hover{
                color: #fff;
            }
            
            @media (max-width: 1060px){
                .container{
                    margin: 0 auto;
                    width: 95%;
                }
            
                .home-text{
                    width: 100%
                }
            }
            
            @media (max-width: 768px){
                .nav{
                    padding: 10px 0;
                }
            
                section{
                    padding: 2rem 0 !important;
                }
            
                .header-content{
                    margin-top: 3rem !important;
                }
            
                .home{
                    min-height: 380px;
                }
            
                .home-title{
                    font-size: 3rem;
                }
            
                .header-title{
                    font-size: 2rem;
                }
            
                .header-img{
                    height: 370px;
                }
            
                .about{
                    flex-direction: column;
                }
            
                .about .contentBx{
                    min-width: 100%;
                    width: 100%;
                    text-align: center;
                    padding-right: 0px;
                }
            
                .about .contentBx,
                .about .imgBx{
                    min-width: 100%;
                    width: 100%;
                    padding-right: 0px;
                    text-align: center;
                }
            
                .about .imgBx{
                    min-height: 150px;
                }
            
                .btn2{
                    margin-bottom: 30px;
                }
            
                .post-header{
                    height: 435px;
                }
            
                .post-header{
                    margin-top: 9rem !important;
                }
            }
            
            @media (max-width: 570px){
                .post-header{
                    height: 290px;
                }
            
                .header-title{
                    width: 100%;
                }
            
                .header-img{
                    height: 340px;
                }
            }
            
            @media (max-width: 396px){
                .home-title{
                    font-size: 2rem;
                }
            
                .home-subtitle{
                    font-size: 0.9rem;
                }
            
                .home{
                    min-height: 300px;
                }
            
                .post-box{
                    padding: 10px;
                }
            
                .header-title{
                    font-size: 1.4rem;
                }
            
                .header-img{
                    height: 240px;
                }
            
                .post-header{
                    height: 335px;
                }
            
                .header-img{
                    height: 340px;
                }
            }
            
            /* Footer Media Query */
            @media (max-width: 991px){
                footer{
                    padding: 40px;
                    font-size: 20px;
                }
            
                footer .footer-container{
                    flex-direction: column;
                }
            
                footer .footer-container .sec{
                    margin-right: 0;
                    margin-bottom: 40px;
                }
            
                footer .footer-container .sec.aboutus{
                    width: 100% !important;
                }
            
                footer .footer-container .quicklinks{
                    width: 100%;
                }
            
                footer .footer-container .contactBx{
                    width: 100%;
                }
            }
            {
            font-family: 'Arial', sans-serif;
            background-color: #f9f9f9;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 15px;
        }

        .card {
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            background-color: #fff;
            margin-bottom: 20px;
            display: flex;
            flex-wrap: wrap;
            overflow: hidden;
            transition: transform 0.3s ease-in-out;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .col-md-4 img {
            width: 100%;
            height: auto;
            object-fit: cover;
        }

        .card-body {
            padding: 15px;
        }

        .card-title {
            font-size: 20px;
            font-weight: bold;
            margin: 0 0 10px;
            color: #007bff;
        }

        .card-title:hover {
            text-decoration: underline;
        }

        .card-text {
            margin-bottom: 10px;
            font-size: 14px;
            line-height: 1.5;
        }

        .no-image {
            text-align: center;
            font-size: 14px;
            color: #aaa;
            padding: 30px;
        }

        .nav-link {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            margin-top: 20px;
        }

        .nav-link:hover {
            background-color: #0056b3;
        }
            <style>
  .filter-item {
    display: inline-block;
    padding: 10px 20px;
    background-color: #3498db;
    color: white;
    text-decoration: none;
    border-radius: 5px;
    font-size: 16px;
    transition: background-color 0.3s ease;
  }

  .filter-item:hover {
    background-color: #2980b9;
  }
</style>

<a class="filter-item" data-filter="Technology" href="{{ route('Art') }}">Technology</a>
            </style>
    </head>
    <body>
<br>
                                

         <header>
                                    <div class="nav container">
                                        <a href="#" class="logo">Blog <span>Site</span></a>

                                        @if (Route::has('login'))
                                        @auth
                                        <a  href="{{ url('/dashboard') }}" ></a>
                                        @else  
                                        @if (Route::has('register')) <a  href="{{ route('register') }}" class="login">Register</a>
                     


                                        <!--<a href="#" class="login">Sign Up</a> -->
                                        @endif
                                        @endauth
                                    </nav>
                                @endif
                                    </div>
                                    
                                </header>
                            
                                <section class="home" id="home">
                                    <div class="home-text container">
                                        <h2 class="home-title">Blog Site</h2>
                                        <span class="home-subtitle">Your source of great content</span>
                                    </div>
                                </section>
                            
                                <section class="about container" id="about">
                                    <div class="contentBx">
                                        <h2 class="titleText">Catch up with the trending topics</h2>
                                        <p class="title-text">
                                        </p>
                                        <a href="#" class="btn2">Read more</a>
                                    </div>
                                    <div class="imgBx">
                                        <img src="images/about.png" alt="" class="fitBg">
                                    </div>
                                </section>
                            
                                <div class="post-filter container">
                                    <span class="filter-item" data-filter="all" style="display: inline-block; padding: 10px 20px; background-color: #3498db; color: white; text-decoration: none; border-radius: 5px; font-size: 16px; transition: background-color 0.3s ease;">All</span>


                                    <a class="filter-item" data-filter="Art" href="{{ route('Art') }}" style="display: inline-block; padding: 10px 20px; background-color: #3498db; color: white; text-decoration: none; border-radius: 5px; font-size: 16px; transition: background-color 0.3s ease;">
                                        Art
                                      </a>
 
                                      <a class="filter-item" data-filter="Art" href="{{ route('Tecnology') }}" style="display: inline-block; padding: 10px 20px; background-color: #3498db; color: white; text-decoration: none; border-radius: 5px; font-size: 16px; transition: background-color 0.3s ease;">
                                        Technology
                                      </a>
                                                                        
                                      <a class="filter-item" data-filter="Art" href="{{ route('Travel') }}" style="display: inline-block; padding: 10px 20px; background-color: #3498db; color: white; text-decoration: none; border-radius: 5px; font-size: 16px; transition: background-color 0.3s ease;">
                                        Travel
                                      </a>
                                      
                                      <a class="filter-item" data-filter="Art" href="{{ route('Sport') }}" style="display: inline-block; padding: 10px 20px; background-color: #3498db; color: white; text-decoration: none; border-radius: 5px; font-size: 16px; transition: background-color 0.3s ease;">
                                        Sport
                                      </a>                                </div>
                                
                                
                                <div class="post container">
                                  
                                </div>


                                  <center>
                                    <div class="container">
                                        <center>
                                            @foreach ($blogs as $blog)
                                            <div class="card">
                                                <div class="col-md-4">
                                                    @if($blog->image)
                                                    <a href="{{ route('imagedashboard', $blog->id) }}">
                                                        <img src="{{ asset($blog->image) }}" alt="Blog Image">
                                                    </a>
                                                    @else
                                                    <div class="no-image">No Image Available</div>
                                                    @endif
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="card-body">
                                                        <a href="{{ route('imagedashboard', $blog->id) }}" class="card-title">{{ $blog->name }}</a>
                                                        <p class="card-text"><strong>Title:</strong> {{ $blog->title }}</p>
                                                        <p class="card-text"><strong>Category:</strong> {{ $blog->category }}</p>
                                                        <p class="card-text">{{ $blog->description }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </center>
                                    </div>
                                    
        </center>















                            
                                <footer>
                                    <div class="footer-container">
                                        <div class="sec aboutus">
                                            <h2>About Us</h2>
                                            <ul class="sci">
                                                <li><a href="#"><i class="bx bxl-facebook"></i></a></li>
                                                <li><a href="#"><i class="bx bxl-instagram"></i></a></li>
                                                <li><a href="#"><i class="bx bxl-twitter"></i></a></li>
                                                <li><a href="#"><i class="bx bxl-linkedin"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="sec quicklinks">
                                            <h2>Quick Links</h2>
                                            <ul>
                                                <li><a href="#">Home</a></li>
                                                <li><a href="#">About</a></li>
                                            </ul>
                                        </div>
                                        <div class="sec contactBx">
                                            <h2>Contact Info</h2>
                                            <ul class="info">
                                                <li>
                                                    <span><i class='bx bxs-map'></i></span>
                                                </li>
                                                <li>
                                                    <span><i class='bx bx-envelope' ></i></span>
                                                    <p>pramudithabandara12@gmail.com</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </footer>
                            
                                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  
    </body>
 
    

</html> 
                                    
                                    
                                    

                                   
                                        
                                            
                                   

 