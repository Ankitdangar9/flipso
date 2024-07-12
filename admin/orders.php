
<?php

include('../middleware/adminmiddelware.php');

 include("includes/header.php"); 
 


 
 ?>



<div class="container">
    <div class="row">
        <div class="col-md-12">
<div class="card" style="width: 700px;">
    <div class="card-header bg-primary">
       <h4 class="text-white">orders
       <a href="order-histroy.php" class="btn btn-warning float-end">order histroy</a>
       
       </h4> 
    </div>
    <div class="card-body">
    
    
   
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>user</th>
                            <th>tracking no</th>
                            <th>price</th>
                            <th>date</th>
                            <th>view</th>


                        </tr>
                    </thead>
                    <tbody>
                    <?php
     $orders = getAllorders();

     if(mysqli_num_rows($orders) > 0){

        foreach($orders as $item){

            ?>

                         <tr>
                            <td><?= $item['id']; ?></td>
                            <td><?= $item['name']; ?></td>
                            <td><?= $item['tracking_no']; ?></td>
                            <td><?= $item['total_price']; ?></td>
                            <td><?= $item['created_at']; ?></td>
                            <td>

                            <a href="view-order.php?t=<?= $item['tracking_no']; ?>" class="btn btn-primary">view details</a>
                                
                        </td>
                        </tr>

            <?php

        }

     }
     else{
       ?>

                        <tr>
                            <td colspan="5">no orders yet</td>
                            
                        </tr>
 
       <?php
     }
    ?>
                      
                    </tbody>
                </table>

    


</div>
</div>
</div>
</div>
</div>
 
<!--   Core JS Files   -->
<script src="./assets/js/core/popper.min.js" ></script>
<script src="./assets/js/core/bootstrap.min.js" ></script>
<script src="./assets/js/plugins/perfect-scrollbar.min.js" ></script>
<script src="./assets/js/plugins/smooth-scrollbar.min.js" ></script>












<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc --><script src="./assets/js/material-dashboard.min.js?v=3.1.0"></script>
    <?php include("includes/footer.php"); ?>
    