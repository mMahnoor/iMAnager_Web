<?php
?>
<html>
    <head>
        <title>iManager</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="login.css">
    </head>
    <body>
        <div id="intro" class="bg-image shadow-2-strong">
            <div class="container" >
                <div class="row">               
                <div class="col-4" style="margin:250px ">
                    <form action="Login.php" method="POST">
                        <div class="mt-3">
                            <h1 style="color:Crimson">iManager</h1>
                            <input type="text" class="form-control" name="email" placeholder="Your Email">

                        </div>
                        <div class="mt-3">
                            
                            <input type="password" class="form-control" name="password" placeholder="Your Password">

                        </div>
                        <div class="mt-3">
                            <button class="btn btn-outline-Dark btn-lg m-1" style="opacity:1" >
                                <span style="color:Crimson"> Sign in</span>
                            </button>

                        </div>

                    </form>
                    <h5>Don't have an acccount?
                        <button class="btn  btn-outline-Dark btn-sm m-1" style="opacity:1">
                            <a href="form.php" style="text-decoration:none">
                        <span style="color:Crimson">Signup Now</span></a> </button></h5>
                </div>
                

            </div>
        </div>
      </div>
    </body>
</html>