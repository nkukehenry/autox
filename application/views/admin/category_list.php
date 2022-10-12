<?php 
// print_r($categorys);

?>

<div class="content">
    <div class="container-fluid">

        <span><?php echo $this->session->flashdata('message'); ?></span>

        <?php    include('includes/edit_category_modal.php'); ?>

    <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Category List</h4>
                        <a href ="#category_form" class="btn  btn-info mt-5" data-toggle="modal">
                            Add Category
                        </a>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <table class="table table-hover table-striped">
                            <thead>
                                <th>Category</th>
                                <th></th>
                            </thead>
                            <tbody>
                                <?php foreach ($categories as $category) { ?>
                                    <tr>
                                        <td><?php echo $category->category_name; ?></td>
                                        <td>
                                            <a href ="#category_form<?php echo $category->id ?>" data-toggle="modal">
                                                <i class="fas fa-edit" style="color:navy;"></i>
                                            </a>
                                            &nbsp;&nbsp;&nbsp;
                                            <a href ="#delete_category<?php echo $category->id; ?>" data-toggle="modal">
                                                <i class="fas fa-trash-alt" style="color:red;"></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php

                                    include('includes/delete_category_modal.php');
                                    include('includes/edit_category_modal.php');
                                    
                                } ?>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>