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
                    Full-Stack Software Developer at Kanekta Technologies<br>
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
              <div class="button-group">
                  <a class="button featured-project-trigger active" data-feature="embedded">Embedded</a>
                  <a class="button featured-project-trigger " data-feature="web">Web</a>
              </div>
            </div>
          </div>
          <section id="feature-embedded" class="project-showcase" >
            <div class="row">
              <div class="six columns u-pull-right"><img src="/img/robot.jpg" style="border-radius: 10px;" class="project-image"></div>
              <div class="six columns u-pull-left">
                <div class="project-content text-left">
                  <h3 class="project-title">Autonomous Robot</h3>
                  <ul class="project-tags">
                    <li>C++, Arduino</li>
                  </ul>
                  <p class="project-description">
                      I wrote the program that controlled this fun-looking robot. Its purpose is to play capture the flag - it grabs the enemy flags (purple plastic tubes) when it sees them. It remains undefeated after three robot vs. robot showdowns.<br><br> The robot holds an ultrasonic sensor to sense proximity, a light sensor to look for flags, two motors to drive the robot, and a servo to control the claw. I wrote the code in C++ and used APIs in the arduino library to read from the sensors and control the motors.
                  </p><a href="https://github.com/aaronVerones/robot" target="_blank" class="button button-primary">See the code</a>
                </div>
              </div>
            </div>
          </section>
          <section id="feature-web" class="project-showcase" style="display:none">
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
        </div>
      </div>
      <!-- Start WIP Section-->
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
              <div class="expertise-block wow"><a href="" target="_blank" class="startup-brand"><img src="http://via.placeholder.com/680x400"></a>
                <p class="description"><a href="" target="_blank">Name </a>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              </div>
            </div>
            <div class="one-third column">
              <div class="expertise-block wow"><a href="" target="_blank" class="startup-brand"><img src="http://via.placeholder.com/680x400"></a>
                <p class="description"><a href="" target="_blank">Name </a>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              </div>
            </div>
            <div class="one-third column">
              <div class="expertise-block wow"><a href="" target="_blank" class="startup-brand"><img src="http://via.placeholder.com/680x400"></a>
                <p class="description"><a href="" target="_blank">Name </a>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              </div>
            </div>
          <!-- end row -->
        </div>
      </section>
      <!-- Start Action Section-->
      <section id="sub-footer" class="cd-section">
        <div class="container">
          <div class="row">
            <div class="eight columns offset-by-two columns">
              <p class="intro slate">Testimonials</p>
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
