

<?php
include_once "./components/nav.php";

if(!isset($_SESSION['username'])){
    header("Location: ./login.php");
    exit;
}

?>

<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Connect | Home</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>

<h1>Welcome <?php echo $_SESSION['username']; ?></h1>

</body>
</html>