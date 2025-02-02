
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
            <a href="checkout.php" class="text-white">
            checkout
            </a>
        </h6>

    </div>
 </div>

<div class="py-5">
    <div class="container">
        <div class="card">
        <div class="card-body shadow">
            <form action="functions/placeorder.php" method="post">
    <div class="row">
        <div class="col-md-7">
            <h5>basic detail</h5>
            <hr>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="fw-bold">Name</label>
                    <input type="text" name="name" required placeholder="enter your full name" class="form-control">
                </div>
                <div class="col-md-6 mb-3">
                    <label class="fw-bold">e-mail</label>
                    <input type="email" name="email" required placeholder="enter your email" class="form-control">
                </div>
                <div class="col-md-6 mb-3">
                    <label class="fw-bold">phone</label>
                    <input type="text" name="phone" required placeholder="enter your phone number" class="form-control">
                </div>
                <div class="col-md-6 mb-3">
                    <label class="fw-bold">pin code</label>
                    <input type="text" name="pincode" required placeholder="enter your pincode" class="form-control">
                </div>
                <div class="col-md-6 mb-3">
                    <label class="fw-bold">address</label>
                    <textarea name="address" required class="form-control" rows="5"></textarea>
                </div>
            </div>
        </div>
            <div class="col-md-5">
                <h5>order detail</h5>
                <hr>

    

    

            <?php

$items = getCartItems();
$totalprice = 0;




foreach ($items as $citem){

    ?>

    <div class="mb-1 border">

    <div class="row align-items-center">
        <div class="col-md-2">

        <img src="uploads/<?= $citem['image'];  ?>" alt="image" width="60px">

        </div>
        <div class="col-md-5">
            <label>
            <?= $citem['name'];  ?>
            </label>
        </div>

        <div class="col-md-3">
        <label>
            <?= $citem['selling_price'];  ?>
            </label>
        </div>

        <div class="col-md-2">
        <label>x
            <?= $citem['prod_qty'];  ?>
            </label>
        </div>
       
        
    </div>
</div>

    <?php

   $totalprice += $citem['selling_price'] * $citem['prod_qty'];

   
}
?>
<hr>

<h5>total price : <span class="float-end fw-bold"><?= $totalprice ?></span></h5>
<div class="">
    <input type="hidden" name="payment_mode" value="COD">
    <button type="submit" name="placeOrderBtn" class="btn btn-primary w-100">conform and place order | COD</button>
</div>


</div>


   
</div>

</form>
</div>
</div>
</div>
</div>

    <?php include("includes/footer.php"); ?>
    