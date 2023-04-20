<?php
if(isset($_POST['submit']))
{
$User_Name=$_POST['User_Name'];
$User_Email=$_POST['User_Email'];
$User_Password=$_POST['User_Password'];
$Confirm=$_POST['Confirm'];

  session_start();
  include "conn.php";
$sql="INSERT INTO `users` ( `User_Name`, `User_Email`, `User_Password`, `User_Password_Hash` ) 
      VALUES (? ,?, ? ,?)";
      
$stmt=$conn->prepare($sql);
$stmt->bindParam(1,$User_Name ,PDO::PARAM_STR);
$stmt->bindParam(2,$User_Email ,PDO::PARAM_STR);
$stmt->bindParam(3,$User_Password ,PDO::PARAM_STR);
$stmt->bindParam(4,$Confirm,PDO::PARAM_STR);
$stmt->execute();


$success =" Your Account Created Successfully"; 
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

    <title>register</title>
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


<form action="" method="post">
<?php
if(isset($success)){
  echo '<div class="alert alert-primary" role="alert">'.$success.'</div>';
}

?>
              <div class="mb-3">
                <label for="User_Name" class="form-label">User Name *</label>
                <input type="text" class="form-control" id="User_Name" name="User_Name" required>
              </div>
              <div class="mb-3">
                <label for="User_Email" class="form-label">Email address *</label>
                <input type="email" class="form-control" id="User_Email" name="User_Email" required>
              </div>
              <div class="mb-3">
                <label for="User_Password" class="form-label">Password *</label>
                <input type="password" class="form-control" id="User_Password" name="User_Password" required>
              </div>
              <div class="mb-3">
                <label for="Confirm" class="form-label">Confirm Password *</label>
                <input type="password" class="form-control" id="Confirm" name="Confirm" required>
              </div>
              <div class="row justify-content-center" style="width: 70%;margin: 0 auto;">
                <button type="submit" class="btn btn-warning" style="color:white ;">REGISTER</button>
              </div>
              <div class="row justify-content-center" style="width: 70%;margin: 0 auto;">
                <a class = "btn btn-sm btn-google btn-block text-uppercase btn-outline mt-3" href = "" >
                  Login Using Google <img src="https://img.icons8.com/color/16/000000/google-logo.png">
                </a>
              </div>
            </form>
            <div class="row justify-content-center">
              <a href="./login.php" class="orcreate pt-3" style="font-size: 35px; padding-left:40%;">OR LOGIN</a>
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