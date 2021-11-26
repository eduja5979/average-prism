<html>
<body>

<?php 
$ay = $_GET["type"];
echo $_GET["type"]; ?>

<?php
$servername = "sql10.freesqldatabase.com";
$username = "sql10453225";
$password = "w8smxnPdRG";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$sql = "CREATE TABLE table1 (con CHAR(500))";

$isql = "INSERT INTO table1 VALUES ('$ay')";
    
    if ($conn->query($sql) === TRUE) {
      echo "Success";
    } else {
      echo "Error: " . $conn->error;
    }
    
    $sql = "SELECT con FROM table1";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
     // output data of each row
        while($row = $result->fetch_assoc()) {
            echo $row["con"]. "<br>";
        }
    } 
    else {
        echo "0 results";}
            

    $conn->close();
?>

</body>
</html>