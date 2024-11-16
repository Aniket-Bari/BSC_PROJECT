<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Add EOD Inventory Reporting Management</h2>
        <ol class="breadcrumb">
            <li>
                <a href="<?php echo base_url('admin/dashboard') ?>">Home</a>
            </li>
            <li>
                <a href="<?php echo base_url('admin/eod_inventory') ?>">EOD Inventory Reporting Management</a>
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
                    <h5 class="card-title">
                        <!-- <?php echo $pageTitle ?> -->
                        EOD Inventory Reporting
                        </h6>&nbsp;&nbsp;&nbsp;&nbsp;<em class="text-danger">(
                            * indicates mandatory fields )</em>
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
                                action="<?php echo base_url('admin/eod_inventory') ?>">
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
                                    <label><b class="text-danger">*</b>Technician Name:</label>
                                    <input type="text" name="technician_name" id="technician_name"
                                        class="form-control <?php echo (form_error('technician_name')) ? 'is-invalid' : '' ?>"
                                        placeholder="Enter Techician Name"
                                        value="<?php echo set_value('technician_name'); ?>" readonly required>
                                    <?php echo form_error('technician_name', '<div class="invalid-feedback">', '</div>'); ?>
                                    <!-- <select name="technician_name" id="technician_name"
                                        class="select2 form-control custom-select" required> -->
                                    <!-- Populate with technician options from database -->
                                    <!-- <?php foreach ($technicians as $technician): ?>
                                            <option value="<?= $technician->id ?>"><?= $technician->name ?></option>
                                        <?php endforeach; ?>
                                    </select> -->
                                </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="form-group">
                                <label><b class="text-danger">*</b>Toolkit ID:</label>
                                <input type="text" name="toolkit_id[]" id="toolkit_id"
                                    class="form-control <?php echo (form_error('toolkit_id')) ? 'is-invalid' : '' ?>"
                                    placeholder="Enter Toolkit ID" value="<?= uniqid('TK') ?>" readonly required>
                                <?php echo form_error('toolkit_id', '<div class="invalid-feedback">', '</div>'); ?>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>EOD Report Date:</label>
                                <input type="text" name="eod_report_date" id="eod_report_date"
                                    class="form-control <?php echo (form_error('eod_report_date')) ? 'is-invalid' : '' ?>"
                                    placeholder="Enter EOD Report Date" value="<?php echo date('Y-m-d'); ?>" readonly
                                    required>
                                <?php echo form_error('eod_report_date', '<div class="invalid-feedback">', '</div>'); ?>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="form-group">
                                <label><b class="text-danger">*</b>Inventory Items Used:</label>
                                <select name="inventory_items_used[]" id="inventory_items_used"
                                    class="select2 form-control custom-select" multiple required>
                                    <option value="">Select Option</option>
                                    <option value="Item 1">Item 1</option>
                                    <option value="Item 2">Item 2</option>
                                </select>

                                <?php echo form_error('inventory_items_used', '<div class="invalid-feedback">', '</div>'); ?>
                                <!-- <select id="inventory_items_used" name="inventory_items_used[]" multiple required>
                                    <?php foreach ($inventory_items as $item): ?>
                                        <option value="<?= $item ?>"><?= $item ?></option>
                                    <?php endforeach; ?>
                                </select> -->
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="form-group">
                                <label><b class="text-danger">*</b>Quantity Used:</label>
                                <input type="number" name="quantity_used" id="quantity_used"
                                    class="form-control <?php echo (form_error('quantity_used')) ? 'is-invalid' : '' ?>"
                                    placeholder="Enter Quantity Used"
                                    value="<?php echo (!set_value('quantity_used')) ? '' : set_value('quantity_used '); ?>"
                                    min="0" required>
                                <?php echo form_error('quantity_used', '<div class="invalid-feedback">', '</div>'); ?>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="form-group">
                                <label><b class="text-danger">*</b>Remaining Items:</label>
                                <select name="remaining_items[]" id="remaining_items"
                                    class="select2 form-control custom-select" required>
                                    <option value="">Select Option</option>
                                    <option value="Item 1">Item 1</option>
                                    <option value="Item 2">Item 2</option>
                                    <option value="Item 3">Item 3</option>
                                    <option value="Item 4">Item 4</option>
                                </select>
                                <?php echo form_error('remaining_items', '<div class="invalid-feedback">', '</div>'); ?>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="form-group">
                                <label><b class="text-danger">*</b>Quantity Remaining:</label>
                                <input type="number" name="quantity_remaining" id="quantity_remaining"
                                    class="form-control <?php echo (form_error('quantity_remaining')) ? 'is-invalid' : '' ?>"
                                    placeholder="Enter Quantity Remaining"
                                    value="<?php echo (!set_value('quantity_remaining')) ? '' : set_value('quantity_remaining '); ?>"
                                    min="0" required>
                                <?php echo form_error('quantity_remaining', '<div class="invalid-feedback">', '</div>'); ?>

                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>Remarks:</label>
                                <textarea name="remarks" id="remarks" placeholder="Enter any remarks or comments"
                                    class="form-control <?php echo (form_error('remarks')) ? 'is-invalid' : '' ?>"></textarea>
                                <?php echo form_error('remarks', '<div class="invalid-feedback">', '</div>'); ?>
                            </div>
                        </div>

                        <br>
                        <!-- Submit and Cancel Buttons -->
                        <div class="col-sm-4 col-sm-offset-2">
                            <div class="form-group">
                                <button class="btn btn-white" type="button"
                                    onclick="window.location.href='<?php echo base_url('admin/Vendor'); ?>'">Cancel</button>
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