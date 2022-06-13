
<?php  

    if (isset($_POST['signup'])) {
       $username            = $_POST['username'];
       $studentnumber       = $_POST['studentnumber'];
       $password            = $_POST['password'];

       if (!empty($username) && !empty($studentnumber) && !empty($password)) {
        $username    = mysqli_real_escape_string($connection,$username);
        $studentnumber       = mysqli_real_escape_string($connection,$studentnumber);
        $password    = mysqli_real_escape_string($connection,$password);
         
        $salt = '$1$rasmusle$';
        $password = crypt($password, $salt);
        
        $query = "INSERT INTO tbluser (username, studentnumber, user_password, user_role, user_status) ";
        $query .= "VALUES('{$username}','{$studentnumber}', '{$password}', 'pending', 'pending' )";
        $register_user_query = mysqli_query($connection, $query);
        if (!$register_user_query) {
            die('QUERY FAILED '. mysqli_error($connection) . ' '. 
            mysqli_errno($connection));
        }
            $message = "<div class='alert alert-success' role='alert'>
                            Your registration has been submitted
                        </div>";
       } else { 

            $message = "<div class='alert alert-danger' role='alert'>
                           Fields cannot be empty
                        </div>";
       }
    } else {
         $message = "";
    }
 ?>

<form action="" class="sign-up-form" method="post" autocomplete="on">
              <?php echo $message; ?>
                <h2 class="title">Register</h2>
                <div class="input-field">
                  <i class="fas fa-user"></i>
                  <input type="text" placeholder="Username" name="username" value="" required />
                </div>
                <div class="input-field">
                  <i class="fas fa-envelope"></i>
                  <input type="text" placeholder="Student Number" name="studentnumber" value="" required />
                </div>
                <div class="input-field">
                  <i class="fas fa-lock"></i>
                  <input type="password" placeholder="Password" name="password" value="" required />
                </div>
                <input type="submit" class="btn" name="signup" value="Sign up" />
</form>