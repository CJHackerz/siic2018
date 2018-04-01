<?php

                                        // Item listing
                                        include '../process/connect.php';

                                        $sql = "SELECT * from user_profiles";
                                        $result = $conn->query($sql);

                                        if($result->num_rows > 0) {
                                            $i = 0;
                                            while($row = $result->fetch_assoc()) {
                                                if($i%2 == 0) {


                                                    echo    '<tr class="odd gradeX">' .
                                                                '<td>' . $row['timestamp'] . '</td>' .
                                                                '<td>' . $row['uid'] . '</td>' .
                                                                '<td>' . $row['email'] . '</td>' .
                                                                '<td>' . '</td>' .
                                                                '<td><button class="btn btn-primary" data-toggle="modal" data-target="#viewModal' . $row['uid'] . '">View</button></tr>' .
                                                            '</tr>';
                                                  echo    '<div class="modal fade" id="viewModal' . $row['uid'] . '" tabindex="-1" role="dialog" aria-hidden="true">
                                                              <div class="modal-dialog">
                                                                  <div class="modal-content">
                                                                      <form action="../process/process_users.php" method="post">
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
                                                                              <label>User ID</label>
                                                                              <input type="text" class="form-control" name="users_id" value="' . $row['uid'] . '" readonly/>
                                                                          </div>
                                                                          <div>
                                                                              <img src="/siic-2017-php/profiles/img/' . $row['avatar'] . '" width="160px" height= "auto" readonly/>
                                                                          </div>
                                                                              <div class="form-group">
                                                                                  <label>Name</label>
                                                                                  <input type="text" class="form-control" name="name" value="' . $row['name'] . '" readonly/>
                                                                              </div>
                                                                              <div class="form-group">
                                                                                  <label>Register Number</label>
                                                                                  <input type="text" class="form-control" name="users_id" value="' . $row['register_no'] . '" readonly/>
                                                                              </div>
                                                                              <div class="form-group">
                                                                                  <label>Department</label>
                                                                                  <input type="text" class="form-control" name="users_id" value="' . $row['dept'] . '" readonly/>
                                                                              </div>
                                                                              <div class="form-group">
                                                                                  <label>Year</label>
                                                                                  <input type="text" class="form-control" name="users_id" value="' . $row['year'] . '" readonly/>
                                                                              </div>
                                                                              <div class="form-group">
                                                                                  <label>User Email</label>
                                                                                  <input type="text" class="form-control" name="user_email" value="' . $row['email'] . '" readonly/>
                                                                              </div>
                                                                              <div class="form-group">
                                                                                  <label>Description</label>
                                                                                  <input type="text" class="form-control" name="users_id" value="' . $row['description'] . '" readonly/>
                                                                              </div>
                                                                          </div>
                                                                          <div class="modal-footer">
                                                                          ';
                                                                              echo '
                                                                              <button class="btn btn-default" type="button" data-dismiss="modal">Close</button>
                                                                          </div>
                                                                      </form>
                                                                  </div>
                                                              </div>
                                                          </div>';
                                                        }
                                                        else {
                                                    echo    '<tr class="even gradeC">' .
                                                                '<td>' . $row['timestamp'] . '</td>' .
                                                                '<td>' . $row['uid'] . '</td>' .
                                                                '<td>' . $row['email'] . '</td>' .
                                                                '<td>' . '</td>' .
                                                                '<td><button class="btn btn-primary" data-toggle="modal" data-target="#viewModal' . $row['uid'] . '">View</button></tr>' .
                                                            '</tr>';
                                                            echo    '<div class="modal fade" id="viewModal' . $row['uid'] . '" tabindex="-1" role="dialog" aria-hidden="true">
                                                                        <div class="modal-dialog">
                                                                            <div class="modal-content">
                                                                                <form action="../process/process_users.php" method="post">
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
                                                                                        <label>User ID</label>
                                                                                        <input type="text" class="form-control" name="users_id" value="' . $row['uid'] . '" readonly/>
                                                                                    </div>
                                                                                    <div>
                                                                                        <img src="/siic-2017-php/profiles/img/' . $row['avatar'] . '" width="160px" height= "auto" readonly/>
                                                                                    </div>
                                                                                        <div class="form-group">
                                                                                            <label>Name</label>
                                                                                            <input type="text" class="form-control" name="name" value="' . $row['name'] . '" readonly/>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label>Register Number</label>
                                                                                            <input type="text" class="form-control" name="users_id" value="' . $row['register_no'] . '" readonly/>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label>Department</label>
                                                                                            <input type="text" class="form-control" name="users_id" value="' . $row['dept'] . '" readonly/>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label>Year</label>
                                                                                            <input type="text" class="form-control" name="users_id" value="' . $row['year'] . '" readonly/>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label>User Email</label>
                                                                                            <input type="text" class="form-control" name="user_email" value="' . $row['email'] . '" readonly/>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label>Description</label>
                                                                                            <input type="text" class="form-control" name="users_id" value="' . $row['description'] . '" readonly/>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="modal-footer">
                                                                                    ';
                                                                                        echo '
                                                                                        <button class="btn btn-default" type="button" data-dismiss="modal">Close</button>
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>';

                                                }
                                                $i++;
                                            }
                                        }
                                    ?>
