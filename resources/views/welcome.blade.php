<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Daniel Ryan</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        
        <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap-icons/bootstrap-icons.css')}}">

        <link rel="stylesheet" href="{{ asset('css/portfolio.css') }}">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

    </head>
    <body class="antialiased" id = "dark">
        <div id="navbar-nav">
            <ul>
                <li class="nav-item"><a class="nav-link" href="#about"><i class = "bi bi-people"></i></a></li>
                <li class="nav-item"><a class="nav-link" href="#skills"><i class = "bi bi-server"></i></a></li>
                <li class="nav-item"><a class="nav-link" href="#services"><i class = "bi bi-minecart"></i></a></li>
                <li class="nav-item"><a class="nav-link" href="#contact"><i class = "bi bi-phone"></i></a></li>
            </ul>
        </div>
        <div class = "top">
            <h3 style = "position : fixed; font-size : 26px; height : 60px; width : 80px; padding : 8px; background : var(--bg); display : flex; color : var(--color); z-index : 100;"> <span style = "margin-right : 8px;">D</span> <span style = "padding-left : 8px; border-left : 2px solid rgb(192, 73, 247);">R</span></h3>
            
            <div id="socials">
                <ul>
                    <li><i class = "bi bi-facebook"></i></li>
                    <li><i class = "bi bi-whatsapp"></i></li>
                    <li><i class = "bi bi-instagram"></i></li>
                    <li><i class = "bi bi-github"></i></li>
                </ul>
            </div>

            <div id="intro" class = "animated slideInDown">
                <span>Hello, I'm</span> <h1>Daniel Ryan</h1>
                <p>and this is my Portfolio</p>
            </div>

            <div style = "margin : 16px 0px 24px; display : flex; justify-content : center;">
                <hr style = "width : 80px; background :rgb(192, 73, 247); height : 2px; border-radius : 4px;">
            </div>

            <div id = btns class = "animated slideInDown">

                <button id = one> <a href="docs/cv.txt" download>Download CV</a></button>

                <button id = two>About Me</button>
    
            </div>
   
            <div style = "margin-top : 80px; width : 100%; display : flex; justify-content : center; flex-direction : column;">

                <hr style = "background : orangered, width : 60px; height : 8px;">

                <button><a href="#works">View my Works</a></button>
            </div>
        </div>

   
        <div id="about">

            <div id = "about-summary">
                <img src="images/2.jpg" alt="" id="about-img">
                <div>
                    <h4>SKILLS SUMMARY</h4>
                    <ul>
                        <li>
                            HTML + CSS
                        </li>

                        <li>JAVASCRIPT</li>
                        <li>PHP</li>
                        <li>DEVOPS</li>
                        <li>GRAPHIC DESIGN</li>
                        <li>UI/UX DESIGN</li>
                    </ul>

                    <a href="#skills"><button>See More <i class = "bi bi-arrow-right"></i></button></a>
                </div>
            </div>


            <div id = 'about-left'>

                <div id = "about-littles">
                    <ul>
                        <li>
                            <i class="bi bi-lightbulb"></i>
                            <h2>Experience</h2>
                            <p>6+ Years in Web Dev</p>
                        </li>
                        <li>
                            <i class="bi bi-gem"></i>
                            <h2>Completed</h2>
                            <p>27 Websites</p>
                        </li>
                        <li>
                            <i class="bi bi-envelope"></i>
                            <h2>Support</h2>
                            <p>Got questions for me? <a href="#contact"><i class = "bi bi-arrow-right-square-fill"></i></a></p>
                        </li>
                    </ul>
                </div>

                <div id = about-me>
                    <p>Personal & Professional</p>
                    <h1>BACKGROUND</h1>
                    <h1 style = "color : var(--theme-color);">Daniel Ryan</h1>

                    <p>Creative Web & App Developer</p>
    
                    <hr/>
    
                    <p>
                        <span style = "text-transform : uppercase; font-size : 18px;">My name is <span style = "font-size : 22px;">Daniel Ryan</span>, a Software Engineer</span>. Legally known as Silas Ilemobayo --- you should call me Daniel though. I am a professionally trained devops-concentric web and mobile developer. I am also a forex trader with over three years experience; goes without saying that cryptocurrency trading is my forte.
    
                    </p>
           
                    <button>Contact Me</button>
                </div>
                

            </div>
        </div>

        <div id = about-bottom>
            <ul>
                <li>
                    <i class = "bi bi-award-fill"></i>
                    <h2>Brand Identity</h2>
                    <p>Web Design is a similar process of creation with the intention of the pre presenting...</p>
                </li>
               
                <li>
                    <i class = "bi bi-puzzle"></i>
                    <h2>Cognitive Design</h2>
                    <p>Web Design is a similar process of creation with the intention of the pre presenting...</p>
                </li>
                
                <li>
                    <i class = "bi bi-laptop-fill"></i>
                    <h2>Web development</h2>
                    <p>Web Design is a similar process of creation with the intention of the pre presenting...</p>
                </li>
            </ul>
        </div>

        <div id="works">
            <div>
                <h1>My Works</h1>
                <ul>
                    <li>
                        <img src="{{ asset('images/work1.png')}}" alt="">
                        <h4>sweet Cherry</h4>
                        <p>Vidmate</p>
                    </li>
                    
                    <li>
                        <img src="{{ asset('images/work2.jpg')}}" alt="">
                        <h4>sweet Cherry</h4>
                        <p>Vidmate</p>
                    </li>
                </ul>
            </div>
           
        </div>

        <div id="skills">
            <div>
                <h1>My Skills -- among others.</h1>
                <ul>
                    <li>Graphic Design</li>
                    <li>Web-Design Coach</li>
                    <li>Devops Expertise</li>
                    <li>Full-stack Web Development</li>
                    <li>Code Debugging</li>
                    <li>100 wpm (words per minute) Typing Speed (Average)</li>
                    <li>UI/UX Design</li>
                    <li>Machine-Learning Expertise</li>
                    <li>Cloud Web development</li>
                    <li>Mobile Application Development</li>
                </ul>
            </div>
         
        </div>

        <div id = resume>
            
            <h1>My Resume</h1>

            <div>
            <h2>Education</h2>
                <p>March 2017 - present</p>
            </div>
            <div>
                <h2>Masteral in Software Engineering</h2>
                    <p>federal University of Technology, Akure.</p>
            </div>
            <div>
                <h2>Experience</h2>
                    <p>web Developer at Help3 Organisation, Ondo City</p>
                
                <ul>
                    <li>Provided front-end website development using WordPress and other editing software.</li>
                    <li>Planned website development, converting mockups into usable web presence with HTML, Javascript, AJAX and JSON coding.</li>
                    <li>Machine Learning Project Management</li>
                </ul>
            </div>
            <div>
                <p>Chief Techonology Officer At Mugupp.</p>
                <ul>
                    <li>Lead Engineer on Mugupp Scholarship project.</li>
                    <li>Provided Assistance in Copy-writing activities.</li>
                </ul>
            </div>
        </div>

    <div id="testimonials">
        <h1>Client Testimonial.</h1>

        <ul>
            <li>
                <p>"Far far away, behind the word mountains, ar from the coutnries Vokalia and Consonantia, there live the blind texts.Separted they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean."</p>
            </li>
            <li>
                <p>"Far far away, behind the word mountains, ar from the coutnries Vokalia and Consonantia, there live the blind texts.Separted they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean."</p>
            </li>
            <li>
                <p>"Far far away, behind the word mountains, ar from the coutnries Vokalia and Consonantia, there live the blind texts.Separted they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean."</p>
            </li>
            <li>
                <p>"Far far away, behind the word mountains, ar from the coutnries Vokalia and Consonantia, there live the blind texts.Separted they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean."</p>
            </li>
        </ul>
      
    </div>

    <div id="services">

        <h1>My Services</h1>

        <ul>
            <li class = left>
                <h3>Web Design</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugit, error.</p>
            </li>
            <li class = right>
                <h3>Tutorials on Web Design</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, asperiores.</p>
            </li>
            <li class = left>
                <h3>Tutorials on the Sciences</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quis, sint.</p>
            </li>
            <li class = right>
                <h3>Tutorials on English Fluency.</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, eligendi!</p>
            </li>
            <li class = left>
                <h3>Graphic Design</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium, sit?</p>
            </li>
            <li class = right>
                <h3>Search Engine Optimization</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, voluptates.</p>
            </li>
            <li class = left>
                <h3>Video Editing</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, cumque.</p>
            </li>
        </ul>

    </div>

    <style>
        *::placeholder {
            text-align : center;
        }
        #contact form {
            width : 400px;
            box-shadow : inset 0px 0px 4px purple;
        }
    </style>

    <div id="contact">
        <h1>Get in Touch</h1>
        <h3>My Contact Details</h3>
        Email : <a href = "mailto:danryan0246@gmail.com">danryan0246@gmail.com</a>

        <br>

        Phone Number : <a href = "tel:07042717677">07042717677</a>

        <br>

        Address : No 12 Esso, Opposite AUD schools, Ondo City, Ondo State.
        <form action="">
            <input type="text" placeholder = "Name">
            <input type="email" placeholder = "Email">
            <input type="tel" placeholder = "Phone No">
            <textarea placeholder = "write a Message"></textarea>
            <button type="submit">Send</button>
        </form>
    </div>

    <footer style = "text-align : center;">
        Copyright &copy; 2022 | All rights reserved 
    </footer>
<script src="js/vendor/jquery.min.js"></script>
<script src="js/vendor/jquery-migrate-3.0.1.min.js+popper.min.js+bootstrap.min.js+jquery.easing.1.3.js.pagespeed.jc.uxxkex28sQ.js"></script><script>eval(mod_pagespeed_s9oGiJZxTb);</script>
<script>eval(mod_pagespeed_j_Mw8blyhv);</script>
<script>eval(mod_pagespeed_bFkBxCYQ3v);</script>
<script>eval(mod_pagespeed__f3Ii7ajmX);</script>
<script src="js/vendor,_jquery.stellar.min.js+vendor,_jquery.waypoints.min.js+custom.js.pagespeed.jc.pnQHqVD1q2.js"></script><script>eval(mod_pagespeed_9ZERlAUSP9);</script>
<script>eval(mod_pagespeed_QZ_dFqdF1I);</script>
<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
<script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
<script>eval(mod_pagespeed_SQ1QUsEwMs);</script>



<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
    		window.dataLayer = window.dataLayer || [];
    		function gtag(){dataLayer.push(arguments);}
    		gtag('js', new Date());

    		gtag('config', 'UA-23581568-13');
    	</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"6d48bceb485ec4e8","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.12.0","si":100}' crossorigin="anonymous"></script>
</body>
</html>
    </body>
</html>
