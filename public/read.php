<?php

include('./controllers/conn.php');


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./styles/read.css">
    <!-- <script type="text/javascript" src="/public/scripts/dashboard.js"></script> -->

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
                        <a class="nav-link active" href="#">Community</a>
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


    <div class="heading">
        <h1>READ</h1>
    </div>

    <div class="poems">
        <h1 class="text-center" id="heading">Poems</h1>
        <div class="container text-center my-3">
            <div class="row mx-auto my-auto justify-content-center">
                <div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="card-img">
                                        <img src="./images/6.JPG" class="img-fluid">
                                    </div>
                                    <div class="poem_description">
                                        <h5 class="poem_title">Name of the book</h5>
                                        <div class="bor"></div>
                                        <p class="poem_desc">Love, affection, bond, friends</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="card-img">
                                        <img src="./images/6.JPG" class="img-fluid">
                                    </div>
                                    <div class="poem_description">
                                        <h5 class="poem_title">Name of the book</h5>
                                        <div class="bor"></div>
                                        <p class="poem_desc">Love, affection, bond, friends</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="card-img">
                                        <img src="./images/6.JPG" class="img-fluid">
                                    </div>
                                    <div class="poem_description">
                                        <h5 class="poem_title">Name of the book</h5>
                                        <div class="bor"></div>
                                        <p class="poem_desc">Love, affection, bond, friends</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="card-img">
                                        <img src="./images/6.JPG" class="img-fluid">
                                    </div>
                                    <div class="poem_description">
                                        <h5 class="poem_title">Name of the book</h5>
                                        <div class="bor"></div>
                                        <p class="poem_desc">Love, affection, bond, friends</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="card-img">
                                        <img src="./images/6.JPG" class="img-fluid">
                                    </div>
                                    <div class="poem_description">
                                        <h5 class="poem_title">Name of the book</h5>
                                        <div class="bor"></div>
                                        <p class="poem_desc">Love, affection, bond, friends</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="card-img">
                                        <img src="./images/6.JPG" class="img-fluid">
                                    </div>
                                    <div class="poem_description">
                                        <h5 class="poem_title">Name of the book</h5>
                                        <div class="bor"></div>
                                        <p class="poem_desc">Love, affection, bond, friends</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true" id="cont-prev"></span>
                    </a>
                    <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true" id="cont-next"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>




    <div class="poems">
        <h1 class="text-center" id="heading">Short Stories</h1>
        <div class="container text-center my-3">
            <div class="row mx-auto my-auto justify-content-center">
                <div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="card-img">
                                        <img src="./images/6.JPG" class="img-fluid">
                                    </div>
                                    <div class="poem_description">
                                        <h5 class="poem_title">Name of the book</h5>
                                        <div class="bor"></div>
                                        <p class="poem_desc">Love, affection, bond, friends</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="card-img">
                                        <img src="./images/6.JPG" class="img-fluid">
                                    </div>
                                    <div class="poem_description">
                                        <h5 class="poem_title">Name of the book</h5>
                                        <div class="bor"></div>
                                        <p class="poem_desc">Love, affection, bond, friends</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="card-img">
                                        <img src="./images/6.JPG" class="img-fluid">
                                    </div>
                                    <div class="poem_description">
                                        <h5 class="poem_title">Name of the book</h5>
                                        <div class="bor"></div>
                                        <p class="poem_desc">Love, affection, bond, friends</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="card-img">
                                        <img src="./images/6.JPG" class="img-fluid">
                                    </div>
                                    <div class="poem_description">
                                        <h5 class="poem_title">Name of the book</h5>
                                        <div class="bor"></div>
                                        <p class="poem_desc">Love, affection, bond, friends</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="card-img">
                                        <img src="./images/6.JPG" class="img-fluid">
                                    </div>
                                    <div class="poem_description">
                                        <h5 class="poem_title">Name of the book</h5>
                                        <div class="bor"></div>
                                        <p class="poem_desc">Love, affection, bond, friends</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="card-img">
                                        <img src="./images/6.JPG" class="img-fluid">
                                    </div>
                                    <div class="poem_description">
                                        <h5 class="poem_title">Name of the book</h5>
                                        <div class="bor"></div>
                                        <p class="poem_desc">Love, affection, bond, friends</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true" id="cont-prev"></span>
                    </a>
                    <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true" id="cont-next"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>





    <div class="poems">
        <h1 class="text-center" id="heading">Novels</h1>
        <div class="container text-center my-3">
            <div class="row mx-auto my-auto justify-content-center">
                <div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="card-img">
                                        <img src="./images/6.JPG" class="img-fluid">
                                    </div>
                                    <div class="poem_description">
                                        <h5 class="poem_title">Name of the book</h5>
                                        <div class="bor"></div>
                                        <p class="poem_desc">Love, affection, bond, friends</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="card-img">
                                        <img src="./images/6.JPG" class="img-fluid">
                                    </div>
                                    <div class="poem_description">
                                        <h5 class="poem_title">Name of the book</h5>
                                        <div class="bor"></div>
                                        <p class="poem_desc">Love, affection, bond, friends</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="card-img">
                                        <img src="./images/6.JPG" class="img-fluid">
                                    </div>
                                    <div class="poem_description">
                                        <h5 class="poem_title">Name of the book</h5>
                                        <div class="bor"></div>
                                        <p class="poem_desc">Love, affection, bond, friends</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="card-img">
                                        <img src="./images/6.JPG" class="img-fluid">
                                    </div>
                                    <div class="poem_description">
                                        <h5 class="poem_title">Name of the book</h5>
                                        <div class="bor"></div>
                                        <p class="poem_desc">Love, affection, bond, friends</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="card-img">
                                        <img src="./images/6.JPG" class="img-fluid">
                                    </div>
                                    <div class="poem_description">
                                        <h5 class="poem_title">Name of the book</h5>
                                        <div class="bor"></div>
                                        <p class="poem_desc">Love, affection, bond, friends</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="card-img">
                                        <img src="./images/6.JPG" class="img-fluid">
                                    </div>
                                    <div class="poem_description">
                                        <h5 class="poem_title">Name of the book</h5>
                                        <div class="bor"></div>
                                        <p class="poem_desc">Love, affection, bond, friends</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true" id="cont-prev"></span>
                    </a>
                    <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true" id="cont-next"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>




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



    <script src="./scripts/read.js"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>