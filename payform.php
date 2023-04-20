  
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

  <div class="content">
      <form class="container" style="margin: 100px auto;padding: 50px 100px;" action="controllers/add-order-controller.php" method="post" id="form-check">

        <div class="row px-5">

              <div class="col col-lg-6 col-12">
                <h5 class="order-header">Biiling Details</h5>

                    <div class="row my-3">
                        <div class="col">
                            <label for="Order_First_Name" class="form-label">First Name*</label>
                            <input type="text" class="form-control" placeholder="First name" name="Order_First_Name">
                        </div>
                        <div class="col">
                            <label for="Order_Last_Name" class="form-label">Last Name*</label>
                            <input type="text" class="form-control" placeholder="Last name" name="Order_Last_Name">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="Order_User_Country" class="form-label">Country*</label>
                        <input type="text" class="form-control" placeholder="Last name" name="Order_User_Country">
                    </div>
                    <div class="mb-3">
                        <label for="Order_User_City" class="form-label">City*</label>
                        <input type="text" class="form-control" placeholder="Last name" name="Order_User_City">
                    </div>
                    <div class="mb-3">
                    <label for="Order_User_Adress" class="form-label">Street Address*</label>
                        <input type="text" class="form-control" id="Order_User_Adress" name="Order_User_Adress">
                        <input type="text" class="form-control mt-4" id="Order_User_Adress2" name="Order_User_Adress2">
                    </div>
                    <div class="mb-3">
                    <label for="Order_User_Zip" class="form-label">Postcode / ZIP (optional)</label>
                        <input type="int" class="form-control" id="Order_User_Zip" name="Order_User_Zip">
                    </div>
                    <div class="mb-3">
                    <label for="User_Email" class="form-label">Town / City*</label>
                        <input type="text" class="form-control" id="User_Email" name="User_Email">
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="Order_User_Email" class="form-label">Email Address*</label>
                            <input type="email" class="form-control" placeholder="First name" name="Order_User_Email">
                        </div>
                        <div class="col">
                            <label for="Order_User_Phone" class="form-label">Phone*</label>
                            <input type="text" class="form-control" placeholder="Last name" name="Order_User_Phone">
                        </div>
                    </div>
                    <label class="form-label mt-2">Choose the payment method*</label>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="payment" value="paypal" id="paypal">
                    <label class="form-check-label" for="paypal">
                        PayPal
                    </label>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="payment" value="delivery" id="delivery">
                    <label class="form-check-label" for="delivery">
                        Payment on delivery
                    </label>
                    </div>
                    <div class="row justify-content-center mt-5" style="width: 70%;margin: 0 auto;">
                        <button type="submit" class="btn btn-outline-warning">Place Order</button>
                    </div>

              </div>

              <div class="col col-lg-6 col-12">
                <h5 class="order-header mb-3">Your Order</h5>
                <div class="card">
                    <div class="card-body"  style="height: 640px; overflow-y: auto;">
                        <table class="table" style="text-align: start;">
                            <thead>
                                <tr>
                                    <th scope="col">Product</th>
                                    <th scope="col">QUANTITY</th>
                                    <th scope="col">TOTAL</th>
                                </tr>
                            </thead>
                            <tbody>
                                


                            </tbody>
                            <tfoot>
                                <tr>
                                    <td scope="row" colspan="2" style="font-weight: bold;font-family: 'Kaisei Decol', serif;">TOTAL</td>
                                    <td scope="row" style="font-weight: bold;"> $ </td>
                                    
                                </tr>
                            </tfoot>
                        </table>

                    </div>
                </div>
              </div>
              <input type="hidden" value="<?=$total_order?>" name="amount">
        </div>

      </form>
  </div>

  <?php
    include "footer.php";
    ?>

        
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>