<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dimitar CV</title>
    <!--Load bootstrap CSS-->
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <!--Loading Font Awesome CSS-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
          integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <!--Load app stylesheet-->
    <link rel="stylesheet" href="./css/app.css">
    <!--Load animate CSS-->
    <link rel="stylesheet" href="./css/animate.css">
</head>
<body>

<div class="container">
    <header class="header clearfix">
        <nav>
            <ul class="nav nav-pills float-right">
                <li class="nav-item">
                    <a class="nav-link" href="#" data-value="about-me">About me
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-value="education">Education</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-value="experience">Experience</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-value="certifications">Certifications</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-value="contact-me">Contact Me</a>
                </li>
            </ul>
        </nav>
    </header>

    <main role="main">

        <div class="card w-100" id="about-me">
            <div class="card-img-top d-flex align-items-center bg-light">
                <div>
                    <img class="img-thumbnail rounded" src="./images/me.png" alt="Dimitar Dimitrov">
                </div>
                <p class="col p-1 m-5">
                    My name is Dimitar Aleksandrov Dimitrov. I was born on 13th May, 1992 in Veliko Tarnovo,
                    Bulgaria. Currently living in Sofia, Bulgaria.
                </p>
            </div>
        </div>

        <div class="row marketing">
            <div class="col-12 animated jackInTheBox" id="education">
                <h2 class="heading"><i class="fas fa-university"></i> Education</h2>
                <div class="media">
                    <div class="media-left">
                        <a href="#">
                            <img class="media-object edu-logo"
                                 src="./images/softuni-logo.png"
                                 alt="Softuni Logo">
                        </a>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Software University, Software engineering</h4>
                        Currently studying JavaScript fundamentals.
                    </div>
                </div>
                <div class="media">
                    <div class="media-left">
                        <a href="#">
                            <img class="media-object edu-logo"
                                 src="./images/utp-logo.png"
                                 alt="UTP logo">
                        </a>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">UTP Sofia, Telecommunication systems</h4>
                    </div>
                </div>
                <div class="media">
                    <div class="media-left">
                        <a href="#">
                            <img class="media-object edu-logo"
                                 src="./images/no_img.png"
                                 alt="">
                        </a>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">PGAVT "A.S.Popov", Sofia, Telecommunication systems</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 animated jackInTheBox" id="experience">
            <h2 class="heading"><i class="fas fa-briefcase"></i> Experience</h2>
            <ul>
                <li>2017 - till now - Assistant Category Manager - responsibilities about stock management, promotional
                    activities for the company, negotiating with suppliers and etc...
                </li>
                <li>2015 - 2017 - Deputy Manager, Store - managed a team of around 50 members.</li>
                <li>2012 - 2015 - Supervisor, Store - managed a team of 10 members.</li>
                <li>2011 - 2012 - Sales person white goods.</li>
            </ul>
        </div>
        <div class="col-12 animated jackInTheBox" id="certifications">
            <h2 class="heading"><i class="fas fa-certificate"></i> Certifications</h2>
            <div class="media">
                <div class="media-left">
                    <a href="#">
                        <img class="media-object edu-logo"
                             src="./images/no_img.png"
                             alt="">
                    </a>
                </div>
                <div class="media-body">
                    <h4 class="media-heading">
                        <a href="#" target="_blank">Certificate of achievement B1 level of English</a></h4>
                    Completed level B1.
                </div>
            </div>
            <div class="media">
                <div class="media-left">
                    <a href="#">
                        <img class="media-object edu-logo"
                             src="./images/softuni.png"
                             alt="Softuni Logo">
                    </a>
                </div>
                <div class="media-body">
                    <h4 class="media-heading">
                        <a href="https://softuni.bg/certificates/details/61072/994a9e7b" target="_blank">Technology
                            Foundamentals course</a></h4>
                    Certificate of completion of "Technology Foundamentals" course of Software University with PHP.
                    6.00 / 6.00 , 2nd place of 1000+.
                </div>
            </div>
            <div class="media">
                <div class="media-left">
                    <a href="#">
                        <img class="media-object edu-logo"
                             src="./images/udemy.png"
                             alt="Udemy logo">
                    </a>
                </div>
                <div class="media-body">
                    <h4 class="media-heading">
                        <a href="https://www.udemy.com/certificate/UC-Q8PR2ABU/" target="_blank">Symfony 4</a></h4>
                    Symfony 4 is a powerful PHP framework that would let you create not only websites but great web
                    applications, APIs or mobile backends.
                </div>
            </div>
            <div class="media">
                <div class="media-left">
                    <a href="#">
                        <img class="media-object edu-logo"
                             src="./images/udemy.png"
                             alt="Udemy logo">
                    </a>
                </div>
                <div class="media-body">
                    <h4 class="media-heading">
                        <a href="https://www.udemy.com/certificate/UC-1V5J3NTD/" target="_blank">JavaScript
                            Essentials</a></h4>
                    Javascript essentials for web development.All the basics of
                    Javascript including primitive types, arrays, functions, assignment operators, the window object and
                    much more.
                </div>
            </div>
        </div>
        <div class="col-12 animated jackInTheBox" id="contact-me">

            <h2 class="heading"><i class="fas fa-comments"></i> Contact Me</h2>
            <div class="col-6">
                <p>
                    <i class="fab fa-linkedin"></i>
                    <a href="https://www.linkedin.com/in/dimitar-dimitrov-31413938" target="_blank">Dimitar
                        Dimitrov</a>
                </p>
                <p>
                    <i class="fab fa-skype"></i><a href="skype:live:1c00b8bcb2e2bdc9?chat"> D.Dimitrov</a>
                </p>
                <p>
                    <i class="fab fa-github"></i>
                    <a href="https://github.com/dimaldim" target="_blank">My GitHub</a>
                </p>
                <p>
                    <i class="fas fa-phone"></i><a href="#"> +359/877-858-111</a>
                </p>
            </div>
        </div>
    </main>
</div>

<footer class="footer text-center">
    <p>&copy; Dimitar Dimitrov</p>
</footer>

</div>
<a href="#"><i class="fa fa-chevron-up scroll-top" data-scroll="up"></i></a>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!--Load bootstrap JavaScript-->
<script src="./js/bootstrap.min.js"></script>
<!--Loading app custom js-->
<script src="./js/app.js"></script>

</body>
</html>