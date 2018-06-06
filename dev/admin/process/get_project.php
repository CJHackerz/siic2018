<?php
    

                                        // Item listing
                                        include '../process/connect.php';

                                        $sql = "SELECT * from project";
                                        $result = $conn->query($sql);

                                        if($result->num_rows > 0) {
                                            $i = 0;
                                            while($row = $result->fetch_assoc()) {
                                                if($i%2 == 0) {

                                                    echo    '<tr class="odd gradeX">' .
                                                                '<td>' . $row['timestamp'] . '</td>' .
                                                                '<td>' . $row['project_id'] . '</td>' .
                                                                '<td>' . $row['project_title'] . '</td>' .
                                                                '<td>' . $row['user'] . '</td>' .
                                                                '<td>' . $row['team'] . '</td>' .
                                                                '<td>' . $row['project_status'] . '</td>' .
                                                                '<td><button class="btn btn-primary" data-toggle="modal" data-target="#viewModal' . $row['project_id'] . '">Views</button></tr>' .
                                                            '</tr>';

                                                    echo    '<div class="modal fade" id="viewModal' . $row['project_id'] . '" tabindex="-1" role="dialog" aria-hidden="true">
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
                                                                                <div class="form-group">
                                                                                    <label>Project ID</label>
                                                                                    <input type="text" class="form-control" name="project_id" value="' . $row['project_id'] . '" readonly/>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label>User Email</label>
                                                                                    <input type="text" class="form-control" name="user_email" value="' . $row['user'] . '" readonly/>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label>Title</label>
                                                                                    <input type="text" class="form-control" name="project_title" value="' . $row['project_title'] . '" readonly/>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label>Report</label>
                                                                                    <textarea class="form-control" name="project_report" readonly>' . $row['project_report'] . '</textarea>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label>Requirement</label>
                                                                                    <textarea class="form-control" name="project_requirement" readonly>' . $row['project_requirement'] . '</textarea>
                                                                                </div>
                                                                            </div>
                                                                            <div class="modal-footer">
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
                                                } else {
                                                    echo    '<tr class="even gradeC">' .
                                                                '<td>' . $row['timestamp'] . '</td>' .
                                                                '<td>' . $row['project_id'] . '</td>' .
                                                                '<td>' . $row['project_title'] . '</td>' .
                                                                '<td>' . $row['user'] . '</td>' .
                                                                '<td>' . $row['team'] . '</td>' .
                                                                '<td>' . $row['project_status'] . '</td>' .
                                                                '<td><button class="btn btn-primary" data-toggle="modal" data-target=""#viewModal' . $row['project_id'] . '">Views</button></tr>' .
                                                            '</tr>';

                                                    
                                                    echo    '<div class="modal fade" id="viewModal' . $row['project_id'] . '" tabindex="-1" role="dialog" aria-hidden="true">
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
                                                                                <div class="form-group">
                                                                                    <label>Project ID</label>
                                                                                    <input type="text" class="form-control" name="project_id" value="' . $row['project_id'] . '" readonly/>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label>User Email</label>
                                                                                    <input type="text" class="form-control" name="user_email" value="' . $row['user'] . '" readonly/>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label>Title</label>
                                                                                    <input type="text" class="form-control" name="project_title" value="' . $row['project_title'] . '" readonly/>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label>Report</label>
                                                                                    <textarea class="form-control" name="project_report" readonly>' . $row['project_report'] . '</textarea>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label>Requirement</label>
                                                                                    <textarea class="form-control" name="project_requirement" readonly>' . $row['project_requirement'] . '</textarea>
                                                                                </div>
                                                                            </div>
                                                                            <div class="modal-footer">
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
                                                                                <button class="btn btn-default" type="button" data-dismiss="modal">Clse</button>
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