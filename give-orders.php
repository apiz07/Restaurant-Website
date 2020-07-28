<?php
include 'connect.php';
include 'template.php';
$total = 0;



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order</title>
</head>
<body>
    <section id="content">
        <div class="col-md-6 my-3 align-self-center">
            <div class="card text-center">
                <div class="card-header">
                    <h1 class="text-uppercase">Details</h1>
                </div>
                <div class="card-body">
                    <form action="thanks.php" method="POST">
                    <ul>
                    <?php
                            foreach($_POST as $key => $value)
                            {
                                if($value != null)
                                {
                                    if(is_numeric($key))
                                    {
                                        $result = mysqli_query($conn, "SELECT * FROM food WHERE id = $key");
                                        while($row = mysqli_fetch_array($result))
                                        {
                                            $price = $row['price'];
                                            $item_name = $row['name'];
                                            $item_id = $row['id'];
                                        }
                                        $price = $value*$price;
                                            echo '<li>
                                                    <div class="row">
                                                        <div class="col s7">
                                                            <p><strong>'.$item_id.'</strong>'.$item_name.'</p>
                                                        </div>
                                                        <div class="col s2">
                                                            <span>'.$value.' Pieces</span>
                                                        </div>
                                                        <div class="col s3">
                                                            <span>RM '.$price.'</span>
                                                        </div>
                                                    </div>
                                                </li>';
                                        $total = $total + $price;
                                    }
                                }
                                
                            }
                                echo '<li>
                                            <div class="row">
                                                <div class="col s7">
                                                    <p> Total</p>
                                                </div>
                                                <div class="col s2">
                                                    <span>&nbsp;</span>
                                                </div>
                                                <div class="col s3">
                                                    <span><strong>RM '.$total.'</strong></span>
                                                </div>
                                            </div>
                                        </li>';
                            


                        ?>
                    </ul>
                        

                        <button type="submit" name="submit-order" class="btn btn-block btn-lg text-uppercase contact-btn"><i class="far fa-hand-point-right mr-2"></i>Submit</button>
                        <input type="hidden" name="total" value="<?php echo $total;?>">

                        <?php
                            foreach($_POST as $key => $value)
                            {
                                if($key == 'submit' || $value == '')
                                {
                                    break;
                                }
                                echo '<input name="'.$key.'"type="hidden" value="'.$value.'">';
                            }
                        ?>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-6 my-3 align-self-center">
            <div class="card text-center">
                <div class="card-header">
                    <h1 class="text-uppercase">Estimated Receipt</h1>
                </div>
                <div class="card-body">
                    
                </div>
        
        </div>
    </section>
</body>
<?php
include 'footer.php';

?>
</html>