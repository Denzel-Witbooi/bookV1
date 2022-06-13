<?php
function confirmQuery($result)
{
  global $connection;
    if (!$result) {
      die("QUERY FAILED ." . mysqli_error($connection));
    }
}
//Admin login
function admin_login()
{
  global $connection;
  if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $email = mysqli_real_escape_string($connection, $email);
    $password = mysqli_real_escape_string($connection, $password);

    $query = "SELECT * FROM tbladmin WHERE admin_email = '{$email}'";
    $select_user_query = mysqli_query($connection, $query);
    if (!$select_user_query) {
      die("QUERY FAILED" . mysqli_error($connection));
    }

    while($row = mysqli_fetch_array($select_user_query)){
        $db_admin_id = $row['admin_id'];
        $db_username = $row['username'];
        $db_admin_firstname = $row['admin_firstname'];
        $db_admin_lastname = $row['admin_lastname'];
        $db_admin_email = $row['admin_email'];
        $db_admin_password = $row['admin_password'];
        $db_admin_role = $row['admin_role'];
    }
    $password = crypt($password, $db_admin_password);

    if ($email === $db_admin_email && $password === $db_admin_password && $db_admin_role === 'admin' ) {

      $_SESSION['username']     = $db_username;
      $_SESSION['email']        = $db_admin_email;
      $_SESSION['admin_role']   = $db_admin_role;
        header("Location: admin_dashboard.php");
    } else {
      header("Location: ../index.php");
      echo "<div class='alert alert-success' role='alert'>
              Your registration has been submitted
            </div>";
     
    }

  }
}

//Admin Register
function admin_register()
{
  global $connection;
  if (isset($_POST['signup'])) {
    $username            = $_POST['username'];
    $admin_email         = $_POST['email'];
    $admin_password      = $_POST['password'];

    if (!empty($username) && !empty($admin_email) && !empty($admin_password)) {
     $username                   = mysqli_real_escape_string($connection,$username);
     $admin_email                = mysqli_real_escape_string($connection,$admin_email);
     $admin_password             = mysqli_real_escape_string($connection,$admin_password);
      
     $salt = '$1$rasmusle$';
     $hash_admin_password = crypt($admin_password, $salt);
     
     $query = "INSERT INTO tbladmin (username, admin_email, admin_password, admin_role) ";
     $query .= "VALUES('{$username}','{$admin_email}', '{$hash_admin_password}', 'pending')";
     $register_user_query = mysqli_query($connection, $query);
     if (!$register_user_query) {
         die('QUERY FAILED '. mysqli_error($connection) . ' '. 
         mysqli_errno($connection));
     }
         echo "<div class='alert alert-success' role='alert'>
                         Your registration has been submitted
                     </div>";
    } else { 

        echo "<div class='alert alert-danger' role='alert'>
                        Fields cannot be empty
                     </div>";
    }
 } else {
      $message = "";
 }
}

// USERS FUNCTIONS
function insert_user()
{
  global $connection;
  if (isset($_POST['create_user'])) {
    $user_firstname = $_POST['user_firstname'];
    $studentnumber = $_POST['studentnumber'];
    $username = $_POST['username'];
    $user_role = $_POST['user_role'];
    $user_password = $_POST['user_password'];
    $user_status = $_POST['user_status'];


    $query = "INSERT INTO tbluser(user_firstname, 
                studentnumber ,username , user_role,
                user_password, user_status) ";

   $salt = '$1$rasmusle$';
   $hashed_password = crypt($user_password, $salt);

    $query .= "VALUES( '{$user_firstname}','{$studentnumber}', '{$username}', '{$user_role}','{$hashed_password}', '{$user_status}' ) ";

              $create_user_query = mysqli_query($connection, $query);
              confirmQuery($create_user_query);

          echo  "<div class='alert alert-success' role='alert'>
                      User Created: <a href='users.php'>View Users</a>
                      <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                          <span aria-hidden='true'>&times;</span>
                      </button>
                  </div>";
}
}
function update_user($the_user_id)
{
  global $connection;

        if (isset($_POST['update_user'])) {
    
          $user_firstname = $_POST['user_firstname'];
          $studentnumber = $_POST['studentnumber'];
          $username = $_POST['username'];
          $user_role = $_POST['user_role'];
          $user_status= $_POST['user_status'];
          $user_password= $_POST['user_password'];
    
    
            $salt = '$1$rasmusle$';
            $hashed_password = crypt($user_password, $salt);
          
    
          $query = "UPDATE tbluser SET ";
          $query .="user_firstname   =  '{$user_firstname}', ";
          $query .="studentnumber  = '{$studentnumber}', ";
          $query .="username  = '{$username}', ";
          $query .="user_role  = '{$user_role}', ";
          $query .="user_password = '{$hashed_password}', ";
          $query .="user_status  = '{$user_status}' ";
    
          $query .= "WHERE user_id = {$the_user_id} ";
    
          $edit_user_query = mysqli_query($connection,$query);
    
          confirmQuery($edit_user_query);
    
          echo  "<div class='alert alert-success' role='alert'>
          User Updated:  <a href='users.php'>Edit More Users</a>
          <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
          </button>
          </div>";
    
      }
}
function getAllUsers()
{
  global $connection;
  $query = "SELECT * FROM tbluser";
  $select_users = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($select_users)) {
          $user_id = $row['user_id'];
          $user_firstname = $row['user_firstname'];
          $studentnumber = $row['studentnumber'];
          $username = $row['username'];
          $user_role = $row['user_role'];
          $user_status= $row['user_status'];

          echo  "<td>{$user_id}</td>";
          echo  "<td>{$user_firstname}</td>";
          echo  "<td>{$studentnumber}</td>";
          echo  "<td>{$username}</td>";
          echo  "<td>{$user_role}</td>";
          echo  "<td>{$user_status}</td>";

          // & - divide values to add more parameters
          echo  "<td><a href='users.php?change_to_student={$user_id}'>Student</a></td>";
          echo  "<td><a href='users.php?change_to_guest={$user_id}'>Guest</a></td>";
          echo  "<td><a href='users.php?change_to_verify={$user_id}'>Verified</a></td>";
          echo  "<td><a href='users.php?change_to_pending={$user_id}'>Pending</a></td>";
          echo  "<td><a href='users.php?source=edit_user&u_id={$user_id}'>Edit</a></td>";
          echo  "<td><a onClick=\"javascript: return confirm('Are you sure you want to delete'); \" href='users.php?delete=$user_id'>Delete</a></td>";
          echo "</tr>";
    }
}

// ADMINS FUNCTIONS
function insert_admin()
{
  global $connection;
  if (isset($_POST['create_admin'])) {
    $admin_firstname = $_POST['admin_firstname'];
    $admin_lastname = $_POST['admin_lastname'];
    $admin_role = $_POST['admin_role'];
    $username = $_POST['username'];
    $admin_email = $_POST['admin_email'];
    $admin_password = $_POST['admin_password'];

    $query = "INSERT INTO tbladmin(username, admin_firstname, admin_lastname, admin_email,
              admin_password, admin_role) ";

    
   $salt = '$1$rasmusle$';
   $hashed_password = crypt($admin_password, $salt);

    $query .= "VALUES( '{$username}','{$admin_firstname}', '{$admin_lastname}', '{$admin_email}','{$hashed_password}','{$admin_role}' ) ";

              $create_admin_query = mysqli_query($connection, $query);
              confirmQuery($create_admin_query);

          echo  "<div class='alert alert-success' role='alert'>
                      User Created: <a href='admins.php'>View Users</a>
                      <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                          <span aria-hidden='true'>&times;</span>
                      </button>
                  </div>";
  }
}

function update_admin($the_admin_id)
{
  global $connection;
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
    $query .="username  = '{$username}', ";
    $query .="admin_password = '{$hashed_password}', ";
    $query .="admin_firstname   =  '{$admin_firstname}', ";
    $query .="admin_lastname = '{$admin_lastname}', ";
    $query .="admin_role = '{$admin_role}', ";
    $query .="admin_email   = '{$admin_email}' ";

    $query .= "WHERE admin_id = {$the_admin_id} ";

    $edit_admin_query = mysqli_query($connection,$query);

    confirmQuery($edit_admin_query);

    echo  "<div class='alert alert-success' role='alert'>
    Admin Updated: <a href='admins.php'>Edit More Admin's</a>
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        <span aria-hidden='true'>&times;</span>
    </button>
    </div>";
  }
}

function getAllAdmins()
{
  global $connection;
  $query = "SELECT * FROM tbladmin";
  $select_admins = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($select_admins)) {
          $admin_id = $row['admin_id'];
          $username = $row['username'];
          $admin_firstname = $row['admin_firstname'];
          $admin_lastname = $row['admin_lastname'];
          $admin_email = $row['admin_email'];
          $admin_role = $row['admin_role'];

          echo  "<td>{$admin_id}</td>";
          echo  "<td>{$username}</td>";
          echo  "<td>{$admin_firstname}</td>";
          echo  "<td>{$admin_lastname}</td>";
          echo  "<td>{$admin_email}</td>";
          echo  "<td>{$admin_role}</td>";

          // & - divide values to add more parameters
          // echo  "<td><a href='admins.php?change_to_admin={$admin_id}'>Admin</a></td>";
          echo  "<td><a href='admins.php?source=edit_admin&a_id={$admin_id}'>Edit</a></td>";
          echo  "<td><a onClick=\"javascript: return confirm('Are you sure you want to delete'); \" href='admins.php?delete=$admin_id'>Delete</a></td>";
          echo "</tr>";
    }
}

// BOOKS FUNCTIONS
function insert_book()
{
  global $connection;
  if (isset($_POST['create_book'])) {
    $book_title = $_POST['title'];
    $book_price = $_POST['price'];
    $book_description = $_POST['description'];
    $book_short_desc = $_POST['shortdesc'];
    $book_image = $_FILES['image']['name'];
    $book_image_temp = $_FILES['image']['tmp_name'];

    //move_uploaded_file($book_image_temp, "/admin/images/$book_image");

    $query = "INSERT INTO tblbook(book_title, book_price, book_description,
              short_desc,book_image) ";

    $query .= "VALUES( '{$book_title}', '{$book_price}', '{$book_description}', '{$book_short_desc}',
              '{$book_image}' ) ";

              $create_book_query = mysqli_query($connection, $query);
              confirmQuery($create_book_query);
              $the_book_id = mysqli_insert_id($connection);
              echo  "<div class='alert alert-success' role='alert'>
              Book Added: <a href='books.php'>View Books</a>
              <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                  <span aria-hidden='true'>&times;</span>
              </button>
              </div>";
  }
}

function update_book($the_book_id)
{
  global $connection;
  if (isset($_POST['update_book'])) {

    $book_title = $_POST['title'];
    $book_price = $_POST['price']; 
    $book_description = $_POST['description'];                     
    $short_desc= $_POST['shortdesc'];
    $book_image = $_FILES['image']['name'];
    $book_image_temp = $_FILES['image']['tmp_name'];

  // moving image from the temp location to a permanent location
  //move_uploaded_file($book_image_temp, "/admin/images/$book_image");

  if (empty($book_image)) {
    $query = "SELECT * FROM tblbook WHERE book_id = $the_book_id ";
    $select_image = mysqli_query($connection, $query);

    while($row = mysqli_fetch_array($select_image)){
        $book_image = $row['book_image'];
    }
  }

  $query = "UPDATE tblbook SET ";
  $query .="book_title  = '{$book_title}', ";
  $query .="book_price = '{$book_price}', ";
  $query .="book_description   =  '{$book_description}', ";
  $query .="short_desc   =  '{$short_desc}', ";
  $query .="book_image  = '{$book_image}' ";
  $query .= "WHERE book_id = {$the_book_id} ";

  $update_book = mysqli_query($connection,$query);

  confirmQuery($update_book);

  echo  "<div class='alert alert-success' role='alert'>
  Post Updated: <a href='books.php'>Edit More Books</a>
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>&times;</span>
  </button>
  </div>";


  }
}

function getAllBooks()
{
  global $connection;
  
  $query = "SELECT * FROM tblbook ORDER BY book_id DESC";
  $select_books = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($select_books)) {
              $book_id = $row['book_id'];
              $book_title = $row['book_title'];
              $book_price = $row['book_price']; 
              $book_description = $row['book_description'];                     
              $short_desc= $row['short_desc'];
              $book_image = $row['book_image'];
              echo "<tr>";

          ?>
                <td><input class='checkBoxes' type='checkbox' name='checkBoxArray[]'  
                value='<?php echo $book_id; ?>'></td>
          <?php
         
          echo  "<td>{$book_id}</td>";
          echo  "<td>{$book_title}</td>";
          echo  "<td>{$book_price}</td>";
          echo  "<td>{$book_description}</td>";
          echo  "<td>{$short_desc}</td>";
          echo  "<td><img class='img-responsive' width='100' src='../images/$book_image' alt='image'></td>";
          // & - divide values to add more parameters
          echo  "<td><a href='books.php?source=edit_books&b_id={$book_id}'>Edit</a></td>";
          echo  "<td><a onClick=\"javascript: return confirm('Are you sure you want to delete'); \" href='books.php?delete={$book_id}'>Delete</a></td>";
          echo "</tr>";
    }
}

function clone_books($bookValueId)
{
  global $connection;
  $query = "SELECT * FROM tblbook WHERE book_id = '{$bookValueId}' ";
  $select_book_query = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($select_book_query)) {
          $book_title = $row['book_title'];
          $book_price = $row['book_price']; 
          $book_description = $row['book_description'];                     
          $short_desc= $row['short_desc'];
          $book_image = $row['book_image'];

    }

  $query = "INSERT INTO tblbook(book_title, book_price, book_description,
  short_desc,book_image) ";

  $query .= "VALUES( '{$book_title}', '{$book_price}', '{$book_description}', '{$short_desc}',
              '{$book_image}' ) ";
          $copy_query = mysqli_query($connection, $query);
          confirmQuery($copy_query);

          echo  "<div class='alert alert-success' role='alert'>
              Books cloned successfully!
          <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
          </button>
          </div>";
}

function delete_mulit_books($bookValueId)
{
  global $connection;
  $query = "DELETE FROM tblbook WHERE book_id = {$bookValueId} ";
            $update_to_delete_book = mysqli_query($connection, $query);
          confirmQuery($update_to_delete_book);

      echo  "<div class='alert alert-success' role='alert'>
              Books deleted successfully!
          <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
          </button>
          </div>";             
}

// ORDERS FUNCTIONS
function insert_order()
{
    global $connection;
    if (isset($_POST['create_order'])) {
      $order_amount = $_POST['order_amount'];
      $order_transaction = $_POST['order_transaction'];
      $order_status = $_POST['order_status'];
      $order_currency = $_POST['order_currency'];

      if (!empty($order_amount) && !empty($order_transaction) && !empty($order_status) && !empty($order_currency)) {
        $order_amount                   = mysqli_real_escape_string($connection,$order_amount);
        $order_transaction                = mysqli_real_escape_string($connection,$order_transaction);
        $order_status             = mysqli_real_escape_string($connection,$order_status);
        $order_currency             = mysqli_real_escape_string($connection,$order_currency);
        
      $query = "INSERT INTO tblorder(order_amount, 
                  order_transaction ,order_status , order_currency) ";
  
      $query .= "VALUES( '{$order_amount}','{$order_transaction}', '{$order_status}', '{$order_currency}') ";
  
                $create_order_query = mysqli_query($connection, $query);
                confirmQuery($create_order_query);
  

        if (!$create_order_query) {
            die('QUERY FAILED '. mysqli_error($connection) . ' '. 
            mysqli_errno($connection));
        }
        echo  "<div class='alert alert-success' role='alert'>
                  Order Created: <a href='orders.php'>View Orders</a>
                  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                      <span aria-hidden='true'>&times;</span>
                    </button>
                </div>";
       } else { 
   
            echo "<div class='alert alert-danger' role='alert'>
                           Fields cannot be empty
                        </div>";
       }
      
     
           
  }
  
}

function update_order($the_order_id)
{
  global $connection;
  if (isset($_POST['update_order'])) {

    $order_amount = $_POST['order_amount'];
    $order_transaction = $_POST['order_transaction'];
    $order_status = $_POST['order_status'];
    $order_currency = $_POST['order_currency'];

    $query = "UPDATE tblorder SET ";
    $query .="order_amount  = '{$order_amount}', ";
    $query .="order_transaction  = '{$order_transaction}', ";
    $query .="order_status  = '{$order_status}', ";
    $query .="order_currency = '{$order_currency}' ";

    $query .= "WHERE order_id = {$the_order_id} ";

    $edit_order_query = mysqli_query($connection,$query);

    confirmQuery($edit_order_query);

    echo  "<div class='alert alert-success' role='alert'>
    Order Updated:  <a href='orders.php'>Edit More Orders</a>
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        <span aria-hidden='true'>&times;</span>
    </button>
    </div>";

  }

}

function getAllOrders()
{
  global $connection;
  $query = "SELECT * FROM tblorder";
  $select_orders = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($select_orders)) {
          $order_id = $row['order_id'];
          $order_amount = $row['order_amount'];
          $order_transaction = $row['order_transaction'];
          $order_status = $row['order_status'];
          $order_currency = $row['order_currency'];

          echo  "<td>{$order_id}</td>";
          echo  "<td>{$order_amount}</td>";
          echo  "<td>{$order_transaction}</td>";
          echo  "<td>{$order_status}</td>";
          echo  "<td>{$order_currency}</td>";

          // & - divide values to add more parameters
          echo  "<td><a href='orders.php?change_to_complete={$order_id}'>Complete</a></td>";
          echo  "<td><a href='orders.php?change_to_pending={$order_id}'>Pending</a></td>";
          echo  "<td><a href='orders.php?source=edit_orders&o_id={$order_id}'>Edit</a></td>";
          echo  "<td><a onClick=\"javascript: return confirm('Are you sure you want to delete'); \" href='orders.php?delete=$order_id'>Delete</a></td>";
          echo "</tr>";
    }
}

?>
