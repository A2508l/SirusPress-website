<?php include('./register.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SirusPress-Login</title>

  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="./styles/login.css">
</head>

<body>
  <?php include('./header.php'); ?>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg  navbar-dark bg-dark" id="navbar">
    <div class="container-fluid">
      <a class="navbar-brand" href="#" style="color: aliceblue;">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT1cp9UlqieE0BhHfVwTq-DgaPxVH2zYQH8hQ&usqp=CAU" alt="" width="70" height="56" class="d-inline-block align-text-bottom">
        Read.Write.Promote
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon bg-light"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarNav">
        <ul class="navbar-nav ">
          <li class="nav-item" navbar-dark>
            <a class="nav-link active" aria-current="page" href="#">Explore</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#">Publish</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#">Opportunities</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#">Community</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


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
      <a href="./login.html">Already have an account? Login</a>
    </div>
    
  </form>



  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>