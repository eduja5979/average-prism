<html>
<body style="background-color: darkred;">

<?php


$ay = $_GET["type"];


$servername = "remotemysql.com";
$username = "VLdtphsizV";
$password = "7h68oQ4XhX";

// Create connection
$conn = new mysqli($servername, $username, $password, $username);


// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

    
    if ($conn->query($sql) === TRUE) {
      ;
    } else {
      echo "Error: " . $conn->error;
    }
    
    $sql = "SELECT cont FROM table1";
    $result = $conn->query($sql);
    $p = "";
    
    if ($result->num_rows > 0) {
     // output data of each row
     
     while($row = $result->fetch_assoc()) {
        $p = $row["cont"];
        echo "<p style='font-size: 33px; color: blanchedalmond;'>$p</p>
        <style> p {font-family: 'Brush Script MT', cursive;</style>";
        }
        
    } 
    else {
        echo "0 results";}
            

    $conn->close();
?>

</body>
</html>