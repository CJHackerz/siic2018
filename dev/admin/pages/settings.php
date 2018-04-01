<?php
    session_start();
    if(!isset($_SESSION['admin']) || !isset($_SESSION['role'])) {
        header('Location: ./index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Settings|SIIC</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <div id="wrapper">

        <!-- Navigation -->
        <?php
        require "includes/nav.php";
        ?>


        <div id="page-wrapper">
            <div class="container">
                <h1>Settings</h1>
                <div class="row">
                    <div class="col-md-4">
                        <div class="login-panel panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Set a new password</h3>
                            </div>
                            <div class="panel-body">
                                <form role="form" action="../process/process_settings.php" method="post">
                                    <fieldset>
                                      <div class="form-group">
                                            <input class="form-control" placeholder="Enter your old password" name="old_password" type="password" value="">
                                        </div>


                                        <div class="form-group">
                                            <input class="form-control" placeholder="Enter a new password" name="new_password" type="password" value="">
                                        </div>

                                        <div class="form-group">
                                            <input class="form-control" placeholder="Enter the new password again" name="new_password1" type="password" value="">
                                        </div>

                                        <button class="btn btn-lg btn-success btn-block" type="submit">Change Password</button><br>

                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /#wrapper -->



    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
