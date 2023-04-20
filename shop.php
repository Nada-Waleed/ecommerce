<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <link href="css/shop-style.css" rel="stylesheet">
   <!--fonts-->
   <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Akshar:wght@300;600&family=Dancing+Script:wght@400;700&family=Lato:ital,wght@0,300;0,400;1,300&family=Open+Sans:ital,wght@0,300;0,400;1,300&family=Playfair+Display:ital,wght@0,400;1,600&family=Roboto:ital,wght@0,300;1,100&family=Work+Sans:ital,wght@0,200;0,400;0,500;0,600;0,800;1,200;1,400;1,500&family=Yanone+Kaffeesatz:wght@200;300;500&display=swap" rel="stylesheet">

    <title>shop</title>
</head>
<body>
    <?php
    include "nav.php";
    ?>

<div class="content">
    <div class="container pt-3">
        <div class="row">
            <div class="col-lg-3 col-sm-2 pt-2">
                 <div class="category pb-3">
                      <h4 class="list-group" style="font-weight: bold;">Categories</h4>
                      <ul>
                          <li class="list-group-item"><a href="./shop.php?&mainCatID=1">Men's</a></li>
                          <li class="list-group-item"><a href="./shop.php?&mainCatID=2">Women's</a></li>
                          <li class="list-group-item"><a href="./shop.php?&mainCatID=3">Kid's</a></li>
                      </ul>
                  </div>
                  <form action="#" method="post">
                    <div class="brand pb-3">
                      <h4 class="list-group" style="font-weight: bold;">Brand</h4>
                      <ul>
                          <li class="list-group-item">
                            <div class="form-check">
                              <input type="checkbox" class="form-check-input" id="Zara" value="Zara"><label class="form-check-label" for="Zara"> Zara</label>
                            </div>
                          </li>

                          <li class="list-group-item">
                            <div class="form-check">
                              <input type="checkbox" class="form-check-input" id="1" value="1"><label class="form-check-label" for="1"> Nike</label>
                            </div>
                          </li>

                          <li class="list-group-item">
                            <div class="form-check">
                              <input type="checkbox" class="form-check-input" id="1" value="1"><label class="form-check-label" for="1"> Versace</label>
                            </div>
                          </li>
                          <li class="list-group-item">
                            <div class="form-check">
                              <input type="checkbox" class="form-check-input" id="1" value="1"><label class="form-check-label" for="1"> Polo</label>
                            </div>
                          </li>
                          <li class="list-group-item">
                            <div class="form-check">
                              <input type="checkbox" class="form-check-input" id="1" value="1"><label class="form-check-label" for="1"> Diesel</label>
                            </div>
                          </li>
                      </ul>
                    </div>
                    <div class="price pb-2">
                           <h4 class="list-group pb-2" style="font-weight: bold;">Price</h4>

                        <div class="input-group mb-3">
                          <input type="number" class="form-control" placeholder="From" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                          <input type="number" class="form-control" placeholder="To" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                    </div>
                    <div class="color pt-5">
                      
                      <div class="form-group mt-3 mb-3" id="color">
                          <h4 class="list-group pb-3" style="font-weight: bold;">Color</h4>

                          <input type="color" name="color1" id ="color1" class="form-control form-control-color">

                          <div class="form-group" style="margin-top: 10px;">
                            <label for="Option_Name">Color Value</label>
                            <input type="text" class="form-control" id="Option_Name" name="Option_Name">
                          </div>
                      </div>
                    </div>
                    <div class="size pt-5">
                    <h4 class="list-group pb-3" style="font-weight: bold;">Size</h4>
                        <div class="btn-group" role="group" aria-label="Basic outlined example">
                          <button type="button" class="btn btn-outline-warning">XXS</button>
                          <button type="button" class="btn btn-outline-warning">XS</button>
                          <button type="button" class="btn btn-outline-warning">S</button>
                          <button type="button" class="btn btn-outline-warning">M</button>
                          <button type="button" class="btn btn-outline-warning">L</button>
                          <button type="button" class="btn btn-outline-warning">XL</button>
                          <button type="button" class="btn btn-outline-warning">XXL</button>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-outline-warning btn-filter" style="  display: block;
                                                                                              margin: 20px auto;
                                                                                              width: 50%;
                                                                                              font-size: 20px;
                                                                                              font-weight: 900;">Filter</button>
                  </form>

            </div>
            <div class="col-lg-9 col-sm-10">
                <div class="row">
                    <div class="col-4">
                    <div class="item shadow-lg p-0 mb-5 bg-body rounded">
  <div class="col">
    <div class="card mt-3">
      <img src="img/card.PNG" class="card-img-top" alt="...">
      <div class="card-body">
        <h6 class="card-title text-center"><a href="#">Caterina Wiza</a></h6>
        <p class="card-text text-center"> <a href="#"  style="color: gray;" >Polo</a></p>
        <h4 class="card-title text-center text-black-50" style="font-weight:600 ;">$ 225</h4>
        
        <p class="card-text text-center text-black-50"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg></p>

<p class="card-text text-center text-black-50">34 reviews</p>
<button type="button" class="btn btn-outline-warning mb-3" style="width:100%;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
  <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
</svg>ADD TO CART</button>

<button type="button" class="btn btn-outline-danger" style="width:100%;"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
</svg> ADD TO WISHLIST</button>

      </div>
   
    </div>
    </div>
    </div> 
                    </div>


                    <div class="col-4">
                    <div class="item shadow-lg p-0 mb-5 bg-body rounded">
  <div class="col">
    <div class="card mt-3">
      <img src="img/card.PNG" class="card-img-top" alt="...">
      <div class="card-body">
        <h6 class="card-title text-center"><a href="#">Caterina Wiza</a></h6>
        <p class="card-text text-center"> <a href="#"  style="color: gray;" >Polo</a></p>
        <h4 class="card-title text-center text-black-50" style="font-weight:600 ;">$ 225</h4>
        
        <p class="card-text text-center text-black-50"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg></p>

<p class="card-text text-center text-black-50">34 reviews</p>
<button type="button" class="btn btn-outline-warning mb-3" style="width:100%;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
  <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
</svg>ADD TO CART</button>

<button type="button" class="btn btn-outline-danger" style="width:100%;"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
</svg> ADD TO WISHLIST</button>

      </div>
   
    </div>
    </div>
    </div> 
                    </div>


                                <div class="col-4">
                    <div class="item shadow-lg p-0 mb-5 bg-body rounded">
  <div class="col">
    <div class="card mt-3">
      <img src="img/card.PNG" class="card-img-top" alt="...">
      <div class="card-body">
        <h6 class="card-title text-center"><a href="#">Caterina Wiza</a></h6>
        <p class="card-text text-center"> <a href="#"  style="color: gray;" >Polo</a></p>
        <h4 class="card-title text-center text-black-50" style="font-weight:600 ;">$ 225</h4>
        
        <p class="card-text text-center text-black-50"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg></p>

<p class="card-text text-center text-black-50">34 reviews</p>
<button type="button" class="btn btn-outline-warning mb-3" style="width:100%;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
  <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
</svg>ADD TO CART</button>

<button type="button" class="btn btn-outline-danger" style="width:100%;"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
</svg> ADD TO WISHLIST</button>

      </div>
   
    </div>
    </div>
    </div> 
                    </div>
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