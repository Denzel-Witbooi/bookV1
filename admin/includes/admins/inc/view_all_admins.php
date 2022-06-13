
                      <table class="table table-bordered table-hover">
                          <thead>
                            <tr>
                              <th>Id</th>
                              <th>Username</th>
                              <th>Firstname</th>
                              <th>Lastname</th>
                              <th>Email</th>
                              <th>Role</th>
                              <!-- <th>Admin</th> -->
                              <th>Edit</th>
                              <th>Delete</th>
                            </tr>
                          </thead>
                          <tbody>
                              <?php
                                GetAllAdmins();
                              ?>
                          </tbody>
                      </table>

                      <?php

                      if (isset($_GET['change_to_admin'] )) {
                          $the_admin_id = $_GET['change_to_admin'];

                          $query = "UPDATE tbladmin SET admin_role = 'admin' WHERE admin_id = $the_admin_id";

                          $approve_admin_query = mysqli_query($connection, $query);

                          header("Location: admins.php");

                      }


                      if (isset($_GET['delete'] )) {
                          $the_admin_id = $_GET['delete'];

                          $query = "DELETE FROM tbladmin WHERE admin_id = {$the_admin_id} ";

                          $delete_query = mysqli_query($connection, $query);
                          header("Location: admins.php");

                      }
                      ?>
