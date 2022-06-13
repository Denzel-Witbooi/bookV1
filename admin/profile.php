<?php include "includes/admin_header.php"; ?>

<?php

  if (isset($_SESSION['username'])) {
      $username = $_SESSION['username'];

      $query = "SELECT * FROM tbladmin WHERE username = '{$username}' ";

      $select_user_profile_query = mysqli_query($connection, $query);

      while ($row = mysqli_fetch_array($select_user_profile_query)) {
        $admin_id = $row['admin_id'];
        $username = $row['username'];
        $admin_password = $row['admin_password'];
        $admin_firstname = $row['admin_firstname'];
        $admin_lastname = $row['admin_lastname'];
        $admin_email = $row['admin_email'];
        $admin_role = $row['admin_role'];
      }

  }

?>

<?php

    if (isset($_POST['update_admin'])) {

      $username = $_POST['username'];
      $admin_password = $_POST['admin_password'];
      $admin_firstname = $_POST['admin_firstname'];
      $admin_lastname = $_POST['admin_lastname'];
      $admin_email = $_POST['admin_email'];
      $admin_role = $_POST['admin_role'];
  
      $salt = '$1$rasmusle$';
      $hashed_password = crypt($admin_password, $salt);
  
      $query = "UPDATE tbladmin SET ";
      $query .="admin_password = '{$hashed_password}', ";
      $query .="admin_firstname   =  '{$admin_firstname}', ";
      $query .="admin_lastname = '{$admin_lastname}', ";
      $query .="admin_role = '{$admin_role}', ";
      $query .="admin_email   = '{$admin_email}' ";
  
      $query .= "WHERE username = {$username} ";
  
      $edit_admin_query = mysqli_query($connection,$query);
  
      confirmQuery($edit_admin_query);
  
      echo  "<div class='alert alert-success' role='alert'>
      Admin Updated: <a href='admins.php'>Edit More Admin's</a>
      <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
      </button>
      </div>";

  }


?>


    <div id="wrapper">

<!-- Navigation -->
  <?php include "includes/admin_navigation.php"; ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                      <h1 class="page-header">
                          Profile
                      </h1>


                      <form  action="" method="post" enctype="multipart/form-data">
  <div class="form-group">
      <label for="title">Firstname</label>
      <input type="text" value="<?php echo $admin_firstname; ?>" name="admin_firstname" class="form-control">
  </div>

  <div class="form-group">
      <label for="title">Lastname</label>
      <input type="text" value="<?php echo $admin_lastname; ?>"  name="admin_lastname" class="form-control">
  </div>
<!-- <?php // TODO: NB ?> -->
<div class="form-group">
    <label for="admin_role">Role</label>
    <div class="form-group">

      <select name="admin_role" id="admin_role">
          <option value="<?php echo $admin_role; ?>"> Select Option</option>
        <?php
              echo "<option value='admin'>admin</option>";
              echo " <option value='pending'>pending</option>";
        ?>

      </select>
    </div>
</div>

  <div class="form-group">
      <label for="title">Username</label>
      <input type="text" value="<?php echo $username; ?>"  name="username" class="form-control">
  </div>

  <div class="form-group">
      <label for="title">Email</label>
      <input type="text" value="<?php echo $admin_email; ?>"  name="admin_email" class="form-control">
  </div>

  <div class="form-group">
      <label for="title">Password</label>
      <input type="password" value="<?php echo $admin_password ?>"  name="admin_password" class="form-control">
  </div>

    <div class="form-group">
      <input type="submit" name="update_admin" value="Update Admin" class="btn btn-primary">
    </div>

</form>


                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->



  <?php include "includes/admin_footer.php"; ?>
