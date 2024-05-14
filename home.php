<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    // Redirect to login page
    header("Location: index.php");
    exit;
}

// If logout button is clicked, destroy the session and redirect to login page
if (isset($_POST['logout'])) {
    session_destroy();
    header("Location: index.php");
    exit;
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>CTU-Buddy</title>
    

    <style>
        @media (max-width:700px){
            body{
                overflow: auto;
            }
            #myVideo{
                width: 360px;
                height: 360px;
            }
            .iframe-container{
                margin-top: 20px;
                overflow: auto;
            }
        }
        #contact::before {
        content: "";
        width: 100%;
        height: 70%;
        background: linear-gradient(rgba(4,9,30,0.7), rgba(4,9,30,0.7)), url(images/bg-ctu.jpg);
        background-position: center;
        background-size: cover;
        position: absolute;
        top: 0;
        left: 0;
        z-index: -1;
        }
        .message h2 {
            color: maroon;
        }

        .message p{
            color: black;
        }
        .row {
            display: flex;
            justify-content: space-between;
        }
        .iframe-container {
            width: 100%;
            background-color: white;
            height: 430px;
            overflow: hidden;
            padding: 10px;
        }
        .iframe-container iframe {
            width: 100%;
            height: 430px;
        }
        .kay:hover{
            background-color: transparent;
        }
        .iframe-container iframe {
            transition: filter 0.3s ease;
        }

        .iframe-container iframe:hover {
            filter: grayscale(0%);
        }
        .iframe-container{
            margin-top: 20px;
        }
</style>
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar">
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg bg-white sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#hero">
                <img src="images/CTU-Students.png" alt="" width="100" height="100">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#hero">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#timetable">Timetable</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#discussion">Discussion</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#resources">Resources</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                    <li>
                        <!-- Logout button -->
                        <form method="post">
                            <input type="submit" class="btn btn-brand" name="logout" value="Logout">
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- HERO -->
    <section id="hero" class="min-vh-100 d-flex align-items-center text-center" style="background-image: linear-gradient(rgba(4,9,30,0.7), rgba(4,9,30,0.7)), url('images/bg-ctu.jpg'); background-size: cover; background-position: center;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 data-aos="fade-left" class="text-uppercase text-white fw-semibold display-1">Welcome to CTU-Buddy</h1>
                    <div data-aos="fade-up" data-aos-delay="50">
                        <a href="#about" class="btn btn-brand me-2">About Us</a>
                        <a href="#contact" class="btn btn-light ms-2">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Timetable -->
    <section id="timetable" class="section-padding border-top">
        <div class="container" style="overflow-x: auto;">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="150">
                    <div class="section-title">
                        <h1 class="display-4 fw-semibold">Timetable</h1>
                        <div class="line"></div>
                    </div>
                </div>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>Time:</th>
                        <th>Outcome:</th>
                        <th>Monday:</th>
                        <th>Tuesday:</th>
                        <th>Wednesday:</th>
                        <th>Thurday:</th>
                        <th>Friday:</th>
                    </tr>
                </thead>
                <tbody>
                <tr>  
                    <td rowspan="2">8:00-9:00</td>
                    <td>Module</td>
                    <td>RD412</td>
                    <td>RD412</td>
                    <td>ENA412</td>
                    <td>ENA412</td>
                    <td rowspan="2">Group/Research</td>
                </tr> 
                <tr>
                    <td>Activity</td>
                    <td>Theory</td>
                    <td>Practical</td>
                    <td>Theory</td>
                    <td>Practical</td>
                </tr>
                <tr>  
                    <td rowspan="2">9:00-10:00</td>
                    <td>Module</td>
                    <td>RD412</td>
                    <td>RD412</td>
                    <td>ENA412</td>
                    <td>ENA412</td>
                    <td>CF412</td>
                </tr>
                <tr>
                    <td>Activity</td>
                    <td>Theory</td>
                    <td>Practical</td>
                    <td>Theory</td>
                    <td>Practical</td>
                    <td>Theory</td>
                </tr> 
                <tr>  
                    <td rowspan="2">10:00-11:00</td>
                    <td>Module</td>
                    <td>RD412</td>
                    <td>RD412</td>
                    <td>ENA412</td>
                    <td>ENA412</td>
                    <td>CF412</td>
                </tr> 
                <tr>
                    <td>Activity</td>
                    <td>Theory</td>
                    <td>Practical</td>
                    <td>Theory</td>
                    <td>Practical</td>
                    <td>Practical</td>
                </tr>
                <tr>  
                    <td rowspan="2">11:00-12:00</td>
                    <td>Module</td>
                    <td rowspan=2>Group/Research</td>
                    <td rowspan="2">Group/Research</td>
                    <td>ENA412</td>
                    <td rowspan="2">Group/Research</td>
                    <td>CF412</td>
                </tr>
                <tr>
                    <td>Activity</td>
                    <td>Theory</td>
                    <td>Practical</td>
                </tr> 
                <tr>  
                    <td rowspan="2">12:00-13:00</td>
                    <td>Module</td>
                    <td colspan="5"></td>
                    
                </tr> 
                <tr>
                    <td>Activity</td>
                    <td colspan="5"></td>
                </tr>
                <tr>  
                    <td rowspan="2">13:00-14:00</td>
                    <td>Module</td>
                    <td>CW412</td>
                    <td rowspan="6">Focus on International Exams</td>
                    <td>ENA412</td>
                    <td>ENA412</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Activity</td>
                    <td>Theory</td>
                    <td>Practical</td>
                    <td>Practical</td>
                    <td></td>
                </tr> 
                <tr>  
                    <td rowspan="2">14:00-15:00</td>
                    <td>Module</td>
                    <td>CW412</td>
                    <td>ENA412</td>
                    <td>ENA412</td>
                    <td></td>
                </tr> 
                <tr>
                    <td>Activity</td>
                    <td>Theory</td>
                    <td>Practical</td>
                    <td>Practical</td>
                    <td></td>
                </tr>
                <tr>  
                    <td rowspan="2">15:00-16:00</td>
                    <td>Module</td>
                    <td>CW412</td>
                    <td>ENA412</td>
                    <td>ENA412</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Activity</td>
                    <td>Theory</td>
                    <td>Practical</td>
                    <td>Practical</td>
                    <td></td>
                </tr> 
                </tbody>
            </table>
        </div>
    </section>

    <!-- Discussion -->
    <section class="section-padding bg-light" id="discussion">
        <class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="150">
                    <div class="section-title">
                        <h1 class="display-4  fw-semibold">Discussions
                        </h1>
                        <div class="line"></div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center" data-aos="fade-down" data-aos-delay="250">
                <div class="col-lg-8">
                        <?php
                        // Connect to the database
                        $db = new PDO('mysql:host=localhost;dbname=Discussion;charset=utf8', 'root', '');

                        // Check if message form is submitted
                        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['message'])) {
                            // Prepare and execute the SQL statement
                            $stmt = $db->prepare("INSERT INTO Messages (name, surname, content) VALUES (?, ?, ?)");
                            $stmt->execute([$_POST['name'], $_POST['surname'], $_POST['message']]);
                        }

                        // Check if reply form is submitted
                        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['reply'], $_POST['message_id'])) {
                            // Prepare and execute the SQL statement
                            $stmt = $db->prepare("INSERT INTO Replies (message_id, name, surname, content) VALUES (?, ?, ?, ?)");
                            $stmt->execute([$_POST['message_id'], $_POST['name'], $_POST['surname'], $_POST['reply']]);
                        }

                        // Fetch all messages
                        $stmt = $db->query("SELECT * FROM Messages");
                        $messages = $stmt->fetchAll();
                        ?>
                            <form method="post" class="row g-3 p-lg-5 p-4 bg-white theme-shadow" action="discussions.php">
                                <div class="form-group col-lg-6">
                                    <input type="text" class="form-control" name="name" placeholder="Name" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <input type="text" class="form-control" name="surname" placeholder="Surname" required>
                                </div>
                                <div class="form-group col-lg-12">
                                <textarea name="message" rows="5" class="form-control" placeholder="Enter Message" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-brand">Send</button>
                                <?php foreach ($messages as $message): ?>
                                    <div class="message">
                                        <h2><?php echo htmlspecialchars($message['name']) . ' ' . htmlspecialchars($message['surname']); ?></h2>
                                        <p><?php echo htmlspecialchars($message['content']); ?></p>
                                    </div>
                                <?php endforeach; ?>
                            </form>
            </div>   
        </div>
    </section>

    <!-- Resources -->
    <section class="section-padding bg-light" id="resources">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="150">
                    <div class="section-title">
                        <h1 class="display-4 fw-semibold">Share Resources</h1>
                        <div class="line"></div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center" data-aos="fade-down" data-aos-delay="250">
                <div class="col-lg-8">
                    <form id="container" class="row g-3 p-lg-5 p-4 bg-white theme-shadow" action="form_handler.php" method="post" enctype="multipart/form-data">
                            <select id="Modules" name="Modules" class="form-control">
                                <optgroup label="Modules" class="form-control">
                                    <option value="RD412">RD412</option>
                                    <option value="CF412">CF412</option>
                                    <option value="ENA412">ENA412</option>
                                    <option value="CW412">CW412</option>
                                </optgroup>
                            </select>
                            <div class="form-group col-lg-12">
                                <h4>Select a file:</h4>
                                <input type="file" id="fileInput" name="myfile" class="form-control"></label>
                                <div class="form-group col-lg-12 d-grid">
                                    <button type="submit" class="btn btn-brand" style="width: 107.66px;">Upload</button>
                                </div>
                            </div>
                        <?php
                        $host = 'localhost';
                        $db   = 'resources';
                        $user = 'root';
                        $pass = '';

                        // Create a new PDO instance
                        $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

                        $stmt = $pdo->prepare("SELECT id, name, type FROM files ORDER BY id");
                        $stmt->execute();

                        // Fetch all of the remaining rows in the result set
                        $files = $stmt->fetchAll(PDO::FETCH_ASSOC);
                        ?>

                        <table id="fileTable">
                            <thead>
                                <tr>
                                    <th style="width:80%">Resource Name</th>
                                    <th>Download</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($files as $file): ?>
                            <tr>
                                <td><?php echo htmlspecialchars($file['name']); ?></td>
                                <td class="kay"><a href="download.php?id=<?php echo $file['id']; ?>">Download</a></td>
                                <td class="kay"><a href="delete.php?id=<?php echo $file['id']; ?>">Delete</a></td> <!-- Add a delete button -->
                            </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- ABOUT -->
    <section id="about" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="50">
                    <div class="section-title">
                        <h1 class="display-4 fw-semibold">About us</h1>
                        <div class="line"></div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-6" data-aos="fade-down" data-aos-delay="50">
                <section id="team" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="150">
                    <div class="section-title">
                        <h1 class="display-4 fw-semibold">Team Members</h1>
                        <div class="line"></div>
                    </div>
                </div>
            </div>
            <div class="row g-4 text-center ">
                <div class="col-md-4" data-aos="fade-down" data-aos-delay="150">
                    <div class="team-member image-zoom">
                        <div class="image-zoom-wrapper">
                            <img src="images/IMG_1555.jpeg" alt="">
                        </div>
                        <div class="team-member-content">
                            <h4 class="text-white">Kaylim Fortuin</h4>
                            <p class="mb-0 text-white">Database Administrator</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-down" data-aos-delay="250">
                    <div class="team-member image-zoom">
                        <div class="image-zoom-wrapper">
                            <img src="images/WhatsApp Image 2024-03-25 at 12.51.17 2.jpeg" alt="">
                        </div>
                        <div class="team-member-content">
                            <h4 class="text-white">Mk</h4>
                            <p class="mb-0 text-white">Quality Ensurer</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-down" data-aos-delay="350">
                    <div class="team-member image-zoom">
                        <div class="image-zoom-wrapper">
                            <img src="images/C9C11ACC-2EA8-44CB-8224-027DD465CD4F 2.jpeg" alt="">
                        </div>
                        <div class="team-member-content">
                            <h4 class="text-white">Kyle Reneke</h4>
                            <p class="mb-0 text-white">Lead Web Developer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
                </div>
                <div data-aos="fade-down" data-aos-delay="150" class="col-lg-5">
                    <h1>About CTU-Buddy</h1>
                    <div class="d-flex pt-4 mb-3">
                        <div>
                            <h5>About CTU-Buddy</h5>
                            <p>CTU-Buddy is an educational platform designed to empower students at CTU Training Solutions. We are a team of passionate individuals dedicated to enhancing your learning experience by providing user-friendly tools and fostering a collaborative learning environment.</p>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <div>
                            <h5>Purpose</h5>
                            <p>CTU-Buddy exists to bridge the gap between students and resources, fostering a collaborative learning environment at CTU. We strive to empower students by providing a platform for connection, knowledge sharing, and academic success.We believe that every CTU student deserves the tools and support to thrive. CTU-Buddy is here to help you connect with classmates, share study materials, stay organized, and achieve your academic goals</p>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <div>
                            <h5>Mission</h5>
                            <p>CTU-Buddy is dedicated to revolutionizing the educational experience at CTU Training Solutions. Our mission is to provide students with a user-friendly platform that enhances learning, fosters collaboration, and facilitates effective communication between peers and educators. We aim to empower students to manage their schedules efficiently, engage in meaningful discussions, share resources seamlessly, and connect with their academic community effectively. With CTU-Buddy, we strive to contribute to the academic success and personal growth of every student at CTU</p>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <div>
                            <h5>Vision</h5>
                            <p>At CTU-Buddy, we envision a future where every student at CTU Training Solutions has access to a dynamic and innovative educational platform. Our vision is to create a supportive online environment that promotes lifelong learning, empowers students to excel academically, and fosters a sense of community and belonging. We strive to be a leader in educational technology, continuously evolving to meet the changing needs of our students and educators. With CTU-Buddy, we aim to inspire a passion for learning and enable students to reach their full potential in their academic journey</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACT -->
    <section class="section-padding bg-light" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="150">
                    <div class="section-title">
                        <h1 class="display-4 text-white fw-semibold">Get in touch</h1>
                        <div class="line bg-white"></div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center" data-aos="fade-down" data-aos-delay="250">
                <div class="col-lg-6">
                    <form action="contact.php" class="row g-3 p-lg-5 p-4 bg-white theme-shadow" method="post">
                        <div class="form-group col-lg-6">
                            <input type="text" name="first_name" class="form-control" placeholder="Enter first name" required>
                        </div>
                        <div class="form-group col-lg-6">
                            <input type="text" name="last_name" class="form-control" placeholder="Enter last name" required>
                        </div>
                        <div class="form-group col-lg-12">
                            <input type="email" name="email" class="form-control" placeholder="Enter Email address" required>
                        </div>
                        <div class="form-group col-lg-12">
                            <input type="text" name="subject" class="form-control" placeholder="Enter subject" required>
                        </div>
                        <div class="form-group col-lg-12">
                            <textarea name="message" rows="5" class="form-control" placeholder="Enter Message" required></textarea>
                        </div>
                        <div class="form-group col-lg-12 d-grid">
                            <button class="btn btn-brand">Send Message</button>
                        </div>
                        <input type="hidden" name="_cc" value="kyle11jan@gmail.com, mahlakanye18@gmail.com">
                    </form>
                </div>
                <div class="col-lg-12">
                    <div class="iframe-container col-lg-6" style="background: transparent; margin-left: 0;">
                        <h2 class="mb-0 text-white" style="text-align: center;">Location</h2>
                        <div class="line"></div>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d114617.52503203206!2d27.794205508845863!3d-26.13813967284999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e959f7b7787c027%3A0xd1450a9cd56b62ed!2sCTU%20Training%20Solutions%20Roodepoort!5e0!3m2!1sen!2sza!4v1712920007718!5m2!1sen!2sza"  style="border:0; filter: grayscale(100%);" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="ctu"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="bg-dark">
        <div class="footer-top">
            <div class="container">
                <div class="row gy-2">
                    <div class="col-lg-3 col-sm-6">
                        <h5 class="mb-0 text-white">Navigation</h5>
                        <div class="line"></div>
                            <ul>
                                <li class="nav-item">
                                    <a class="nav-link" href="#hero">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#timetable">Timetable</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#discussion">Discussion</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#resources">Resources</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#about">About</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#contact">Contact</a>
                                </li>
                            </ul>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <h5 class="mb-0 text-white">About Us</h5>
                        <div class="line"></div>
                        <ul>
                                <li class="nav-item">
                                    <a class="nav-link" href="#about">About CTU-Buddy</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#about">Purpose</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#about">Mission</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#about">Vision</a>
                                </li>
                            </ul>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <h5 class="mb-0 text-white">CONTACT</h5>
                        <div class="line"></div>
                        <ul>
                            <li><a href="https://www.google.com/maps/place/CTU+Training+Solutions+Roodepoort/@-26.1381397,27.7942055,12z/data=!4m10!1m2!2m1!1sCTU+Training+Solutions!3m6!1s0x1e959f7b7787c027:0xd1450a9cd56b62ed!8m2!3d-26.1429775!4d27.8700032!15sChZDVFUgVHJhaW5pbmcgU29sdXRpb25zIgOIAQGSAQ5wcml2YXRlX3NjaG9vbOABAA!16s%2Fg%2F119wnq02v?entry=ttu" target="_blank"> CTU Training Solutions</a></li>
                            <li><a href="tel:+27 840406220" target="_blank">084 040 6220</a></li>
                            <li><a href="tel:+27 842605767" target="_blank">084 260 5767</a></li>
                            <li><a href="tel:+27 731155508" target="_blank">073 115 5508</a></li>
                            <li><a href="https://ctutraining.ac.za/" target="_blank">ctu.com</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <h5 class="mb-0 text-white">Subscribe to Newsletter</h5>
                        <div class="line"></div>
                        <?php
                        // Connect to the database
                        $db = new PDO('mysql:host=localhost;dbname=Subscription;charset=utf8', 'root', '');

                        // Check if form is submitted
                        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['email'])) {
                            // Prepare and execute the SQL statement
                            $stmt = $db->prepare("INSERT INTO Subscription (email) VALUES (?)");
                            $stmt->execute([$_POST['email']]);

                            // Send a thank you email
                            $to = $_POST['email'];
                            $subject = "Thank you for subscribing!";
                            $message = "Thank you for subscribing to our newsletter. We will keep you updated with our latest news.";
                            $headers = "From: CTU-Buddy";

                            mail($to, $subject, $message, $headers);
                        }
                        ?>

                        <form action="home.php" method="post" class="form-inline" id="hell">
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-brand" style="background-color: maroon; color:white; border:0;">Subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row g-4 justify-content-between">
                    <div class="col-auto">
                        <p class="mb-0">&copy;CTU-Buddy 2024</p>
                    </div>
                    <div class="col-auto">
                        <p class="mb-0">Designed By Kaylim Fortuin, Kyle Reneke, Mahlakanye Lekganyane</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Javascript -->
    <script>
        document.querySelector('.navbar-toggler').addEventListener('click', function() {
            if (window.innerWidth < 700) {
                var footerNav = document.querySelector('#footerNav');
                var bsCollapse = new bootstrap.Collapse(footerNav, {toggle: false});
                bsCollapse.show();
            }
        });
    </script>
    <script>
        // Get the video
        var video = document.getElementById("myVideo");
        
        // Pause and play the video, and change the button text
        function myFunction() {
          if (video.paused) {
            video.play();
            btn.innerHTML = "Pause";
          } else {
            video.pause();
            btn.innerHTML = "Play";
          }
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="./assets/js/main.js"></script>
    <script src="/assets/js/discussion.js"></script>
</body>
</html>