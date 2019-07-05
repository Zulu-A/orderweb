<?php
$servername = "localhost";
$username = "root";
$password = "123";
$dbname = "orderweb";


$mail = $_POST['umail'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "select sum(invoice_amnt) as 'invoiceamnt' from invoice where invoice_user = '$mail';";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                  <th scope='row'>Total</th>
                  <td> - </td>
                  <td> - </td>
                  <td> - </td>
                  <td> - </td>
                  <td>".$row['invoiceamnt']."</td>
              </tr>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>