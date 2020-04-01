<?php
$email = $_POST["email"];
$password = $_POST["pword"];

if ($email != 'cole@cole.com' or $password != 'cole') {
    header( "Location: http://localhost/eagler/html/login.html?timestamp=7" );
    echo "fuck";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Eagler</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href='../css/home.css'>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
<h1>success you logged in !!!!</h1>
</body>

</html>