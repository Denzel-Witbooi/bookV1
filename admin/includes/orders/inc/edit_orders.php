
<?php

if(isset($_GET['o_id'])){

$the_order_id =  $_GET['o_id'];

}
$query = "SELECT * FROM tblorder WHERE order_id = $the_order_id  ";
$select_orders_by_id = mysqli_query($connection,$query);

while($row = mysqli_fetch_assoc($select_orders_by_id)) {
      $order_id = $row['order_id'];
      $order_amount = $row['order_amount'];
      $order_transaction = $row['order_transaction'];
      $order_status = $row['order_status'];
      $order_currency = $row['order_currency'];
}

  update_order($the_order_id);

?>


<form  action="" method="post" enctype="multipart/form-data">

    <div class="form-group">
        <label for="title">Order Amount</label>
        <input type="number" value="<?php echo $order_amount; ?>" name="order_amount" class="form-control">
    </div>

    <div class="form-group">
        <label for="title">Transaction</label>
        <input type="text" value="<?php echo $order_transaction; ?>" name="order_transaction" class="form-control">
    </div>

<!-- <?php // TODO: NB ?> -->
<div class="form-group">
    <label for="order_status">Status</label>
    <div class="form-group">

      <select name="order_status" id="order_status">
          <option value="<?php echo $order_status; ?>"> Select Option</option>
        <?php
              echo "<option value='complete'>Complete</option>";
              echo " <option value='pending'>Pending</option>";
        ?>

      </select>
    </div>
</div>


    <div class="form-group">
        <label for="title">Currency</label>
        <input type="number" value="<?php echo $order_currency; ?>" name="order_currency" class="form-control">
    </div>


    <div class="form-group">
      <input type="submit" name="update_order" value="Update order" class="btn btn-primary">
    </div>

</form>
