<?php
include 'connect.php';
include 'template-order.php';



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>order</title>
</head>
<body>
    <div>
        <h3 class="text-uppercase text-center primaryclr">Order your food here</h3>
        <div class="col s12">
            <form action="give-orders.php" method="post">
                <div class="row">
                    <div class="input-group my-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="input-text">
                                        <i class="fas fa-user"></i>
                                    </span>
                                </div>
                                <input type="text" name="names" id="names" class="form-control form-control-lg" placeholder="Enter Your Name">
                            </div>

                            <div class="input-group my-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="input-phone">
                                        <i class="fas fa-phone"></i>
                                    </span>
                                </div>
                                <input type="text" name="phone" id="phone" class="form-control form-control-lg" placeholder="Enter Your Phone Number">
                            </div>            

                            <div class="input-group my-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="input-address">
                                        <i class="fas fa-home"></i>
                                    </span>
                                </div>
                                <textarea name="address" id="address" placeholder="Enter Your Address"></textarea>
                            </div>
                            <?php
                                foreach($_POST as $key => $value)
                                {
                                    if(is_numeric($key))
                                    {
                                        echo '<input type="hidden" name="'.$key.'" value="'.$value.'">';
                                    }
                                }
                            ?>

                    <div class="col s12 m4 l3">
                        <h4 class="text-capitalize text-center text-muted">Order food</h4>

                        <div class="tertiaryclr fnt-sze table-responsive">
                            <table id="data-cust" class="table display" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Item price</th>
                                        <th>Quantity</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php
                                    $result = mysqli_query($conn, "SELECT * FROM food");
                                    while($row = mysqli_fetch_array($result))
                                    {
                                        echo '<tr><td>'.$row["name"].'</td><td>'.$row["price"].'</td>';
                                        echo '<td><div class="input-field col s12"><lable for='.$row["id"].' class="">Quantity</label>';
                                        echo '<input id="'.$row["id"].'" name="'.$row['id'].'" type="text" data-error=".errorTxt'.$row["id"].'"><div class="errorTxt'.$row["id"].'"></div></td></tr>';
                                    }
                                    ?>
                                </tbody>
                            </table>                        
                        </div>

                        <div class="input-field col s12">
                            <button type="submit" name="submit-order" class="btn btn-block btn-lg text-uppercase contact-btn">Click Here To Order</button>
                        </div>
                    </div>
                </div>
            
            </form>
        
        </div>
    </div>
</body>

<?php
include 'footer.php';

?>

</html>