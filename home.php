<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel ="stylesheet" href ="home.css">
    <title>Home</title>
</head>
<body>

<!-- start navbar -->
<nav  class="navbar navbar-expand-lg navbar-light bg-light ">
 

  <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
    <ul class="navbar-nav">
      <li class="nav-item active  mr-5">
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
      
      <li class="nav-item  mr-5">
        <a class="nav-link" href="#">Stock</a>
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
<!-- end navbar -->

<!-- home image -->
<section class="main">
    <div class="container py-5">
        <div class="row py-4">
            <div class="col-lg-7 pt-5 text-center ">
                <h5 >Save your time and select <i>Product</i>!!</h5>
                <br>
                <h6><i>Have a good Day!<i></h6>
            </div>
        </div>
    </div>

</section>
<!-- end home image-->


<!-- this section is for Product Catagory -->
<section >
    <div class="container py-4">
        <div class="row  py-3">
            <div class="col-lg-8 m-auto text-center">
                <h1><i>Product Catagory</i></h1>
            </div>
        </div>
            <div class="row ">
                <div class="col-lg-4 ">
                    <img src="./images/bedroom-01.png" class="img-fluid mb-3" alt="" >
                    <h5><i>Bedroom Set</i></h5>

                </div>
                <div class="col-lg-4">
                    <img src="./images/Dinning1.png" class="img-fluid mb-3" alt="" >
                    <h5><i>Dinning Set</i></h5>

                </div>
                <div class="col-lg-4">
                    <img src="./images/sofa1.jpg" class="img-fluid mb-3" alt="" >
                    <h5><i>Living Room Set</i></h5>

                </div>

            </div>
    
    </div>
</section>
<!-- end Product catagory-->

<!--Start Explore Our Store -->

<section class="shop">
    <div class="container">
        <div class="row py-5">
        <div class="col-lg-8 m-auto text-center">
                <h1><i>Explore Our Store</i></h1>
                <h5 >All products are here!</h5>
            </div>

        </div>
        <!-- row1 -->
        <div class="row">
            <div class="col-lg-3 text-center">
                <div class="card-border-0 bg-light mb-2">
                    <div class="card-body">
                        <img src="./images/bedroom-01.png" class="img-fluid mb-3" alt="">                       
                    </div>
                </div>
                <h6><i>Bedroom Set-1</i></h6>
                <p><strong>Code-HHBR-1</strong></p>
                <p>30,000 BDT</p>
            </div>
            <div class="col-lg-3 text-center">
                <div class="card-border-0 bg-light mb-2">
                    <div class="card-body">
                        <img src="./images/bd2.png" class="img-fluid mb-3" alt="">                       
                    </div>
                </div>
                <h6><i>Bedroom Set-2</i></h6>
                <p><strong>Code-HHBR-2</strong></p>
                <p>70,000 BDT</p>
            </div>
            <div class="col-lg-3 text-center">
                <div class="card-border-0 bg-light mb-2">
                    <div class="card-body">
                        <img src="./images/bd3.png" class="img-fluid mb-3" alt="">                       
                    </div>
                </div>
                <h6><i>Bedroom Set-3</i></h6>
                <p><strong>Code-HHBR-3</strong></p>
                <p>50,000 BDT</p>
            </div>
            <div class="col-lg-3 text-center">
                <div class="card-border-0 bg-light mb-2">
                    <div class="card-body">
                        <img src="./images/bd4.png" class="img-fluid mb-3" alt="">                       
                    </div>
                </div>
                <h6><i>Bedroom Set-4</i></h6>
                <p><strong>Code-HHBR-4</strong></p>
                <p>50,000 BDT</p>
            </div>
        </div>

       <!-- 2nd row -->
       <div class="row">
            <div class="col-lg-3 text-center">
                <div class="card-border-0 bg-light mb-2">
                    <div class="card-body">
                        <img src="./images/Dinning1.png" class="img-fluid mb-3" alt="">                       
                    </div>
                </div>
                <h6><i>Dinning Set-1</i></h6>
                <p><strong>Code-HHDR-5</strong></p>
                <p>30,000 BDT</p>
            </div>
            <div class="col-lg-3 text-center">
                <div class="card-border-0 bg-light mb-2">
                    <div class="card-body">
                        <img src="./images/dn-1.png" class="img-fluid mb-3" alt="">                       
                    </div>
                </div>
                <h6><i>Dinning Set-2</i></h6>
                <p><strong>Code-HHDR-6</strong></p>
                <p>50,000 BDT</p>
            </div>

            <div class="col-lg-3 text-center">
                <div class="card-border-0 bg-light mb-2">
                    <div class="card-body">
                        <img src="./images/dn3.jpg" class="img-fluid mb-3" alt="">                       
                    </div>
                </div>
                <h6><i>Dinning Set-3</i></h6>
                <p><strong>Code-HHDR-7</strong></p>
                <p>20,000 BDT</p>
            </div>
            <div class="col-lg-3 text-center">
                <div class="card-border-0 bg-light mb-2">
                    <div class="card-body">
                        <img src="./images/dn4.jpg" class="img-fluid mb-3" alt="">                       
                    </div>
                </div>
                <h6><i>Dinning Set-4</i></h6>
                <p><strong>Code-HHDR-8</strong></p>
                <p>60,000 BDT</p>
            </div>


        </div>   
        <!-- 3rd row -->
        <div class="row">
            <div class="col-lg-3 text-center">
                <div class="card-border-0 bg-light mb-2">
                    <div class="card-body">
                        <img src="./images/lr1.jpg" class="img-fluid mb-3" alt="">                       
                    </div>
                </div>
                <h6><i>Sofa Set-1</i></h6>
                <p><strong>Code-HHLR-9</strong></p>
                <p>30,000 BDT</p>
            </div>

            <div class="col-lg-3 text-center">
                <div class="card-border-0 bg-light mb-2">
                    <div class="card-body">
                        <img src="./images/LR2.jpg" class="img-fluid mb-3" alt="">                       
                    </div>
                </div>
                <h6><i>Sofa Set-2</i></h6>
                <p><strong>Code-HHLR-10</strong></p>
                <p>35,000 BDT</p>
            </div>

            <div class="col-lg-3 text-center">
                <div class="card-border-0 bg-light mb-2">
                    <div class="card-body">
                        <img src="./images/lr3.jpg" class="img-fluid mb-3" alt="">                       
                    </div>
                </div>
                <h6><i>Sofa Set-3</i></h6>
                <p><strong>Code-HHLR-11</strong></p>
                <p>40,000 BDT</p>
            </div>

            <div class="col-lg-3 text-center">
                <div class="card-border-0 bg-light mb-2">
                    <div class="card-body">
                        <img src="./images/lr4.jpg" class="img-fluid mb-3" alt="">                       
                    </div>
                </div>
                <h6><i>Sofa Set-4</i></h6>
                <p><strong>Code-HHLR-12</strong></p>
                <p>60,000 BDT</p>
            </div>

        </div>





    </div>
</section>

<!--End Explore Our Store -->

<!-- Footer -->

    <footer>
        <div class="row mt-5 ml-5 mr-5 pl-5 pr-5 pt-5">
            <div class="col m-2 p-3">
                <p>
                    HATIM Furniture is an ISO 9001:2015 & ISO 14001:2015 certified brand. We offer a unique 
                    selection of stylish and contemporary furniture. Our furniture range includes sofa sets, beds, dining tables, television cabinets/units, 
                    cupboards, dressing tables, sofa cum beds, study tables, computer tables and lots more for 
                    your home.
                </p>
            </div>
           
            <div class="col m-2 p-3">
                <h4>CUSTOMER CARE</h4>
                <hr class="hr">
                <br><br>
                <p> Phone: <br>
                    09612117722 <br>
                    Email: hatimfurniture@gmail.com
                </p>
            </div>
            <div class="col m-2 p-3">
                <h4>OUR SHOWROOMS</h4>
                <hr class="hr">
                <br><br>
                58/11/A, Barek Mansion, Panthapath, <br>Dhaka
                PH: 01951122606, 01951122663
                17/B,Sector 12, Sonargaon Janapath, Uttara, Dhaka<br>
                PH: 01936007777, 01729079005
                844,West Kazipara(Bus Stand), Mirpur,<br> Dhaka
                PH: 01951122619, 01951122620
                368/B-1, Gulbagh, Agrabad Access Road, Halishahar PS, Chittagong-4100
                PH: 01951122621, 01951122623
                </p>
            </div>
        </div>

    </footer>




<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>