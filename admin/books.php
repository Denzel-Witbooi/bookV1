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
                          Books
                      </h1>
                      <?php      
                    if (isset($_GET['source'])) {
                              $source = $_GET['source'];
                            } else {
                              $source = '';
                            }
                            switch ($source) {
                              case 'add_book':
                                  include "includes/books/inc/add_book.php";
                                break;
                              case 'edit_books':
                                  include "includes/books/inc/edit_books.php";
                                break;
                              default:
                                  include "includes/books/inc/view_all_books.php";
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