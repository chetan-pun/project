


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="./index.php">Connect</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <?php
      session_start();
       if(isset($_SESSION['username'])){
        echo "<li class='nav-item'>
        <a class='nav-link' href='./index.php'>Home</a>
        </li>";
            echo "<li class='nav-item'>
            <a class='nav-link' href='./profile.php'>Profile</a>
            </li>
           ";

          

           echo "<li class='nav-item'>
            <a class='nav-link' href='./logout.php'>Log out</a>
            </li>";
       }
       else{
            echo "<li class='nav-item'>
              <a class='nav-link' href='./register.php'>Register</a>
              </li>";
            echo "<li class='nav-item'>
              <a class='nav-link' href='./login.php'>Login</a>
              </li>";
       }
      ?>
  

  
    </ul>
  </div>
</nav>