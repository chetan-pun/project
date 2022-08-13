
<?php

include_once "./components/nav.php";



if(isset($_SESSION['username'])){
    header("Location: ./home.php");
    exit;
}
else{

  if(isset($_POST['username']) && isset($_POST['password'])){

    include_once "./config.php";
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM connect where username = '$username' and password = '$password'";  
    $result = mysqli_query($con, $sql);  

    // $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result);  
      
    if($count == 1){  
        $_SESSION['username'] = $username;  
        header("Location: ./home.php");  
    }  
    else{  
        echo "Invalid username or password";  
    }
  }
}


?>

<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Connect | Login</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>


<section class="vh-100 d-flex  align-items-center" >
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="./draw2.webp"
          class="img-fluid" alt="Sample image"/>
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form action = "" method = "post">

         

         
          <div class="form-outline mb-4">
          <label class="form-label" for="form3Example3">Username</label>
            <input type="text" id="form3Example3" class="form-control form-control-lg"
              placeholder="Enter a valid username" name = "username" />
           
          </div>

          
          <div class="form-outline mb-3">
          <label class="form-label" for="form3Example4">Password</label>
            <input type="password" id="form3Example4" class="form-control form-control-lg"
              placeholder="Enter password" name = "password" />
            
          </div>
          <br />

          <div class="d-flex justify-content-between align-items-center">
           
            <div class="form-check mb-0">
              <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
              <label class="form-check-label" for="form2Example3">
                Remember me
              </label>
            </div>
            <a href="#!" class="text-body">Forgot password?</a>
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="./register.php"
                class="link-danger">Register</a></p>
          </div>

        </form>
      </div>
    </div>
  </div>

</section>
</body>
</html>