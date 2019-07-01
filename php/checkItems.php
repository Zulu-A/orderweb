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
                          <h5 class='card-title' id='nm'>".$row['item_name']."</h5>
                          <p class='card-text'>Price: Ksh. <span id='amntT'>".$row['item_amount']."</span></p>
                          <input type='number' id='valval' min='0' max='10' step='1'/>
                          <button id='cartBtn' class='btn btn-primary'><i class='fa fa-plus'></i> add </button>
                      </div>
                  </div>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>