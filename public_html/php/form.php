<?php
$servername = "sylvester-mccoy-v3.ics.uci.edu";
$db="inf124grp13";
$username = "inf124grp13";
$password = "4a=eDuVu";

try {
    $conn = new PDO("mysql:host=$servername; dbname=$db", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //Output confirmation from SQL database
    //Add to sql table
    // $stmt = $conn->prepare("INSERT INTO orders (first_name, last_name, cc_number, \
    //         street_addr, phone_num, zip, state, pepper_id, quantity, ship_speed )\
    //         VALUES(:frst, :last, :cc, :strt, :phone, :zip, :state, :pep_id, :quan, :ship");
    // $stmt->binparam(':frst', $_POST['first_name']);
    // $stmt->binparam(':last', $_POST['last_name']);
    // $stmt->binparam(':cc', $_POST['credit_card']);
    // $stmt->binparam(':strt', $_POST['address']);
    // $stmt->binparam(':phone', $_POST['phone']);
    // $stmt->binparam(':zip', $_POST['zip_code']);
    // $stmt->binparam(':state', $_POST['state']);
    // $stmt->binparam(':pep_id', $_POST['']);
    // $stmt->binparam(':quan', $_POST['quantity']);
    // $stmt->binparam(':ship', $_POST['ship']);
    //add order to table
    if ($stmt->execute()){
        // $stmt = $conn->prepare("SELECT id FROM orders  WHERE first_name = :frst AND \
        // last_name=:last AND cc_number=:cc AND street_addr = :strt AND \
        // phone_num = :phone AND zip = :zip AND state = :state AND pepper_id = :pep_id AND \
        // quantity = :quan AND ship_speed = :ship);
        // $stmt->binparam(':frst', $_POST['first_name']);
        // $stmt->binparam(':last', $_POST['last_name']);
        // $stmt->binparam(':cc', $_POST['credit_card']);
        // $stmt->binparam(':strt', $_POST['address']);
        // $stmt->binparam(':phone', $_POST['phone']);
        // $stmt->binparam(':zip', $_POST['zip_code']);
        // $stmt->binparam(':state', $_POST['state']);
        // $stmt->binparam(':pep_id', $_POST['']);
        // $stmt->binparam(':quan', $_POST['quantity']);
        // $stmt->binparam(':ship', $_POST['ship']);
        $stmt.execute()
        //redirect to confirmation page with the order id of the returned sql statement
    } else {
        echo "ERROR: Could not process order";
    }
} catch(PDOException $e) {
    echo "ERROR: Could not process order.";
}
?>
