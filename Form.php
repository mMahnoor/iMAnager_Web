<?php
?>
<html>
    <head>
        <title>iManager</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="form.css">
 
    </head>
    <body>
        <div id="bg" >
        <div class="container" class="bg-image shadow-2-strong">
            <div class="row">
                <div class="col-4">
                </div>
                <div class="col-4" style="margin-top:200px">
                    <form action="form.php" method="POST">
                        <div class="mt-3">
                            
                            <input type="text" class="form-control" name="Name" placeholder="Your FullName">

                        </div>
                       

                        <div class="mt-2">
                            
                            <input type="text" class="form-control" name="email" placeholder="Your Email">

                        </div>
                        
                        <div class="mt-2">
                            
                            <input type="password" class="form-control" name="password" placeholder="Your Password">

                        </div>
                        
                        <div class="mt-2">
                            
                            <input type="password" class="form-control" name="ConfirmPassword" placeholder="Confirm Password">

                        </div>
                        <div class="mt-2" >
                        
                        <input type="tel" id="phone" class="form-control" name="phone" placeholder=" Your Phone Number" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}"> 
                        

                        </div>
                        <div class="mt-2">
                            
                           <button class="btn btn-outline-Danger btn-lg m-1" style="opacity:1" name="submit">
                           <span style="color:Whitesmoke"> Submit </span> </button>

                        </div>

                    </form>
                    <h5 style="color:Whitesmoke">Account Created !!
                        <button class="btn btn-outline-Danger btn-sm  m-1"><a href="login.php" style="text-decoration:none"><span style="color:Whitesmoke">Let's Sign in</span></a>
                        </button>
                    </h5>
                </div>
                

            </div>
          </div>
        </div>
    </body>
</html>