
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>This is my portfolio</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"></script>
    <script src="https://kit.fontawesome.com/e521b08335.js" crossorigin="anonymous"></script>


</head>
<body>
   
    <div id="header">
        
        <div class="contain">
            <nav id="navbar">
                <h class="logo">Portfo<span>lio.</span></h>
                <ul id="sidemenu"onclick="closemenu()">
                    <li><a href="#header">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#services">Service</a></li>
                    <li><a href="#portfolio">Projects</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <i class="fa-solid fa-xmark" onclick="closemenu()"></i>
                </ul>
                <i class="fa-solid fa-bars" onclick="openmenu()"></i>
            </nav>
            <div class="header-text">
                <h1>Hi, I'm <span>Deepak</span><br>kumar From India.</h1>
                <p><span class="typing"></span></p>


            </div>
        </div>
    </div>
    <div id="about">
        <div class="container">
            <div class="row">
                <div class="about-col-1">
                    
                   <img src="dp (2).png" alt="">
                
      </div>
                <div class="about-col-2">
                    <hi class="sub-title">About Me</hi>

                    <p>I am Deepak Kumar(Student) a pre-final year Undergraduate pursuing my bachelor's in Computer
                        Science and Engineering From Maharishi Dayanand University, Rohtak. I am passionate about
                        Web
                        development & enjoy learning new things. I am a technology enthusiast and have my hands dirty on
                        different technology, aiming at building some valuable solutions to improve the human quality of
                        human life. My website became popular among my friends and juniors. Always guide my juniors
                        and
                        encourage them to take a step in life. Apart from this. I love to participate in various
                        competitions/Contests/Hackathons and am driven by various technologies. My aim is to empower and
                        encourage our friends and juniors or other people into technology through communities. .</p>

                    <div class="tab-titles">
                        <p class="tab-links active-link" onclick="opentab('skills')">Skills</p>
                        <p class="tab-links" onclick="opentab('experience')">Experience</p>
                        <p class="tab-links" onclick="opentab('education')">Education</p>
                    </div>
                    <div class="tab-contents active-tab" id="skills">
                        <div class="lines">
                        <div class="bar">
                        <div class="info">
                            <span>HTML</span>
                            <span>90%</span>
                        </div>
                        <div class="line html"></div>

                        <div class="info">
                            <span>CSS</span>
                            <span>70%</span>
                        </div>
                        <div class="line css"></div>

                        <div class="info">
                            <span>Java-Script</span>
                            <span>50%</span>
                        </div>
                        <div class="line js"></div>

                        <div class="info">
                            <span>PHP</span>
                            <span>90%</span>
                        </div>
                        <div class="line java"></div>

                        <div class="info">
                            <span>JAVA</span>
                            <span>80%</span>
                        </div>
                        <div class="line c"></div>
                    </div> 
                    </div>
                    </div>

                    <div class="tab-contents" id="experience">
                       <ul>
                           <li><span>01/11/2021 - 30/11/2021</span><br>One month internship as android scholar intern in 
                            Two-waits Technologies<br><a href="intern.pdf" >Learn more</a> </li>
                       </ul>
                       <ul>
                           <li><span>01/01/2023 - 01/03/2023</span><br>Three month internship as sales department intern in 
                            Surya Roshni Ltd.<br><a href="intern.pdf" >Learn more</a> </li>
                       </ul>
                    </div>
                    <div class="tab-contents" id="education">
                        <ul>
                            <li><span>2019-2023</span><br>Vaish College Of Engineering, Rohtak<br>Bachelor Of
                                Technology (B.TECH)<br>Computer Science and Engineering(CSE)<br>CGPA-8.3/10</li>
                            
                        </ul>
                    </div>
                </div> 
            </div>
        </div>
    </div>

    <div id="services"> 
        <div class="container">
            <hi class="sub-title">My Services</hi>
            <div class="services-list">
                <div>
                    <i class="fa-solid fa-paintbrush"></i>
                    <h2>Web Design</h2>
                    <p>
                       You can make any webpage design you want from us.
                    </p>
                    <a href="#contact"><u>Learn more</u></a>
                </div>
                <div>
                    <i class="fa-solid fa-chart-simple"></i>
                    <h2>Advertising</h2>
                    <p>
                        You can increase the growth of your channel and put ads on your channel.
                    </p>
                    <a href="#contact"><u>Learn more</u></a>
                </div>
                <div>
                    <i class="fa-solid fa-code"></i>
                    <h2>Apps Design</h2>
                    <p>
                        You can make any App/UI design you want for android users.
                    </p>
                  <a href="#contact"><u>Learn more</u></a>
                </div>

            </div>

        </div>
    </div>
    <div id="portfolio">
        <div class="container">
            <h1 class="sub-title">My Projects</h1>
            <div class="work-list">
                <div class="work">
                    <img src="work-1.png">
                    <div class="layer">
                        <h3>Healthcare website</h3>
                        <p>The app connects you to doctors of your given address easily</p>
                        <a href="https://healthko-website.web.app"><i class="fa-solid fa-up-right-from-square"></i></a>
                    </div>
                </div>
                <div class="work">
                    <img src="work-2.png">
                    <div class="layer">
                        <h3>E-commerce website</h3>
                        <p>This website allows people to buy physical goods, services and digital products.</p>
                        <a href="https://deep2023.000webhostapp.com/index.php"><i class="fa-solid fa-up-right-from-square"></i></a>
                    </div>
                </div>
                <div class="work">
                    <img src="work-3.png">
                    <div class="layer">
                        <h3>My Personal Portfolio</h3>
                        <p>I made this project when i was beginner & just start learning html, css and js. This is my first project</p>
                        <a href="#header"><i class="fa-solid fa-up-right-from-square"></i></a>
                    </div>
                </div>
            </div>
            <a href="https://github.com/Deepak95718" class="btn">See More</a>
        </div>

    </div>
    
    
    <div id="contact">
        <div class="contained">
            <div class="row">
                <div class="contact-left">
                    <h1 class="sub-title">Contact Me</h1>
                    <p><i class="fa-solid fa-paper-plane"></i>dy1883078@gmail.com</p>
                    <p><i class="fa-solid fa-square-phone"></i>9817672386</p>
                    <div class="social-icon">
                        <a
                            href=https://m.facebook.com/people/L%C3%B8v%C3%AF%C3%B1g-B%C3%B8y-D%C3%AA%C3%AAp%C3%A3k/100011410736413/?comment_id=Y29tbWVudDoxMDcxMDI4MjY4NjExNzRfMTE1MDg5NTY2MDYyNTAw><i
                                class="fa-brands fa-facebook"></i></a>
                                <a href=https://twitter.com/Deep_yadav123><i class="fa-brands fa-twitter-square"></i></a>
                                <a href="https://www.instagram.com/d_fit.__/"><i class="fa-brands fa-instagram"></i></a>
                                <a
                                href="https://www.linkedin.com/in/deepak-kumar-3095b21a3?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3B7G43bXnZTpWqWRrXBrwnyw%3D%3D"><i
                                class="fa-brands fa-linkedin"></i></a>
                            </div>
                            <a href="resume.pdf" download class="btn btn2">Download CV</a>
                </div>
                <div class="contact-right">
                    <!-- <form name="submit-to-google-sheet"> -->
                  <form action="insert.php" method="post">
                        <input type="text" name="Name" placeholder="Your Name" required>
                        <input type="email" name="Email" placeholder="Your Email" required>
                        <textarea name="Message" rows="6" placeholder="Your Message"></textarea>
                        <button type="submit" name = "submit" class="btn btn2">Submit</button>
                     
                        <?php
                    $msg = '';
                   
                    if(isset($_GET['success'])){
                      $msg =  "Messgage sent successful";
                      
                      echo '<span id="msg">'.$msg.'</span>';
                    }
                    
                    ?>
                    </form>
                </div>
            </div>
        </div>
        <div class="copyright">
            <p>Made with <i class="fa-solid fa-heart"></i> by Deepak | <j class="fa-regular fa-copyright"></j> 2021 All rights reserved </p>
        </div>
    </div>
    
  
</body>
<script>
    var typed = new Typed(".typing", {
        strings: ["A Designer", "A Developer", "A Creator"],
        typeSpeed: 100,
        backSpeed: 60,
        loop: true
    })
    </script>
    <script>
    var tablinks = document.getElementsByClassName("tab-links");
    var tabcontents = document.getElementsByClassName("tab-contents");
    function opentab(tabname) {
        for (tablink of tablinks) {
            tablink.classList.remove("active-link");
        }
        for (tabcontent of tabcontents) {
            tabcontent.classList.remove("active-tab");
        }
        event.currentTarget.classList.add("active-link");
        document.getElementById(tabname).classList.add("active-tab");
    }
    </script>
    <script>
    
    var sidemeu = document.getElementById("sidemenu");
    function openmenu() {
        sidemeu.style.right = "0"; 
    }
    function closemenu() {
        sidemeu.style.right = "-200px";
    }
    </script>

    <script>
    var navbar = document.getElementById("navbar");
    var sidemenu = document.getElementById("sidemenu");
    
    window.onscroll = function () {
        if (window.pageYOffset >= sidemenu.offsetTop) {
            navbar.classList.add("sticky");
        }
        else {
            navbar.classList.remove("sticky");
        }
    
    }
    </script>

</html>