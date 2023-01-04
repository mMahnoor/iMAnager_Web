<?php
?>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 
    </head>
    <body>
        <div class="container" >
            <div class="row">
                <div class="col-4">
                </div>
                <div class="col-4" style="margin-top:150px">
                    <form action="Login.php" method="POST">
                        <div class="mt-3">
                            
                            <input type="text" class="form-control" name="email" placeholder="Your Email">

                        </div>
                        <div class="mt-3">
                            
                            <input type="password" class="form-control" name="password" placeholder="Your Password">

                        </div>
                        <div class="mt-3">
                            
                           <button class="btn btn-success" name="submit">LOGIN</button>

                        </div>

                    </form>
                    <h3>NOT HAVE AN ACCOUNT?<a herf="Form.php">Register</a></h3>
                </div>
                <div class="col-4">
                </div>

            </div>
        </div>
    </body>
</html>