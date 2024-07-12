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
    $category = getByID("categories", $id);

if(mysqli_num_rows($category) > 0){

$data = mysqli_fetch_array($category);

            ?>
            <div class="card">
                <div class="card-header">
                    <h4>edit category</h4>
                    <a href="category.php" class="btn btn-primary float-end">back</a>

                </div>
                <div class="card-body">
                    <form action="code.php" method="post" enctype="multipart/form-data"> 
                    <div class="row">
                        <div class="col-md-6">
                            <input type="hidden" name="category_id" value="<?= $data['id']  ?>">
                        <label for="">name</label>
                        <input type="text" name="name" value="<?= $data['name']  ?>" placeholder="enter category name" class="form-control">
                        </div>

                        <div class="col-md-6">
                        <label for="">slug</label>
                        <input type="text" name="slug" value="<?= $data['slug']  ?>" placeholder="enter slug" class="form-control">
                        </div>

                        <div class="col-md-12">
                        <label for="">description</label>
                       <textarea rows="3"  name="description" placeholder="enter description" class="form-control"><?= $data['description']  ?></textarea>
                        </div>

                        <div class="col-md-12">
                        <label for="">upload image</label>
                        <input type="file" name="image" class="form-control">
                        <label for="">current image</label>
                        <input type="hidden" name="old_image" value="<?= $data['image']  ?>">
                        <img src="../uploads/<?= $data['image']  ?>" height="50px" width="50px" alt="" >
                        </div>

                        <div class="col-md-12">
                        <label for="">meta title</label>
                        <input type="text" name="meta_title" value="<?= $data['meta_title']  ?>" placeholder="enter meta title" class="form-control">
                        </div>

                        <div class="col-md-12">
                        <label for="">meta description</label>
                        <textarea rows="3"  name="meta_description" placeholder="enter meta description" class="form-control"><?= $data['meta_description']  ?></textarea>
                        </div>

                        <div class="col-md-12">
                        <label for="">meta keywords</label>
                        <textarea rows="3"  name="meta_keywords" placeholder="enter meta keywords" class="form-control"><?= $data['meta_keywords']  ?></textarea>
                        </div>

                        <div class="col-md-6">
                        <label for="">status</label>
                        <input type="checkbox" <?= $data['status'] ? "checked":"" ?> name="status" >
                        </div>

                        <div class="col-md-6">
                        <label for="">popular</label>
                        <input type="checkbox" <?= $data['popular'] ? "checked":"" ?> name="popular" >
                        </div>

                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary" name="update_category_btn">update</button>
                        </div>

                        
                    </div>
                    </form>
                    
                </div>
            </div>
            <?php
}
else{
    echo "category not found";
}
}
else{
    echo "id missing from url";
}
            ?>
        </div>
</div>
</div>

<?php
include('includes/footer.php');

?>