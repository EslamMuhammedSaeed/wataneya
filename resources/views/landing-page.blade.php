<!DOCTYPE html>
<html dir="ltr" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Wataneya</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
                
               
            }
            /* body.active{
                background: #ffdd03;
            } */
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
            .banner{
                position: relative;
                width: 100%;
                min-height: 100vh;
                padding: 0 100px;
                display: flex;
                align-items: center;
                /* background-color: #b8c6db;
                background-color: #ffffff;
                background-color: #d5fefd; */
                /* background-color: #d9d9d9;
background-image: linear-gradient(315deg, #d9d9d9 0%, #f6f2f2 74%); */
/* background-color: #f6f6f6;
background-image: linear-gradient(315deg, #e9e9e9 0%, #f6f6f6 74%); */
                
/* background-image: linear-gradient(315deg, #d5fefd 0%, #fffcff 74%); */
/* background-image: linear-gradient(315deg, #ffffff 0%, #d7e1ec 74%); */
                /* background-image: linear-gradient(315deg, #b8c6db 0%, #f5f7fa 74%); */
                /* background: linear-gradient(#404040,#151415) */

            }
            .banner::before{
                content: '';
                position: absolute;
                top: 0;
                left: 700px;
                height: 200px;
                width: 250px;
                z-index: 1;
                transition: 1s;
                background: #03a8f400;
            }
            .banner::after{
                content: '';
                position: absolute;
                bottom: 0;
                right: 12%;
                height: 300px;
                width: 400px;
                z-index: 1;
                transition: 1s;
                /* background: #f1d72b; */
                background-color: #f1d72b;
                background-image: linear-gradient(315deg, #f1d72b 0%, #f9ff60 100%);
                border-radius: 10px 10px 0 0;
                box-shadow: 0px 15px 15px rgba(0,0,0,0.25);
            }
            .banner.active::before{
                
                bottom: 0;
                left: 0;
                height: 170px;
                width: 50%;
                
                height: 100%;
                background: #03a9f4;
            }
            .banner.active::after{
                
                bottom: 0;
                right: 0;
                height: 170px;
                width: 50%;
                border-radius: 0;
                
                height: 100%;
                background: #03a9f4;
                box-shadow: none;
            }
            .banner .logo img{
                transition: 0.5s;
            }
            .banner.active .logo img{
                transform: scale(0);
                transform-origin: left;
            }
            header{
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                z-index: 1000;
                padding: 15px 100px;
                display: flex;
                align-items: center;
                justify-content: space-between;
            }
            header .logo{
                
                transition: 0.5s;
                transform-origin: right;
            }
            
            .toggle{
                display: none;
                position: relative;
                width: 30px;
                height: 30px;
                background: url(img/menu.png);
                background-repeat: no-repeat;
                background-position: center;
                background-size: 30px;  
                z-index: 7;
            }
            .toggle.active{
                position: relative;
                width: 30px;
                height: 30px;
                background: url(img/cross.png);
                background-repeat: no-repeat;
                background-position: center;
                background-size: 25px;
            }
            
            .menu{
                display: flex;
            }
            .menu li{
                list-style: none;
            }
            .menu li a{
                position: relative;
                text-decoration: none;
                margin-left: 40px;
                color: rgb(107, 107, 107);
            }
            .content{
                position: relative;
                z-index: 2;
                padding-top: 90px; 
                width: 100%;
                height: 100vh;
                display: flex;
                align-items: center;
                justify-content: space-between;
                transition: 0.5s;
                transform-origin: right;
            }
            .banner.active .content{
                transform: scale(0);
                transform-origin: left;
            }
            
            .content .contentBx{
               /* margin-top: 40px;                 */
                max-width: 600px;
               
            }
            .content .contentBx h2{
                font-size: 4em;
                line-height: 1em;
                color: #03a9f4;
                text-transform: uppercase;
            }
            .content .contentBx p{
                font-size: 1em;
                margin: 20px 0;
                color: rgb(107, 107, 107);
                text-align: justify;
            }
            .content .contentBx a{
                display: inline-block;
                border: 1px solid #03a9f4;
                color: #03a9f4;
                padding: 10px 30px;
                text-transform: uppercase;
                text-decoration: none;
                transition: 0.5s;
                margin-top: 15px;
            }
            .content .imgBx{
                /* position: absolute;
                bottom: 0px;
                z-index: 4;
                right: 100px;
                display: flex;
                transition: 0.5s;
                transform-origin: right; */
                display: flex;
                justify-content: center;
                height: 100%;
                width: 100%;
            }
            .content .imgBx img{
                max-width: 100%;
                min-width: 350px;
                position: relative;
                bottom: 0;
            }
            .banner.active .imgBx{
                transform: scale(0);
                transform-origin:center;
            }
            
            
            @media(max-width:991px){
                body{
                    font-size: 12px;
                }
                header{
                    padding: 20px 40px;
                }
                .banner{
                    padding: 40px;
                    overflow: hidden;
                }
                .content{
                    flex-direction: column;
                    height: auto;
                    padding-top: 0;
                }
                .content .contentBx{
                    max-width: 100%;
                }
                .content .imgBx{
                    display: none;
                    margin-top: -60px;
                    justify-content:flex-end ;
                }
                .content .imgBx img{
                    max-width: 200px;
                    min-width: 100px;
                    position: relative;
                    bottom: 0;
                }
                .toggle{
                    display: block;
                }
                .banner .menu{
                    display: flex;
                    position: fixed;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    justify-content: center;
                    align-items: center;
                    flex-direction: column;
                    z-index: 5;
                    visibility:hidden;
                    opacity: 0;
                    transition: 1s;
                }
                .banner.active .menu{
                    visibility: visible;
                    opacity: 1;
                    transition-delay: 0.5s;
                }
                .menu li{
                    list-style: none;
                }
                .menu li a{
                    color: #fff;
                    text-decoration: none;
                    font-size: 2em;
                }
                .banner::after{
                    visibility: hidden;
                    bottom: 0;
                    right: 0;
                    height: 200px;
                    width: 300px;
                    z-index: 1;
                    transition: 1s;
                    
                    background-color: #03a9f4;
                    border-radius: 10px 0 0 10px;
                    box-shadow: 0px 15px 15px rgba(0,0,0,0.25);
                }
                .banner::before{
                    left: 0;
                }
                .banner.active::before{
                
                    bottom: 0;
                    left: 0;
                    height: 170px;
                    width: 50%;
                    
                    height: 100%;
                    background: #03a9f4;
                }
                .banner.active::after{
                    visibility:visible;
                    bottom: 0;
                    right: 0;
                    height: 170px;
                    width: 50%;
                    border-radius: 0;
                    
                    height: 100%;
                    background: #03a9f4;
                    box-shadow: none;
                }
                
            }

            
        </style>
    </head>
    <body class="antialiased">
        <div class="container-all">
            {{-- <section class="header">
                <div class="overlay">
                    <img src="{{asset('img/cover.jpg')}}" alt=""> 
                </div>
                <div class="content">
                
                    <h2>
                        header ex
                    </h2>
                </div>
            </section> --}}

            <section class="banner">
                <header>
                    <a href="#" class="logo">
                        <img width="80px" src="{{asset('img/wataneya_logo_middle.png')}}" alt="">
                    </a>
                    <div class="toggle" onclick="toggle()"></div>
                    {{-- <nav>
                        <ul class="navigation">
                            <li><a href="#">HOME</a></li>
                            <li><a href="#">ABOUT</a></li>
                            <li><a href="#">CONTACT</a></li>
                            <li><a href="#">PRODUCTS</a></li>
                            <li><a href="#">LINK</a></li>
                        </ul>
                    </nav> --}}
                    <ul class="menu">
                        <li><a href="#">HOME</a></li>
                        <li><a href="#">ABOUT</a></li>
                        <li><a href="#">CONTACT</a></li>
                        <li><a href="#">PRODUCTS</a></li>
                        <li><a href="#">LINK</a></li>
                    </ul>
                </header>
                <div class="content">
                    <div class="contentBx">
                        <h2>Future on<br>your Hand</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                        <a href="#">Buy Now</a>
                    </div>
                    <div class="imgBx">
                        <img  src="{{asset('img/boy.png')}}" alt="">
                    </div>
                    

                </div>
                
                
            </section>
            
        </div>
        <script>
            function toggle(){
                const menu = document.querySelector('.toggle');
                const banner = document.querySelector('.banner');
                menu.classList.toggle('active');
                banner.classList.toggle('active');
            }
        </script>
        
    </body>
</html>
