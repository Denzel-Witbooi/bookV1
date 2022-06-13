
<?php 

if (isset($_POST['checkBoxArray'])) {

  foreach ($_POST['checkBoxArray'] as $bookValueId) {
    $bulk_options = $_POST['bulk_options'];
      switch ($bulk_options) {
            case 'delete':
                    delete_mulit_books($bookValueId);
              break;
              case 'clone':
                    clone_books($bookValueId);
                break;
      }
  }
}

?>


<form action="" method='post'>               
    <table class="table table-bordered table-hover">
        <div id="bulkOptionsContainer" class="col-xs-4" style="padding: 0px">

          <select class="form-control" name="bulk_options" id="">
            <option value="">Select Option</option>
            <option value="delete">Delete</option>
            <option value="clone">Clone</option>
          </select>
        </div>

        <div class="col-xs-4">
          <input type="submit" name="submit" class="btn btn-success" value="Apply">
          <a class="btn btn-primary" href="books.php?source=add_book">Add new</a>
        </div>

                        <thead>
                          <tr>
                            <th><input id="selectAllBoxes" type="checkbox"></th>
                            <th>Id</th>
                            <th>Title</th>
                            <th>Price (R)</th>
                            <th>Description</th>
                            <th>Short Description</th>
                            <th>Image</th>
                            <th>Edit</th>
                            <th>Delete</th>
                          </tr>
                        </thead>
                        <tbody>
                            <?php
                              GetAllBooks();
                            ?>
                        </tbody>
                    </table>
</form>       
                    <?php
                        if (isset($_GET['delete'] )) {
                            $the_book_id = $_GET['delete'];

                            $query = "DELETE FROM tblbook WHERE book_id = {$the_book_id} ";

                            $delete_query = mysqli_query($connection, $query);

                            header("Location: books.php");

                        }
                    ?>
