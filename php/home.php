<?php
$email = $_POST["email"];
$password = $_POST["pword"];

include './db.php';
include './info.php';

// connect to the db
$connection = createConnection($server, $uname, $pass, $dbname);

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

$data = $connection->query("select * from user");

$signin = false;
if ($data->num_rows > 0) {
    // output data of each row
    while($row = $data->fetch_assoc()) {
        if ($email == $row["email"] and $password == $row["password"]) {
            $signin = true;
        }
    }
} else {
    echo "0 results";
}


if (!$signin) {
    header( "Location: http://localhost/eagler/html/login.html?timestamp=7" );
    echo '<h1>wrong username / password</h1>';
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
<p>amr start working on this page</p>
</body>

</html>