
<?php


session_start();

if($_SESSION['username'] == "admin"){
    include_once "./config.php";
    $data = "SELECT s/n, username, password, age FROM connect";
    $reuslt = $con->query($data);
    

}

else{
    header("Location : ./home.php");
    exit;
}




?>







