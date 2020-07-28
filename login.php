<?php
include 'template.php';
session_start();
if(isset($_SESSION['admin_id']))
{
    header('location: admin.php');
}
else
{
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div class="col s12 card-panel">
        <div class="card text-center">
            <div class="card-header">
                <h1 class="text-uppercase">Login</h1>
            </div>
            <div class="card-body">
                <form action="router.php" method="POST" id="contact-form">
                    <div class="input-group my-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="input-text">
                                <i class="fas fa-user"></i>
                            </span>
                        </div>
                        <input type="text" name="username" id="username" class="form-control form-control-lg" placeholder="Enter Your Username">
                    </div>

                    <div class="input-group my-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="input-password">
                                <i class="fa fa-key"></i>
                            </span>
                        </div>
                        <input type="password" name="psswrd" id="psswrd" class="form-control form-control-lg" placeholder="Enter Your Password">
                    </div>

                    <button type="submit" name="submit-log" class="btn btn-block btn-lg text-uppercase contact-btn"><i class="far fa-hand-point-right mr-2"></i>Login</button>
                </form>
            </div>
        </div>
    </div>

    <h3 class="text-uppercase text-center text-muted">this is restricted only for admin login!</h3>

</body>

<?php
include 'footer.php';


?>
</html>
<?php
}
?>