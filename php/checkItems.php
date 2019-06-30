<?php
$servername = "localhost";
$username = "root";
$password = "123";
$dbname = "orderweb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "select * from inventory;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<div class='card col-md-3' style='width: 18rem; margin-left: 10px;'>
                      <img class='card-img-top' src='".$row['item_image_url']."' alt='Card image cap'>
                      <div class='card-body'>
                          <h5 class='card-title'>".$row['item_name']."</h5>
                          <p class='card-text'>Price: Ksh. ".$row['item_amount']."</p>
                          <input type=\"number\" value=\"0\" min=\"0\" max=\"1000\" step=\"1\"/>
                      </div>
                  </div>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>