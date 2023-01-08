<?php include "navbar.php";
// require 'config.php';

// $query = "select * from ordered_list";
// $result = mysqli_query($conn, $query);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel ="stylesheet" href = "order.css">
    <script src="https://kit.fontawesome.com/8635edabe0.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./table_op/memo.js"></script>
    <title>Order</title>
</head>
<body>

<!-- <script>
  function delRow(sl){
    window.location.href = window.location.href+'?sl='+sl; -->
  <?php
    // $sl = $_GET['sl'];
    // require('./database/dbConnect.php');
    // $sql = "DELETE FROM `ordered_list` WHERE `sl`=$sl";
    // $res = mysqli_query($conn, $sql);
    // if ($res === TRUE) {
    //   // echo "New record created successfully";
    // } else {
    //     // echo "Error: unknown";
    // }
    // mysqli_close($conn);

  ?>

<!-- }
</script> -->

<section class ="m-3 p-5 ">
       
  <div class="container rounded pt-5" id="input_div">
    
    <div class="border rounded p-2 col m-3 bg-dark">
      <form method="post" name="order-table" action="">
      <input class="memo-table-input pr-1" type="text" placeholder="SL" name="sl" value=""/>
      <input class="memo-table-input pr-1" type="text" placeholder="Product Code" name="p_code" value=""/>
      <input class="memo-table-input pr-1" type="number" placeholder="Quantity" name="qnty" value=""/>
      <input class="memo-table-input pr-1" type="number" placeholder="Price" name="price" value=""/>
      <input class="memo-table-input pr-1" type="number" placeholder="%" name="disc"/>
      <input type="submit" class="btn btn-success rounded p-2 ml-3 mb-2 mr-0" value="Place Order" name="save-order"/>
        <table class="table table-striped table-dark" id="mytable">
          <thead>
            <tr>
              <th scope="col">Serial</th>
              <th scope="col">Product Code</th>
              <th scope="col">Quantity</th>
              <th scope="col">Price</th>
              <th scope="col">Discount(%)</th>
              <!-- <th scope="col"><button type="button" class="btn btn-success rounded" onclick="addRow('table_order')">Add</button></th> -->
              <!-- <th scope="col"><input type="submit" class="btn btn-success rounded" value="Order" name="save-order"></th> -->
            </tr>
          </thead>
          <tbody id="table_order">
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <tr><td>
              <!-- <input class="memo-table-input" type="text" placeholder="Product Code" name="p_code" id="p_code"> -->
              <?php echo $row['sl']; ?>
            </td>

            <td>
              <!-- <input class="memo-table-input" type="text" placeholder="Product Code" name="p_code" id="p_code"> -->
              <?php echo $row['product_code']; ?>
            </td>

            <td>
                <!-- <input class="memo-table-input" type="number" placeholder="Quantity" name="qnty" id="qnty"> -->
                <?php echo $row['quantity']; ?>

            </td>

            <td>
                <!-- <input class="memo-table-input" type="number" placeholder="Price" name="price" id="dp"> -->
                <?php echo $row['price']; ?>

            </td>
              
            <td>
                <!-- <input class="memo-table-input" type="number" placeholder="%" name="disc" id="disc"> -->
                <?php echo $row['discount']; ?>

            </td>
            <td>
              <div class="action_container">
                <button class="btn btn-danger rounded" name="del-row" onclick="delRow($row['sl'])">
                  <i class="fa-solid fa-xmark"></i>
                </button>
          
              </div>
            </td>
            </tr>
            <?php
          
            }
            ?>
          </tbody>
        </table>
      </form>
    </div>
  </div>
    
</section>

    
</body>

</html>

<?php
// require('./database/dbConnect.php');
// $count = $GLOBALS['i']+1;
/*
if (isset($_POST['save-order'])) {
  // $GLOBALS['conn'];
  print_r($_POST);
  $sl = $_POST['sl'];
  $p_codes = $_POST['p_code'];
  // echo $p_codes;
  $p_qnty = $_POST['qnty'];
  $p_price = $_POST['price'];
  $p_disc = $_POST['disc'];
  if(empty($sl) || empty($p_codes) || empty($p_qnty) || empty($p_price) || empty($p_disc)){
      echo "Page doesn't fulfill the requirements.";
  }else{
    echo $p_price;
    $sql = "insert into `ordered_list` (`sl`, `product_code`, `quantity`, `price`, `discount`) values ('$sl','$p_codes','$p_qnty','$p_price','$p_disc')";
    $res = mysqli_query($conn, $sql);
    if ($res === TRUE) {
      // echo "New record created successfully";
    } else {
        // echo "Error: unknown";
    }
    mysqli_close($conn);
    
    // print_r($_REQUEST);

  }

} else {
    // echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

*/
// addToDb();
?>

<?php include "footer.php"?>
