<?php include_once 'form-validation.php' ?>

<!DOCTYPE html>
<html lang="en" id="top">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Front-end developer who loves learning new things for the web">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="app.js"" type=" text/javascript" defer></script>
    <title>Joshua Gutierrez | Web Developer</title>
</head>

<body>
    <nav id="main-nav">
        <div class="main-nav-left">
            <img src="images/logo.svg" alt="JG initials" class="nav-logo">
        </div>
        <div class="main-nav-items responsive">
            <i class="fa fa-times close responsive"></i>
            <div class="main-nav-center responsive">
                <ul>
                    <li><a href="#top">Home</a></li>
                    <li><a href="#about-section">About</a></li>
                    <li><a href="#work-section">Work</a></li>
                </ul>
            </div>
            <div class="main-nav-right">
                <a href="#contact-section" class="main-nav-contact-button">Contact Me</a>
            </div>
        </div>
        <div class="responsive-menu-bar">
            <i class="fa fa-bars"></i>
        </div>
    </nav>
    <section id="home-page-showcase">
        <div class="home-page-showcase-left">
            <h3>Hi, I am Joshua Gutierrez, a front-end developer.
                I build applications for the web.</h3>
            <div class="cta-buttons">
                <a href="#work-section" class="see-work-button">See Work</a>
                <a class="hire-me-button" href="#contact-section">Hire Me</a>
            </div>
            <div class="stay-connected-section">
                <h3>Stay Connected</h3>
                <div class="social-links">
                    <a href="https://github.com/joshuabgutierrez" target="_blank" rel="noopener"><i class="fa fa-github"></i></a>
                    <a href="https://www.linkedin.com/in/joshua-b-gutierrez-3a6b13199/" target="_blank" rel="noopener"><i class="fa fa-linkedin"></i></a>
                    <a href="mailto:joshgm15@gmail.com" target="_blank" rel="noopener"><i class="fa fa-envelope"></i></a>
                </div>
            </div>
        </div>
        <img src="images/web_developer.svg" alt="web-developer" class="home-page-showcase-image">
    </section>
    <section id="about-section">
        <div class="introduction">
            <h3>Hi, I'm Joshua Gutierrez</h3>
            <p>I started learning web development technologies in 2019 and I am currently
                in my last year of college. I am very passionate about designing and developing
                websites for any type of business, and continuously learning technologies to
                improve my skills for every project.</p>
        </div>
        <main class="skills">
            <div class="skill-container">
                <img src="images/web-design.svg" alt="">
                <h3>Design</h3>
                <ul class="technologies">
                    <li>Adobe XD</li>
                    <li>Prototyping</li>
                    <li>User Experience</li>
                </ul>
            </div>
            <div class="skill-container">
                <img src="images/front-end.svg" alt="">
                <h3>Front-End</h3>
                <ul class="technologies">
                    <li>HTML</li>
                    <li>CSS</li>
                    <li>JavaScript</li>
                    <li>SASS</li>
                    <li>Bootstrap</li>
                </ul>
            </div>
            <div class="skill-container">
                <img src="images/browser.svg" alt="">
                <h3>Back-End</h3>
                <ul class="technologies">
                    <li>PHP</li>
                    <li>MySQL</li>
                </ul>
            </div>
            <div class="skill-container">
                <img src="images/other.svg" alt="">
                <h3>Other</h3>
                <ul class="technologies">
                    <li>Terminal</li>
                    <li>Git</li>
                    <li>Github</li>
                </ul>
            </div>
        </main>
    </section>
    <section id="work-section">
        <h3>Work I have completed recently</h3>
        <div class="filter-list">
            <span class="active">All</span>
            <span>Design</span>
            <span>Development</span>
        </div>
        <div class="projects"></div>
    </section>
    <section id="ad-section">
        <div class="ad-container">
            <h3>Do you have a project in mind?</h3>
            <a href="#">Let's work together</a>
        </div>
    </section>
    <section id="contact-section">
        <h3>Contact Me</h3>
        <form action="<?php $_SERVER["PHP_SELF"] ?>#contact-form" method="POST" id="contact-form">
            <div class="form-item">
                <label for="name-input">Your Name</label>
                <input type="text" name="name" value="<?php echo $name ?? '' ?>" id="name-input" class="form-input">
                <span class="error"><?php echo $nameError ?></span>
            </div>
            <div class="form-item">
                <label for="email-input">Your email</label>
                <input type="text" name="email" value="<?php echo $email ?? '' ?>" id="email-input" class="form-input">
                <span class="error"><?php echo $emailError ?? '' ?></span>
            </div>
            <div class="form-item">
                <label for="message-input">Your message</label>
                <textarea name="message" id="message-input" class="form-input"><?php echo $message ?? '' ?></textarea>
                <span class="error"><?php echo $messageError ?? '' ?></span>
            </div>
            <input type="submit" value="Submit">
        </form>
    </section>
    <footer id="main-footer">
        <div class="social-links footer-links">
            <a href="https://github.com/joshuabgutierrez" target="_blank" rel="noopener"><i class="fa fa-github"></i></a>
            <a href="https://www.linkedin.com/in/joshua-b-gutierrez-3a6b13199/" target="_blank" rel="noopener"><i class="fa fa-linkedin"></i></a>
            <a href="mailto:joshgm15@gmail.com" target="_blank"><i class="fa fa-envelope"></i></a>
        </div>
        <p>Icons created by <a href="https://www.flaticon.com/authors/monkik">Monkik</a></p>
        <p>Created by Joshua Gutierrez &copy; 2020</p>
    </footer>
</body>

</html>