
<!-- The main white navbar -->
<nav class="navbar myStyle navbar-expand-lg sticky-top navbar-light bg-light">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <i class='fas fa-ellipsis-h'></i></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#"><i class="fas fa-store"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="profile.php"><i class='far fa-user'></i></a>
        </li>
        <hr>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Menu
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="">searvices</a></li>
            <li><a class="dropdown-item" href="woolmusic/index.html">WoolMusic</a></li>
            <li><a class="dropdown-item" href="">contact us</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">about the Website</a></li>
          </ul>
        </li>
        <hr>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Welcome</a>
        </li>
      </ul>
      <div class="user">
        <?php if (isset($_SESSION["username"])){
                echo "<div class='login'>";
                echo "<h6><a class='dropdown-item' href='logout.inc.php'>Logout</a></h6>";
                echo "</div>";
              }else{
                echo "<div class='login'>";
                echo  "<h6><a class='dropdown-item' href='login.php'>Login</a></h6>";
                echo  "</div>";
                echo  "<div class='signin' >";
                echo  "<h6><a class='dropdown-item' href='register.php'>Register</a></h6>";
                echo  "</div>";
              } ?>
      </div>
    </div>
  </div>
</nav>
<?php include ('ender.php');?>