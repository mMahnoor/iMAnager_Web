<?php include "navbar.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- <link rel ="stylesheet" type="stylesheet/text" href = "memo.css"> -->
    <link rel ="stylesheet"  href = "memo.css"> 
    <script src="https://kit.fontawesome.com/8635edabe0.js" crossorigin="anonymous"></script>
    <title>Memo</title>
</head>
<body>
<section class="memobg">
    <div class="container py-5">
        <div class="row py-4">
            <div class="col-lg-7 pt-5 text-center ">
               
            </div>
        </div>
    </div>

</section>

<section class ="m-5 bg-Dark"  >
       
<div class="container py-2">
      <h3 class="text-center" px-3><i><span style="color:crimson">Memo</span></i></h3>
      <form class="form-inline-block bg-Dark justify-content-between">
        <input type="text" class="form-control mb-2 mr-sm-1 bg-Dark text-whitesmoke border-bottom-0" id="inlineFormInputName2" placeholder="Client's Address">
        <input type="Date" class="form-control mb-3 mr-sm-2 bg-light text-Dark border-top-0" id="inlineFormInputName2" placeholder="Date">
      </form>
       <table class="table table-striped table-light memo-table-height m-0 text-Black">
  <thead>
    <tr>
     
      <th scope="col">Product Code</th>
      <th scope="col">Quantity</th>
      <th scope="col">Price</th>
      <th scope="col">Discount(%)</th>
      <th scope="col"><button class="btn btn-success rounded" >Add</button></th>
    </tr>
  </thead>
  <tbody id="table_id">
        <td>
            <input class="memo-table-input text-black" type="text" placeholder="Product Code">
        </td>

        <td>
            <input class="memo-table-input text-black" type="number" placeholder="Quantity">
        </td>

        <td>
            <input class="memo-table-input text-black" type="number" placeholder="Price">
        </td>
            
        <td>
            <input class="memo-table-input text-black" type="number" placeholder="%">
        </td>
        <td>
           <div class="action_container">
             <button class="btn btn-danger rounded">
               <i class="fa-solid fa-xmark"></i>
             </button>
           </div>
        </td>
  </tbody>
</table>
<form class="form-row bg-light m-0">
  <div class="col-6">
        <label class="font-weight-bold text-black" for="inlineFormInputName2">Total</label>
        <input type="text" class="form-control mb-2 mr-sm-2 bg-dark text-white memo-table-input" id="inlineFormInputName2" placeholder="Client's Address">
      </div> 
        <div class="col-6"> 
        <label  class="font-weight-bold text-black"for="inlineFormInputName2">Net Payable</label>
        <input type="text" class="form-control mb-2 mr-sm-2 bg-dark text-white memo-table-input" id="inlineFormInputName2" placeholder="Date">
        </div>
        <div class="col-6">
        <label class="font-weight-bold text-black" for="inlineFormInputName2">Advance</label>
        <input type="text" class="form-control mb-2 mr-sm-2 bg-dark text-white memo-table-input" id="inlineFormInputName2" placeholder="Client's Address">
        </div>
        <div class="col-6">
        <label  class="font-weight-bold text-black"for="inlineFormInputName2"> Balance</label>
        <input type="text" class="form-control mb-2 mr-sm-2 bg-dark  text-white" id="inlineFormInputName2" placeholder="Date">
        </div>
      </form>
    </div>
   
    </section>
    
</body>

</html>
<?php include "footer.php"?>
