<?php

include('../middleware/adminmiddelware.php');
include('includes/header.php');


?>



<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>add product</h4>
                    
                </div>
                <div class="card-body">
                    <form action="code.php" method="post" enctype="multipart/form-data"> 
                    <div class="row">
                    <div class="col-md-6">
                        <label for="">select category</label>
                        <select name="category_id" class="form-select" >
                        <option selected>select category</option>
                            <?php 
                            
                            $categories = getall("categories");
                            if(mysqli_num_rows($categories) > 0){
                                foreach($categories as $item){
                                    ?>
     <option value="<?=  $item['id'] ?>"><?=  $item['name'] ?></option>
                                    <?php
                                }
                            }
                            else{
                                echo "no category available";
                            }
                                ?>
                            
                           
 
 
 
</select>
                        </div>

                        <div class="col-md-6">
                        <label for="">name</label>
                        <input type="text" name="name" placeholder="enter category name" class="form-control mb-2">
                        </div>

                        <div class="col-md-6">
                        <label for="">slug</label>
                        <input type="text" name="slug" placeholder="enter slug" class="form-control mb-2">
                        </div>

                        <div class="col-md-12">
                        <label for="">small description</label>
                       <textarea rows="3"  name="small_description" placeholder="enter small description" class="form-control mb-2"></textarea>
                        </div>

                        <div class="col-md-12">
                        <label for="">description</label>
                       <textarea rows="3"  name="description" placeholder="enter description" class="form-control mb-2"></textarea>
                        </div>

                        <div class="col-md-6">
                        <label for="">orignal price</label>
                        <input type="text" name="original_price" placeholder="enter category name" class="form-control mb-2">
                        </div>

                        <div class="col-md-6">
                        <label for="">selling price</label>
                        <input type="text" name="selling_price" placeholder="enter slug" class="form-control mb-2">
                        </div>


                        <div class="col-md-12">
                        <label for="">upload image</label>
                        <input type="file" name="image" class="form-control mb-2">
                        </div>

                        <div class="row">
                        <div class="col-md-6">
                        <label for="">quntity</label>
                        <input type="number" name="qty" placeholder="enter slug" class="form-control mb-2">
                        </div>
                        <div class="col-md-3">
                        <label for="">status</label><br>
                        <input type="checkbox" name="status" >
                        </div>

                        <div class="col-md-3">
                        <label for="">trading</label><br>
                        <input type="checkbox" name="trading" >
                        </div>
                        </div>

                        <div class="col-md-12">
                        <label for="">meta title</label>
                        <input type="text" name="meta_title" placeholder="enter meta title" class="form-control mb-2">
                        </div>

                        <div class="col-md-12">
                        <label for="">meta description</label>
                        <textarea rows="3"  name="meta_description" placeholder="enter meta description" class="form-control mb-2"></textarea>
                        </div>

                        <div class="col-md-12">
                        <label for="">meta keywords</label>
                        <textarea rows="3"  name="meta_keywords" placeholder="enter meta keywords" class="form-control mb-2"></textarea>
                        </div>

                       

                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary" name="add_product_btn">save</button>
                        </div>

                        
                    </div>
                    </form>
                    
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