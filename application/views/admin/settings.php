<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Settings</h4>
                    </div>
                    <div class="content">


                        <?php $settings = settings(); ?>


                        <form enctype="multipart/form-data" method="post" action="<?php echo base_url('admin/save_settings'); ?>">
                        
                             <div class="row">

                                <div class="col-md-6">
                                 <div class="form-group">
                                    <label>Phone Number</label>
                                    <input class="form-control" name="phone_number" value="<?php echo $settings->phone_number; ?>" ?>
                                </div>
                                </div>

                                 <div class="col-md-6">
                                 <div class="form-group">
                                    <label>Email</label>
                                    <input class="form-control" name="email" value="<?php echo $settings->email; ?>" ?>
                                </div>
                                </div>

                                <div class="col-md-12">
                                 <div class="form-group">
                                    <label>Meta Title</label>
                                    <textarea name="meta_title" placeholder="Meta Title" class="form-control"><?php echo $settings->meta_title; ?></textarea>
                                </div>
                                </div>

                                <div class="col-md-12">
                                 <div class="form-group">
                                    <label>Meta Description</label>
                                    <textarea name="meta_description" placeholder="Meta Title" class="form-control"><?php echo $settings->meta_description; ?></textarea>
                                </div>
                                </div>

                                 <div class="col-md-12">
                                 <div class="form-group">
                                    <label>Meta Keywords</label>
                                    <textarea name="meta_key_words" placeholder="Meta Keywords" class="form-control"><?php echo $settings->meta_key_words; ?></textarea>
                                </div>
                                </div>

                                <div class="col-md-12">
                                 <div class="form-group">
                                    <label>Google Analytics Script</label>
                                    <textarea name="analytics" placeholder="Google Analytics Script" class="form-control"><?php echo $settings->analytics; ?></textarea>
                                </div>
                                </div>

                             </div>                  
                        
                            <button type="submit" class="btn btn-info btn-fill pull-right">Save Changes</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
    
        </div>
    </div>
</div>