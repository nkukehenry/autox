
<section class="my-4 py-20" style="margin-top: 120px!important;background-color: #f2f2f2;">
  <div class="container">
    <div class="row">
    
    <div class="py-5 mx-auto">
        <h2 class="display-4 letter-spacing-5 text-center">Pimp your ride!</h2> 
        <h3 class="display-6 letter-spacing-5 text-center" style="color:orange; font-weight: bold; text-decoration: none;">
        Orders on <a href="tel:<?php echo settings()->phone_number; ?>"><?php echo settings()->phone_number; ?></a>
      </h3> 
    </div>
    <div class="row  mb-5 px-5">

     <!-- product -->
     <?php foreach ($products as $product): ?>

     <div class="item col-md-4 col-lg-3  col-sm-6 col-xs-12 box">

         <div class="product-image product-bg" style="background-image: url(<?php echo base_url() . 'assets/img/products/'. $product->images[0]->image; ?>);" >
         <div class="product-hover-overlay">
            <a href="<?php echo base_url() ?>product/<?=$product->pid?>" class="product-hover-overlay-link"></a>
              <div class="product-hover-overlay-buttons">
                <a href="<?php echo base_url() ?>product/<?=$product->pid?>" class="btn btn-outline-dark btn-buy"><i class="fa-search fa"></i>
                <span>View</span></a>
              </div>
          </div>
        </div>

         <div class="py-2">
            <p class="text-bold text-lg mb-1"><?=$product->pname?></p>
            <h3 class="h6 text-uppercase mb-1"><a href="tel:<?php echo settings()->phone_number; ?>" class="text-dark"><?php echo settings()->phone_number; ?></a></h3>
            <span class="text-muted"> 
              <?php if($product->price>0): ?>
                  UGX <?php echo number_format($product->price); ?>
              <?php else: ?>
                CALL TO ORDER
              <?php endif; ?>
            </span>
         </div>

       </div>

     <?php endforeach; ?>
   
   <!-- /product -->
        </div>
     </div>
  </div>
</section>