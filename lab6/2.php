<?php
$servername = "localhost";
$username = "username";
$password = "password";

try {
    $db = new PDO ("mysql:host=localhost;dbname=dreamhome","root","");

    $sql = 'SELECT MAX(salary) FROM 'Staff' GROUP BY position ';
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        echo "<table><tr><th>position</th><th>MAX</th></tr>";
        while($row = $result->fetch_assoc()) {
        echo  "<tr><td>".$row["position"]."</td><td>".$row["salary"]."</td></tr>" ;

        }
        echo "</table>";

} else {
        echo "0 results";
    }
    $conn->close();
    }
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}
?>