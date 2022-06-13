<?php include "includes/admin_header.php"; ?>

    <div id="wrapper">

<!-- Navigation -->
  <?php include "includes/admin_navigation.php"; ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">

                        <h1 class="page-header">
                            WELCOME TO ADMIN
                            <small><?php  echo $_SESSION['username']; ?></small>
                        </h1>

                    </div>
                </div>
                <!-- /.row -->

          <!-- /.row -->
         <div class="row">
             <div class="col-lg-3 col-md-6">
                 <div class="panel panel-primary">
                     <div class="panel-heading">
                         <div class="row">
                             <div class="col-xs-3">
                                 <i class="fa fa-file-text fa-5x"></i>
                             </div>
                             <div class="col-xs-9 text-right">
                             <?php
                                $query = "SELECT * FROM tbluser WHERE user_role = 'student'";
                                $select_all_students = mysqli_query($connection, $query);
                                $student_count = mysqli_num_rows($select_all_students);
                                echo "<div class='huge'>{$student_count}</div>";
                                ?>
                                 <div>Students</div>
                             </div>
                         </div>
                     </div>
                     <a href="users.php">
                         <div class="panel-footer">
                             <span class="pull-left">View Details</span>
                             <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                             <div class="clearfix"></div>
                         </div>
                     </a>
                 </div>
             </div>
             <div class="col-lg-3 col-md-6">
                 <div class="panel panel-green">
                     <div class="panel-heading">
                         <div class="row">
                             <div class="col-xs-3">
                                 <i class="fa fa-comments fa-5x"></i>
                             </div>
                             <div class="col-xs-9 text-right">
                             <?php
                                    $query = "SELECT * FROM tblorder WHERE order_status = 'pending'";
                                    $select_all_orders_pending = mysqli_query($connection, $query);
                                    $pending_orders_count = mysqli_num_rows($select_all_orders_pending);
                                    echo "<div class='huge'>{$pending_orders_count}</div>";
                                ?>
                               <div>Pending Orders</div>
                             </div>
                         </div>
                     </div>
                     <a href="orders.php">
                         <div class="panel-footer">
                             <span class="pull-left">View Details</span>
                             <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                             <div class="clearfix"></div>
                         </div>
                     </a>
                 </div>
             </div>
             <div class="col-lg-3 col-md-6">
                 <div class="panel panel-yellow">
                     <div class="panel-heading">
                         <div class="row">
                             <div class="col-xs-3">
                                 <i class="fa fa-user fa-5x"></i>
                             </div>
                             <div class="col-xs-9 text-right">
                             <?php
                                  $query = "SELECT * FROM tblbook";
                                  $select_all_books = mysqli_query($connection, $query);
                                  $book_count = mysqli_num_rows($select_all_books);
                                 echo "<div class='huge'>{$book_count}</div>";
                               ?>
                              <div> Books</div>
                             </div>
                         </div>
                     </div>
                     <a href="books.php">
                         <div class="panel-footer">
                             <span class="pull-left">View Details</span>
                             <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                             <div class="clearfix"></div>
                         </div>
                     </a>
                 </div>
             </div>
             <div class="col-lg-3 col-md-6">
                 <div class="panel panel-red">
                     <div class="panel-heading">
                         <div class="row">
                             <div class="col-xs-3">
                                 <i class="fa fa-list fa-5x"></i>
                             </div>
                             <div class="col-xs-9 text-right">
                             <?php
                                  $query = "SELECT * FROM tbladmin WHERE admin_role = 'pending' ";
                                  $select_all_pending_admins = mysqli_query($connection, $query);
                                  $pending_admin_count = mysqli_num_rows($select_all_pending_admins);
                                 echo "<div class='huge'>{$pending_admin_count}</div>";
                               ?>
                                  <div>Pending Admins</div>
                             </div>
                         </div>
                     </div>
                     <a href="admins.php">
                         <div class="panel-footer">
                             <span class="pull-left">View Details</span>
                             <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                             <div class="clearfix"></div>
                         </div>
                     </a>
                 </div>
             </div>
         </div>
        <!-- /.row -->

        <?php

        // Orders COUNT
        $query = "SELECT * FROM tblorder WHERE order_status = 'pending'";
        $select_all_orders_pending = mysqli_query($connection, $query);
        $pending_orders_count = mysqli_num_rows($select_all_orders_pending);

        // Students COUNT
        $query = "SELECT * FROM tbluser WHERE user_role = 'student'";
        $select_all_students = mysqli_query($connection, $query);
        $student_count = mysqli_num_rows($select_all_students);

        // Books COUNT
        $query = "SELECT * FROM tblbook";
        $select_all_books = mysqli_query($connection, $query);
        $book_count = mysqli_num_rows($select_all_books);

        // Admin COUNT
        $query = "SELECT * FROM tbladmin WHERE admin_role = 'pending' ";
        $select_all_pending_admins = mysqli_query($connection, $query);
        $pending_admin_count = mysqli_num_rows($select_all_pending_admins);

         ?>


          <div class="row">
            <script type="text/javascript">
              google.charts.load('current', {'packages':['corechart', 'bar']});
              google.charts.setOnLoadCallback(drawStuff);

              function drawStuff() {

                var button = document.getElementById('change-chart');
                var chartDiv = document.getElementById('chart_div');

                var data = google.visualization.arrayToDataTable([
                  ['Data', 'Count'],

                  <?php

                      $element_text = ['Students','Pending Orders','All Books', "Pending admins" ];
                      $element_count = [$student_count,$pending_orders_count,$book_count, $pending_admin_count];

                      for ($i=0; $i < 8; $i++) {
                          echo "['{$element_text[$i]}'" . "," . "{$element_count[$i]}],";
                      }

                  ?>
                ]);

                var materialOptions = {
                  width: 'auto',
                  chart: {
                    title: '',
                    subtitle: ''
                  },
                  series: {
                    0: { axis: 'distance' }, // Bind series 0 to an axis named 'distance'.
                    1: { axis: 'brightness' } // Bind series 1 to an axis named 'brightness'.
                  },
                  axes: {
                    y: {
                      distance: {label: 'Details'}, // Left y-axis.
                      brightness: {side: 'right', label: 'apparent magnitude'} // Right y-axis.
                    }
                  }
                };

                  var classicOptions = {
                    width: 900,
                    series: {
                      0: {targetAxisIndex: 0},
                      1: {targetAxisIndex: 1}
                    },
                    title: '',
                    vAxes: {
                      // Adds titles to each axis.
                      0: {title: ''},
                      1: {title: ''}
                    }
                  };

                    function drawMaterialChart() {
                      var materialChart = new google.charts.Bar(chartDiv);
                      materialChart.draw(data, google.charts.Bar.convertOptions(materialOptions));
                      button.innerText = 'Change to Classic';
                      button.onclick = drawClassicChart;
                    }

                    function drawClassicChart() {
                      var classicChart = new google.visualization.ColumnChart(chartDiv);
                      classicChart.draw(data, classicOptions);
                      button.innerText = 'Change to Material';
                      button.onclick = drawMaterialChart;
                    }

                      drawMaterialChart();
                };
    </script>
    <div id="chart_div" style="width: 'auto'; height: 500px;"></div>
          </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->



  <?php include "includes/admin_footer.php"; ?>
