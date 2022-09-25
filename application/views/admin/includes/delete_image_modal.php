
<div id="delete_image<?php echo $image->id; ?>" class="modal fade" role="dialog" role="dialog" data-backdrop="false">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Delete Image</h4>
      </div>

      <div class="modal-body">
      
              <div class="container">
                  <h5>Are your sure you want to remove this image? </h5>
              </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <a href ="<?php echo base_url()?>admin/deleteImage?id=<?php echo $image->id?>&pid=<?php echo $product->pid?>" class="btn btn-danger"><i class="fas fa-trash-alt" style="color:red;"></i> Delete</a>
      </div>
    </div>

  </div>
</div>