<?php
include 'connect.php';
include 'template.php';
$total = 0;
if(isset($_POST['submit-order']))
{
    $name = $_POST['names'];
    $contact = $_POST['phone'];
    $address = $_POST['address'];
}
$total = $_POST['total'];

$sql = "INSERT INTO orders(cust_name, cust_phone_num, address, total) VALUES ('$name', $contact, '$address', $total)";
if($conn->query($sql) === TRUE)
{
    $order_id = $conn->insert_id;
    foreach($_POST as $key => $value)
    {
        if(is_numeric($key))
        {
            $result = mysqli_query($conn, "SELECT * FROM food WHERE id = $key");
            while($row = mysqli_fetch_array($result))
            {
                $price = $row['price'];
            }
            $price = $value*$price;

            $sql = "INSERT INTO orders_details(order_id, item_id, quantity, price) VALUES ($order_id, $key, $value, $price)";
            $conn->query($sql) === TRUE;
        }
    }
    
    header("location: ../thanks.php");
}

?>