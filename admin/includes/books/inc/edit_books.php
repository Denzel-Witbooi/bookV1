
<?php
//GetAllPosts();
if(isset($_GET['b_id'])){

$the_book_id =  $_GET['b_id'];

}
$query = "SELECT * FROM tblbook WHERE book_id = $the_book_id  ";
$select_books_by_id = mysqli_query($connection,$query);

while($row = mysqli_fetch_assoc($select_books_by_id)) {
        $book_id = $row['book_id'];
        $book_title = $row['book_title'];
        $book_price = $row['book_price']; 
        $book_description = $row['book_description'];                     
        $short_desc= $row['short_desc'];
        $book_image = $row['book_image'];
    }
   update_book($the_book_id);
   
?>


<form  action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="title">Book Title</label>
        <input value="<?php echo $book_title; ?>" type="text" name="title" class="form-control">
    </div>

    <div class="form-group">
        <label for="price">Book Price</label>
        <input value="<?php echo $book_price; ?>" type="number" name="price" class="form-control">
    </div>

    <div class="form-group">
          <label for="book_image">Book Image</label>
          <img class='img-responsive' width='100' src="../images/<?php echo $book_image;?>">
          <input type="file" name="image">
    </div>


    <div class="form-group">
        <label for="book_description">Book Description</label>
        <textarea type="text" name="description" class="form-control" id="body" cols="30" rows="10">
        <?php echo $book_description; ?>
        </textarea>
    </div>

    
    <div class="form-group">
        <label for="short_desc">Short Description</label>
        <textarea type="text" name="shortdesc" class="form-control" id="body" cols="30" rows="4">
            <?php echo $short_desc; ?>
        </textarea>
    </div>


    <div class="form-group">
      <input type="submit" name="update_book" value="Update Book" class="btn btn-primary">
    </div>
                
</form>




