
<div id="category_form<?php echo @$category->id; ?>" class="modal fade" role="dialog" role="dialog" data-backdrop="false">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Confirm Delete</h4>
      </div>
      <form action="<?php echo base_url()?>admin/saveCategory" method="post">
      <div class="modal-body">
      <div class="form-group">
        <label>Category Name</label>
        <input class="form-control" type="text" name="category_name" value="<?php echo @$category->category_name;?>" placeholder="Category Name">
        <input type="hidden" name="id" value="<?php echo @$category->id;?>">
      </div>
             
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-danger"><i class="fas fa-save-alt"></i> Save Changes</button>
      </div>
    </form>
    </div>

  </div>
</div>