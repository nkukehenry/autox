
<section class="my-4 py-20" style="margin-top: 120px!important;background-color: #f2f2f2;">
  <div class="container">
    <div class="row">
    
    <div class="py-5 mx-auto w-100">
        <h2 class="display-4 letter-spacing-5 text-center"><?php echo settings()->main_heading; ?></h2> 
        <h3 class="display-6 letter-spacing-5 text-center" style="color:orange; font-weight: bold; text-decoration: none;">
           <?php echo settings()->order_prefix; ?> <a href="tel:<?php echo settings()->phone_number; ?>"><?php echo settings()->phone_number; ?></a>
      </h3> 
    </div>
     
    <div class="row  mb-5 px-5 w-100">
      <form class="col-lg-12" action="<?php echo base_url(); ?>shop/index" method="get">
         <div class="form-group col-md-12">
          <input type="text" placeholder="Search" value="<?php echo @$search->pname;?>" name="pname" class="form-control" />
        </div>

         <?php if(count($products)==0): ?>
          <h3 class="text-muted text-center w-100"> 
            <i class="fa fa-info-circle"></i><br> 
            No records found
            <br>
            <a href="<?php echo base_url(); ?>shop/index" class="btn btn-sm btn-dark text-white">Click here to show all </a>
          </h3>
         <?php endif; ?>

      </form>
     <!-- product -->
     <?php foreach ($products as $product): ?>

     <div class="item col-md-4 col-lg-3  col-sm-6 col-xs-12 box" style="min-width: 200px;">

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

     <?php echo $links; ?>
   
   <!-- /product -->
        </div>
     </div>
  </div>
</section>