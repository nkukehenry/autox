
<section class="my-4 py-20" style="margin-top: 120px!important;">
  <div class="container">
    <div class="row">
    
    <div class="py-5 mx-auto">
        <h2 class="display-4 letter-spacing-5 text-center">Pimp your ride!</h2> 
        <h3 class="display-6 letter-spacing-5 text-center" style="color:orange; font-weight: bold; text-decoration: none;">
        Orders on <a href="tel:+256756287319">+256756287319</a>
      </h3> 
    </div>
    <div class="row  mb-5 px-5">

     <!-- product -->
     <?php foreach ($products as $product): ?>

     <div class="item col-md-3 col-lg-3  col-sm-6 col-xs-12">
         <div class="product-image" >
        <img src="<?php echo base_url() . 'assets/img/'. $product['pimage']; ?>" class=" img-fluid">
         <div class="product-hover-overlay">
            <a href="#" class="product-hover-overlay-link"></a>
              <div class="product-hover-overlay-buttons">
                <a href="<?php echo base_url() ?>product/<?=$product['pid']?>" class="btn btn-outline-dark btn-buy"><i class="fa-search fa"></i>
                <span>View</span></a>
              </div>
          </div>
        </div>

         <div class="py-2">
            <p class="text-muted text-sm mb-1"><?=$product['pname']?></p>
            <h3 class="h6 text-uppercase mb-1"><a href="#" class="text-dark">+256706789876</a></h3><span class="text-muted"> UGX <?=number_format($product['price'])?></span>
         </div>

       </div>

     <?php endforeach; ?>
   
   <!-- /product -->
        </div>
     </div>
  </div>
</section>