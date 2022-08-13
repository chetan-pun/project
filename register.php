

<?php

include_once "./components/nav.php";


$registered = false;


if(isset($_SESSION['username'])){
    header("Location: ./home.php");
    exit;
}

if(isset($_POST['username'])){

  include_once "./config.php";

$username = $_POST['username'];
$age = $_POST['age'];
$password = $_POST['password'];
$gender = $_POST['gender'];
$bio = $_POST['bio'];

$sql = "INSERT INTO `connect`.`connect` (`username`,`age`,`gender`,`password`,`bio`,`registered`,`s/n`) VALUES (
    '$username', '$age','$gender' ,'$password','$bio',current_timestamp(),'2')";

if($con->query($sql) == true){
    $registered = true;
}
else{
    echo "$sql <br> $con->error";
}

$con->close();

}


?>


<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Connect | Register</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>


<section class="vh-100" style="background-color: #eee;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

                <form  action = "" method = "post">

                  
         
                    <div class="form-outline flex-fill mb-0">
                    <label class="form-label" for="form3Example1c">Username</label>
                      <input type="text" id="form3Example1c" class="form-control" name = "username" />

                    </div>
                

            
            
                    <div class="form-outline flex-fill mb-0">
                    <label class="form-label" for="form3Example3c">Age</label>
                      <input type="number" id="form3Example3c" class="form-control" name = "age" />
                      
                    </div>
                

                 
                    
                    <div class="form-outline flex-fill mb-0">
                    <label class="form-label" for="form3Example4c">Gender</label>
                      <input type="text" id="form3Example4c" class="form-control" name = "gender" />
                      
                    </div>

                    <div class="form-outline flex-fill mb-0">
                    <label class="form-label" for="form3Example3c">Password</label>
                      <input type="password" id="form3Example3c" class="form-control" name = "password" />
                      
                    </div>
                
                   
                    <div class="form-outline flex-fill mb-0">
                    <label class="form-label" for="form3Example4cd">Repeat your password</label>
                      <input type="password" id="form3Example4cd" class="form-control" />
                      
                    </div>

                    <div class="form-outline flex-fill mb-0">
                    <label class="form-label" for="form3Example4cd">Bio</label>
                      <textarea type="text" id="form3Example4cd" class="form-control" name = "bio"></textarea>
                    </div>
                  <br/>

                  <div class="form-check d-flex justify-content-center mb-5">
                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3c" />
                    <label class="form-check-label" for="form2Example3">
                      I agree all statements in <a href="#!">Terms of service</a>
                    </label>
                  </div>

                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button type="submit" class="btn btn-primary btn-lg">Register</button>
                  </div>

                  <?php
                  if($registered){
                    echo "<div class='alert alert-success' role='alert'>
                    <strong>Success!</strong> You are registered ".$username."</div>";
                  }

                  ?>

                </form>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="./draw1.webp"
                  class="img-fluid" alt="Sample image">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


</body>
</html>