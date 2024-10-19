<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "langleykg";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$extras_ids = [31,32,33];
$sql = "SELECT id as product_id  FROM `food_delivery_products` WHERE `status` = 1 and id != 266";


// $sql = "INSERT INTO MyGuests (firstname, lastname, email)
// VALUES ('John', 'Doe', 'john@example.com')";

// if ($conn->query($sql) === TRUE) {
//   echo "New record created successfully";
// } else {
//   echo "Error: " . $sql . "<br>" . $conn->error;
// }
echo $insertQuer  = "INSERT INTO food_delivery_products_extras (product_id, extra_id) values";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  
        while($row = $result->fetch_assoc()) {
            foreach ($extras_ids as $extra) {
                echo "(".$row['product_id'].", $extra),";
            }
        }
    
} else {
  echo "0 results";
}
$conn->close();
?>