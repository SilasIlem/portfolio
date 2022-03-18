<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Daniel Ryan</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('css/bootstrap-icons/bootstrap-icons.css')}}">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            * {
                padding: 0px;
                margin: 0px;
                box-sizing: border-box;
                scroll-behavior : smooth;
            }

            body {
                font-family: "Nunito", sans-serif;
            }

            *::-webkit-scrollbar-thumb {
                width : 5px;
                background : white;
            }

            *::-webkit-scrollbar {
                width : 8px;
            }

            h1 {
                font-weight : bolder;
            }

            .top {
                min-height: 800px;
                width: 100vw;
                background-image : url('images/1.jpg');
                background-attachment: fixed;
                background-size: cover;
                color: white;
                padding-top : 20px;
            }

            .top #intro {
                font-size: 38px;
                text-align: center;
                letter-spacing: 4px;
                margin-top: 220px;
                padding : 12px;
                -webkit-backdrop-filter : invert(20);
            }

            #intro h1 {
                display : inline;
            }

            .navbar-nav {
                display : flex;
                width : 100vw;
                list-style : none;
                align-items : center;
                justify-content: center;
            }

            .navbar-nav li {
                margin-right : 16px;
            }

            #about {
                min-height : 400px;
                display : flex;
                width : 100%;
                justify-content : space-evenly;
                flex-wrap : wrap;
            }

            #about-left {
                width : 100%;
                padding : 20px;
            }

            #about-right {
                width : 350px;
                margin : 20px 2%;
                height : 350px;
            }

            #skills {
                margin : 16px;
                margin-top : 50px;
            }

            #skills ul {
                margin : 20px;
                min-height : 500px;
                display : flex;
                flex-direction : column;
                justify-content : space-around;
                list-style : disc;
                padding : 0px 16px;
            }

            #resume {
                margin-left : 30px;
            }

            #resume > div {
                margin : 12px auto;
            }

            #resume ul {
                margin-left : 50px;
            }

            #testimonials {
                margin : 40px 20px;
                padding : 10px;
                background-image : url("{{ asset('images/developer.jpg') }}");
                background-attachment : fixed;
                background-size : cover;
                color : rgb(255, 94, 0);
            }

            #testimonials h1, #services h1, #contact h1 {
                text-align : center;
                margin : 16px auto;
            }

            #testimonials ul {
                display : flex;
                justify-content : center;
                flex-wrap : wrap;
                list-style : none;
                align-items : center;
            }

            #testimonials li {
                width : 300px;
                height : 320px;
                background : rgba(255, 255, 255, 0.788);
                box-shadow : 0px 0px 8px #6b7280;
                margin : 8px 16px;
                padding : 16px;
            }

            #services {
                padding : 0px 40px;
            }

            #services ul {
                list-style : none;
            }

            #services li {
                margin : 16px auto;
            }
            #contact {
                margin : 16px auto;
                padding-left : 20px;
                line-height : 2.2rem;
                text-align : center;
            }

            #contact form {
                display : flex;
                margin : auto;
                align-items : center;
                justify-content : space-around;
                height : 400px;
                flex-direction : column;
            }

            #contact form > * {
                height : 40px;
                width : 120px;
                box-shadow : 0px 0px 4px #2d3748;
                padding : 20px;
            }

            #contact form textarea {
                height : 50px;
                width : 180px;
            }
        </style>

    </head>
    <body class="antialiased">
        <div class = "top">
                        
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="#about">About Me</a></li>
                <li class="nav-item"><a class="nav-link" href="#skills">My Skills</a></li>
                <li class="nav-item"><a class="nav-link" href="#services">My Services</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">contact Me</a></li>
            </ul>

            <div id="intro">
                <span>Hello, I'm</span> <h1>Daniel Ryan</h1>
                <p>and this is my Portfolio</p>
            </div>

            <style>
                .top button {
                    height : 60px;
                    width : 150px;
                    text-align : center;
                    background : orangered;
                    margin : 26px auto;
                    color : white;
                    border-radius : 12px;
                }

                #about-bottom {
                    margin : 40px 0px;
                    padding : 20px;
                }

                #about-bottom ul {
                    list-style : none;
                    display : flex;
                    flex-wrap : wrap;
                    justify-content : space-evenly;
                }

                #about-bottom ul li {
                    display : flex;
                    margin : 10px;
                    width : 400px;
                    flex-wrap : wrap;
                    text-align : right;
                }

                #about-bottom ul li i {
                    font-size : 50px;
                    margin : 8px;
                }

                #about-bottom ul li i, #about-bottom ul li h2 {
                    font-size : 26px;
                    margin : 8px;
                    font-weight : 600;
                }

                #about-left button {
                    height : 46px;
                    margin-top : 16px;
                    width : 120px;
                    text-align : center;
                    background : black;
                    color : white;
                }

                #about-left hr {
                    height : 5px;
                    background :rgb(255, 94, 0);
                    margin : 12px 0px;
                }
            </style>
            <div style = "margin-top : 80px; width : 100%; display : flex; justify-content : center; flex-direction : column;">

                <hr style = "background : orangered, width : 60px; height : 8px;">

                <button><a href="#works">View my Works</a></button>
            </div>
        </div>

   
        <div id="about">
            <img src="images/2.jpg" alt="" id="about-right">

            <div id = 'about-left'>
                <h1>Daniel Ryan</h1>

                <p>Creative Web & App Developer</p>

                <hr/>

                <p>
                    I am Daniel Ryan, Legally known as Silas Ilemobayo --- you should call me Daniel though. I live in Nigeria, work in Nigeria, and plan to do so for as long as she shall have me. I am a Software Engineer; Devops-concentric Web Designer, Mobile Application developer, Graphic Designer, Copy Writer, Science and Maths Tutor... You name 'em.

                </p>
       
                <button>Learn More</button>

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




        <style>
            #works {
                margin : 16px;
            }
            #works ul {
                display : flex;
                justify-content : evenly;
                flex-wrap : wrap;
                list-style : none;
                width : 100%;
            }

            #works li {
                width : 220px;
                height : 250px;
                margin : 12px;
            }

            #works img {
                height : 200px;
                width : 200px;
                margin : 12px;
            }

            #works li {
                text-align : center;
            }
        </style>

        <div id="works">
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

        <div id="skills">
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

        <style>
            #services li {
                margin-bottom : 60px;
            }
            #services .left {
                text-align : left;
            }

            #services .right {
                text-align : right;
            }
        </style>

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
