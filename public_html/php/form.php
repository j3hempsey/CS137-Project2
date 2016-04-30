<?php
    require 'Models/Order.php';
    require 'Repositories/OrdersRepository.php';
    
    if (isset($_POST['action'])) {
    switch($_POST['action']) {
    case 'buy':
        //Add to sql table
        $pepper_id = $_POST['pepper_id'];
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $credit_card = $_POST['credit_card'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $zip_code = $_POST['zip_code'];
        $state = $_POST['state'];
        $quantity = $_POST['quantity'];
        $ship = $_POST['ship'];
        
        $order = new Order;
        $order->pepper_id = $pepper_id;
        $order->first_name = $first_name;
        $order->last_name = $last_name;
        $order->credit_card = $credit_card;
        $order->address = $address;
        $order->phone = $phone;
        $order->zip_code = $zip_code;
        $order->state = $state;
        $order->quantity = $quantity;
        $order->ship = $ship;
        
        $ordersRepository = new OrdersRepository;
        $ordersRepository->createOrder($order);
        break;
    case 'order':
        //redirect to confirmation page
        break;
    default:
    }
  }
?>