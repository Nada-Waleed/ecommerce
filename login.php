<?php
if(isset($_POST['login']))
{
$User_Email=$_POST['User_Email'];
$User_Password=$_POST['User_Password'];

$sql="SELECT * FROM users WHERE User_Email= ?  AND User_Password= ? ";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(1,$User_Email,PDO::PARAM_STR);
    $stmt->bindParam(2,$User_Password,PDO::PARAM_STR); 
    $stmt->execute();
    $number_of_rows = $stmt->fetch(); 
    if($number_of_rows){
        $_SESSION['USER_LOGIN'] = $email;
        header('LOCATION:liked.php');
    }else{
        $msg="wrong email or password";
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <link href="css/style.css" rel="stylesheet">
   <!--fonts-->
   <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Akshar:wght@300;600&family=Dancing+Script:wght@400;700&family=Lato:ital,wght@0,300;0,400;1,300&family=Open+Sans:ital,wght@0,300;0,400;1,300&family=Playfair+Display:ital,wght@0,400;1,600&family=Roboto:ital,wght@0,300;1,100&family=Work+Sans:ital,wght@0,200;0,400;0,500;0,600;0,800;1,200;1,400;1,500&family=Yanone+Kaffeesatz:wght@200;300;500&display=swap" rel="stylesheet">

    <title>Document</title>
</head>
<body>
    <?php
    include "nav.php";
    ?>
<div class="content" style="margin: 100px auto;">

<div class="container" >
  <div class="row justify-content-center">
    <div class="col col-4">
      <div class="alert-danger" id="error"></div>
      <form action="" method="PoSt">

      <?php if($msg):  ?>
            <div class="alert alert-danger" role="alert">
            <?php echo $msg?>
            </div>
      <?php endif?>

        <div class="mb-3">
          <label for="User_Email" class="form-label">Email address</label>
          <input type="email" class="form-control" id="User_Email" name="User_Email">
        </div>
        <div class="mb-3">
          <label for="User_Password" class="form-label">Password</label>
          <input type="password" class="form-control" id="User_Password" name="User_Password">
        </div>
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <div class="row justify-content-center" style="width: 70%;margin: 0 auto;">
          <button type="login" class="btn btn-warning" style="color:white"> LOGIN</button>
        </div>
        <div class="row justify-content-center" style="width: 70%;margin: 0 auto;">
          <a class = "btn btn-sm btn-google btn-block text-uppercase btn-outline mt-3" href = "">
            Login Using Google <img class="mb-1" style="margin-left: 10px;width: 20px;" src="https://img.icons8.com/color/16/000000/google-logo.png">
          </a>
        </div>

      </form>
      <div class="row justify-content-center pt-5" >
        <a href="register.php" class="orcreate"style="font-size: 35px;" >OR CREATE AN ACCOUNT</a>
      </div>
    </div>
</div>
</div>
</div>


<?php
    include "footer.php";
    ?>

        
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>