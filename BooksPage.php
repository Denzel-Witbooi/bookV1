<?php include "./includes/header.php";?>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">BookHub</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="BooksPage.php">Books</a></li>
      <li><a href="ContactsPage.php">Contact Us</a></li>
      <li><a href="CheckoutPage.php">Check out</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="UserLoginPage.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      <li><a href="./admin/"><span class="glyphicon glyphicon-user"></span> Admin</a></li>
    </ul>
  </div>
</nav>

<div class="container">

        <div class="row">

                <div class="row">
                <?php 

$query = "SELECT * FROM tblbook";
$select_books = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($select_books)) {
            $book_id = $row['book_id'];
            $book_title = $row['book_title'];
            $book_price = $row['book_price']; 
            $book_description = $row['book_description'];                     
            $short_desc= $row['short_desc'];
            $book_image = $row['book_image'];

?>  
                    <div class="col-sm-4 col-lg-4 col-md-4">
                        
                    <div class="thumbnail">
                            <img class="img-responsive" width='100' src="images/<?php echo $book_image; ?>" alt="book">
                            <div class="caption">
                                <h4><?php echo $book_title?></h4>
                                <p><?php echo $short_desc?></p>
                                <h4><?php echo $book_price?></h4>
                                <button class="btn btn-primary" href="Checkoutpage.php?c_id=<?php echo $book_id; ?>" >Buy Now <i class="fa fa-shopping-cart"></i></button>
                                <button class="btn btn-primary" href="checkout.php?b_id=<?php echo $book_id; ?>" >Buy Now <i class="fa fa-shopping-cart"></i></button>
                            </div>
                        </div>
                    </div>

                    <?php }?>

                </div>
                
            </div>
        </div>
    </div> 
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script> 
</body>
</html>