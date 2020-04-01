<?php
$uname = $_POST["username"];
$pwd = $_POST["pword"];
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$phone_num = $_POST["phone_num"];
$gender = $_POST["gender"];
$email = $_POST["email"];

include './db.php';
include './info.php';

// connect to the db
$connection = createConnection($server, $uname, $pass, $dbname);

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

$data = $connection->query("select * from user");

if ($data->num_rows > 0) {
    // output data of each row
    while($row = $data->fetch_assoc()) {
        if ($email == $row["email"]) {
            header( "Location: http://localhost/eagler/html/login.html?timestamp=7" );
            exit;
        }
    }
} else {
    echo "0 results";
}

// add new user to user table
$sql = 'insert into eagler.user (fname, lname, username, password, email,
phone_num, gender) values (\'' . $fname . '\', \'' . $lname . '\',
\'' . $uname . '\', \'' . $pwd . '\', \'' . $email . '\', \'' . $phone_num . '\', \'' . $gender . '\');';

// add user to db
if ($connection->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $connection->error;
}


echo '<h1>after sign up</h1>';

// close the db
closeDb($connection);



?>