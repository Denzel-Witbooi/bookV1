
<?php
//GetAllPosts();
if(isset($_GET['a_id'])){

$the_admin_id =  $_GET['a_id'];

}
$query = "SELECT * FROM tbladmin WHERE admin_id = $the_admin_id  ";
$select_admins_by_id = mysqli_query($connection,$query);

while($row = mysqli_fetch_assoc($select_admins_by_id)) {
      $admin_id = $row['admin_id'];
      $username = $row['username'];
      $admin_password = $row['admin_password'];
      $admin_firstname = $row['admin_firstname'];
      $admin_lastname = $row['admin_lastname'];
      $admin_email = $row['admin_email'];
      $admin_role = $row['admin_role'];
     }

     update_admin($the_admin_id);
 
?>




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
