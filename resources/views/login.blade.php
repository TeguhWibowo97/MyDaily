<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Login</title>

    <!-- Fontfaces CSS-->
    <link href="/assetAdmin/css/font-face.css" rel="stylesheet" media="all">
    <link href="/assetAdmin/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="/assetAdmin/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="/assetAdmin/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="/assetAdmin/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="/assetAdmin/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="/assetAdmin/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="/assetAdmin/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="/assetAdmin/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="/assetAdmin/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="/assetAdmin/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="/assetAdmin/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="/assetAdmin/css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <h1>Selamat Datang</h1>
                        </div>
                        <div class="login-form">
                            <form action="/postlogin" method="post">
                            @csrf
                                <div class="form-group">
                                    <label>Email :</label>
                                    <input class="au-input au-input--full" type="email" name="email" placeholder="Masukkan Email">
                                </div>
                                <div class="form-group">
                                    <label>Password :</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Masukkan Password">
                                </div>
                                <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox" name="remember">Remember Me
                                    </label>
                                    <label>
                                        <a href="#">Forgotten Password?</a>
                                    </label>
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">LOGIN</button>
                            </form>
                            <div class="register-link">
                                <p>
                                    Don't you have account?
                                    <a href="#">Sign Up Here</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="/assetAdmin/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="/assetAdmin/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="/assetAdmin/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="/assetAdmin/vendor/slick/slick.min.js">
    </script>
    <script src="/assetAdmin/vendor/wow/wow.min.js"></script>
    <script src="/assetAdmin/vendor/animsition/animsition.min.js"></script>
    <script src="/assetAdmin/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="/assetAdmin/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="/assetAdmin/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="/assetAdmin/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="/assetAdmin/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="/assetAdmin/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="/assetAdmin/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="/assetAdmin/js/main.js"></script>

</body>

</html>
<!-- end document-->