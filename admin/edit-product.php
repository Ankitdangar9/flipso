<?php

include('../middleware/adminmiddelware.php');
include('includes/header.php');


?>



<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php  
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                $product = getByID("products",$id);
                if(mysqli_num_rows($product) > 0){
                    $data = mysqli_fetch_array($product);
                    ?>
                    <div class="card">
                        <div class="card-header">
                            <h4>edit product</h4>
                            <a href="products.php" class="btn btn-primary float-end">back</a>
        
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
                                      <option value="<?=  $item['id'] ?>" <?= $data['category_id'] == $item['id']?'selected':'' ?>><?=  $item['name'] ?></option>
                                            <?php
                                        }
                                    }
                                    else{
                                        echo "no category available";
                                    }
                                        ?>
                                    
                                   
         
         
         
                          </select>
                                </div>
                                <input type="hidden" name="product_id" value="<?=  $data['id']; ?>">
        
                                <div class="col-md-6">
                                <label for="">name</label>
                                <input type="text" name="name" value="<?=  $data['name']; ?>" placeholder="enter category name" class="form-control mb-2">
                                </div>
        
                                <div class="col-md-6">
                                <label for="">slug</label>
                                <input type="text" name="slug" value="<?=  $data['slug']; ?>" placeholder="enter slug" class="form-control mb-2">
                                </div>
        
                                <div class="col-md-12">
                                <label for="">small description</label>
                               <textarea rows="3"  name="small_description" placeholder="enter small description" class="form-control mb-2"><?=  $data['small_description']; ?></textarea>
                                </div>
        
                                <div class="col-md-12">
                                <label for="">description</label>
                               <textarea rows="3"  name="description" placeholder="enter description" class="form-control mb-2"><?=  $data['description']; ?></textarea>
                                </div>
        
                                <div class="col-md-6">
                                <label for="">orignal price</label>
                                <input type="text" name="original_price" value="<?=  $data['original_price']; ?>" placeholder="enter category name" class="form-control mb-2">
                                </div>
        
                                <div class="col-md-6">
                                <label for="">selling price</label>
                                <input type="text" name="selling_price" value="<?=  $data['selling_price']; ?>" placeholder="enter slug" class="form-control mb-2">
                                </div>
        
        
                                <div class="col-md-12">
                                <label for="">upload image</label>
                                <input type="hidden" name="old_image" value="<?=  $data['image']; ?>">
                                <input type="file"  name="image"  class="form-control mb-2">
                                <label for="">current image</label>
                                <img src="../uploads/<?=  $data['image']; ?>" alt="product image" height="50px" width="50px" >
                                </div>
        
                                <div class="row">
                                <div class="col-md-6">
                                <label for="">quntity</label>
                                <input type="number" name="qty" value="<?=  $data['qty']; ?>" placeholder="enter slug" class="form-control mb-2">
                                
                                </div>
                                <div class="col-md-3">
                                <label for="">status</label><br>
                                <input type="checkbox" <?= $data['status'] == '0'?'':'checked' ?>  name="status" >
                                </div>
        
                                <div class="col-md-3">
                                <label for="">trading</label><br>
                                <input type="checkbox" <?= $data['trending'] == '0'?'':'checked' ?> name="trading" >
                                </div>
                                </div>
        
                                <div class="col-md-12">
                                <label for="">meta title</label>
                                <input type="text" name="meta_title" value="<?=  $data['meta_title']; ?>" placeholder="enter meta title" class="form-control mb-2">
                                </div>
        
                                <div class="col-md-12">
                                <label for="">meta description</label>
                                <textarea rows="3"  name="meta_description"  placeholder="enter meta description" class="form-control mb-2"><?=  $data['meta_description']; ?></textarea>
                                </div>
        
                                <div class="col-md-12">
                                <label for="">meta keywords</label>
                                <textarea rows="3"  name="meta_keywords"  placeholder="enter meta keywords" class="form-control mb-2"><?=  $data['meta_keywords']; ?></textarea>
                                </div>
        
                               
        
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary" name="update_product_btn">update</button>
                                </div>
        
                                
                            </div>
                            </form>
                            
                        </div>
                    </div>
                                
                <?php  
                }
                else{
                    echo "product not found for given id";
                } 
                
               
            }
            else{
                echo "id  missiong from url";
            } ?>

        </div>
</div>
</div>

<?php
include('includes/footer.php');

?><?php

include('../middleware/adminmiddelware.php');
include('includes/header.php');


?>



<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php  
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                $product = getByID("products",$id);
                if(mysqli_num_rows($product) > 0){
                    $data = mysqli_fetch_array($product);
                    ?>
                    <div class="card">
                        <div class="card-header">
                            <h4>edit product</h4>
                            <a href="products.php" class="btn btn-primary float-end">back</a>
        
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
                                      <option value="<?=  $item['id'] ?>" <?= $data['category_id'] == $item['id']?'selected':'' ?>><?=  $item['name'] ?></option>
                                            <?php
                                        }
                                    }
                                    else{
                                        echo "no category available";
                                    }
                                        ?>
                                    
                                   
         
         
         
                          </select>
                                </div>
                                <input type="hidden" name="product_id" value="<?=  $data['id']; ?>">
        
                                <div class="col-md-6">
                                <label for="">name</label>
                                <input type="text" name="name" value="<?=  $data['name']; ?>" placeholder="enter category name" class="form-control mb-2">
                                </div>
        
                                <div class="col-md-6">
                                <label for="">slug</label>
                                <input type="text" name="slug" value="<?=  $data['slug']; ?>" placeholder="enter slug" class="form-control mb-2">
                                </div>
        
                                <div class="col-md-12">
                                <label for="">small description</label>
                               <textarea rows="3"  name="small_description" placeholder="enter small description" class="form-control mb-2"><?=  $data['small_description']; ?></textarea>
                                </div>
        
                                <div class="col-md-12">
                                <label for="">description</label>
                               <textarea rows="3"  name="description" placeholder="enter description" class="form-control mb-2"><?=  $data['description']; ?></textarea>
                                </div>
        
                                <div class="col-md-6">
                                <label for="">orignal price</label>
                                <input type="text" name="original_price" value="<?=  $data['original_price']; ?>" placeholder="enter category name" class="form-control mb-2">
                                </div>
        
                                <div class="col-md-6">
                                <label for="">selling price</label>
                                <input type="text" name="selling_price" value="<?=  $data['selling_price']; ?>" placeholder="enter slug" class="form-control mb-2">
                                </div>
        
        
                                <div class="col-md-12">
                                <label for="">upload image</label>
                                <input type="hidden" name="old_image" value="<?=  $data['image']; ?>">
                                <input type="file"  name="image"  class="form-control mb-2">
                                <label for="">current image</label>
                                <img src="../uploads/<?=  $data['image']; ?>" alt="product image" height="50px" width="50px" >
                                </div>
        
                                <div class="row">
                                <div class="col-md-6">
                                <label for="">quntity</label>
                                <input type="number" name="qty" value="<?=  $data['qty']; ?>" placeholder="enter slug" class="form-control mb-2">
                                
                                </div>
                                <div class="col-md-3">
                                <label for="">status</label><br>
                                <input type="checkbox" <?= $data['status'] == '0'?'':'checked' ?>  name="status" >
                                </div>
        
                                <div class="col-md-3">
                                <label for="">trading</label><br>
                                <input type="checkbox" <?= $data['trending'] == '0'?'':'checked' ?> name="trading" >
                                </div>
                                </div>
        
                                <div class="col-md-12">
                                <label for="">meta title</label>
                                <input type="text" name="meta_title" value="<?=  $data['meta_title']; ?>" placeholder="enter meta title" class="form-control mb-2">
                                </div>
        
                                <div class="col-md-12">
                                <label for="">meta description</label>
                                <textarea rows="3"  name="meta_description"  placeholder="enter meta description" class="form-control mb-2"><?=  $data['meta_description']; ?></textarea>
                                </div>
        
                                <div class="col-md-12">
                                <label for="">meta keywords</label>
                                <textarea rows="3"  name="meta_keywords"  placeholder="enter meta keywords" class="form-control mb-2"><?=  $data['meta_keywords']; ?></textarea>
                                </div>
        
                               
        
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary" name="update_product_btn">update</button>
                                </div>
        
                                
                            </div>
                            </form>
                            
                        </div>
                    </div>
                                
                <?php  
                }
                else{
                    echo "product not found for given id";
                } 
                
               
            }
            else{
                echo "id  missiong from url";
            } ?>

        </div>
</div>
</div>

<?php
include('includes/footer.php');

?>