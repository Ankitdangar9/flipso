
<?php


include('../middleware/adminmiddelware.php');

 include("includes/header.php"); 


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




<div class="container">
    <div class="row">
        <div class="col-md-12">

    <div class="card">
        <div class="card-header bg-primary">
            <span class="text-white fs-4">
                view order
</span>
            <a href="orders.php" class="btn btn-warning float-end">back</a>
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
                       $order_query = "SELECT o.id as oid, o.tracking_no, o.user_id, oi.*, oi.qty as orderqty, p.* FROM orders o, order_items oi, products p WHERE oi.order_id=o.id AND p.id=oi.prod_id AND o.tracking_no='$tracking_no' ";
                       $order_query_run = mysqli_query($con, $order_query);

                       if(mysqli_num_rows($order_query_run) > 0){
                        foreach($order_query_run as $item){
                            ?>
                            <tr>

                            <td class="align-middle">
                                <img src="../uploads/<?= $item['image']; ?>" width="50px" height="50px" alt="<?= $item['name']; ?>">
                                <?= $item['name']; ?>

                            </td>
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

                    <div class="mb-3">

                    <form action="code.php" method="POST">
                        <input type="hidden" name="tracking_no" value="<?= $data['tracking_no']; ?>">

                    <select name="order_status" class="form-select">
                        <option value="0" <?=   $data['status'] == 0?"selected":"" ?>>under process</option>
                        <option value="1" <?=   $data['status'] == 1?"selected":"" ?>>completed</option>
                        <option value="2" <?=   $data['status'] == 2?"selected":"" ?>>cancelled</option>
                    </select>

                    <button type="submit" name="update_orde_btn" class="btn btn-primary mt-2">update status</button>
                    </form>  
                        
                    </div>

                    
                </div>
            </div>
        </div>
    




    <?php include("includes/footer.php"); ?>
    