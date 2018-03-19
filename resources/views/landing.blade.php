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
                <p class="summary">Professionally, I've administered production servers including CentOS on AWS EC2, Windows Servers on local hardware, and production MySQL databases on AWS RDS. I run my personal web applications with a LEMP stack on AWS.</p>
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
                  <a class="button featured-project-trigger" data-feature="web">Web</a>
              </div>
            </div>
          </div>
          <section id="feature-embedded" class="project-showcase">
            <div class="row">
              <div class="six columns u-pull-right"><img src="" style="border-radius: 10px;" class="project-image"></div>
              <div class="six columns u-pull-left">
                <div class="project-content text-left">
                  <h3 class="project-title">Featured Embedded Project</h3>
                  <ul class="project-tags">
                    <li>C++, Arduino</li>
                  </ul>
                  <p class="project-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><a href="" target="_blank" class="button button-primary">Check it out</a>
                </div>
              </div>
            </div>
          </section>
          <section id="feature-web" class="project-showcase" style="display:none">
            <div class="row">
              <div class="six columns u-pull-right"><img src="" style="border-radius: 10px;" class="project-image"></div>
              <div class="six columns u-pull-left">
                <div class="project-content text-left">
                  <h3 class="project-title">Featured Web Project</h3>
                  <ul class="project-tags">
                    <li>Ubuntu Server, MySQL, PHP, HTML/CSS/JS</li>
                  </ul>
                  <p class="project-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><a href="" target="_blank" class="button button-primary">Check it out</a>
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
                <blockquote class="slate">“ Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.”</blockquote>
                <div class="project-testimonial-avatar"><img src=""></div>
                <div class="project-testimonial-name">Somebody, Some title, Some company</div>
              </section>
              <section class="project-testimonial">
                <blockquote class="slate">“ Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.”</blockquote>
                <div class="project-testimonial-avatar"><img src=""></div>
                <div class="project-testimonial-name">Somebody, Some title, Some company</div>
              </section>
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
