<?php
//connect with database




// isset function

if(isset($_POST['submit'])&&isset($_POST['email'])&&isset($_POST['password'])&&isset($_POST['Confirmpassword'])&&isset($_POST['phone']))  
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $ConfirmPassword=$_POST['Confirmpassword'];
    $phone=$_POST['phone'];

    //server side validation

    $namebool=false;
    $emailbool=false;
    $passwordbool=false;
    $phonebool=false;
    $nameError="";
    $emailError="";
    $passwordError="";
    $phoneError="";


//validation regex

    $reN='/^[a-zA-Z]+\s?-?\d?$/';
    $reE='/^[a-z]+_\d+@lus.ac.bd$/';
    $rePa='/^(?=.*[0-9])(?=.*[A-Za-z])(?=.*[!@#$%^&*]).{6,18}$/';
    $reP='/^[0-9]{3}[\d]{8}$/';
     
    if(empty($name))
    {
        $nameError="fill it";
        $namebool=false; 
    }
    else{
    if(!preg_match($reN,$name))
    {
        $nameError="Alphabates only";
        $namebool=false;
    }
    else{  $namebool=true;;}
    }
// for email
    if(empty($email))
        {
            $emailError="enter email";
            $emailbool=false; }
        else{
        if(!preg_match($reE,$email))
        {
            $emailError="correct it";
            $emailbool=false;
        }
        else{  $emailbool=true;}
        }
// for pass
   $passwordLength=strlen($password);
    if(empty($password))
    {
        $passwordError="enter pass";
        $passwordbool=false; }
    else{
    if(!preg_match($rePa,$password)&& $passwordLength>8)
    {
        $passwordError="correct it";
        $passwordbool=false;
    }
    else{  
        if($password==$ConfirmPassword){
            $passwordbool=true;}
        else{
            $passwordError="both have to be same";
            $passwordbool=false;
        }    
    }
    }

// confirm pass
    // if(!empty($ConfirmPassword))
    //     {
    //         echo "Fill the field"<br>;}
    //     else{
    //     if(preg_match($password,$ConfirmPassword))
    //     {
    //     $n_m='ok'; 
    //     }
    //     else{  $n_m='Fill Again';}
    //     }

// phone no
  

    if(empty($phone))
    {
        $phoneError="enter number";
        $phonebool=false;}
    else{
    if(!preg_match($reP,$phone))
    {
        $phoneError=" give numeric number";
        $phonebool=false; 
    }  
    else{ $phonebool=true ;}
    }

}

//insert code to database






?>
<html>
    <head>
        <title>iManager</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="form.css">
 
    </head>
    <body>
        <div  >
        <div class="container" class="bg-image shadow-2-strong">
            <div class="row">
                <div class="col-4">
                </div>
                <div class="col-4" style="margin-top:200px">
                    <form action="form.php" method="POST">
                        <div class="mt-3">
                            
                            <input type="text" class="form-control" name="name" placeholder="Your FullName">
                            
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