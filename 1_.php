<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rental Services</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- <link rel="stylesheet" href="styless.css"> -->
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="responsive.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet" />
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="CRS/images/logo2.jpg" alt="logo" height="100%" width="50%"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="about2.php">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="pricing_.php">pricing</a></li>
                    <li class="nav-item"><a class="nav-link" href="caontact2.php">Contact Us</a></li>
                    <li class="nav-item" id="loginButton"><a class="nav-link" href="#">Login/Signup</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="login-container" id="loginContainer">
        <!-- <form class="login-form" id="login" action="login.php" method="post"> -->
        <form class="login-form" id="login" action="login.php" method="post">
            <span style="font-size: 8rem;" class="close" id="close">&times;</span>
            <h4>Login</h4>
            <input type="email" name="email" placeholder="Email" class="box">
            <input type="password" name="password" placeholder="Password" class="box">
            <!-- <p><a href="#" style="text-decoration: none; color:red;">Forgot password</a></p> -->
            <button type="submit" class="btn fs-2">Login Now</button>
            <p>or login with</p>
                <div class="button">    
                <a style="text-decoration: none;" href="Home.php"
                    class="btn btn-outline-danger p-3 px-5 fs-4 me-5">Google</a>
                <a style="text-decoration:none;" href="Home.php"
                    class="btn btn-outline-danger p-3 px-5 fs-4">Facebook</a>
            </div><br>
            <p>Don't have an account? <a style="text-decoration: none; color: red;" href="register.php">Create one</a>
            </p>
        </form>
    </div>

    <main>
        <div style="padding: 0 40px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <img src="images/12.jpg" alt="Car 1" class="img-fluid mt-5" 
                            style="border: 4px solid red; border-radius: 20px; height:90%; width:90%;">
                    </div>
                    <div class="col-md-6 my-auto">
                        <div class="details">
                            <h3 class="text-center">Maruti Alto K10</h3>
                            <hr class="text-danger w-50 m-auto">
                            <p> An automobile is a usually four-wheeled vehicle designed primarily for passenger
                                transportation and commonly propelled by an internal-combustion engine using a volatile
                                fuel.</p>
                    
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="container">

            <br>
            <section class="specs">
                <h4>Specifications</h4>
                <table class="table">
                    <tbody>
                        <tr>
                            <td>Engine</td>
                            <td>2.0L Inline-4</td>
                        </tr>
                        <tr>
                            <td>Horsepower</td>
                            <td>200 hp</td>
                        </tr>
                        <tr>
                            <td>Transmission</td>
                            <td>6-Speed Automatic</td>
                        </tr>
                        <tr>
                            <td>Top Speed</td>
                            <td>150 mph</td>
                        </tr>
                        <tr>
                            <td>Fuel Efficiency</td>
                            <td>City: 25 mpg, Highway: 30 mpg</td>
                        </tr>
                    </tbody>
                </table>
            </section>
            <br>
            
            <button type="submit" class="btn btn-lg btn-outline-danger btn-lg d-block m-auto py-3 px-5"
                onclick="location.href='register.php'">
                Rent Now
            </button>
        </div>
    </main>
    <br><br>
    <footer class="footer mt-auto py-3">
        <div class="container text-center text-md-left">
            <div class="row">
                <div class="col-md-3 mx-auto mb-4">
                    <h6 class="text-uppercase font-weight-bold">Car Rent</h6>
                    <hr class="mb-4 mt-0 d-inline-block mx-auto"
                        style="width: 125px; background-color: #7c4dff; height: 2px" />
                    <p class="mt-2">
                    At Car Rent, we specialize in providing premium car rental services that prioritize convenience and affordability. Our goal is to make your car rental experience seamless and stress-free,</p>
                </div>

                <div class="col-md-2 mx-auto mb-4">
                    <h6 class="text-uppercase font-weight-bold">Most Rented Cars</h6>
                    <hr class="mb-4 mt-0 d-inline-block mx-auto"
                        style="width: 85px; background-color: #7c4dff; height: 2px" />
                    <ul class="list-unstyled">
                        <li class="my-2"><a href="#!">Maruti Alto K10</a></li>
                        <li class="my-2"><a href="#!">Tata Tigor</a></li>
                        <li class="my-2"><a href="#!">Maruti Baleno</a></li>
                        <li class="my-2"><a href="#!">Hyundai Exter</a></li>
                    </ul>
                </div>

                <div class="col-md-2 mx-auto mb-4">
                    <h6 class="text-uppercase font-weight-bold">Useful links</h6>
                    <hr class="mb-4 mt-0 d-inline-block mx-auto"
                        style="width: 110px; background-color: #7c4dff; height: 2px" />
                    <ul class="list-unstyled">
                        <li class="my-2"><a href="#!">Home</a></li>
                        <li class="my-2"><a href="#!">About</a></li>
                        <li class="my-2"><a href="#!">Pricing</a></li>
                        <li class="my-2"><a href="#!">Contact us</a></li>
                    </ul>
                </div>

                <div class="col-md-3 mx-auto mb-4">
                    <h6 class="text-uppercase font-weight-bold">Contact</h6>
                    <hr class="mb-4 mt-0 d-inline-block mx-auto"
                        style="width: 75px; background-color: #7c4dff; height: 2px" />
                    <ul class="list-unstyled">
                        <li class="my-2"><i class="fas fa-home mr-3"></i> Dalwi Wasti Ward No.7, NY 10012, Shrirampur-413709</li>
                        <li class="my-2"><i class="fas fa-envelope mr-3"></i> chetandhamgunde@gmail.com</li>
                        <li class="my-2"><i class="fas fa-phone mr-3"></i> +91 8080762949</li>
                        <li class="my-2"><i class="fas fa-print mr-3"></i> +91 7666381236</li>
                    </ul>
                </div>

                <div class="social__icons col-12">
                    <a href="#"><i class="ri-instagram-line"></i></a>
                    <a href="#"><i class="ri-facebook-circle-line"></i></a>
                    <a href="#"><i class="ri-twitter-line"></i></a>
                    <a href="#"><i class="ri-telegram-line"></i></a>
                    <a href="#"><i class="ri-discord-line"></i></a>
                </div>
            </div>
        </div>
        <div class="footer-bottom text-center py-3">
            <p>© 2023 Company Name. All rights reserved.</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="JS.js"></script>
</body>

</html>