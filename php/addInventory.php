<?php
$servername = "localhost";
$username = "root";
$password = "123";
$dbname = "orderweb";

$invoiceuser = $_POST['uid'];
$invoicename = $_POST['name'];
$invoicetimestamp = $_POST['time'];
$invoiceqty = $_POST['quantity'];
$invoiceamnt = $_POST['amnt'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "insert into invoice(invoice_name, invoice_amnt, invoice_quantity, invoice_time, invoice_user) values ('$invoicename','$invoiceamnt','$invoiceqty','$invoicetimestamp','$invoiceuser');";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);



?>
