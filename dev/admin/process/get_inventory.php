<?php
                                        // Item listing
                                        include '../process/connect.php';

                                        $sql = "SELECT * from inventory";
                                        $result = $conn->query($sql);

                                        if($result->num_rows > 0) {
                                            $i = 0;
                                            while($row = $result->fetch_assoc()) {
                                                if($i%2 == 0) {

                                                    echo    '<tr class="odd gradeX">' .
                                                                '<td>' . $row['item_id'] . '</td>' .
                                                                '<td>' . $row['item_name'] . '</td>' .
                                                                '<td>' . $row['item_quantity'] . '</td>' .
                                                                '<td>' . $row['item_availability'] . '</td>' .
                                                            '</tr>';
                                                } else {
                                                    echo    '<tr class="even gradeC">' .
                                                                '<td>' . $row['item_id'] . '</td>' .
                                                                '<td>' . $row['item_name'] . '</td>' .
                                                                '<td>' . $row['item_quantity'] . '</td>' .
                                                                '<td>' . $row['item_availability'] . '</td>' .
                                                            '</tr>';
                                                }
                                                $i++;
                                            }
                                        }
?>