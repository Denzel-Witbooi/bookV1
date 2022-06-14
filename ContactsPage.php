<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>DOCUMENT</title>
        <link rel="stylesheet" href="css/ContactPageStyle.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>
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

    <body>
     <section> 
        <div class="container">
            <div class="contactinfo">
                <div>
                    <h2>Get in touch with us!</h2>
                    <p>I you want to sell or request a book that’s not on our website.<br>
                       Contact us! We’ll find it for you<br>
                    </p>
                    <h3>Campus contact details</h3>
                    <ul class="info">
                        <li>
                            <span><img src="images/location.jpg"></span>
                            <span>1ST FLOOR, MERCANTILE BANK PLAZA,<br>
                                 RING ROAD, GREENACRES, <br>
                                 GQEBERHA 6045<br>
                                 PO BOX 27436<br>
                                 GREENACRES 6057
                                </span>
                        </li>
                        
                        <li>
                            <span><img src="images/phone.png"></span>
                            <span>CONTACT:<br/>
                                Campus Head: Paul Manson<br>
                                Tel:(041) 363 4223<br>
                                Fax:(041) 363 5355
                            </span>
                        </li>
                        <li>
                            <span><img src="images/email.jpg"></span>
                            <span>EMAIL<br>
                                pe@varsitycollege.co.za <br>
                                FinancePE@varsitycollege.co.za<br>
                                StudentServicesPE@varsitycollege.co.za
                            </span>
                        </li>
                    </ul>

                   
                </div>
            </div>
            
            <div class="contactForm">
                <h2>Contact Us</h2>
                <div class="formBox">
                    <div class="inputBox w50">
                        <input type="text" name="" required>
                        <span>First Name</span>
                    </div>

                    <div class="inputBox w50">
                        <input type="text" name="" required>
                        <span>Last Name</span>
                    </div>

                    <div class="inputBox w50">
                        <input type="text" name="" required>
                        <span>Email</span>
                    </div>

                    <div class="inputBox w50">
                        <input type="text" name="" required>
                        <span> Mobile Number</span>
                    </div>

                    <div class="inputBox w100">
                        <textarea  name="" required></textarea>
                        <span>Message</span>
                    </div>

                    <div class="inputBox w100">
                        <input type="submit"  value="send">
                    </div>


                </div>

            </div>

        </div>

     </section>  
    </body>

</html>