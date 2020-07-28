<?php
include 'connect.php';
include 'template.php';

if(isset($_POST['admin_id']))
{
    $_SESSION['admin_id']==session_id()
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
    <div>
        <h3 class="text-uppercase text-center">List of order</h3>
    </div>
    
    <div>
        <?php
            



        ?>

    </div>
</body>
</html>
<?php
}
?>