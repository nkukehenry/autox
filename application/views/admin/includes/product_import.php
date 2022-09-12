<button type="button" class="btn btn-info" data-toggle="modal" data-target="#import-modal">Import Products</button>

<!-- Modal -->
<div id="import-modal" class="modal fade" role="dialog" role="dialog" data-backdrop="false">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Import Products</h4>
      </div>

    <form enctype="multipart/form-data" method="post" action="<?php echo base_url('admin/importProducts'); ?>">
      <div class="modal-body">
      
              <div class="row">
                  <div class="col-md-12">
                      <div class="form-group">
                          <label>Choose Zip File</label>
                          <input type="file" class="form-control" placeholder="Choose Zip File" required name="zip">
                      </div>
                      <small class="text-danger">Products Images should be in folders with the Image name as the Folder name</small>
                  </div>
              </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-success">Import</button>
      </div>

        </form>
    </div>

  </div>
</div>