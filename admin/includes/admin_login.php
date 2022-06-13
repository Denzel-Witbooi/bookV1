<?php 
  admin_login();
?>
 
   <form action="" method="post" class="sign-in-form">
                <h2 class="title"> Admin Log in</h2>
                <div class="input-field">
                  <i class="fas fa-user"></i>
                  <input type="email" placeholder="Email" name="email" value="" required />
                </div>
                <div class="input-field">
                  <i class="fas fa-lock"></i>
                  <input type="password" placeholder="Password" name="password" value="" required />
                </div>
                <input type="submit" value="login" name="login" class="btn solid" />
                <p style="display: flex;justify-content: center;align-items: center;margin-top: 20px;">
                <a href="forgot-password.php" style="color: #4590ef;">Forgot Password?</a></p>
    </form>
