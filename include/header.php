<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $title ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/responsiveNavbar.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>
    <header class="container">
        <nav class="navbar hide">
            <div class="navcontent justify">
                <div class="nav-logo" id="nav-logo">
                    <a href="#">
                        <div class="logo-group" id="logo">
                            <img src="img/small-logo.png" alt="footer logo" />
                        </div>
                    </a>
                </div>
                <!--Burger Menu for Mobile, resize the screen to see it works-->
                <div class="burger navbar-toggle" id="js-navbar-toggle">
                    <div class="l1"></div>
                    <div class="l2"></div>
                    <div class="l3"></div>
                </div>
                <!--This where the nav bar menu list is -->
                <div class="mainnav">
                    <div class="menu add-padding-right" id="menu">
                        <?php include 'nav.php'?>
                        <div class="button styled-box green donate-button">
                            <a href="" class="hover">Donate</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>