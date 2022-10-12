<div id="mark_default<?php echo $image->id; ?>" class="modal fade" role="dialog" role="dialog" data-backdrop="false">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Make Image Product Cover</h4>
      </div>

      <div class="modal-body justify-content-center">
      
              <div class="container">
                  <h5>Make this image the default for this product? </h5>

                  <img src="<?php echo base_url(); ?>assets/img/products/<?php echo $image->image; ?>" width="200px">
              </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <a href ="<?php echo base_url()?>admin/setDefaultImage?img=<?php echo $image->id; ?>&pid=<?php echo $product->pid?>" class="btn btn-success"><i class="fas fa-check" style="color:red;"></i> Continue</a>
      </div>
    </div>

  </div>
</div>