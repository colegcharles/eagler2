<?php
// Create connection
function createConnection($s, $u, $p, $d){
    $conn = new mysqli($s, $u, $p, $d);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
}

function closeDb($conn) {
    $conn->close();
}
?>