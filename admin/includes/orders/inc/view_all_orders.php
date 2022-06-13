
                      <table class="table table-bordered table-hover">
                          <thead>
                            <tr>
                              <th>Id</th>
                              <th>Amount</th>
                              <th>Transaction</th>
                              <th>Status</th>
                              <th>Currency</th>
                              <th>Complete</th>
                              <th>Pending</th>
                              <th>Edit</th>
                              <th>Delete</th>
                            </tr>
                          </thead>
                          <tbody>
                              <?php
                                GetAllOrders();
                              ?>
                          </tbody>
                      </table>

                      <?php

                      
                      if (isset($_GET['change_to_complete'] )) {
                        $the_order_id = $_GET['change_to_complete'];

                        $query = "UPDATE tblorder SET order_status = 'complete' WHERE order_id = $the_order_id";

                        $complete_order_query = mysqli_query($connection, $query);
                        header("Location: orders.php");

                      }

                                  
                      if (isset($_GET['change_to_pending'] )) {
                        $the_order_id = $_GET['change_to_pending'];

                        $query = "UPDATE tblorder SET order_status = 'pending' WHERE order_id = $the_order_id";

                        $pending_order_query = mysqli_query($connection, $query);
                        header("Location: orders.php");

                    }


                      if (isset($_GET['delete'] )) {
                          $the_order_id = $_GET['delete'];

                          $query = "DELETE FROM tblorder WHERE order_id = {$the_order_id} ";

                          $delete_query = mysqli_query($connection, $query);
                          header("Location: orders.php");

                      }
                      ?>