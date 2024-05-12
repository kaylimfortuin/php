

<!-- signup.html -->

<!DOCTYPE html>
<html lang="en">   
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Sign Up</title>
</head>
<body>
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
                                <a class="nav-link" href="index.php">Login</a>
                            </li>
                        </ul>
                    </div>
                </div>
    </nav>
    <div class="center">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="150">
                    <div class="section-title">
                        <h1 class="display-4  fw-semibold">Sign up to CTU Buddy!
                        </h1>
                        <div class="line"></div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center" data-aos="fade-down" data-aos-delay="250">
                <div class="col-lg-8">
                    <div class="row g-3 p-lg-5 p-4 bg-white theme-shadow" id="chat">
                        <form action="signup_process.php" method="post" class="row g-3 p-lg-5 p-4 bg-white theme-shadow">
                            <input type="text" class="form-control" id="name" name="username" placeholder="Username..." required><br><br>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password..."  required><br><br>
            
                            <input type="submit" class="btn btn-brand" value="Sign Up">
                        </form>
                        <p>Already have an account? <a href="index.php">Login here</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="./assets/js/main.js"></script>
</body>
</html>


