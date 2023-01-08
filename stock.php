<?php include "navbar.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel ="stylesheet"  href = "stock.css">
    <!-- <link rel ="stylesheet" type="stylesheet" href = "footer.css"> -->
    <title>Placse Order</title>
</head>
<body>
   <main>
    <section class ="m-3 py-5 ">
        <!-- style="border: 2px solid red" -->
     <!-- <div class="container" style="border: 2px solid blue" > -->
        <div class = "row m-2 ">
        <div class="row col" >
            
        <form  class=" form-horizontal col-sm-5 container" action="" >
        <h3 class="mt-3 pl-3 "><span style="color:whitesmoke">Place Order</span></h3>
            <div class="form-group row m-3 p-3">
                <label for=""class = "p-2 col-sm-5 form-label"><span style="color:whitesmoke">Product Code</span></label>
                <input type="text" class = "col-sm-7 form-control" >
            </div>

            <div class="m-3 form-group row p-3">
                <label for="" class = "col-sm-5 form-label"><span style="color:whitesmoke"> Quantity</span></label>
                <input type="text" class = "col-sm-7 form-control">
            </div>
            <div class="m-3 p-3 form-group row">
                <label for=""class = "col-sm-5 form-label"><span style="color:whitesmoke">Price</span></label>
                <input type="text" class = "col-sm-7 form-control">
            </div>
            <div class="m-3 p-3 form-group  row">
            <label for=""class = "col-sm-5 form-label "><span style="color:whitesmoke">Discount</span></label>
            <input type="text" class = "col-sm-7 form-control">
            
            <div class="container">
            <div  class ="mt-5  d-flex justify-content-between row ">
                <button class="col-md-3 col-lg-2 btn btn-light  m-3">Add</button>
                
                <!-- <button class="col-md-4 col-lg-2 btn btn-primary btn btn-primary mr-3 mb-2 p-1 text-align-center">Remove</button> -->
                <button class="col-md-3 col-lg-2  btn btn-light m-3">Order</button>
                <button class="col-md-3 col-lg-2 btn btn-light m-3">
                    Clear
                </button>
            
            </div>
            </div>
        </form>
        </div> 
       
       <div class="border rounded p-0 col m-3 bg-light">
       <table class="table table-striped table-dark ">
  <thead>
    <tr>
     
      <th scope="col">Product Code</th>
      <th scope="col">Quantity</th>
      <th scope="col">Price</th>
      <th scope="col">Discount(%)</th>
    </tr>
  </thead>
  <tbody>
   
  </tbody>
</table>
       </div>
    </div>
    </section>
    </main>
</body>

</html>
<?php include "footer.php"?>