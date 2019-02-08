<?php
require_once 'config.php';
?>
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
            <?php include_once './common/descr.php'; ?>
        </div>

        <div class="row marketing">
            <?php include_once './common/education.php'; ?>
        </div>
        <div class="col-12 animated jackInTheBox" id="experience">
            <?php include_once './common/experience.php'; ?>
        </div>
        <div class="col-12 animated jackInTheBox" id="certifications">
            <h2 class="heading"><i class="fas fa-certificate"></i> Certifications</h2>
            <?php include_once './common/certifications.php'; ?>
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