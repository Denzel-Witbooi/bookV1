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
                          Admins
                      </h1>
                      <?php      
                    if (isset($_GET['source'])) {
                              $source = $_GET['source'];
                            } else {
                              $source = '';
                            }
                            switch ($source) {
                              case 'add_admin':
                                  include "includes/admins/inc/add_admin.php";
                                break;
                              case 'edit_admin':
                                  include "includes/admins/inc/edit_admin.php";
                                break;
                              default:
                                  include "includes/admins/inc/view_all_admins.php";
                                break;
                            }
                        ?>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
<?php include "includes/admin_footer.php"; ?>