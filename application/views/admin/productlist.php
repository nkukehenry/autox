<?php 
// print_r($products);

?>

<div class="content">
    <div class="container-fluid">

        <span><?php echo $this->session->flashdata('message'); ?></span>

    <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Product List</h4>
                        
                    <form class="row" action="<?php echo base_url(); ?>admin/productlist" method="get">
                    
                     <div class="form-group col-md-3">
                      <label class="label">Product Name</label>
                      <input type="text" placeholder="Product Name" value="<?php echo @$search->pname;?>" name="pname" class="form-control" />
                    </div>

                      <div class="form-group col-md-2">
                      <label class="label">Category</label>
                      <select name="category" class="form-control form-select">
                         <option value="">All</option>
                        <?php foreach($categories as $category): ?>
                          <option value="<?php echo $category->id; ?>" <?php echo ((@$search->category==$category->id)?"selected":"");?> >
                            <?php echo $category->category_name; ?>
                          </option>
                        <?php endforeach; ?>

                      </select>
                    </div>

                    
                     <div class="form-group col-md-2">
                      <label class="label">Show (records)</label>
                      <select name="rows" class="form-control form-select">

                        <?php foreach([15,30,50,100,200,300,500] as $key => $i): ?>
                          <option value="<?php echo $i; ?>" <?php echo ((@$search->rows==$i)?"selected":"");?> >
                            <?php echo $i; ?>
                          </option>
                        <?php endforeach; ?>

                      </select>
                    </div>

                    <div class="row pt-2">
                      <div class="form-group col-md-2 mt-4">
                          <label class="label"></label>
                          <button class="btn btn-primary">Search</button>
                      </div>
                   </div>

                </form>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <table class="table table-hover table-striped">
                            <thead>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Price</th>
                                <th>Discount</th>
                                <!-- <th>Color</th> -->
                                <th>Image</th>
                                <th></th>
                            </thead>
                            <tbody>
                                <?php foreach ($products as $product) { ?>
                                    <tr>
                                        <td><?php echo $product->pid; ?></td>
                                        <td><?php echo $product->pname; ?></td>
                                        <td><?php echo $product->category->category_name; ?></td>
                                        <td><?php echo $product->price; ?></td>
                                        <td><?php echo $product->discount; ?></td>
                                        <!-- <td>   <i class="fas fa-brush" style="color:<?php echo $product->color; ?> "></i></td> -->
                                        <td><img src= "<?php echo base_url().'assets/img/products/'.$product->images[0]->image; ?>" class="img-fluid" style="height: 50px; width: 40px;"></td>
                                        <!-- <td><?php echo '<a href ="' . base_url() . 'admin/editProduct?id=' . $product->pid, '"><i class="fas fa-edit" style="color:green;"></i></a>'; ?></td> -->
                                        <td>


                                            <a href ="<?php echo base_url(); ?>admin/edit_product/<?php echo $product->pid ?>">
                                                <i class="fas fa-edit" style="color:navy;"></i>
                                            </a>
                                            &nbsp;&nbsp;&nbsp;
                                            <a href ="#delete<?php echo $product->pid; ?>" data-toggle="modal">
                                                <i class="fas fa-trash-alt" style="color:red;"></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php

                                    include('includes/delete_modal.php');
                                    
                                } ?>
                            </tbody>
                        </table>

                        <div class="pl-4"><?php echo $links; ?></div>

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>