

    
<?php


include("functions/userfunctions.php");
 include("includes/header.php"); 
 include("authenticate.php"); 


 
 ?>

<div class="py-3 bg-primary">
    <div class="container">
        <h6 class="text-white">
            <a href="index.php" class="text-white">
            home / 
            </a>
            <a href="cart.php" class="text-white">
            cart
            </a>
        </h6>

    </div>
 </div>

<div class="py-5">
    <div class="container">
        <div class="">
    <div class="row">
            <div class="col-md-12">
                <div class="mycart2">
            <?php

$items = getCartItems();

if(mysqli_num_rows($items) > 0){
    ?>

    <div class="row align-items-center">
    
        <div class="col-md-5">
            <h6>
            product
            </h6>
        </div>


        <div class="col-md-3">
       <h6>price</h6>
        </div>

        <div class="col-md-2">
       <h6>quantity</h6>
        </div>

        <div class="col-md-2">
           <h6>remove</h6>
        </div>
    </div>

    <div class="">

           <?php

foreach ($items as $citem){

    ?>

    <div class="card product_data shadow-sm mb-3">

    <div class="row align-items-center">
        <div class="col-md-2">

        <img src="uploads/<?= $citem['image'];  ?>" alt="image" width="80px">

        </div>
        <div class="col-md-3">
            <h5>
            <?= $citem['name'];  ?>
            </h5>
        </div>
        <div class="col-md-3">

        <h5>RS<?= $citem['selling_price'];  ?></h5>

        </div>
        <div class="col-md-2">
            <input type="hidden" class="prodId" value="<?= $citem['prod_id']; ?>">
        <div class="input-group mb-3" style="width:130px">
            <button class="input-group-text decrement-btn updateQty">-</button>
               <input type="text" class="form-control text-center input-qty bg-white" value="<?= $citem['prod_qty'];  ?>" disabled >
              <button class="input-group-text increment-btn updateQty">+</button>
           </div>
        </div>

        <div class="col-md-2">
            <button class="btn btn-danger btn-sm deleteItem" value="<?= $citem['cid']; ?>">remove</button>
        </div>
    </div>
    </div>

    <?php


   
}

?>
</div>

<div class="float-end">
    <a href="checkout.php" class="btn btn-outline-primary">Proceed to checkout</a>
</div>
<?php
}else{
    ?>
        <div class="card card-body shadow text-center">
            <h4 class="py-3">your cart is empty</h4>
        </div>
    <?php
}
?>
</div>


</div>


   
</div>
</div>
</div>
</div>

    <?php include("includes/footer.php"); ?>
    