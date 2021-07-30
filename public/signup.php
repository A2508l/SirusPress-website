<?php include('./controllers/login.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SirusPress-Signup</title>

  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="./styles/login.css">
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


  <?php include('./controllers/register.php'); ?>
  <?php echo $success_msg; ?>
  <?php echo $email_exist; ?>


  <form class="form" action="" method="POST">
    <div class="form-heading" style="margin-top: 5%;">
      SIGNUP
    </div>
    <div class="form-content">
      <div class="mb-3">
        <label for="exampleInputName1" class="form-label">Name</label>
        <input type="text" class="form-control" id="exampleInputName1" name="name">
        <?php echo $NameEmptyErr; ?>
        <?php echo $_NameErr; ?>

      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        <?php echo $_emailErr; ?>
        <?php echo $emailEmptyErr; ?>

      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
        <?php echo $_passwordErr; ?>
        <?php echo $passwordEmptyErr; ?>
      </div>
      <div class="mb-3">
        <label for="exampleInputNumber1" class="form-label">Number</label>
        <input type="tel" class="form-control" id="exampleInputNumber1" name="mobilenumber">
        <?php echo $_mobileErr; ?>
        <?php echo $mobileEmptyErr; ?>
      </div>
      <br>
      <div class="bor"></div>
      <br>
      <button type="submit" value="submit" name="signup" class="btn btn-info" id="btn">Sign Up</button><br>
      <div class="g-signin2" data-onsuccess="onSignIn" data-theme="dark"></div>
      <a href="./login.html">Already have an account? Login</a>
    </div>

  </form>



  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>