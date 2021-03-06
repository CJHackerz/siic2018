<?php
    // check login
    session_start();

    if(!isset($_SESSION['admin']) || !isset($_SESSION['role'])) {
        header('Location: ./login.php');
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

    <title>ADMIN|SIIC</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="../vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

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
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Teams</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            New Team
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <form class="new_research" id="new_research" enctype="multipart/form-data" action="../process/process_new_team.php" accept-charset="UTF-8" method="post">
                                <label for="team_logo">Team Logo</label><br/>
                                <input type="file" name="team_logo" id="team_logo"  required/>

                                <label for="team_name">Team Name</label><br/>
                                <input class="form-control" type="text" name="team_name" id="team_name" required/><br/>

                                <label for="team_desc">Description</label><br/>
                                <textarea cols="80" rows="10" class="form-control" name="team_desc" id="team_desc"></textarea>

                                <label for="team_website">Website Link</label><br/>
                                <input class="form-control" type="text" name="team_website" id="team_website" /><br/>

                                <label for="team_fb">Facebook Link</label><br/>
                                <input class="form-control" type="text" name="team_fb" id="team_fb" /><br/>

                                <label for="team_contact">Contact No</label><br/>
                                <input class="form-control" type="number" name="team_contact" id="team_contact" /><br/>

                                <label for="team_email">Team Email</label><br/>
                                <input class="form-control" type="text" name="team_email" id="team_email" required/><br/>

                                <label for="team_password">Team Password</label><br/>
                                <input class="form-control" type="text" name="team_password" id="team_password" value="<?php echo uniqid('t');?>" required/><br/>

                                <input type="submit" name="commit" value="Create Team" class="btn btn-primary rightBtn" />
                            </form>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Invite Team
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <form class="new_research" id="new_team_invite" enctype="multipart/form-data" action="../process/process_new_team_invite.php" accept-charset="UTF-8" method="post">
                                <label for="team_email">Team Email</label><br/>
                                <input class="form-control" type="text" name="team_email" id="team_email" required/><br/>

                                <input type="submit" name="commit" value="Invite Team" class="btn btn-primary rightBtn" />
                            </form>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            All Teams
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="boi-table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Team Email</th>
                                        <th>Team Name</th>
                                        <th>Member Count</th>
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody id="teamList">
                                    <?php
                                        // Item listing
                                        include '../process/connect.php';

                                        $sql = "SELECT team_id,team_email,team_name,count from teams";
                                        $result = $conn->query($sql);
                                        if($result->num_rows > 0) {
                                            $i = 0;
                                            while($row = $result->fetch_assoc()) {

                                                if($i%2 == 0) {
                                                    echo    '<tr class="odd gradeX">';
                                                } else {
                                                    echo    '<tr class="even gradeC">' ;
                                                }
                                                echo
                                                                '<td>' . $row['team_id'] . '</td>' .
                                                                '<td>' . $row['team_email'] . '</td>' .
                                                                '<td>' . $row['team_name'] .  '</td>' .
                                                                '<td>' . $row['count'] .   '</td>' .
                                                                '<td><a href="../../../teampage.php?id=' . $row['team_id'] . '" target="_blank"><button class="btn btn-primary" data-toggle="modal">View</button></a>
                                                                    <a class="btn btn-danger" href="../process/remove_teams.php?id=' . $row['team_id'] . '">Remove</a>
                                                                </tr>' .
                                                            '</tr>';
                                                $i++;
                                            }
                                        }
                                    ?>

                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- modal -->
    <!-- <div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        &times;
                    </button>
                    <h4 class="modal-title">
                        View
                    </h4>
                </div>
                <div class="modal-body">

                </div>
                <div class="modal-footer">

                </div>
            </div>
        </div>
    </div> -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#boi-table').DataTable({
            responsive: true
        });
    });
    </script>

</body>

</html>
