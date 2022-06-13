<?php
    insert_user();
?>




<form  action="" method="post" enctype="multipart/form-data">

    <div class="form-group">
        <label for="title">Firstname</label>
        <input type="text" name="user_firstname" class="form-control">
    </div>

    <div class="form-group">
        <label for="title">Student number</label>
        <input type="text" name="studentnumber" class="form-control">
    </div>

    <div class="form-group">
        <label for="title">Username</label>
        <input type="text" name="username" class="form-control">
    </div>
    
<!-- <?php // TODO: NB ?> -->
    <div class="form-group">
        <label for="user_role">Role</label>
        <div class="form-group">
          <select name="user_role" id="">
            <option value="guest">Select Options</option>
            <option value="student">Student</option>
            <option value="guest">Guest</option>
          </select>
        </div>
    </div>

    <!-- <?php // TODO: NB ?> -->
    <div class="form-group">
        <label for="user_status">Status</label>
        <div class="form-group">
          <select name="user_status" id="">
            <option value="pending">Select Options</option>
            <option value="verified">Verified</option>
            <option value="pending">Pending</option>
          </select>
        </div>
    </div>

    <div class="form-group">
        <label for="title">Password</label>
        <input type="password" name="user_password" class="form-control">
    </div>


    <div class="form-group">
      <input type="submit" name="create_user" value="Add user" class="btn btn-primary">
    </div>

</form>
