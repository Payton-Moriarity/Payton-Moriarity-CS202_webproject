<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
    <!-- end of favicon -->
    <!-- stylesheets links -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
    <link rel="stylesheet" href="css/main.css">
    <!-- end of stylesheets links -->
    <title>Payton Moriarity | Portfolio</title>
</head>
<body>
    <!-- php include header.php -->
    <?php include('include/header.php'); ?>

    <!-- about section -->
    <section class="about" id="about">
        <div class="container">
            <div class="profile-img" data-aos="fade-right" data-aos-delay="300">
                <img src="images/babypic.jpg">
            </div>
            <div class="about-details" data-aos="fade-left" data-aos-delay="300">
                <div class="about-heading">
                    <h1>About</h1>
                    <h6>Me</h6>
                </div>
                <p>
                I am a Western Washington University Computer Science Student. I want to progress in the world of Computer Science and gain knowledge in the field of game design. I am an amateur skateboarder and gamer in my spare time.
                </p>
                <div class="social-media">
                    <ul class="nav-list">
                        <li>
                        <a href="https://www.facebook.com/payton.moriarity" target="_blank" class="icon-link">
                            <i class="fab fa-facebook-square"></i>
                        </a>
                        </li>
                        <li>
                        <a href="https://twitter.com/" target="_blank" class="icon-link">
                            <i class="fab fa-twitter-square"></i>
                        </a>
                        </li>
                        <li>
                        <a href="https://www.instagram.com/paytonmoriarity" target="_blank" class="icon-link">
                            <i class="fab fa-instagram-square"></i>
                        </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- end of about section -->

    <!-- languages section -->
    <section class="languages" id="languages">
        <div class="container">
            <div class="section-heading">
                <h1>Languages</h1>
                <h6>Still gaining experience in these</h6>
            </div>
            <div class="my-languages">
                <div class="language" data-aos="fade-in" data-aos-delay="200">
                    <i class="fab fa-html5"></i>
                    <h1>HTML5</h1>
                </div>
                <div class="language" data-aos="fade-in" data-aos-delay="400">
                    <i class="fab fa-css3-alt"></i>
                    <h1>CSS3</h1>
                </div>
                <div class="language" data-aos="fade-in" data-aos-delay="600">
                    <i class="fab fa-js-square"></i>
                    <h1>JavaScript</h1>
                </div>
                <div class="language" data-aos="fade-in" data-aos-delay="800">
                    <i class="fab fa-php"></i>
                    <h1>PHP</h1>
                </div>
                <div class="language" data-aos="fade-in" data-aos-delay="1000">
                    <i class="fab fa-java"></i>
                    <h1>Java</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- end of languages section -->

    <!-- services section -->
    <section class="services" id="services">
        <div class="container">
            <div class="section-heading">
                <h1>Services</h1>
                <h6>What I COULD do for you in the future as I gain experience</h6>
            </div>
            <div class="my-skills">
                <div class="skill" data-aos="fade-in" data-aos-delay="300">
                    <div class="icon-container">
                        <i class="fas fa-paint-brush"></i>
                    </div>
                    <h1>Web Design</h1>
                    <p>
                    Front-end features like web graphic design, interface design, authoring, and user experience design
                    </p>
                </div>
                <div class="skill" data-aos="fade-in" data-aos-delay="600">
                    <div class="icon-container">
                        <i class="fas fa-code"></i>
                    </div>
                    <h1>Web Development</h1>
                    <p>
                    Back-end features like security, data entry and form submission with SQL, and a solid information architecture
                    </p>
                </div>
                <div class="skill" data-aos="fade-in" data-aos-delay="900">
                    <div class="icon-container">
                        <i class="fab fa-app-store-ios"></i>
                    </div>
                    <h1>Application Development</h1>
                    <p>
                    Mobile Application Development, Database Application development, and more
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- end of services section -->

    <!-- portfolio section -->
    <section class="portfolio" id="portfolio">
        <div class="container">
            <div class="section-heading">
                <h1>Portfolio</h1>
                <h6>View some of my recent work</h6>
            </div>
            <div class="portfolio-item" >
                <div class="portfolio-img has-margin-right" data-aos="fade-right" data-aos-delay="300">
                    <img src="images/project1.jpg" alt="">
                </div>
                <div class="portfolio-description" data-aos="fade-left" data-aos-delay="300">
                    <h6>Web Design/Development</h6>
                    <h1>Hotel-Booking Website</h1>
                    <p>
                    A CS202 lab project where a user can book a room at a hotel using a validated form, which will then store the inputted info in a database using PHP and SQL
                    </p>
                    <a href="#" class="cta">View Details</a>
                </div>
            </div>
            <div class="portfolio-item">
                <div class="portfolio-description has-margin-right" data-aos="fade-right" data-aos-delay="300">
                    <h6>Web Design</h6>
                    <h1>CSS Grid/Flex Website</h1>
                    <p>
                    A CS202 quiz project where I practiced using CSS3 Grid and Flexbox
                    </p>
                    <a href="#" class="cta">View Details</a>
                </div>
                <div class="portfolio-img" data-aos="fade-left" data-aos-delay="300">
                    <img src="images/project2.jpg" alt="">
                </div>
            </div>
            <div class="portfolio-item">
                <div class="portfolio-img has-margin-right" data-aos="fade-right" data-aos-delay="300">
                    <img src="images/project3.jpg" alt="">
                </div>
                <div class="portfolio-description" data-aos="fade-left" data-aos-delay="300">
                    <h6>Web Design/Development</h6>
                    <h1>Marine Research Website</h1>
                    <p>
                    A CS102 project for the final using basics of HTML5, CSS, and JavaScript/jQuery
                    </p>
                    <a href="#" class="cta">View Details</a>
                </div>
            </div>
        </div>
    </section>
    <!-- end of portfolio section -->

    <!-- experience section -->
    <section class="experience" id="experience">
        <div class="container">
            <div class="section-heading">
                <h1>Work Experience</h1>
                <h6>Past and current jobs</h6>
            </div>
            <div class="timeline" data-aos="fade-down" data-aos-delay="300">
                <ul>
                    <li class="date" data-date="2016 - Present">
                        <h1>Skate Like A Girl</h1>
                        <p>
                        Skateboarding instructor for children ages 5-12 years. Patience and teamwork is required.
                        </p>
                    </li>
                    <li class="date" data-date="N/A - N/A">
                        <h1>N/A</h1>
                        <p>
                        Future job goes here
                        </p>
                    </li>
                    <li class="date" data-date="N/A - N/A">
                        <h1>N/A</h1>
                        <p>
                        Future Job goes here
                        </p>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- end of experience section -->

    <!-- gallery section -->
    <section class="main-padding bg-color" id="gallery">
        <div class="container">
        <div class="section-heading">
            <h1>Gallery</h1>
            <h6>Skateboarding Photos</h6>
        </div>
            <div class="container-gallery gallery">
                <div class="item" data-aos="fade-right" data-aos-delay="300">
                    <a href="images/img1.jpg" data-caption="FS Smith at Jefferson">
                        <img src="images/img1.jpg" alt="">
                    </a>
                </div>
                <div class="item" data-aos="fade-right" data-aos-delay="300">
                    <a href="images/img2.jpg" data-caption="BS Boneless at SVR">
                        <img src="images/img2.jpg" alt="">
                    </a>
                </div>
                <div class="item" data-aos="fade-right" data-aos-delay="300">
                    <a href="images/img3.jpg" data-caption="BS Air at Ballard Bowl">
                        <img src="images/img3.jpg" alt="">
                    </a>
                </div>
                <div class="item" data-aos="fade-left" data-aos-delay="600">
                    <a href="images/img4.jpg" data-caption="Payton and Grif">
                        <img src="images/img4.jpg" alt="">
                    </a>
                </div>
                <div class="item" data-aos="fade-left" data-aos-delay="600">
                    <a href="images/img5.jpg" data-caption="Judo">
                        <img src="images/img5.jpg" alt="">
                    </a>
                </div>
                <div class="item" data-aos="fade-left" data-aos-delay="600">
                    <a href="images/img6.jpg" data-caption="Madonna to Tail">
                        <img src="images/img6.jpg" alt="">
                    </a>
                </div>
                <div class="item" data-aos="fade-right" data-aos-delay="900">
                    <a href="images/img7.jpg" data-caption="Kickflip Lien">
                        <img src="images/img7.jpg" alt="">
                    </a>
                </div>
                <div class="item" data-aos="fade-right" data-aos-delay="900">
                    <a href="images/img8.jpg" data-caption="Japan Air">
                        <img src="images/img8.jpg" alt="">
                    </a>
                </div>
                <div class="item" data-aos="fade-right" data-aos-delay="900">
                    <a href="images/img9.jpg" data-caption="FS Air">
                        <img src="images/img9.jpg" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- end of gallery section -->

    <!-- contact section -->
    <section class="contact" id="contact">
        <div class="container">
            <div class="section-heading">
                <h1>Contact</h1>
                <h6>Send a message!</h6>
            </div>
            <form action="formSubmit.php" class="contactform" method="POST" onsubmit="return formValidator()" autocomplete="on" data-aos="fade-up" data-aos-delay="300">
                <label for="name">Name:</label><br>
                <input type="text" name="name" id="name"><br>

                <label for="phone">Phone:</label><br>
                <input type="text" name="phone" id="phone"><br>

                <label for="email">Email:</label><br>
                <input type="email" name="email" id="email"><br>

                <label for="message">Write Message:</label><br>
                <textarea name="message" id="message" cols="30" rows="10"></textarea>

                <input type="submit" value="Send Message" class="button">
            </form>
        </div>
    </section>
    <!-- end of contact section -->
    
    <!-- php include footer.php -->
    <?php include('include/footer.php'); ?>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.js"> </script>
<!-- AOS.js -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<!-- lightbox.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<!-- script.js -->
<script src="js/script.js"></script>
</body>
</html>