<?php date_default_timezone_set('Africa/Kampala');// change according timezone
              $currentTime = date( 'Y-m-d', time() );

              // echo $currentTime;
              ?>


<section class="mt-8" style="margin-top: 170px!important;">
      <div class="container">
        <!-- Breadcrumbs -->
        <ol class="breadcrumb justify-content-center">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Contact</li>
        </ol>
        <div class="text-center">
            <h1 class="display-4 font-weight-bold letter-spacing-5 text-capitalize">Just Ask and Get Answers!</h1>
            <div class="row">   
            <div class="col-xl-8 offset-xl-2 my-4"><p class="lead text-muted">Are you curious about something? Or you have a complaint regarding our products? Your questions and comments are important to us! Please feel free to leave a message, and we will get back to you as soon as possible.</p></div>
          </div>
        </div>
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container">
    <header class="mb-5">
          <h2 class="text-uppercase h5 text-center">Contact form</h2>
        </header>
        <div class="row">
          <div class="col-md-7 mb-5 mb-md-0 mx-auto">
            <?php if($this->session->flashdata('item')){
             $message =  $this->session->flashdata('item');
             }
              ?>
              <div class="<?php if(!empty($message)) echo $message['class']; ?>"><?php if(!empty($message)) echo $message['message']; ?></div>
            <form id="contact-form" method="post" action="<?php echo base_url('contact/'); ?>" class="form">
              
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="name" class="form-label">Your firstname <span class="important-field">*</span></label>
                      <input type="text" name="cnt_fname" id="name" placeholder="Enter your firstname" required="required" class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="surname" class="form-label">Your lastname <span class="important-field">*</span></label>
                      <input type="text" name="cnt_lname" id="surname" placeholder="Enter your  lastname" required="required" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="email" class="form-label">Your email <span class="important-field">*</span></label>
                  <input type="email" name="cnt_email" id="email" placeholder="Enter your  email" required="required" class="form-control">
                </div>
                <div class="form-group">
                  <label for="message" class="form-label">Your message for us <span class="important-field">*</span></label>
                  <textarea rows="4" name="cnt_message" id="message" placeholder="Enter your message" required="required" class="form-control"></textarea>
                </div>
                <button type="submit" class="btn btn-outline-dark">Send message</button> 
            <div class="mt-3">
                <p class="text-muted">Field marked with<span class="important-field">&nbsp;*&nbsp;</span>are important.
            </div>          
            </form>
          </div>
    </div>
</section>


<section>
<!-- <div id="map"></div>
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCGwlW3G3Fd-ecH7uQCuIbwczcp6rbVV50&callback=initMap">
    </script> -->
</section>