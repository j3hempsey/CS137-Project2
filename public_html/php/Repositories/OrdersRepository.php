<?php
    require 'DBContext.php';
    class OrdersRepository {
     
        function createOrder($order) {
            $servername = "sylvester-mccoy-v3.ics.uci.edu";
                $db="inf124grp13";
                $username = "inf124grp13";
                $password = "4a=eDuVu";
                //Make SQL connection and get my answer.
                $conn = new PDO("mysql:host=sylvester-mccoy-v3.ics.uci.edu;dbname=inf124grp13", $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO Orders (first_name, last_name, cc_number, street_addr, phone_num, zip, state, pepper_id, quantity, ship_speed)" +
                   "VALUES ('" + $order->first_name +"', '"+ $order->last_name +"', '" + $order->credit_card +"', '" + $order->address + "', '" + $order->phone + "', '" + $order->zip + "', '" + $order->state +"', '" + $order->pepper_id +"', '" + $order->ship+"')";
           echo $sql;
           $stmt = $conn->query($sql);
           if($stmt) { return true; }
           
           return false; 
        }
    }
?>