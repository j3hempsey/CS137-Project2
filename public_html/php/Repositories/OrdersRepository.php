<?php
    require 'DBContext.php';
    class OrdersRepository {
     
        function createOrder($order) {
            echo 'test';
            $conn =  DBContext::getSqlConnection();
            $sql = "INSERT INTO Orders (first_name, last_name, cc_number, street_addr, phone_num, zip, state, pepper_id, quantity, ship_speed)" +
                   "VALUES ('" + $order->first_name +"', '"+ $order->last_name +"', '" + $order->credit_card +"', '" + $order->address + "', '" + $order->phone + "', '" + $order->zip + "', '" + $order->state +"', '" + $order->state+"', '" + $order->pepper_id +"', '" + $order->ship+"')";
           echo $sql;
           $stmt = $conn->query($sql);
           if($stmt) { return true; }
           
           return false; 
        }
    }
?>