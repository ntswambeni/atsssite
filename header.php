<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="African tracking security services, security, cctv, surveilence" />
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/f0c93ed598.js" crossorigin="anonymous"></script>
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Overpass:700|Raleway|Ubuntu&display=swap" rel="stylesheet">
    <!-- css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- bootstrap Javascript  -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <title>Welcome to ATSS</title>
</head>

<body>
<!-- header -->
<header>
    <div class="logo ">
        <a href="index.html" class="navbar-brand"> <img src="images/logoatss.png" alt="ATSS"></a>
    </div>
    <nav class="navbar navbar-expand-lg navbar-customs">
        <button type="button" class="navbar-toggler ml-auto" data-toggle="collapse" data-target="#main-navbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="main-navbar">
            <ul class="navbar-nav rounded-left ml-auto ">
                <li class="nav-item">
                    <a class="nav-link rounded-left <?php if($page=="home"){ echo "active ";}?>" href="index.php">
                        <i class="fas fa-home"></i>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle <?php if($page=="about"){ echo "active ";}?> " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        About us
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="about.php">About us</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">History</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="shareholders.php">Shareholders</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="why-us.php">Why us?</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="questions.php">Questions?</a>
                    </div>
                </li>
                <li class="nav-item ">
                    <a class="nav-link <?php if($page=="our-team"){ echo "active ";}?>" href="our-team.php">Our team</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if($page=="services"){ echo "active ";}?>" href="services.php">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if($page=="contact-us"){ echo "active ";}?>" href="contact-us.php">Contact us</a>
                </li>
                <li class="nav-item ">
                    <div class="search-grid ">
                        <form action="#" method="post" class="form-inline search-form">
                            <input type="text" name="subscribe" class="form-control big-dog" placeholder="Search..." name="Subscribe" required="">
                            <button class="btn1 form-control"><i class="fa fa-search " aria-hidden="true"></i></button>
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>