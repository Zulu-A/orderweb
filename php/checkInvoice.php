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

$sql = "select * from invoice where invoice_user = '$mail'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                  <th scope='row'>".$row['invoice_id']."</th>
                  <td>".$row['invoice_name']."</td>
                  <td>".$row['invoice_amnt']."</td>
                  <td>".$row['invoice_quantity']."</td>
                  <td>".$row['invoice_time']."</td>
                  <td>".$row['invoice_user']."</td>
              </tr>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>