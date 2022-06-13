
<?php
//GetAllPosts();
if(isset($_GET['u_id'])){

  $the_user_id =  $_GET['u_id'];
  
  }
  $query = "SELECT * FROM tbluser WHERE user_id = $the_user_id  ";
  $select_users_by_id = mysqli_query($connection,$query);
  
  while($row = mysqli_fetch_assoc($select_users_by_id)) {
        $user_id = $row['user_id'];
        $user_firstname = $row['user_firstname'];
        $studentnumber = $row['studentnumber'];
        $username = $row['username'];
        $user_role = $row['user_role'];
        $user_password= $row['user_password'];
        $user_status= $row['user_status'];
      }
  
    update_user($the_user_id);
?>



<form  action="" method="post" enctype="multipart/form-data">

    <div class="form-group">
        <label for="title">Firstname</label>
        <input type="text" value="<?php echo $user_firstname; ?>" name="user_firstname" class="form-control">
    </div>

    <div class="form-group">
        <label for="title">Student number</label>
        <input type="text" value="<?php echo $studentnumber; ?>" name="studentnumber" class="form-control">
    </div>

    <div class="form-group">
        <label for="title">Username</label>
        <input type="text" value="<?php echo $username; ?>" name="username" class="form-control">
    </div>
    

<!-- <?php // TODO: NB ?> -->
<div class="form-group">
    <label for="user_role">Role</label>
    <div class="form-group">

      <select name="user_role" id="user_role">
          <option value="<?php echo $user_role; ?>"><?php echo $user_role; ?></option>
        <?php
            if ($user_role == 'student') {
              echo " <option value='guest'>Guest</option>";
            } else {
              echo "<option value='student'>Student</option>";
            }
        ?>

      </select>
    </div>
</div>


    <div class="form-group">
      <label for="user_status">Status</label>
      <div class="form-group">

      <select name="user_status" id="user_status">
          <option value="<?php echo $user_status; ?>"><?php echo $user_status; ?></option>
        <?php
            if ($user_status == 'verified') {
              echo " <option value='pending'>Pending</option>";
            } else {
              echo "<option value='verified'>Verified</option>";
            }
        ?>

      </select>
    </div>
</div>

    <div class="form-group">
        <label for="title">Password</label>
        <input type="password" value="<?php echo $user_password; ?>" name="user_password" class="form-control">
    </div>


    <div class="form-group">
      <input type="submit" name="update_user" value="Update user" class="btn btn-primary">
    </div>

</form>
