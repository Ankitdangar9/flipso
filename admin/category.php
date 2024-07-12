<?php

include('../middleware/adminmiddelware.php');
include('includes/header.php');


?>


 <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
          <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
            <div class="sidenav-toggler-inner">
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
            </div>
          </a>
        </li>

<div class="container">
    <div class="row">
        <div class="col-md-12">
<div class="card" style="width: 700px;">
    <div class="card-header">
       <h4>categories</h4> 
      
    </div>
    <div class="card-body" id="category_table">
        <table class="table table-bordered table-striped">

        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>image</th>
                <th>status</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            <?php
$category = getall("categories");

if(mysqli_num_rows($category) > 0)
{

foreach($category as $item){
    ?>

    <tr>
    <td><?= $item['id']; ?></td>
    <td><?= $item['name']; ?></td>
    <td>
<img src="../uploads/<?= $item['image']; ?>" width="50px" height="50px" alt="<?= $item['name']; ?>">

    </td>
    <td>
        <?= $item['status'] == '0'? "visible":"hidden" ?>
    </td>
    <td>
        <a href="edit-category.php?id=<?= $item['id']; ?>" class="btn btn-primary">edit</a>
        <form action="code.php" method="post">
            <input type="hidden" name="category_id" value="<?= $item['id']; ?>">
        <button type="submit" class="btn btn-danger" name="delete_category_btn">delete</button>
        </form>
       
    </td>
    
</tr>
<?php
}
}
else{
    echo "no recordes found";
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

<?php
include('includes/footer.php');

?>