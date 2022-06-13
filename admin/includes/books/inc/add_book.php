<?php
    insert_book();
?>




<form  action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="title">Book Title</label>
        <input type="text" name="title" class="form-control">
    </div>

    <div class="form-group">
        <label for="price">Book Price</label>
        <input type="number" name="price" class="form-control">
    </div>

    <div class="form-group">
          <label for="book_image">Book Image</label>
          <input type="file" name="image">
    </div>

    <div class="form-group">
        <label for="book_description">Book Description</label>
        <textarea type="text" name="description" class="form-control" id="body" cols="30" rows="10">
        </textarea>
    </div>

    
    <div class="form-group">
        <label for="short_desc">Short Description</label>
        <textarea type="text" name="shortdesc" class="form-control" id="body" cols="30" rows="10">
        </textarea>
    </div>


    <div class="form-group">
      <input type="submit" name="create_book" value="Add Book" class="btn btn-primary">
    </div>
                
</form>

