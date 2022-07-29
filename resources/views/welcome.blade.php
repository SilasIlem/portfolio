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
        <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">

        <link rel="stylesheet" href="{{ asset('css/portfolio.css') }}">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

    </head>
    <body class="antialiased" id = "dark">
        <div id="navbar-nav">
            <ul>
                <li class="nav-item"><a class="nav-link" active href="#about"><i class = "bi bi-people"></i></a></li>
                <li class="nav-item"><a class="nav-link" href="#skills"><i class = "bi bi-server"></i></a></li>
                <li class="nav-item"><a class="nav-link" href="#services"><i class = "bi bi-minecart"></i></a></li>
                <li class="nav-item"><a class="nav-link" href="#contact"><i class = "bi bi-phone"></i></a></li>
                <li class="nav-item"><a class="nav-link" href="#"><i class = "bi bi-arrow-up"></i></a></li>
            </ul>
        </div>
        <section class = "top">
            <button id = day-night><i class = "bi bi-lightbulb"></i><i class = "bi bi-moon"></i></button>
            <h3 id = "flag" class = "animated slideInDown"> <span id = "d">D</span> <span id = "r">R</span></h3>
            <div>
            
                <div id="socials">
                    <ul>
                        <li><a href=""><i class = "bi bi-facebook"></i></a></li>
                        <li><a href=""><i class = "bi bi-whatsapp"></i></a></li>
                        <li><a href=""><i class = "bi bi-instagram"></i></a></li>
                        <li><a href=""><i class = "bi bi-github"></i></a></li>
                    </ul>
                </div>
    
                <div id="intro" class = "animated slideInDown">
                    <span>Hello, I'm</span> <h1>DANIEL RYAN</h1>
                    <p>and this is my Portfolio</p>
                </div>
    
                <div style = "margin : 16px 0px 24px; display : flex; justify-content : center;">
                    <hr class = "hr" style = "width : 80px; background :var(--theme-color); height : 2px; border-radius : 4px;">
                </div>
    
                <div id = btns class = "animated slideInDown">
    
                    <button id = one> <a href="docs/resume.pdf" download>Download Resume</a></button>
    
                    <button id = two>About Me</button>
        
                </div>
       
                <div style = "margin-top : 16px; width : 100%; display : flex; justify-content : center; flex-direction : column;">
    
                    <hr style = "background : orangered, width : 60px; height : 8px;">
    
                    <button style = "z-index : 99"><a href="#works">View my Works</a></button>
                </div>

                <div style = "display : flex; justify-content : center; width : 100%;">
                    <img style = "z-index : 1;" src="{{ asset('images/1092360.jpg') }}" alt="" id = 'developer'>
                </div>
            </div>

        </section>

   
        <div id="about">

            <hr style = "height : 2px; margin : 0px 20px; width : 100%; background : var(--theme-color);">

            <div id = "about-summary">
                <img src="images/dan.jpg" alt="" id="about-img">
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
                            <p>5+ Websites</p>
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
                        <span style = "text-transform : uppercase; font-size : 18px;">My name is <span style = "font-size : 22px;">Daniel Ryan</span>, a Software Engineer</span>. Legally known as Silas Ilemobayo --- you should call me Daniel though. I am a professionally-trained devops-concentric web and mobile developer. I am also a forex trader with over three years experience; goes without saying that cryptocurrency trading is my forte.
    
                    </p>
           
                    <a href = "#contact"><button>Contact Me</button></a>
                </div>
                

            </div>
        </div>

        <section id = about-bottom>
            <ul>
                <li>
                    <i class = "bi bi-award-fill"></i>
                    <h2>Brand Identity</h2>
                    <p>Web Design is me and I am mostly a reflection of it...</p>
                </li>
               
                <li>
                    <i class = "bi bi-puzzle"></i>
                    <h2>Cognitive Design</h2>
                    <p>I am very confident in just how much of a designer I tend to be, for the right price of course.</p>
                </li>
                
                <li>
                    <i class = "bi bi-laptop-fill"></i>
                    <h2>Web & Mobile development</h2>
                    <p>Website design and mobile application design are just my thing.</p>
                </li>
            </ul>
        </section>

        <section id="works">
            <div>
                <p>My Portfolio <span style = "font-family : fantasy;">Gangan</span></p>
                <h1>RECENT WORKS</h1>
                <h5>I love what I do, check out some of my latest works</h5>
                <div>
                    <ul id = works-nav>
                        <li id = all><button>All</button></li>
                        <li id = web><button>Web</button></li>
                        <li id = mobile><button>Mobile</button></li>
                        <li id = graphic><button>Graphic</button></li>
                    </ul>
                </div>
               
                <ul id = all-works>
                    <li class = "web">
                        <img src="{{ asset('images/optymizas.jpg')}}" alt="">
                        <a href="http://protected-waters-45862.herokuapp.com"><h4>www.optymizas.com</h4></a>
                        <p>This is a website for students and teachers; pre-dominantly nigerians. It is a site where past-questions of the many exam bodies can be downloaded for a price.</p>
                    </li>
                    
                    <li class = "web">
                        <img src="{{ asset('images/IMG-20220512-WA0005.jpg')}}" alt="">
                        <a href="http://shmsa.herokuapp.com/"><h4>www.shmsa.com</h4></a>
                        <p>This is the Sacred Heart Minor Seminary website.</p>
                    </li>
                    
                    <li class = "web">
                        <img src="{{ asset('images/work2.jpg')}}" alt="">
                        <a href="https://qudroid.herokuapp.com"><h4>www.qudroidsystems.com</h4></a>
                        <p>An online coding Academy.</p>
                    </li>

                    <li class = "web">
                        <img src="{{ asset('images/img.png')}}" alt="">
                        <a href = "https://heritage-sabo.herokuapp.com"><h4>www.heritage.com</h4></a>
                        <p>This is a website that takes care of making enquiries and payments to exam bodies and universities in Nigeria.</p>
                    </li>
                    
                    <li class = "web">
                        <img src="{{ asset('images/work2.jpg')}}" alt="">
                        <a href = "http://127.0.0.1:8000"><h4>www.DRink.com</h4></a>
                        <p>Daniel Ryan's blog</p>
                    </li>
                </ul>

                <a href="#contact"><button>START A PROJECT</button></a>
            </div>
           
        </section>

        <section id="skills">
            <div>
                <h5>My Experience</h5>
                <h1>SKILLS</h1>

                <h5>I've got everything you need to launch and grow your business</h5>
                <ul id = "skill_categories">
                    <li>
                        <h2>Frontend Development</h2>
                        <ul class = "skills">
                            <li>
                                <p><i class = "bi bi-disc"></i><span>HTML</span></p>
                                <progress value = "100" max = 100></progress>
                            </li> 
                            <li>
                                <p><i class = "bi bi-disc"></i><span>CSS</span></p>
                                <progress value = "100" max = 100></progress>
                            </li>
                            <li>
                                <p><i class = "bi bi-disc"></i><span>Javascript</span></p>
                                <progress value = "100" max = 100></progress>
                            </li>
                            <li>
                                <p><i class = "bi bi-disc"></i><span>React</span></p>
                                <progress value = "80" max = 100></progress>
                            </li>
                            <li>
                                <p><i class = "bi bi-disc"></i><span>Angular</span></p>
                                <progress value = "80" max = 100></progress>
                            </li>
                            <li>
                                <p><i class = "bi bi-disc"></i><span>Vue</span></p>
                                <progress value = "80" max = 100></progress>
                            </li>
                            <li>
                                <p><i class = "bi bi-disc"></i><span>Bootstrap</span></p>
                                <progress value = "40" max = 100></progress>
                            </li>
                            <li>
                                <p><i class = "bi bi-disc"></i><span>Sass</span></p>
                                <progress value = "50" max = 100></progress>
                            </li>
                            <li>
                                <p><i class = "bi bi-disc"></i><span>Less</span></p>
                                <progress value = "40" max = 100></progress>
                            </li>
                            <li>
                                <p><i class = "bi bi-disc"></i><span>Tailwind CSS</span></p>
                                <progress value = "40" max = 100></progress>
                            </li>
                            <li>
                                <p><i class = "bi bi-disc"></i><span>Github</span></p>
                                <progress value = "40" max = 100></progress>
                            </li>
                            <li>
                                <p><i class = "bi bi-disc"></i><span>NPM</span></p>
                                <progress value = "100" max = 100></progress>
                            </li>
                            <li>
                                <p><i class = "bi bi-disc"></i><span>React Native</span></p>
                                <progress value = "100" max = 100></progress>
                            </li>
                     
                        </ul>
                    </li>

                    <li>
                        <h2>Backend Development</h2>
                        <ul class="skills">
                            <li>
                                <p><i class = "bi bi-disc"></i><span>PHP</span></p>
                                <progress value = "100" max = 100></progress>
                            </li>
                            <li>
                                <p><i class = "bi bi-disc"></i><span>Laravel</span></p>
                                <progress value = "98" max = 100></progress>
                            </li>
                            <li>
                                <p><i class = "bi bi-disc"></i><span>Code-Igniter</span></p>
                                <progress value = "40" max = 100></progress>
                            </li>
                            <li>
                                <p><i class = "bi bi-disc"></i><span>Node Js</span></p>
                                <progress value = "100" max = 100></progress>
                            </li>
                            <li>
                                <p><i class = "bi bi-disc"></i><span>Flask</span></p>
                                <progress value = "80" max = 100></progress>
                            </li>
                            <li>
                                <p><i class = "bi bi-disc"></i><span>Django</span></p>
                                <progress value = "90" max = 100></progress>
                            </li>
                            <li>
                                <p><i class = "bi bi-disc"></i><span>Spring Boot</span></p>
                                <progress value = "40" max = 100></progress>
                            </li>
                            <li>
                                <p><i class = "bi bi-disc"></i><span>Golang</span></p>
                                <progress value = "40" max = 100></progress>
                            </li>
                            <li>
                                <p><i class = "bi bi-disc"></i><span>Firebase</span></p>
                                <progress value = "80" max = 100></progress>
                            </li>
                            <li>
                                <p><i class = "bi bi-disc"></i><span>Flutter</span></p>
                                <progress value = "80" max = 100></progress>
                            </li>
                            <li>
                                <p><i class = "bi bi-disc"></i><span>MySQL</span></p>
                                <progress value = "90" max = 100></progress>
                            </li>
                            <li>
                                <p><i class = "bi bi-disc"></i><span>MongoDB</span></p>
                                <progress value = "80" max = 100></progress>
                            </li>
                            <li>
                                <p><i class = "bi bi-disc"></i><span>ASP.net</span></p>
                                <progress value = "60" max = 100></progress>
                            </li>
                            <li>
                                <p><i class = "bi bi-disc"></i><span>Postgresql</span></p>
                                <progress value = "40" max = 100></progress>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <h2>Mobile Application Development</h2>
                        <ul class = "skills">
                            <li>
                                <p><i class = "bi bi-disc"></i><span>Android Basics</span></p>
                                <progress value = "100" max = 100></progress>
                            </li>
                            <li>
                                <p><i class = "bi bi-disc"></i><span>Swift (for ios)</span></p>
                                <progress value = "90" max = 100></progress>                                
                            </li>
                            <li>
                                <p><i class = "bi bi-disc"></i><span>Java</span></p>
                                <progress value = "100" max = 100></progress>
                            </li>
                            <li>
                                <p><i class = "bi bi-disc"></i><span>Kotlin</span></p>
                                <progress value = "90" max = 100></progress>
                            </li>
                            <li>
                                <p><i class = "bi bi-disc"></i><span>Flutter</span></p>
                                <progress value = "100" max = 100></progress>
                            </li>
                            <li>
                                <p><i class = "bi bi-disc"></i><span>React Native</span></p>
                                <progress value = "80" max = 100></progress>
                            </li>
                            <li>
                                <p><i class = "bi bi-disc"></i><span>Android Studio Usage</span></p>
                                <progress value = "100" max = 100></progress>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <h2>Web-Design Coaching on</h2>
                        <ul class = "listing">
                            <li>
                                HTML
                            </li>
                            <li>
                                CSS
                            </li>
                            <li>
                                javascript
                            </li>
                            <li>
                                React
                            </li>
                            <li>
                                Angular
                            </li>
                            <li>
                                Golang
                            </li>
                            <li>
                                Python
                            </li>
                            <li>
                                Java
                            </li>
                            <li>C</li>
                            <li>C++</li>
                            <li>C#</li>
                            <li>
                                Rust
                            </li>
                            <li>R</li>
                            <li>Php</li>
                            <li>Laravel</li>
                        </ul>

                    </li>

                    <li>
                        <h2>Devops Expertise</h2>
                        <ul class = "listing">
                            <li>Jenkins</li>
                            <li>Docker</li>
                            <li>Terraform</li>
                            <li>Kubernetes</li>
                            <li>Ansible</li>
                            <li>Vagrant</li>
                        </ul>
                    </li>

                    <li>
                        <h2>Misc</h2>
                        <ul class = "listing">
                            <li>Code Debugging</li>
                            <li>100 wpm (words per minute) Typing Speed (Average)</li>
                            <li>UI/UX Design</li>
                            <li>Machine-Learning Expertise</li>
                            <li>Cloud Web development</li>
                        </ul>

                    </li>
                    
                </ul>
            </div>
         
        </section>

        <section id="services">
            <div>
            <p>My Services</p>
            <h1>WHAT I OFFER</h1>

            <ul>
                <li class = left>
                    
                    <div class = "desc">
                        <h3>Web Design</h3>
                        <div class = "service__summary">
                            <button>Learn More <i class = "bi bi-arrow-right"></i></button>
                        </div>
                    </div>
                    <div class="service__modal">
                        <div class="service__content">
                            <i class = "bi bi-x"></i>
                            <h2>Web Design</h2>
                            <ul>
                                <li>
                                    <div>
                                        <i class = "bi bi-disc"></i>
                                        <h4>Frontend</h4>
                                    </div>
                                    <ul>
                                        <li>HTML</li>
                                        <li>CSS</li>
                                        <li>Javascript</li>
                                    </ul>
                                </li>
                                <li>
                                    <div>
                                        <i class = "bi bi-disc"></i>
                                        <h4>Backend</h4>
                                    </div>
                                    <ul>
                                        <li>PHP</li>
                                        <li>Laravel</li>
                                        <li>ASP.net</li>
                                    </ul>
                                </li>
                                <li>
                                    <div>
                                        <i class = "bi bi-disc"></i>
                                        <h4>Devops</h4>
                                    </div>
                                    <ul>
                                        <li>HTML</li>
                                        <li>CSS</li>
                                        <li>Javascript</li>
                                    </ul>
                                </li>
                                <li>
                                    <div>
                                        <i class = "bi bi-disc"></i>
                                        <h4>Frameworks</h4>
                                    </div>
                                    <ul>
                                        <li>HTML</li>
                                        <li>CSS</li>
                                        <li>Javascript</li>
                                    </ul>
                                </li>

                            </ul>
                        </div>
                    </div>
            
            
                </li>
                <li class = right>

                    <div class = "desc">
                        <h3>Tutorials on Web Design</h3>
                        <div class = "service__summary">
                            <button>Learn More <i class = "bi bi-arrow-right"></i></button>
                        </div>
                    </div>
                    <div class="service__modal">
                        <div class="service__content">
                            <i class = "bi bi-x"></i>
                            <h2>Tutorials on Web Design</h2>
                            <ul>
                                <li>
                                    <div>
                                        <i class = "bi bi-disc"></i>
                                        <h4>Frontend</h4>
                                    </div>
                                    <ul>
                                        <li>HTML</li>
                                        <li>CSS</li>
                                        <li>Javascript</li>
                                    </ul>
                                </li>
                                <li>
                                    <div>
                                        <i class = "bi bi-disc"></i>
                                        <h4>Backend</h4>
                                    </div>
                                    <ul>
                                        <li>PHP</li>
                                        <li>Laravel</li>
                                        <li>ASP.net</li>
                                    </ul>
                                </li>
                                <li>
                                    <div>
                                        <i class = "bi bi-disc"></i>
                                        <h4>Devops</h4>
                                    </div>
                                    <ul>
                                        <li>HTML</li>
                                        <li>CSS</li>
                                        <li>Javascript</li>
                                    </ul>
                                </li>
                                <li>
                                    <div>
                                        <i class = "bi bi-disc"></i>
                                        <h4>Frameworks</h4>
                                    </div>
                                    <ul>
                                        <li>HTML</li>
                                        <li>CSS</li>
                                        <li>Javascript</li>
                                    </ul>
                                </li>

                            </ul>
                        </div>
                    </div>
            
                </li>
                <li class = left>
                    
                    <div class = "desc">
                        <h3>Graphic Design</h3>
                        <div class = "service__summary">
                            <button>Learn More <i class = "bi bi-arrow-right"></i></button>
                        </div>
                    </div>
                    <div class="service__modal">
                        <div class="service__content">
                            <i class = "bi bi-x"></i>
                            <h2>Graphic Design</h2>
                            <ul>
                                <li>
                                    <div>
                                        <i class = "bi bi-disc"></i>
                                        <h4>Logo Design</h4>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <i class = "bi bi-disc"></i>
                                        <h4>Banner Design</h4>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <i class = "bi bi-disc"></i>
                                        <h4>Flyer Design</h4>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <i class = "bi bi-disc"></i>
                                        <h4>Frameworks</h4>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
            
                </li>
                <li class = right>

                    <div class = "desc">
                        <h3>Search Engine Optimization</h3>
                        <div class = "service__summary">
                            <button>Learn More</button>
                        </div>
                    </div>
                    <div class="service__modal">
                        <div class="service__content">
                            <i class = "bi bi-x"></i>
                            <h2>Search Engine Optimization</h2>
                            <ul>
                                <li>
                                    <ul>
                                        <li>Analytics</li>
                                        <li>Keyword Research</li>
                                        <li>Links</li>
                                        <li>Local SEO</li>
                                        <li>Mobile SEO</li>
                                        <li>On-page SEO</li>
                                        <li>Rank Checking</li>
                                        <li>Site Speed</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
            
                </li>
                <li class = left>
                    
                    <div class = "desc">
                        <h3>Video Editing</h3>
                    
                    </div>
            
                </li>
                <li class = right>

                    <div class = "desc">
                        <h3>Tutorials on English Fluency</h3>
                    </div>
            
                </li>

            </ul>

            </div>

            <form action="{{ route('subscribe') }}" method = "POST">
                @csrf
                <p>Get Notified</p>
                <input type="email" name = "email" placeholder = "Email Address">
                <button type="submit">SUBSCRIBE</button>
            </form>

        </section>
        
        
        <section id="testimonials">
            <h1>My Clients' Testimonial.</h1>
            <h5>I am honored to have partnered up with these clients</h5>

            <ul class = "owl-carousel owl-carousel1">
                <li>
                    <p>"Mr. Daniel Ryan is such a brilliant mind to work with."</p>
                    <small>Timi</small>
                </li>
                <li>
                    <p>"Daniel Ryan is really fun, and he makes the whole ordeal of working with a person seem fun as well."</p>
                    <small>Silas</small>
                </li>
                <li>
                    <p>"Mr. Daniel Ryan is simple, but full of wonders."</p>
                    <small>Ire</small>
                </li>
            </ul>
        
        </section>

        <section id="contact">
            <div>

            <div>

                <h1>Get in Touch</h1>
                <h3>My Contact Details</h3>
                <ul>
                    <li>
                        <i class = "bi bi-envelope-fill"></i>
                        <p>Email Address</p>
                        <a href = "mailto:danryan0246@gmail.com">danryan0246@gmail.com</a>
                    </li>
                    <li>
                        <i class = "bi bi-telephone-fill"></i>
                        <p>Phone Number</p>
                        <a href = "tel:+2347042717677">+2347042717677</a>
                    </li>
                    <li>
                        <i class = "bi bi-whatsapp"></i>
                        <p>WhatsApp</p>
                        <p>+2348137457229</p>
                    </li>
                    <li>
                        <i class = "bi bi-facebook"></i>
                        <p>Facebook</p>
                        <a href="www.facebook.com/danryan">Daniel Ryan</a>
                    </li>
                </ul>

                <p><span style = "font-weight : bolder;">Address</span> : No 12 Esso, Opposite AUD schools, Ondo City, Ondo State.</p>
            </div>

            <form action="{{ route('project') }}" method = "POST">
                <p>Write me your project...</p>
                <input type="text" placeholder = "Name" name = "name">
                <input type="email" placeholder = "Email" name = "email">
                <input type="tel" placeholder = "Phone No" name = "phone">
                <textarea placeholder = "write a Message" name = "content"></textarea>
                <button type="submit">Send</button>
            </form>
            
        </div>
        </section>

        <footer style = "text-align : center; padding-bottom : 80px; ">
            Copyright &copy; 2022 | All rights reserved 
        </footer>

        <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
        <script src = "{{asset('js/owl.carousel.min.js') }}"></script>
        <script src = "{{ asset('js/portfolio.js') }}"></script>
    </body>
</html>
