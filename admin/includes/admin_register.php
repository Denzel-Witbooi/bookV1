<?php  
  admin_register();
 ?>

<form action="" class="sign-up-form" method="post" autocomplete="on">
                <h2 class="title">Admin Register</h2>
                <div class="input-field">
                  <i class="fas fa-user"></i>
                  <input type="text" placeholder="Username" name="username" value="" required />
                </div>
                <div class="input-field">
                  <i class="fas fa-envelope"></i>
                  <input type="emali" placeholder="Admin Email" name="email" value="" required />
                </div>
                <div class="input-field">
                  <i class="fas fa-lock"></i>
                  <input type="password" placeholder="Password" name="password" value="" required />
                </div>
                <input type="submit" class="btn" name="signup" value="Sign up" />
</form>