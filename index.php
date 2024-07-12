
<?php
include("functions/userfunctions.php"); 
 include("includes/header.php"); 
 include("includes/slider.php"); 
 
 ?>

<div class="py-5">
    <div class="container">
    <div class="row ">

    <div class="col-md-12">
     <h4>trending products</h4>
     <hr>

     <div class="underline mb-2"></div>
    
      <div class="owl-carousel">
          
<?php
            $trendingproducts = getAllTrending();
            if(mysqli_num_rows($trendingproducts) > 0){
              foreach($trendingproducts as $item)
              {
                ?>
                <div class="item">
                <a href="product-view.php?product=<?=  $item['slug']; ?>">
                <div class="card shadow">
                     <div class="card-body">
             
                     <img src="uploads/<?=  $item['image']; ?>" alt="category name" class="w-100" >
                     <h6 class="text-center"><?=  $item['name']; ?></h6>
                     </div>
                     
                 </div>
                 </a> 
                </div>
               
             
                 <?php
              }
            }
?>
</div>


</div>    

</div>
</div>
</div>

<div class="py-5 bg-f2f2f2">
    <div class="container">
    <div class="row ">

    <div class="col-md-12">
     <h4>about US</h4>
     <div class="underline mb-2"></div>
     <p>
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe odio quae voluptatibus aliquam aperiam architecto reiciendis amet modi. Sit nisi praesentium deleniti repudiandae ipsam autem veritatis soluta obcaecati. Debitis, ipsa.
     </p>

     <p>
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe odio quae voluptatibus aliquam aperiam architecto reiciendis amet modi. Sit nisi praesentium deleniti repudiandae ipsam autem veritatis soluta obcaecati. Debitis, ipsa.
      <br>
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe odio quae voluptatibus aliquam aperiam architecto reiciendis amet modi. Sit nisi praesentium deleniti repudiandae ipsam autem veritatis soluta obcaecati. Debitis, ipsa.
      
    </p>
    
  
</div>    

</div>
</div>
</div>

<div class="py-5 bg-dark">
    <div class="container">
    <div class="row ">

    <div class="col-md-3">
     <h4 class="text-white">flipzon</h4>
     <div class="underline mb-2"></div>
    <a href="index.php" class="text-white"><i class="fa fa-angle-right"></i>home</a> <br>
    <a href="#" class="text-white"><i class="fa fa-angle-right"></i>About US</a> <br>
    <a href="cart.php" class="text-white"><i class="fa fa-angle-right"></i>my cart</a> <br>
    <a href="categories.php" class="text-white"><i class="fa fa-angle-right"></i>our collection</a> 
    
    
</div>  
<div class="col-md-3">
  <h4 class="text-white">Address</h4>
  <p class="text-white">
    #24, grund flower,
    2nd street, xyz layout,
    junagadh,india.
  </p>
  <a href="tel:+911234567890" class="text-white"><i class="fa fa-phone"></i> +91 1234567890 </a> <br>
  <a href="mailto:flipzon@gmail.com" class="text-white"><i class="fa fa-envelope"></i> flipzon@gmail.com </a>
</div> 

<div class="col-md-6">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14844.33507589065!2d70.42076529857057!3d21.543579583800213!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3957f8a0ab1acf13%3A0x664e95497865a6b4!2sKhalilpur%2C%20Gujarat%20362002!5e0!3m2!1sen!2sin!4v1702655191577!5m2!1sen!2sin" class="w-100" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

</div>
</div>
</div>

<div class="py-2 bg-danger">
<div class="text-center">
  <p class="mb-0 text-white">All rights reserved. copyright @  ankit coder - <?= date('Y') ?></p>
</div>
</div>


    <?php include("includes/footer.php"); ?>

    <script>
      $(document).ready(function () {
        $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
})
      });
    </script>

  