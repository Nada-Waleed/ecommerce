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
        <div class="row">
          <div class="shopping-cart">
            <table class="table">
              <thead>
                <tr class="card-header">
                  <th  scope="col">IMAGE</th>
                  <th  scope="col">PRODUCT NAME	</th>
                  <th  scope="col">PRICE	</th>
                  <th  scope="col">QUANTITY	</th>
                  <th  scope="col">TOTAL	</th>
                  <th  scope="col">ACTION	</th>
                </tr>
              </thead>
            
              <tfoot>
                <tr>
                  <td colspan="6" scope="col">
                    <div class="text-muted d-flex justify-content-md-between">
                      <span class="btn btn-outline-secondary m-2" style="font-weight: bold;font-family: 'Kaisei Decol', serif;"> TOTAL : </span>
                      <a href="payform.php" class="btn btn-outline-warning m-2" style="font-weight: bold;font-family: 'Kaisei Decol', serif;">CHECK OUT</a>
                    </div>
                  </td>
                </tr>
              </tfoot>
            </table>
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