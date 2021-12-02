<html>
<body>


<?php
$ay = $_GET["type"];
echo $ay; 


$servername = "remotemysql.com";
$username = "VLdtphsizV";
$password = "7h68oQ4XhX";

// Create connection
$conn = new mysqli($servername, $username, $password, $username);
echo "<\br>";
echo "<\br>";


// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}



$sql = "INSERT INTO table1 (cont) VALUES ('$ay')";
    
   /* if ($conn->query($sql) === TRUE) {
      echo "Success";
    } else {
      echo "Error: " . $conn->error;
    }*/
    
    $sql = "SELECT cont FROM table1";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
     // output data of each row
        while($row = $result->fetch_assoc()) {
            echo $row["cont"]. "<br>";
            echo "<\br>";
            echo "<\br>";
        }
    } 
    else {
        echo "0 results";}
            

    $conn->close();
?>

</body>
</html>