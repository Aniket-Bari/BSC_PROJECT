<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Add Product/Spare Part Master</h2>
        <ol class="breadcrumb">
            <li>
                <a href="<?php echo base_url('admin/dashboard') ?>">Home</a>
            </li>
            <li>
                <a href="<?php echo base_url('admin/product_master') ?>">Product Master</a>
            </li>
            <li class="active">
                <strong>Add</strong>
            </li>
        </ol>
    </div>
    <div class="col-lg-2">

    </div>
</div>


<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5 class="card-title"><?php echo $pageTitle ?></h6>&nbsp;&nbsp;&nbsp;&nbsp;<em
                            class="text-danger">(
                            * indicates mandatory fields )</em></h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <div class="row">
                        <div class="col-sm-3">
                            <form method="post" class="form-horizontal"
                                action="<?php echo base_url('admin/product_master') ?>">
                                <!-- Error Alert -->
                                <div class="alert alert-danger text-center" role="alert" id="error_alert"
                                    style="<?php echo ($this->session->flashdata('error_msg')) ? '' : 'display:none;' ?>">
                                    <button type="button" class="close" data-dismiss="alert"
                                        aria-hidden="true">×</button>
                                    <span
                                        id="error_msg"><?php echo ($this->session->flashdata('error_msg')) ? $this->session->flashdata('error_msg') : ''; ?></span>
                                </div>

                                <!-- Success Alert -->
                                <div class="alert alert-success text-center" role="alert" id="success_alert"
                                    style="<?php echo ($this->session->flashdata('success_msg')) ? '' : 'display:none;' ?>">
                                    <button type="button" class="close" data-dismiss="alert"
                                        aria-hidden="true">×</button>
                                    <span
                                        id="success_msg"><?php echo ($this->session->flashdata('success_msg')) ? $this->session->flashdata('success_msg') : ''; ?></span>
                                </div>

                                <div class="form-group">
                                    <label><b class="text-danger">*</b>Type:</label>
                                    <select class="select2 form-control custom-select" id="type" name="type[]">
                                        <option value="">Select Type</option>
                                        <option value="Type 1">Type 1</option>
                                        <option value="Type 2">Type 2</option>
                                    </select>
                                    <?php echo form_error('type', '<div class="invalid-feedback">', '</div>'); ?>
                                </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="form-group">
                                <label><b class="text-danger">*</b>Category:</label>
                                <select class="select2 form-control custom-select" id="category" name="category[]">
                                    <option value="">Select Type</option>
                                    <option value="Type 1">Type 1</option>
                                    <option value="Type 2">Type 2</option>
                                </select>
                                <?php echo form_error('category', '<div class="invalid-feedback">', '</div>'); ?>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="form-group">
                                <label><b class="text-danger">*</b>Product Name:</label>
                                <input type="text" name="product_name" id="product_name"
                                    class="form-control <?php echo (form_error('product_name')) ? 'is-invalid' : '' ?>"
                                    placeholder="Enter Product Name" value="<?php echo set_value('product_name'); ?>">
                                <?php echo form_error('product_name', '<div class="invalid-feedback">', '</div>'); ?>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="form-group">
                                <label><b class="text-danger">*</b>Specification:</label>
                                <input type="text" name="specification" id="specification"
                                    class="form-control <?php echo (form_error('specification')) ? 'is-invalid' : '' ?>"
                                    placeholder="Enter Specification"
                                    value="<?php echo (!set_value('specification')) ? '' : set_value('specification'); ?>">
                                <?php echo form_error('specification', '<div class="invalid-feedback">', '</div>'); ?>
                            </div>
                        </div>

                        <div class="col-sm-2">
                            <div class="form-group">
                                <label><b class="text-danger">*</b>Unit:</label>
                                <select class="select2 form-control custom-select" id="unit" name="unit[]">
                                    <option value="">Select Type</option>
                                    <option value="Type 1">Type 1</option>
                                    <option value="Type 2">Type 2</option>
                                </select>
                                <?php echo form_error('unit', '<div class="invalid-feedback">', '</div>'); ?>
                                </select>
                                <?php echo form_error('unit', '<div class="invalid-feedback">', '</div>'); ?>
                            </div>
                        </div>
                        <div class="col-sm-1">
                            <div class="form-group">
                                <button type="button"  class="btnspace btn btn-primary btn-outline-secondary">+</button>
                             </div>   
                        </div>

                        <div class="col-sm-2">
                            <div class="form-group">
                                <label><b class="text-danger">*</b>Brand:</label>
                                <select class="select2 form-control custom-select" id="brand" name="brand[]">
                                    <option value="">Select Type</option>
                                    <option value="Type 1">Type 1</option>
                                    <option value="Type 2">Type 2</option>
                                </select>
                                <?php echo form_error('brand', '<div class="invalid-feedback">', '</div>'); ?>
                                </select>
                                <?php echo form_error('brand', '<div class="invalid-feedback">', '</div>'); ?>
                            </div>
                        </div>
                        <div class="col-sm-1">
                            <div class="form-group">
                                <button type="button"  class="btnspace btn btn-primary btn-outline-secondary">+</button>
                             </div>   
                        </div>

                        <div class="col-sm-2">
                            <div class="form-group">
                                <label><b class="text-danger">*</b>HSN/SAC Code:</label>
                                <select class="select2 form-control custom-select" id="hsn_sac_code"
                                    name="hsn_sac_code[]">
                                    <option value="">Select Type</option>
                                    <option value="Type 1">Type 1</option>
                                    <option value="Type 2">Type 2</option>
                                </select>
                                <?php echo form_error('hsn_sac_code', '<div class="invalid-feedback">', '</div>'); ?>
                            </div>
                        </div>
                        <div class="col-sm-1">
                            <div class="form-group">
                                <button type="button"  class="btnspace btn btn-primary btn-outline-secondary">+</button>
                             </div>   
                        </div>

                        <div class="col-sm-3">
                            <div class="form-group">
                                <label><b class="text-danger">*</b>Price/Amount:</label>
                                <input type="text" name="price" id="price"
                                    class="form-control <?php echo (form_error('price')) ? 'is-invalid' : '' ?>"
                                    placeholder="Enter Price/Amount" value="<?php echo set_value('price'); ?>">
                                <?php echo form_error('price', '<div class="invalid-feedback">', '</div>'); ?>
                            </div>
                        </div>


                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label><b class="text-danger">*</b>Opening Stock:</label>
                                <input type="text" name="opening_stock" id="opening_stock"
                                    class="form-control <?php echo (form_error('opening_stock')) ? 'is-invalid' : '' ?>"
                                    placeholder="Enter Opening Stock" value="<?php echo set_value('opening_stock'); ?>">
                                <?php echo form_error('opening_stock', '<div class="invalid-feedback">', '</div>'); ?>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>Warranty Details:</label>
                                <input type="text" name="warranty_details" id="warranty_details"
                                    class="form-control <?php echo (form_error('warranty_details')) ? 'is-invalid' : '' ?>"
                                    placeholder="Enter Warranty Details"
                                    value="<?php echo (!set_value('warranty_details')) ? '' : set_value('warranty_details'); ?>">
                                <?php echo form_error('warranty_details', '<div class="invalid-feedback">', '</div>'); ?>
                            </div>
                        </div>
                       
                        <div class="col-sm-3">
                            <div class="form-group">
                                <button class="btn btn-primary" type="submit" >Save</button>
                                <button class="btn btn-white" type="button"
                                    onclick="window.location.href='<?php echo base_url('admin/Product_Master'); ?>'">Cancel</button>

                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>