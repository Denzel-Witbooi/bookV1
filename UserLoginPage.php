<?php include "includes/login_header.php"; ?>
   
        <div class="container">
          <div class="forms-container">
            <div class="signin-signup">
                <!-- This is the sign in form -->
                <?php include "includes/login.php";?>

              <!-- Sign Up form -->
                <?php include "includes/register.php";?>
            </div>
          </div>
      
          <div class="panels-container">
            <div class="panel left-panel">
              <div class="content">
                <h3>New here ?</h3>
                <p>
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
                  ex ratione. Aliquid!
                </p>
                <button class="btn transparent" id="sign-up-btn">
                  Sign up
                </button>
              </div>
              <img src="img/log.svg" class="image" alt="" />
            </div>
            <div class="panel right-panel">
              <div class="content">
                <h3>One of us ?</h3>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
                  laboriosam ad deleniti.
                </p>
                <button class="btn transparent" id="sign-in-btn">
                  Sign in
                </button>
              </div>
              <img src="img/register.svg" class="image" alt="" />
            </div>
          </div>
        </div>
      
        <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
        <script src="js/app.js"></script>
      </body>
</html>