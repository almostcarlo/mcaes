<?php
// var_dump($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <meta charset="utf-8">
        <meta name="description" content="Manila Cordage Advanced Enterprise System">
        <meta name="keywords" content="account, management, system, account management, account system, ams">
        <meta name="author" content="Karl Gerald Saul, Gentellela Template">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="<?php echo BASE_URL;?>public/images/mcaes-icon.png" type="image/ico" />

        <title>Manila Cordage Advanced Enterprise System</title>

        <!-- Bootstrap -->
        <link href="<?php echo BASE_URL;?>public/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="<?php echo BASE_URL;?>public/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- NProgress -->
        <link href="<?php echo BASE_URL;?>public/vendors/nprogress/nprogress.css" rel="stylesheet">
        <!-- Animate.css -->
        <link href="<?php echo BASE_URL;?>public/vendors/animate.css/animate.min.css" rel="stylesheet">

        <!-- Custom Theme Style -->
        <link href="<?php echo BASE_URL;?>public/build/css/custom.min.css" rel="stylesheet">
        <link href="<?php echo BASE_URL;?>public/build/css/additional-custom.css" rel="stylesheet">
        
    </head>

    <body class="login">
        <div>

            <div class="login_wrapper">
                <div class="animate form login_form">
                    <section class="login_content">
                        
                        <?php echo form_open('home/auth', 'id="form_login"')?>
                            
                            <img src="<?php echo BASE_URL;?>public/images/mcaes-logo-login.png" style="margin-bottom:10px;" alt="MCAES Logo" />
                            
                            <p>Manila Cordage Advanced Enterprise System</p>
                            
                            <br>

                            <?php flashNotification();?>
                            
                            <h4>Login Form</h4>
                            
                            <input type="text" class="form-control" placeholder="Username" name="textUser" required="" />
                            
                            <input type="password" class="form-control" placeholder="Password" name="textPassword" required="" />
                            
                            <button class="btn btn-primary btn-lg btn-block" type="submit">Log in</button>

                            <div class="clearfix"></div>

                        </form>
                        
                    </section>
                </div>
                </div>
            
            </div>
        
        </body>
</html>
