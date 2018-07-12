<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Aaron Verones | Software Developer</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" href="/css/main.css">

        <!-- Scripts -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="/js/main.js"></script>
        <script src="/js/fontawesome-all.min.js"></script>

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-106637379-3"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-106637379-3');
        </script>
        <!-- Hotjar Tracking Code for http://aaronverones.com -->
        <script>
            (function(h,o,t,j,a,r){
                h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
                h._hjSettings={hjid:822546,hjsv:6};
                a=o.getElementsByTagName('head')[0];
                r=o.createElement('script');r.async=1;
                r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
                a.appendChild(r);
            })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
        </script>

    </head>
    <body>
    <div id="wrapper">
      <header></header>
      <!-- Start Hero Section-->
      <div id="landing-full" class="home-hero">
        <div class="hero-container">
          <div class="hero-content">
            <h1 class="cd-headline letters type"><span>Hi, I'm Aaron. I talk to computers.</span></h1>
            <div class="page-scroll learn-more">
                <p>
                    Software Developer at Advanced Quality Systems<br>
                    Bachelor + Master Dual Degree UBC Student<br>
                </p>
                <i class="fa fa-chevron-down"></i>
            </div>
          </div>
        </div>
      </div>
      <!-- Start Experience Section-->
      <section id="me">
        <div class="container">
          <div class="row">
            <div class="eight columns offset-by-two columns">
              <p class="intro slate">Skills</p>
              <p class="statement silver">My home is on the server-side of web applications, infrastructure/DevOps, and embedded systems.</p>
            </div>
          </div>
          <div class="row">
            <div class="one-half column">
              <div class="expertise-block"><i class="fa fa-code"></i>
                <h4 class="title slate">Development</h4>
                <p class="summary">I primarily work in C++, Python, Java, and PHP. I also use HTML, CSS, JavaScript, and SQL in my web apps. I have used MVC frameworks, REST APIs, Object-relational mapping, and hardware APIs for sensors and motors.</p>
              </div>
            </div>
            <div class="one-half column">
              <div class="expertise-block"><i class="fa fa-server"></i>
                <h4 class="title slate">Infrastructure</h4>
                <p class="summary">Professionally, I've administered production servers running Linux + Nginx on AWS EC2 and Windows Servers on local hardware. I've also administered production MySQL databases on AWS RDS, and I run my personal web applications using a LEMP stack on AWS.</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Start Featured Work Section-->
      <div id="work">
        <div class="container">
          <div class="row">
            <div class="twleve columns">
              <p class="intro slate">Featured Work</p>
              {{--
              <div class="button-group">
                  <a class="button featured-project-trigger active" data-feature="embedded">Embedded</a>
                  <a class="button featured-project-trigger " data-feature="web">Web</a>
              </div>
              --}}
            </div>
          </div>
          <section id="feature-web" class="project-showcase" >
            <div class="row">
              <div class="six columns u-pull-right"><img src="/img/kanekta.jpg" style="border-radius: 10px;" class="project-image"></div>
              <div class="six columns u-pull-left">
                <div class="project-content text-left">
                  <h3 class="project-title">Kanekta</h3>
                  <ul class="project-tags">
                    <li>Linux (CentOS), Nginx, MySQL, PHP, HTML/CSS/JS</li>
                  </ul>
                  <p class="project-description">
                      Kanekta is an online wholesale platform that connects ethical brands and suppliers to B2B buyers across the globe. It was built from scratch in PHP using the Laravel framework.
                      <br><br>
                      When I started as a Junior Developer in 2017, Kanekta was a startup in the ideation stage, and I was the only full-time developer. My work took the platform from ideation to MVP, and saw the company's very first clothing order placed, paid for, and delivered.
                      <br><br>
                      As Full-Stack Developer, I am now responsible for the operation of the entire application and am the first contact point for issues. Since taking on the role, I have reduced infrastructure costs by 72% by optimizing server size and scaling, made error response immediate by building an automatic reporting feature, and reduced bug rate by 62.5% through a new team workflow.
                  </p><a href="https://kanekta.ca" target="_blank" class="button button-primary">Check it out</a>
                </div>
              </div>
            </div>
          </section>
          <section id="feature-embedded" class="project-showcase" >
            <div class="row">
              <div class="six columns u-pull-left"><img src="/img/robot.jpg" style="border-radius: 10px;" class="project-image"></div>
              <div class="six columns u-pull-right">
                <div class="project-content text-left">
                  <h3 class="project-title">Autonomous Robot</h3>
                  <ul class="project-tags">
                    <li>C++, Arduino</li>
                  </ul>
                  <p class="project-description">
                      I wrote the program that controlled this fun-looking robot. Its purpose is to play capture the flag - it grabs the enemy flags (purple plastic tubes) when it sees them. It remains undefeated after three robot vs. robot showdowns.<br><br> The robot holds an Arduino unit onboard, and uses an ultrasonic sensor to sense proximity, a light sensor to look for flags, two motors to drive the robot, and a servo to control the claw. I wrote the code in C++ and used APIs in the Arduino library to read from the sensors and control the motors.
                  </p><a href="https://github.com/aaronVerones/robot" target="_blank" class="button button-primary">See the code</a>
                </div>
              </div>
            </div>
          </section>
          <section id="feature-embedded" class="project-showcase" >
            <div class="row">
              <div class="six columns u-pull-right"><img src="/img/teacherease.jpg" style="border-radius: 10px;" class="project-image"></div>
              <div class="six columns u-pull-left">
                <div class="project-content text-left">
                  <h3 class="project-title">TeacherEase</h3>
                  <ul class="project-tags">
                    <li>Java, JSON, JavaFX</li>
                  </ul>
                  <p class="project-description">
                      TeacherEase is a Java application, and an extension of a UBC Psychology research project. A teacher would have each of their students take our questionnaire, then the application provides a profile of the different learning styles present in the classroom. It then recommends ways the teacher can modify their teaching style to fit their students.<br><br> Amid the fear that AI will replace the role of teachers, the purpose of this project is to show that augmented intelligence is far more effective. Teachers are able to make informed, data-driven decisions while still using their own emotional intelligence to reach their students best.
                  </p><a href="https://github.com/aaronVerones/teacherease" target="_blank" class="button button-primary">See the code</a>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
      <!-- Start WIP Section-->
      {{--
      <section id="wip">
        <div class="container">
          <div class="row">
            <div class="eight columns offset-by-two columns">
              <p class="intro slate">Showcase</p>
              <p class="statement silver"></p>
            </div>
          </div>
          <!-- row -->
          <div class="row">
            <div class="one-third column">
              <div class="expertise-block wow"><a href="" target="_blank" class="project-box"><img src="http://via.placeholder.com/680x400"></a>
                <p class="description"><a href="" target="_blank">Teacherease </a>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              </div>
            </div>
            <div class="one-third column">
              <div class="expertise-block wow"><a href="" target="_blank" class="project-box"><img src="http://via.placeholder.com/680x400"></a>
                <p class="description"><a href="" target="_blank">Airport Runway </a>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              </div>
            </div>
            <div class="one-third column">
              <div class="expertise-block wow"><a href="" target="_blank" class="project-box"><img src="http://via.placeholder.com/680x400"></a>
                <p class="description"><a href="" target="_blank">Autonomous Robot </a>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              </div>
            </div>
          <!-- end row -->
        </div>
      </section>
      --}}
      <!-- Start Action Section-->
      <section id="sub-footer" class="cd-section">
        <div class="container">
          <div class="row">
            <div class="eight columns offset-by-two columns">
              <p class="intro slate">Testimonial</p>
              <section class="project-testimonial">
                <blockquote class="slate">“I have learned so much from Aaron and am eternally grateful to have had him on our team. It is very rare to find someone who embodies the spirit of true intrapreneur, taking every challenge as a learning opportunity and exceeding my expectations every time.”</blockquote>
                <div class="project-testimonial-avatar"><img src="/img/pri.jpeg"></div>
                <div class="project-testimonial-name">Priyanka Vasudev, Co-Founder and CEO, Kanekta</div>
              </section>
              {{--
              <section class="project-testimonial">
                <blockquote class="slate">“ Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.”</blockquote>
                <div class="project-testimonial-avatar"><img src=""></div>
                <div class="project-testimonial-name">Somebody, Some title, Some company</div>
              </section>
              --}}
            </div>
          </div>
        </div>
      </section>
      <footer>
        <div id="contact">
          <div class="container">
            <div class="row">
              <div class="twelve columns"><a href="" class="footer-logo"><img src=""></a>
                <p class="coded-with-love">Aaron Verones, {{date("Y")}}</p>
                <div class="social-links">
                    <a href="https://www.linkedin.com/in/aaron-verones/" target="_blank"><i class="fab fa-linkedin"></i></a>
                    <a href="mailto:aaron.verones@alumni.ubc.ca" target="_top"><i class="fa fa-envelope"></i></a>
                    <a href="https://github.com/aaronVerones" target="_blank"><i class="fab fa-github"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
</head>
</html>
