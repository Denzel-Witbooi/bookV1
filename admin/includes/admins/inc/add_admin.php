<?php
    insert_admin();
?>




<form  action="" method="post" enctype="multipart/form-data">

    <div class="form-group">
        <label for="title">Firstname</label>
        <input type="text" name="admin_firstname" class="form-control">
    </div>

    <div class="form-group">
        <label for="title">Lastname</label>
        <input type="text" name="admin_lastname" class="form-control">
    </div>
<!-- <?php // TODO: NB ?> -->
    <div class="form-group">
        <label for="admin_role">Role</label>
        <div class="form-group">
          <select name="admin_role" id="">

            <option value="admin">Select Options</option>
            <option value="admin">Admin</option>

          </select>
        </div>
    </div>

    <div class="form-group">
        <label for="title">Username</label>
        <input type="text" name="username" class="form-control">
    </div>

    <div class="form-group">
        <label for="title">Email</label>
        <input type="text" name="admin_email" class="form-control">
    </div>

    <div class="form-group">
        <label for="title">Password</label>
        <input type="text" name="admin_password" class="form-control">
    </div>


    <div class="form-group">
      <input type="submit" name="create_admin" value="Add admin" class="btn btn-primary">
    </div>

</form>
