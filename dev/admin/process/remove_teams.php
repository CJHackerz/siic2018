<?php
    require 'connect.php';
    session_start();

    if($_SESSION['role'] == 1 && isset($_SESSION['admin'])) {
        if($_SERVER["REQUEST_METHOD"] == "GET") {
            if(isset($_GET["id"])) {
                $team_id = $_GET['id'];
                // Sanitize vars
                $team_id = str_replace( array( '..', '/', '\\', ':' ), '', $team_id );

                $sql = "SELECT * from teams where team_id = '$team_id'";

                $result = $conn->query($sql);
                if($result->num_rows > 0) {
                    $image = $row['logo'];

                    $sql = "DELETE from teams where team_id = '$team_id'";

                    if($conn->query($sql)) {
                        chown(realpath('../../../teams/img/' . $image), 666);
                        if (!file_exists(realpath('../../../teams/img/' . $image))) {
                            echo 'Teams removed from database but unable to find image on server';
                            die();
                        } else {
                            if(unlink(realpath('../../../teams/img/' . $image))) {
                                echo 'Team removed successfully';
                                die();
                            } else {
                                echo 'Team removed but unable to delete image';
                                die();
                            }
                        }
                    }
                } else {
                    echo 'Invalid id. Contact super admin';
                }
            }
        }
    } else {
        echo "Action not allowed for you. Contact Super admin";
        die();
    }

?>
