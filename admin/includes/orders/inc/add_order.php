<?php
    insert_order();
?>


<form  action="" method="post" enctype="multipart/form-data">

    <div class="form-group">
        <label for="title">Order Amount</label>
        <input type="number" name="order_amount" class="form-control">
    </div>

    <div class="form-group">
        <label for="title">Transaction</label>
        <input type="text" name="order_transaction" class="form-control">
    </div>

<!-- <?php // TODO: NB ?> -->
    <div class="form-group">
        <label for="order_status">Status</label>
        <div class="form-group">
          <select name="order_status" id="">
            <option value="pending">Select Options</option>
            <option value="complete">Complete</option>
            <option value="pending">Pending</option>
          </select>
        </div>
    </div>

    <div class="form-group">
        <label for="title">Currency</label>
        <input type="number" name="order_currency" class="form-control">
    </div>


    <div class="form-group">
      <input type="submit" name="create_order" value="Add order" class="btn btn-primary">
    </div>

</form>
