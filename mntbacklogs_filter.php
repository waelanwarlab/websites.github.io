


<?php 
require 'dbconn.php';
$deptname=$_POST['deptid'];
                                    //$dept=$_SESSION['dept'];
                                    $query="SELECT * from mntrequests WHERE req_state='ToDo' AND reqdept='$deptname'";
                                    $result=mysqli_query($conn, $query);
                                    if(mysqli_num_rows($result) > 0)
                                        {
                                            foreach($result as $row)
                                                {
                                                    ?>
                                                        <tr>
                                                            <td><?= $row['mntreqid']; ?></td>
                                                            <td><?= $row['reqdept']; ?></td>
                                                            <td><?= $row['mntreqtime']; ?></td>
                                                            <td><?= $row['requesttype']; ?></td>
                                                            <td><?= $row['assetname']; ?></td>
                                                            <td><?= $row['servicefor']; ?></td>
                                                            <td><?= $row['problemdescr']; ?></td>
                                                            <td><?= $row['importancelevel']; ?></td>
                                                            <td>
                                                                <!-- <a href="mntrequest_edit.php?<?=$row['mntreqid'];?>" class="btn btn-success btn-sm">Edit</a>   -->
                                                                <a href="mntbacklogs_actions.php" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#SolvedModal">Solved</a>
                                                                <a href="mntbacklogs_actions.php" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#RequisitionModal">Req.</a>
                                                                <a href="mntbacklogs_actions.php" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#OutsourcingModal">Ext.</a>
                                                                <a href="mntbacklogs_actions.php" class="btn btn-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#ArchiveModal" >Arch</a>
                                                            </td>
                                                            
                                                        </tr>
                                                    <?php
                                                }

                                        }
                                    else
                                        {
                                        echo "<h5> No Records Found! </h5>";
                                        exit;
                                        }

                                    ?>