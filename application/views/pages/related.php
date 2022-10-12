
<section style=" background-color: #f2f2f2;">
  <div class="container">
    <div class="row">
    
    <div class="mx-auto">
        <h3 class="letter-spacing-5 text-center" style="color:orange; font-weight: bold; text-decoration: none; padding-top:40px;">Checkout these too!</h3>
    </div>
    <div class="row  mb-5 px-5">
     <!-- product -->
     <?php foreach ($products as $product):

      if($product->pid !== $current_product_id ):

      ?>

     <div class="item col-md-3 col-lg-3  col-sm-6 col-xs-12 box">
        <div class="product-image product-bg" style="background-image: url(<?php echo base_url() . 'assets/img/products/'. $product->images[0]->image; ?>);" onclick="('#<?=$product->pid?>').click();" >
         <div class="product-hover-overlay">
            <a href="<?php echo base_url() ?>product/<?=$product->pid?>" class="product-hover-overlay-link"></a>
              <div class="product-hover-overlay-buttons">
                <a id="<?=$product->pid?>" href="<?php echo base_url() ?>product/<?=$product->pid?>" class="btn btn-outline-dark btn-buy"><i class="fa-search fa"></i>
                <span>View</span></a>
              </div>
          </div>
        </div>

         <div class="py-2">
            <p class="text-muted text-sm mb-1"><?=$product->pname?></p>
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

     <?php endif; endforeach; ?>
   
   <!-- /product -->
        </div>
     </div>
  </div>
</section>