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
                    <h1 class="page-header">Project Requests</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            All Requests
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="boi-table">
                                <thead>
                                    <tr>
                                        <th>Timestamp</th>
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>User</th>
                                        <th>Team</th>
                                        <th>Status</th>
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php
                                  // Item listing
                                  include '../process/connect.php';

                                  $sql = "SELECT * from research";
                                  $result = $conn->query($sql);

                                  if($result->num_rows > 0) {
                                      $i = 0;
                                      while($row = $result->fetch_assoc()) {
                                          if($i%2 == 0) {

                                              echo    '<tr class="odd gradeX">' .
                                                          '<td>' . $row['timestamp'] . '</td>' .
                                                          '<td>' . $row['research_id'] . '</td>' .
                                                          '<td>' . $row['research_title'] . '</td>' .
                                                          '<td>' . $row['user'] . '</td>' .
                                                          '<td>' . $row['team'] . '</td>' .
                                                          '<td>' . $row['research_status'] . '</td>' .
                                                          '<td><button class="btn btn-primary" data-toggle="modal" data-target="#viewModal' . $row['research_id'] . '">View</button></td>' .
                                                      '</tr>';

                                          } else {
                                              echo    '<tr class="even gradeC">' .
                                                          '<td>' . $row['timestamp'] . '</td>' .
                                                          '<td>' . $row['research_id'] . '</td>' .
                                                          '<td>' . $row['research_title'] . '</td>' .
                                                          '<td>' . $row['user'] . '</td>' .
                                                          '<td>' . $row['team'] . '</td>' .
                                                          '<td>' . $row['research_status'] . '</td>' .
                                                          '<td><button class="btn btn-primary" data-toggle="modal" data-target="#viewModal' . $row['research_id'] . '">View</button></td>' .
                                                      '</tr>';

                                          }
                                          echo    '<div class="modal fade" id="viewModal' . $row['research_id'] . '" tabindex="-1" role="dialog" aria-hidden="true">
                                                      <div class="modal-dialog">
                                                          <div class="modal-content">
                                                              <form action="../process/process_project.php" method="post">
                                                                  <div class="modal-header">
                                                                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                                                          &times;
                                                                      </button>
                                                                      <h4 class="modal-title">
                                                                          View
                                                                      </h4>
                                                                  </div>
                                                                  <div class="modal-body">
                                                                      <div class="form-group">
                                                                          <label>Project ID</label>
                                                                          <input type="text" class="form-control" name="project_id" value="' . $row['research_id'] . '" readonly/>
                                                                      </div>
                                                                      <div class="form-group">
                                                                          <label>User Email</label>
                                                                          <input type="text" class="form-control" name="user_email" value="' . $row['user'] . '" readonly/>
                                                                      </div>
                                                                      <div class="form-group">
                                                                          <label>Title</label>
                                                                          <input type="text" class="form-control" name="project_title" value="' . $row['research_title'] . '" readonly/>
                                                                      </div>
                                                                      <div class="form-group">
                                                                          <label>Report</label>
                                                                          <textarea class="form-control" name="project_status" readonly>' . $row['research_status'] . '</textarea>
                                                                      </div>
                                                                      <div class="form-group">
                                                                          <label>Requirement</label>
                                                                          <textarea class="form-control" name="project_requirement" readonly>' . $row['research_requirement'] . '</textarea>
                                                                      </div>
                                                                  </div>
                                                                  <div class="modal-footer">
                                                                        <a class="btn btn-primary" type="button" target="_blank" href="../../../uploads/project/' . $row['research_bp'] . '">Download Business Plan</a>

                                                                       ';
                                                                  if($row['project_status'] == 'accepted') {
                                                                      echo '<button class="btn btn-success" type="submit" name="accept" disabled>Accept</button>';
                                                                  } else {
                                                                      echo '<button class="btn btn-success" type="submit" name="accept">Accept</button>';
                                                                  }
                                                                  if($row['project_status'] == 'rejected') {
                                                                      echo '<button class="btn btn-danger" type="submit" name="reject" disabled>Reject</button>';
                                                                  } else {
                                                                      echo '<button class="btn btn-danger" type="submit" name="reject">Reject</button>';
                                                                  }
                                                                  echo '
                                                                      <button class="btn btn-default" type="button" data-dismiss="modal">Close</button>
                                                                  </div>
                                                              </form>
                                                          </div>
                                                      </div>
                                                  </div>';

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
