<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Quotation Form</h2>
        <ol class="breadcrumb">
            <li>
                <a href="<?php echo base_url('admin/dashboard') ?>">Home</a>
            </li>
            <li>
                <a href="<?php echo base_url('admin/quotation') ?>">Quotation</a>
            </li>
            <!-- <li class="active">
                            <strong>Add</strong>
                        </li> -->
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
                    <h5 class="card-title">Quotation Form
                        <!-- <?php echo $pageTitle ?> -->
                        </h6>&nbsp;&nbsp;&nbsp;&nbsp;<em class="text-danger">( * indicates mandatory fields )</em>
                    </h5>
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
                                action="<?php echo base_url('admin/quotation') ?>">
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
                                    <label><b class="text-danger">*</b>Quotation Number:</label>
                                    <input type="text" name="quotation_number[]" id="quotation_number"
                                        class="form-control <?php echo (form_error('quotation_number')) ? 'is-invalid' : '' ?>"
                                        placeholder="Enter Quotation Number" value="<?= uniqid('QN') ?>" readonly>
                                    <?php echo form_error('quotation_number', '<div class="invalid-feedback">', '</div>'); ?>
                                </div>
                        </div>

                        <!-- <div class="col-sm-3">
                            
                        </div> -->

                        <div class="col-sm-3">
                            <div class="form-group">
                                <label><b class="text-danger">*</b>Lead/Customer Name:</label>
                                <select name="lead_customer_name" id="lead_customer_name"
                                    class="select2 form-control custom-select" required>
                                    <option value="">Select Option</option>
                                    <option value="Lead">Lead</option>
                                    <option value="Customer">Customer</option>
                                </select>
                                <?php echo form_error('lead_customer_name', '<div class="invalid-feedback">', '</div>'); ?>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="form-group">
                                <label><b class="text-danger">*</b>Project/AMC:</label>
                                <select name="project_amc" id="project_amc" class="select2 form-control custom-select"
                                    required>
                                    <option value="">Select Option</option>
                                    <option value="One-time Project">One-time Project</option>
                                    <option value="Recurring AMC">Recurring AMC</option>
                                </select>
                                <?php echo form_error('project_amc', '<div class="invalid-feedback">', '</div>'); ?>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>Quotation Date:</label>
                                <input type="text" name="quotation_date" id="quotation_date"
                                    class="form-control <?php echo (form_error('quotation_date')) ? 'is-invalid' : '' ?>"
                                    placeholder="Enter Quotation Date" value="<?php echo date('Y-m-d'); ?>" readonly>
                                <?php echo form_error('quotation_date', '<div class="invalid-feedback">', '</div>'); ?>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="form-group">
                                <label><b class="text-danger">*</b>Valid Until:</label>
                                <input type="date" name="valid_until[]" id="valid_until"
                                    class="form-control <?php echo (form_error('valid_until')) ? 'is-invalid' : '' ?>"
                                    placeholder="Enter Valid Until"
                                    value="<?php echo (!set_value('valid_until')) ? '' : set_value('valid_until'); ?>">
                                <?php echo form_error('valid_until', '<div class="invalid-feedback">', '</div>'); ?>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="form-group">
                                <label><b class="text-danger">*</b>Item/Service:</label>
                                <select name="item_service" id="item_service" class="select2 form-control custom-select"
                                    multiple required>
                                    <option value="">Select Option</option>
                                    <option value="Item 1">Item 1</option>
                                    <option value="Item 2">Item 2</option>
                                </select>
                                <?php echo form_error('item_service', '<div class="invalid-feedback">', '</div>'); ?>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="form-group">
                                <label><b class="text-danger">*</b>Quantity:</label>
                                <input type="number" name="quantity[]" id="quantity"
                                    class="form-control <?php echo (form_error('quantity')) ? 'is-invalid' : '' ?>"
                                    placeholder="Enter Quantity"
                                    value="<?php echo (!set_value('quantity')) ? '' : set_value('quantity'); ?>"
                                    required>
                                <?php echo form_error('quantity', '<div class="invalid-feedback">', '</div>'); ?>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="form-group">
                                <label><b class="text-danger">*</b>Unit Price:</label>
                                <input type="number" name="unit_price[]" id="unit_price"
                                    class="form-control <?php echo (form_error('unit_price')) ? 'is-invalid' : '' ?>"
                                    placeholder="Enter Unit Price"
                                    value="<?php echo (!set_value('unit_price')) ? '' : set_value('quantity'); ?>"
                                    required>
                                <?php echo form_error('unit_price', '<div class="invalid-feedback">', '</div>'); ?>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>Discount (Optional):</label>
                                <input type="number" name="discount" id="discount"
                                    class="form-control <?php echo (form_error('discount')) ? 'is-invalid' : '' ?>"
                                    placeholder="Enter Discount (Optional)"
                                    value="<?php echo (!set_value('discount')) ? '' : set_value('discount'); ?>">
                                <?php echo form_error('discount', '<div class="invalid-feedback">', '</div>'); ?>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>Tax (Optional):</label>
                                <input type="number" name="tax" id="tax"
                                    class="form-control <?php echo (form_error('tax')) ? 'is-invalid' : '' ?>"
                                    placeholder="Enter Tax (Optional)"
                                    value="<?php echo (!set_value('tax')) ? '' : set_value('tax'); ?>">
                                <?php echo form_error('tax', '<div class="invalid-feedback">', '</div>'); ?>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>Total Amount:</label>
                                <input type="number" name="total_amount" id="total_amount"
                                    class="form-control <?php echo (form_error('total_amount')) ? 'is-invalid' : '' ?>"
                                    placeholder="Enter Total Amount"
                                    value="<?php echo (!set_value('total_amount')) ? '' : set_value('total_amount'); ?>"
                                    readonly>
                                <?php echo form_error('total_amount', '<div class="invalid-feedback">', '</div>'); ?>
                            </div>
                        </div>

                    </div>
                    <div class="row">

                        <br>
                        <!-- Submit and Cancel Buttons -->
                        <div class="col-sm-4 col-sm-offset-2">
                            <div class="form-group">
                                <button class="btn btn-white" type="button"
                                    onclick="window.location.href='<?php echo base_url('admin/Quotation'); ?>'">Cancel</button>
                                <button class="btn btn-primary" type="submit">Save</button>
                            </div>
                        </div>
                        <br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>