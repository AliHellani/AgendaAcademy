<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "icsddemo";

$con = new mysqli($dbhost, $dbuser, $dbpass, $db);
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$checkTable = mysqli_query($con, "SHOW TABLES LIKE 'registericsd'");
if(mysqli_num_rows($checkTable) > 0) {
    echo "";
} else {
    $query = "CREATE TABLE registericsd 
    (
        `id` int(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        `firstname` varchar(50) NOT NULL,
        `lastname` varchar(50) NOT NULL,
        `email` varchar(50) NOT NULL
    )";

    if (mysqli_query($con, $query)) {
        echo "";
    } else {
        echo "Error creating table: " . mysqli_error($con);
    }
}

mysqli_close($con);
?>
