<?php
    $confirm_id = htmlspecialchars($_GET["id"]);
    $servername = "sylvester-mccoy-v3.ics.uci.edu";
    $db="inf124grp13";
    $username = "inf124grp13";
    $password = "4a=eDuVu";

    try {
        $conn = new PDO("mysql:host=$servername; dbname=$db", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //Output confirmation from SQL database
        if ($confirm_id){
            $stmt = $conn->query("SELECT * FROM orders WHERE ID=".$confirm_id);
            $stmt->execute();
            echo "<table>\n";
            while ( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) {
                echo "<tr>";
                echo "<td> Name:</td>";
                echo "<td>".$row['first_name']." ".$row['last_name']."<br>";
                echo "</tr>";

                echo "<tr>";
                //phone
                echo "<td> Phone Number: </td>";
                echo "<td>".$row['phone_num']."<td>";
                echo "</tr>";

                echo "<tr>";
                //addr
                echo "<td>Address: </td>";
                echo "<td>".$row['street_addr']."<td>";
                echo "<td>".$row['zip']."</td>";
                echo "<td>".$row['state']."</td>";
                echo "</tr>";

                echo "<tr>";
                //pepper
                //TODO
                echo "</tr>";

                echo "<tr>";
                //ship speed
                //TODO
                echo "</tr>";
            } echo "</table>\n";

        } else {
            echo "goodbye";
        }
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }

?>
<br>
