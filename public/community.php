<?php

include('./controllers/conn.php');


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SirusPress Community</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./styles/community.css">

    <!-- <meta name="google-signin-client_id" content="47139870778-55g0m8lpkk4p2pnhdbiv5j5tfhkurcau.apps.googleusercontent.com">
  <script src="https://apis.google.com/js/platform.js" async defer></script> -->
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg  navbar-dark " id="navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="#" style="color: aliceblue;">
                <img src="./images/logo.JPG" alt="logo" width="70" height="56" class="d-inline-block align-text-bottom">
                Read.Write.Promote
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon bg-light"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNav">
                <ul class="navbar-nav ">
                    <li class="nav-item dropdown navbar-dark">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Explore
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#"> Start Reading </a></li>
                            <li><a class="dropdown-item" href="#"> Start Writting </a></li>
                            <li><a class="dropdown-item" href="#"> Listen Prodcast </a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown navbar-light">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Opportunities
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="./community.php">Community</a>
                    </li>
                    <li class="nav-item dropdown">

                        <?php if ($_SESSION != NULL) { ?>
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <?php echo ($_SESSION['name']); ?>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li>
                                    <div class="dropdown-item"> <?php echo ($_SESSION['name']); ?> </div>
                                </li>
                                <li><a class="dropdown-item" href="./controllers/logout.php"> Logout </a></li>
                            </ul>
                        <?php } else { ?>
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <?php echo ("My Account"); ?>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li>
                                    <div class="dropdown-item"> My Account </div>
                                </li>
                                <li><a class="dropdown-item" href="./login.php"> Login </a></li>
                                <li><a class="dropdown-item" href="./signup.php"> SignUp </a></li>
                            </ul>
                        <?php } ?>

                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <section class="hero_main">
        <div class="hero_image">
            <img src="./images/15.png" alt="Community_image">
        </div>
        <div class="hero_desc">
            <div class="banner">
                <h1>JOIN OUR COMMUNITY</h1>
            </div>
            <div class="bor1"></div>
            <div class="bor2"></div>
            <div class="desc_text">
                <p>If you love words and keen about exploring, improving, reviewing the writer
                    in yourself, you are at the right platform.<br>
                    Join our community today for best of learning and perceiving.
                    Realizing relief and out of the sorrows and doubt when one keeps writing and
                    exploring, audience keeps praising for the effort and wise creativity.</p>
                    <br>
                    <br>
                    <div class="join_btn">
                    <h3>Become a member at just ***/-</h3>
                    <button type="button" class="btn btn-primary text-wrap">Join</button>
                    </div>
            </div>
        </div>
    </section>



    <footer class="foot">

        <div class="col-lg-5" id="left">
            <h1>ABOUT SIRSPRESS</h1>
            <p style="color: azure; font-size:larger;">SirusPress is online platform and community for
                writers, readers and every creative bunch.</p>
        </div>
        <div class="col-lg-4" id="center">
            <h1>SUBSCRIBE TO OUR NEWSLETTER</h1>
            <form class="form" method="POST">
                <div class="col-mb-6">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email" id="Email" aria-describedby="emailHelp">
                </div>
                <div class="col-mb-6">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" id="Name" aria-describedby="nameHelp">
                </div>
            </form>
        </div>
        <div class="col-lg-3" id="right">

            <h1>QUICK CONTACT</h1>
            <div class="icons">
                <a href="#"> <img src="./images/8.png" alt=".." style="height: 2.1rem;"></a>
                <a href="#"><img src="./images/9.png" alt=".." style="height: 1.9rem;"></a>
                <a href="#"><img src="./images/10.JPG" alt=".." style="height: 1.6rem;"></a>
                <a href="#"><img src="./images/11.JPG" alt=".." style="height: 1.5rem;"></a>
            </div>
        </div>


    </footer>




    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>