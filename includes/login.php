<?php session_start(); ?>

<?php
  if (isset($_POST['login'])) {
      $username = $_POST['username'];
      $password = $_POST['password'];

      $username = mysqli_real_escape_string($connection, $username);
      $password = mysqli_real_escape_string($connection, $password);

      $query = "SELECT * FROM tbluser WHERE username = '{$username}'";
      $select_user_query = mysqli_query($connection, $query);
      if (!$select_user_query) {
        die("QUERY FAILED" . mysqli_error($connection));
      }

      while($row = mysqli_fetch_array($select_user_query)){
          $db_user_id = $row['user_id'];
          $db_username = $row['username'];
          $db_user_password = $row['user_password'];
          $db_user_firstname = $row['user_firstname'];
          $db_user_lastname = $row['user_lastname'];
          $db_user_role = $row['user_role'];
      }
      $password = crypt($password, $db_user_password);

      if ($username === $db_username && $password === $db_user_password && 'student' === $db_user_role ) {

        $_SESSION['username']   = $db_username;
        $_SESSION['user_role']  = $db_user_role;
          header("Location: splash.php");
      } else {
        header("Location: index.php");
      }

  }

?>
 
   <form action="" method="post" class="sign-in-form">
                <h2 class="title">Log in</h2>
                <div class="input-field">
                  <i class="fas fa-user"></i>
                  <input type="text" placeholder="Username" name="username" value="" required />
                </div>
                <div class="input-field">
                  <i class="fas fa-lock"></i>
                  <input type="password" placeholder="Password" name="password" value="" required />
                </div>
                <input type="submit" value="login" name="login" class="btn solid" />
                <p style="display: flex;justify-content: center;align-items: center;margin-top: 20px;">
                <a href="forgot-password.php" style="color: #4590ef;">Forgot Password?</a></p>
    </form>




