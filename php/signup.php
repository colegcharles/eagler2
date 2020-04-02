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

// check to see in user already exists
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
}

// check to see if email address includes georgiasouthern.edu
$a = 'georgiasouthern.edu';
$email = strtolower($email);

if (strpos($email, $a) == false) {
    header( "Location: http://localhost/eagler/html/login.html?timestamp=7" );
    exit;
}

// add new user to user table
$sql = 'insert into eagler.user (fname, lname, username, password, email,
phone_num, gender) values (\'' . $fname . '\', \'' . $lname . '\',
\'' . $uname . '\', \'' . $pwd . '\', \'' . $email . '\', \'' . $phone_num . '\', \'' . $gender . '\');';

// add user to db
if ($connection->query($sql) === TRUE) {
} else {
    echo "Error: " . $sql . "<br>" . $connection->error;
}

// send users the link to the quiz php file
// $msg = "Thank you for registering for Eagler! please go to the following url to finish registering and begin swiping! \n 
// http://localhost/eagler/php/quiz.php?email=" . $email . "&timestamp=7";
// // use wordwrap() if lines are longer than 70 characters
// $msg = wordwrap($msg,70);
// // send email
// mail($email,"verify email",$msg);
// echo '<p>email sent</p>';

// // close the db
// closeDb($connection);

require_once('../PHPMailer/PHPMailerAutoload.php');
$url = 'http://localhost/eagler/testemail.php';
$data = array('to' => $email, 'from' => 'no-reply@eagler.com', 'subject' => 'Eagler Registration', 'message' => 'hello');

// use key 'http' even if you send the request to https://...
$options = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data)
    )
);
$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);
if ($result === FALSE) { /* Handle error */ }

var_dump($result);

?>


<body>
<p> thank you for registering! </p>
<p> to verify your account, please check your email address. if you do not get any email address, please register again with a valid georgisouthern.edu address</p>
</address>
</body>