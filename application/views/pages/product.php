<?php


  $size = $product->size;
  $sizeArr = explode(',', $size);

  ?>
  <section class="mt-8" style="margin-top: 180px;background-color: #f2f2f2;">
    <div class="container">
      <ol class="breadcrumb justify-content-center">
        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
        <li class="breadcrumb-item"><a><?php echo ucfirst($product->category->category_name); ?></a></li>
        <li class="breadcrumb-item active"><?php echo $product->pname; ?></li>
      </ol>
    </div>
    </div>
  </section>

  <section>

    <div class="container">
      <div class="row">
        <div class="col-lg-6 ">

          <div class="owl-carousel product-detail-slider owl-theme mb-5">
            <!-- product -->
            <?php foreach ($product->images as $key => $row): ?>
              
            <div class="item">
              <div class="product-detail-image">
                <img src="<?php echo base_url() . 'assets/img/products/' . $row->image; ?>" class="pimage img-fluid">
              </div>
            </div>

          <?php endforeach; ?>

            <!-- <div class="item">
              <div class="product-detail-image">
                <img src="<?php echo base_url() . 'assets/img/products/' . $product->pimage; ?>" class="pimage img-fluid">
              </div>
            </div>

            <div class="item">
              <div class="product-detail-image">
                <img src="<?php echo base_url() . 'assets/img/products/' . $product->pimage; ?>" class="pimage img-fluid">
              </div>
            </div> -->
          </div>
        </div>
        <div class="col-lg-6">
          <div>
            <!--  product Name -->
            <p class="h3 workFont"><?php echo $product->pname; ?></p>
          </div>
          <div class="mt-4 mb-3">
            <!--  product Price -->
            <h1>
              <?php if($product->price>0): ?>
                  UGX <?php echo number_format($product->price); ?>
              <?php else: ?>
                CALL TO ORDER
              <?php endif; ?>
            </h1>

            <?php if($product->discount>0): ?>
            <p id="discount-display">
              <span class="text-success font-weight-bold h3"><?php echo $product->discount; ?>% OFF</span></p>
            <p class="workFont text-muted">Inclusive of all taxes.</p>
            <?php endif; ?>

          </div>
          <!--  product Size -->
          <form>
            <?php /*
            <div class="row">
              <div class="col-sm-12 col-lg-12 detail-option mt-3">
                <h5 class="detail-option-heading">Size</h5>
                <label for="xl" class="btn btn-lg btn-outline-secondary detail-option-btn-label ml-0 
                <?php if (in_array('xl', $sizeArr, true)) { echo ""; } else { echo "disabled"; } ?>">
                  XL
                  <input type="radio" name="size" value="xl" id="xl" required class="input-invisible">
                </label>
                <label for="l" class="btn btn-lg btn-outline-secondary detail-option-btn-label  
                <?php if (in_array('l', $sizeArr, true)) { echo ""; } else { echo "disabled"; } ?> ">
                  L
                  <input type="radio" name="size" value="l" id="l" required class="input-invisible">
                </label>
                <label for="m" class="btn btn-lg btn-outline-secondary detail-option-btn-label  
                <?php if (in_array('m', $sizeArr, true)) { echo ""; } else { echo "disabled"; } ?> ">
                  M
                  <input type="radio" name="size" value="m" id="m" required class="input-invisible">
                </label>
                <label for="s" class="btn btn-lg btn-outline-secondary detail-option-btn-label  
                <?php if (in_array('s', $sizeArr, true)) { echo ""; } else { echo "disabled"; } ?> ">
                  S
                  <input type="radio" name="size" value="s" id="s" required class="input-invisible">
                </label>
                <label for="xs" class="btn btn-lg btn-outline-secondary detail-option-btn-label  
                <?php if (in_array('xs', $sizeArr, true)){ echo "";   } else {    echo "disabled"; } ?> ">
                  XS
                  <input type="radio" name="size" value="xs" id="xs" required class="input-invisible">
                </label>
                <input type="hidden" name="pid" value="<?php echo $product->pid; ?>" id="pid">
                <input type="hidden" name="price" value="<?php echo $product->price; ?>" id="price">

                
                <!-- <div class="mt-4">
                  <a href="#">
                  <p class="workFont text-muted mt-2">Size Guide</p>
                </a>

                  <h6 class="font-weight-light">Check COD Availability</h6>
                  <label for="pincode">
                    <input type="number" class="form-control mt-2" placeholder="Enter Pincode" name ="pincode" id="pincode" minlength="6" maxlength="6">
                  </label>
                 <div id ="cod">

                 </div>
                </div> -->
              </div>
            </div>

            */ ?>

            <div>
              <a href="tel:<?php echo settings()->phone_number; ?>"  class="btn btn-lg btn-outline-dark text-uppercase mt-5" id="addToCart"><i class="fa fa-call mr-2"></i>Call Us <?php echo settings()->phone_number; ?></a>
            </div>
          </form>
        </div>

      </div>
    </div>
    </div>
  </section>



<script>

let pincode = document.querySelector('#pincode');

function checkPinCode()
{
 let pincodeValue = pincode.value;
$.ajax({
            type: 'POST',
            url: '<?php echo base_url().'shopping/checkPinCode/'; ?>',
            dataType: "JSON",
            data: {
              pincode : pincodeValue
            },

            success: function(data) {
             JSON.stringify(data);
              
                $('#cod').html(data.text);
               
            },
            error: function(jqXhr, textStatus, errorMessage) {
                console.log("Error: ", errorMessage);
            }
        });
}      

pincode.addEventListener('keyup', checkPinCode);


</script>