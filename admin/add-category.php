<?php

include('../middleware/adminmiddelware.php');
include('includes/header.php');





?>




<div class="container">
    <div class="row">
   
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>add category</h4>
                    

                </div>
                <div class="card-body">
                    <form action="code.php" method="post" enctype="multipart/form-data"> 
                    <div class="row">
                        <div class="col-md-6">
                        <label for="">name</label>
                        <input type="text" name="name" placeholder="enter category name" class="form-control">
                        </div>

                        <div class="col-md-6">
                        <label for="">slug</label>
                        <input type="text" name="slug" placeholder="enter slug" class="form-control">
                        </div>

                        <div class="col-md-12">
                        <label for="">description</label>
                       <textarea rows="3"  name="description" placeholder="enter description" class="form-control"></textarea>
                        </div>

                        <div class="col-md-12">
                        <label for="">upload image</label>
                        <input type="file" name="image" class="form-control">
                        </div>

                        <div class="col-md-12">
                        <label for="">meta title</label>
                        <input type="text" name="meta_title" placeholder="enter meta title" class="form-control">
                        </div>

                        <div class="col-md-12">
                        <label for="">meta description</label>
                        <textarea rows="3"  name="meta_description" placeholder="enter meta description" class="form-control"></textarea>
                        </div>

                        <div class="col-md-12">
                        <label for="">meta keywords</label>
                        <textarea rows="3"  name="meta_keywords" placeholder="enter meta keywords" class="form-control"></textarea>
                        </div>

                        <div class="col-md-6">
                        <label for="">status</label>
                        <input type="checkbox" name="status" >
                        </div>

                        <div class="col-md-6">
                        <label for="">popular</label>
                        <input type="checkbox" name="popular" >
                        </div>

                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary" name="add_category_btn">save</button>
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