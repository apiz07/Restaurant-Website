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
    <title>Confirm Order</title>
</head>
<body>
        <div class="col-md-6 my-3 align-self-center">
            <div class="card text-center">
                <div class="card-header">
                    <h1 class="text-uppercase">Receipt</h1>
                </div>
                <div class="card-body">
                    <ul>

                        <form action="thanks.php" method="post">
                            
                            
                            <div class="input-field col s12">
                                <button type="submit" name="submit" class="btn btn-block btn-lg text-uppercase contact-btn"><i class="far fa-hand-point-right mr-2"></i>Confirm</button>
                            </div>
                        
                        
                        
                        </form>



                    </ul>
                </div>
            </div>
        </div>
</body>
</html>