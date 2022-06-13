
                      <table class="table table-bordered table-hover">
                          <thead>
                            <tr>
                              <th>Id</th>
                              <th>Firstname</th>
                              <th>Student number</th>
                              <th>Username</th>
                              <th>Role</th>
                              <th>Status</th>
                              <th>Student</th>
                              <th>Guest</th>
                              <th>Verified</th>
                              <th>Pending</th>
                              <th>Edit</th>
                              <th>Delete</th>
                            </tr>
                          </thead>
                          <tbody>
                              <?php
                                GetAllUsers();
                              ?>
                          </tbody>
                      </table>

                      <?php

                      if (isset($_GET['change_to_student'] )) {
                          $the_user_id = $_GET['change_to_student'];

                          $query = "UPDATE tbluser SET user_role = 'student' WHERE user_id = $the_user_id";

                          $approve_user_query = mysqli_query($connection, $query);

                          header("Location: users.php");

                      }


                      if (isset($_GET['change_to_guest'] )) {
                          $the_user_id = $_GET['change_to_guest'];

                          $query = "UPDATE tbluser SET user_role = 'guest' WHERE user_id = $the_user_id";

                          $unapprove_user_query = mysqli_query($connection, $query);
                          header("Location: users.php");

                      }

                      
                      if (isset($_GET['change_to_verify'] )) {
                        $the_user_id = $_GET['change_to_verify'];

                        $query = "UPDATE tbluser SET user_status = 'verified' WHERE user_id = $the_user_id";

                        $unapprove_user_query = mysqli_query($connection, $query);
                        header("Location: users.php");

                      }

                                  
                      if (isset($_GET['change_to_pending'] )) {
                        $the_user_id = $_GET['change_to_pending'];

                        $query = "UPDATE tbluser SET user_status = 'pending' WHERE user_id = $the_user_id";

                        $unapprove_user_query = mysqli_query($connection, $query);
                        header("Location: users.php");

                    }


                      if (isset($_GET['delete'] )) {
                          $the_user_id = $_GET['delete'];

                          $query = "DELETE FROM tbluser WHERE user_id = {$the_user_id} ";

                          $delete_query = mysqli_query($connection, $query);
                          header("Location: users.php");

                      }
                      ?>
