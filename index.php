<?php
error_reporting(0);
session_start();
session_destroy();

if ($_SESSION['message']) {
    $message = $_SESSION['message'];
    echo "<script type='text/javascript'>
    alert('$message');
    </script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1IbXyVY4AnDQlJlnGp1JcuT7jzwjju9SvrLVRyOoPp2hbWrGmJQ1iXwJSp" crossorigin="anonymous">
    <!-- Add AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-TcSIqQb027qvyjSMfHjOMaLkfuwVxZzUPnCJA7lzmcCWNIP3zVgnCgpD7Xa" crossorigin="anonymous"></script>
    <!-- Add AOS JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    

    <style>
        body {
            overflow-x: hidden;
        }

        * {
            margin: 0;
            padding: 0;
        }

        nav {
            position: fixed;
            background-color: skyblue;
            height: 70px;
            width: 100%;
            z-index: 1;
        }

        .logo {
            font-size: 25px;
            position: relative;
            left: 5%;
            color: white;
            font-weight: bold;
            line-height: 70px;
        }

        ul {
            position: relative;
            float: right;
            margin-right: 20px;
            text-decoration: none;
        }

        ul li a {
            text-decoration: none;
            color: green;
            font-size: 17px;
            background-color: rgba(255, 255, 255, 0.589);
            padding: 8px;
            border-radius: 7px;
        }

        ul li a:hover {
            text-decoration: none;
            color: white;
            background-color: rgba(0, 0, 0, 0.452);
            padding: 8px;
            border-radius: 7px;
            transition: ease-in-out 1s;
        }
    </style>
</head>
<body>
    <nav>
        <label class="logo" style="color: #267860;">Crystal Fountain_Demy</label>
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About Us</a></li>
            <li><a href="#admission">Admission</a></li>
            <li><a href="login.php" class="btn btn-success">Login</a></li>
        </ul>
    </nav>

    <div id="home" class="section1">
        <img src="img/school.jpeg" style="width: 100%; height: 600px; filter: brightness(0.3);" alt="">
        <div class="content-overlay" data-aos="fade-up" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); color: white;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <hr style="border-top: 2px solid rgb(0, 240, 0); width: 50%; margin: 0 auto;">
                        <h2 class="text-uppercase" style="font-size: 3.5em; margin-top: 80px; color: rgb(0, 240, 0);">Welcome to Our School</h2>
                        <p style="font-size: 1.5em;">Our school is known for its excellent education system, modern facilities, and commitment to student success. We foster a community of learning and innovation where students are encouraged to thrive.</p>
                        <hr style="border-top: 2px solid rgb(0, 240, 0); width: 50%; margin: 0 auto;">
                        <a href="#" class="btn btn-success" style="margin-top: 60px; font-size: 20px; background-color:green">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="about" class="container" style="padding-top: 70px;">
        <div class="row" data-aos="fade-right">
            <div class="col-md-4">
                <img src="img/building.jpeg" style="width: 100%; height: 250px;" alt="">
            </div>
            <div class="col-md-8">
                <h1 style="color: #267860;">Welcome to Our School.</h1>
                <p>
                    MEMS has been committed to global learning long before it became an indispensable feature of contemporary education. Established in 2024, we proudly stand as the 1st English medium school in Bangladesh to adopt both Pearson Edexcel and Cambridge curriculum (in O and A levels), drawing together students in a vibrant, academically challenging, and encouraging environment where manifold viewpoints are prized and celebrated. MEMS has been committed to global learning long before it became an indispensable feature of contemporary education. Established in 1997, we proudly stand as the 1st English medium school in Bangladesh to adopt both Pearson Edexcel and Cambridge curriculum (in O and A levels), drawing together students in a vibrant, academically challenging, and encouraging environment where manifold viewpoints are prized and celebrated.
                </p>
            </div>
        </div>
    </div>

    <center>
        <h1 style="color: #267860;" data-aos="fade-up">Our Teachers</h1>
    </center>

    <div class="container">
        <div class="row">
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <img src="img/teacher.jpeg" style="width: 90%; height: 200px;" alt="">
                <p>We have world wide teachers who have an astonishing experience of teaching which will be a good impact to your child.</p>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <img src="img/teacher2.jpeg" style="width: 90%; height: 200px;" alt="">
                <p>We look forward to giving good education and support your children for them to cross countries with their epic ideas.</p>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                <img src="img/teacher3.jpeg" style="width: 90%; height: 200px;" alt="">
                <p>We also don't give basic knowledge and skills to your child but also we give chances to study abroad and get international competitions.</p>
            </div>
        </div>
    </div>

    <center>
        <h1 style="color: #267860;" data-aos="fade-up">Our Courses</h1>
    </center>

    <div class="container">
        <div class="row">
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <img src="img/math.jpeg" style="width: 90%; height: 200px;" alt="">
                <p>Our school offers an outstanding mathematics program taught by highly experienced and passionate teachers. We provide an engaging and comprehensive curriculum that builds a strong foundation in math skills, encouraging critical thinking and problem-solving abilities in students.</p>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <img src="img/science.jpeg" style="width: 90%; height: 200px;" alt="Science Image">
                <p>Our science program is designed to inspire curiosity and foster a love for discovery. With hands-on experiments and state-of-the-art labs, we encourage students to explore the wonders of science and develop innovative ideas that can change the world.</p>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                <img src="img/lang.jpeg" style="width: 90%; height: 200px;" alt="Language Studies Image">
                <p>Our language programs go beyond teaching basic communication skills. We offer immersive experiences that open doors to studying abroad, participating in international competitions, and fostering cultural exchange. We empower students to become global citizens, fluent in languages and understanding diverse cultures.</p>
            </div>
        </div>
    </div>

    <center>
        <h1 style="color: #267860;" data-aos="fade-up">Admission Form!</h1>
    </center>

    <div id="admission" align="center" class="admission form" data-aos="fade-up">
        <form action="data_check.php" method="POST">
            <div class="form" style="margin-right: -80px;">
                <div class="row mb-3" style="margin-bottom: 20px;">
                    <div class="col-md-6">
                        <label class="form-label" for="name">Full Names :</label>
                    </div>
                    <div class="col-md-6">
                        <input class="form-control" style="width: 400px; margin-left: -820px;" type="text" name="name" id="name">
                    </div>
                </div>
                <div class="row mb-3" style="margin-bottom: 20px;">
                    <div class="col-md-6">
                        <label class="form-label" for="email">Email :</label>
                    </div>
                    <div class="col-md-6">
                        <input class="form-control" style="width: 400px; margin-left: -820px;" type="text" name="email" id="email">
                    </div>
                </div>

                <div class="row mb-3" style="margin-bottom: 20px;">
                    <div class="col-md-6">
                        <label class="form-label" for="course">Course :</label>
                    </div>
                    <div class="col-md-6">
                        <input class="form-control" style="width: 400px; margin-left: -820px;" type="text" name="course">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label class="form-label" for="gender">Gender :</label>
                    </div>
                    <div class="col-md-6">
                        <div class="form-check form-check-inline" style="margin-left: -1170px;">
                            <input class="form-check-input" type="radio" name="gender" id="male" value="Male">
                            <label class="form-check-label" for="male">Male</label>
                        </div>
                        <div class="form-check form-check-inline" style="margin-left: -1153px;">
                            <input class="form-check-input" type="radio" name="gender" id="female" value="Female">
                            <label class="form-check-label" for="female">Female</label>
                        </div>
                    </div>
                </div>

                <div class="row mb-3" style="margin-bottom: 20px;">
                    <div class="col-md-6">
                        <label class="form-label" for="location">Location :</label>
                    </div>
                    <div class="col-md-6">
                        <input class="form-control" style="width: 400px; margin-left: -820px;" type="text" name="location">
                    </div>
                </div>
                <div class="row mb-3" style="margin-bottom: 20px;">
                    <div class="col-md-6">
                        <label class="form-label" for="phone">Phone :</label>
                    </div>
                    <div class="col-md-6">
                        <input class="form-control" style="width: 400px; margin-left: -820px;" type="text" name="phone" id="phone">
                    </div>
                </div>

                <div>
                    <input name="apply" class="btn btn-success" type="submit" value="Apply" style="width: 30%; margin-left: -130px;">
                </div>
            </div>
        </form>
    </div>

    <footer style="background-color: black; height: 50px; width: 100%;">
        <center>
            <h1 style="color: white; top: 20%; position: relative; font-size: 20px;">All &copy; copyright reserved by G-tech webs limited</h1>
        </center>
    </footer>

    <!-- Initialize AOS -->
    <script>
        AOS.init({
            duration: 1000,
            once: false,
            offset: 100
        });

        // Smooth scrolling for navigation links
        $(document).ready(function() {
            $("a[href^='#']").on('click', function(event) {
                if (this.hash !== "") {
                    event.preventDefault();
                    var hash = this.hash;
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top - 70 
                    }, 1000, function(){
                        window.location.hash = hash;
                    });
                }
            });
        });
    </script>
</body>
</html>
