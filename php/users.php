

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "orderweb";

$dbemail = $_POST['dbemail'];
$dbfname = $_POST['dbfname'];
$dblname = $_POST['dblname'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "insert into users(user_fname, user_lname, user_email) VALUES ('$dbfname','$dblname','$dbemail');";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);



?>
