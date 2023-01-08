<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel ="stylesheet" href = "styles/style.css">
    <!-- <title>Document</title> -->
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <a class="navbar-brand" href="#"><h3> <i> HATIL </i> </h3></a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon bg-dark"></span>
  </button>

  <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
    <ul class="navbar-nav">
      <li class="nav-item active mr-5 h5">
        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item, mr-5">
        <a class="nav-link" href="memo.php">Memo</a>
      </li>

      
      <li class="nav-item dropdown mr-5">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Order
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li class="pl-2 pr-2"><a class="dropdown-item" href="order.php">Place Order</a></li>
            <li><hr class="dropdown-divider"></li>
            <li class="pl-2 pr-2"><a class="dropdown-item" href="orderedList.php">Ordered List</a></li>
            <li ><hr class="dropdown-divider"></li>
            <li class="pl-2 pr-2"><a class="dropdown-item" href="orderHistory.php">Order History</a></li>
          </ul>
        </li>
      

      <!-- <li class="nav-item  mr-5">
        <a class="nav-link" href="#">Sale Info</a>
      </li> -->

      <li class="nav-item  mr-5">
        <a class="nav-link" href="stock.php">Stock</a>
      </li>

      <li class="nav-item  mr-5">
        <a class="nav-link" href="login.php">Log Out</a>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
       <input class="px-2 search" type="search" placeholder="Search" aria-label="Search"> 
      <button class="btn1" type="submit">Search</button>
    </form>
  </div>
</nav>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>