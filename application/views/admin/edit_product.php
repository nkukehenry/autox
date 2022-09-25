<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Add Product</h4>
                    </div>
                    <div class="content">


                        <?php include 'includes/product_import.php' ?>


                        <form enctype="multipart/form-data" method="post" action="<?php echo base_url('admin/insertProduct'); ?>">
                            <input type="hidden" name="pid" value="<?php echo $product->pid?>">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Product Name</label>
                                        <input type="text" class="form-control" placeholder="Enter Product Name" value="<?php echo $product->pname?>" required name="productName" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="category">Category</label>
                                        <select class="form-control" name="category" required>
                                            <?php foreach ($categories as $category): ?>
                                            <option <?php echo ($category->id == $product->category)?"selected":""?>
                                             value="<?=$category->id?>"><?php echo $category->category_name; ?></option>
                                            <?php endforeach; ?>
                                            
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="subcategory">Ranking</label>
                                        <select class="form-control" name="rank_no" required>
                                            <?php foreach ($ranks as $rank): ?>
                                                <option 
                                                <?php echo ($rank->rank_no == $product->rank_no)?"selected":""?>
                                                value="<?=$rank->rank_no?>">
                                                    <?php echo $rank->rank_name; ?>
                                                </option>
                                            <?php endforeach; ?>
                                            
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Price</label>
                                        <input type="number" class="form-control" placeholder="Product Price" required name="price" value="<?php echo $product->price?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Discount</label>
                                        <input type="number" class="form-control" placeholder="Discount of Product" value="<?php echo $product->discount?>" name="discount">
                                    </div>
                                </div>
                            </div>
                             <div class="row">
                                <div class="col-md-12">
                                 <div class="form-group">
                                    <label>Product Description</label>
                                    <textarea name="description" placeholder="Description" class="form-control"><?php echo $product->description?></textarea>
                                </div>
                                </div>
                             </div>

                            <div class="row">

                                <?php foreach ($product->images as $image): ?>
                                <div class="col-md-4">
                                    <img src="<?php echo base_url(); ?>assets/img/products/<?php echo $image->image; ?>" width="200px">
                                    <br>
                                     <a href="#delete_image<?php echo $image->id; ?>" data-toggle="modal" class="text-danger">Remove</a>
                                </div>
                               <?php

                                include('includes/delete_image_modal.php');

                                endforeach; ?>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Upload More Images</label>
                                        <input type="file" class="form-control" required name="image[]" multiple="multiple">
                                    </div>
                                </div>

                            </div>                             
                        
                            <button type="submit" class="btn btn-info btn-fill pull-right">Add Product</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
    
        </div>
    </div>
</div>