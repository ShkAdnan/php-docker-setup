<?php
 
 $servername = "db";
 $username = "root";
 $password = "example";
 $database = "company";
 
echo "Hello from the docker container<br>";

 // Create connection
 $conn = new mysqli($servername, $username, $password, $database);
 
 // Check connection
 if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
 }

 $sql = "SELECT * FROM users";
 $result = $conn->query($sql);

 if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["name"]. " -Fav Color " . $row["fav_color"]. "<br>";
  }
 } else {
  echo "0 results";
 }
 $conn->close();

 ?>