

<?php
$servername = "localhost";
$username = "root";
$password = "123";
$dbname = "orderweb";

$itemname = $_POST['itemName'];
$itemamount = $_POST['itemAmount'];
$itemtimestamp = $_POST['itemTimestamp'];
$itemimageurl = $_POST['itemURL'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "insert into inventory(item_name, item_image_url, item_amount, item_timestamp) values ('$itemname','$itemimageurl','$itemamount','$itemtimestamp');";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);



?>
