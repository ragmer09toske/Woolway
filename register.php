<?php
include_once ("home/config.php");
include ('Templates/headers.php');
include ('nav.php');
?>
<!-- The main white navbar -->
<nav class="navbar myStyle navbar-expand-lg sticky-top navbar-light bg-light">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" >
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php"><i class="fas fa-store"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Welcome</a>
        </li>
      </ul>
      <div class="user">
          <div class='login'>
          <h6><a class='dropdown-item' href='login.php'>or login</a></h6>
          </div>
      </div>
    </div>
  </div>
</nav>
<!-- End of the navbar -->
<div class='register-wreper'>
<section name="singup" id="singup">
  <h2>Register</h2>
<form action="register.inc.php" method="POST"><br>
 <input class='form-input' type="text" name="name" placeholder="full name" required>               <br><br>
 <input class='form-input' type="text" name="email" placeholder="email" required>                  <br><br>
 <input class='form-input' type="text" name="uid" placeholder="user name" required>                <br><br>
 <input class='form-input' type="password" name="pwd" placeholder="password" required>             <br><br>
 <input class='form-input' type="password" name="repeatpwd" placeholder="repeat password" required><br><br>
 <button class='btn btn-primary' type="submit" name="submit">Register</button>
</form>
</section>
</div>
<?php include ('ender.php');?>