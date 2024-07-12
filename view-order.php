
<?php


include("functions/userfunctions.php");
 include("includes/header.php"); 
 include("authenticate.php"); 

if(isset($_GET['t'])){
    $tracking_no = $_GET['t'];
   $orderdata =  checkTrackingNoValid($tracking_no);

   if(mysqli_num_rows($orderdata) < 0){
    ?>
    <h4>somthing went wrong</h4>
   <?php
   die();
   }

}
else{
    ?>
     <h4>somthing went wrong</h4>
    <?php
     die();
}

$data = mysqli_fetch_array($orderdata);
 
 ?>

<div class="py-3 bg-primary">
    <div class="container">
        <h6 class="text-white">
            <a href="index.php" class="text-white">
            home / 
            </a>
            <a href="my-orders.php" class="text-white">
            my orders
            </a>
            <a href="#" class="text-white">
            view orders
           
            </a>
        </h6>

    </div>
 </div>

<div class="py-5">
    <div class="container">
        <div class="">
    <div class="row">
            <div class="col-md-12">
                

    <div class="card">
        <div class="card-header bg-primary">
            <span class="text-white fs-4">
                view order
</span>
            <a href="my-orders.php" class="btn btn-warning float-end">back</a>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <h4>delivery details</h4>
                    <hr>
                    <div class="row">
                        <div class="col-md-12 mb-2">
                        <label class="fw-bold">name</label>
                    <div class="border p-1">
                       <?= $data['name']; ?>
                    </div>
                        </div>

                        <div class="col-md-12 mb-2">
                        <label class="fw-bold">email</label>
                    <div class="border p-1">
                       <?= $data['email']; ?>
                    </div>
                        </div>

                        <div class="col-md-12 mb-2">
                        <label class="fw-bold">phone</label>
                    <div class="border p-1">
                       <?= $data['phone']; ?>
                    </div>
                        </div>

                        <div class="col-md-12 mb-2">
                        <label class="fw-bold">tracking no</label>
                    <div class="border p-1">
                       <?= $data['tracking_no']; ?>
                    </div>
                        </div>

                        <div class="col-md-12 mb-2">
                        <label class="fw-bold">address</label>
                    <div class="border p-1">
                       <?= $data['address']; ?>
                    </div>
                        </div>

                        <div class="col-md-12 mb-2">
                        <label class="fw-bold">pincode</label>
                    <div class="border p-1">
                       <?= $data['pincode']; ?>
                    </div>
                        </div>

                        
                    </div>
                    
                        
                   
                   
                </div>
                <div class="col-md-6">
                    <h4>
                        order details
                    </h4>
                    <hr>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>product</th>
                                <th>price</th>
                                <th>quantity</th>
                            </tr>
                        </thead>
                        <tbody>
                           
                       
                    <?php
                    $userId = $_SESSION['auth_user']['user_id'];
                       $order_query = "SELECT o.id as oid, o.tracking_no, o.user_id, oi.*, oi.qty as orderqty, p.* FROM orders o, order_items oi, products p WHERE o.user_id='$userId' AND oi.order_id=o.id AND p.id=oi.prod_id AND o.tracking_no='$tracking_no' ";
                       $order_query_run = mysqli_query($con, $order_query);

                       if(mysqli_num_rows($order_query_run) > 0){
                        foreach($order_query_run as $item){
                            ?>
                            <tr>

                            <td class="align-middle">
                                <img src="uploads/<?= $item['image']; ?>" width="50px" height="50px" alt="<?= $item['name']; ?>">
                                <?= $item['name']; ?>

                            </td class="align-middle">
                            <td class="align-middle">
                            <?= $item['price']; ?>
                            </td>

                            <td class="align-middle">
                            <?= $item['orderqty']; ?>
                            </td>

                            </tr>

                            <?php
                        }
                       }
                    ?>
                     </tbody>
                    </table>
                    <hr>
                    <h5>total price : <span class="float-end fw-bold"><?= $data['total_price']; ?></span></h5>
                    <hr>

                    <label class="fw-bold">payment mode</label>

                    <div class="border p-1 mb-3">
                        
                        <?= $data['payment_mode']; ?>
                    </div>
                    <label class="fw-bold">status</label>

                    <div class="border p-1 mb-3">
                        
                        <?php
                        if($data['status'] == 0){
                            echo "under process";
                        }
                        else if($data['status'] == 1){
                            echo "completed";

                        }
                        else if($data['status'] == 2){
                            echo "cancelled";
                             
                        }

                        ?>
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

    <?php include("includes/footer.php"); ?>
    