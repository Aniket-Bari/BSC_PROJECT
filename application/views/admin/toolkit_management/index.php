<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Add Toolkit Management</h2>
        <ol class="breadcrumb">
            <li>
                <a href="<?php echo base_url('admin/dashboard') ?>">Home</a>
            </li>
            <li>
                <a href="<?php echo base_url('admin/toolkit_management') ?>">Toolkit Management</a>
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
                        Toolkit Management
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
                            <form method="post" class="form-horizontal" action="<?php echo base_url('admin/vendor') ?>">
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



                        </div>

                        <div class="col-sm-3">
                            <div class="form-group">
                                <label><b class="text-danger">*</b>Technician Name:</label>
                                <input type="text" name="technician_name" id="technician_name"
                                    class="form-control <?php echo (form_error('technician_name')) ? 'is-invalid' : '' ?>"
                                    placeholder="Enter Technician Name"
                                    value="<?php echo set_value('technician_name'); ?>" required>
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
                                    placeholder="Enter Toolkit ID" value="<?= uniqid('TK') ?>" readonly>
                                <?php echo form_error('toolkit_id', '<div class="invalid-feedback">', '</div>'); ?>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>Assigned Date:</label>
                                <input type="text" name="assigned_date" id="assigned_date"
                                    class="form-control <?php echo (form_error('assigned_date')) ? 'is-invalid' : '' ?>"
                                    placeholder="Enter Assigned Date" value="<?php echo date('Y-m-d'); ?>" readonly>
                                <?php echo form_error('assigned_date', '<div class="invalid-feedback">', '</div>'); ?>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="form-group">
                                <label><b class="text-danger">*</b>Inventory Items:</label>
                                <select name="inventory_items" id="inventory_items"
                                    class="select2 form-control custom-select" multiple required>
                                    <option value="">Select Option</option>
                                    <option value="Item 1">Item 1</option>
                                    <option value="Item 2">Item 2</option>
                                </select>

                                <?php echo form_error('inventory_items', '<div class="invalid-feedback">', '</div>'); ?>
                                <!-- <select name="inventory_items[]" id="inventory_items" multiple required>
                                     Populate with inventory items from database -->
                                <!-- <?php foreach ($inventory_items as $item): ?>
                                        <option value="<?= $item->id ?>"><?= $item->name ?></option>
                                    <?php endforeach; ?> -->
                                <!-- </select>  -->
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="form-group">
                                <label><b class="text-danger">*</b>Quantity Assigned:</label>
                                <input type="number" name="quantity_assigned[]" id="quantity_assigned"
                                    class="form-control <?php echo (form_error('quantity_assigned')) ? 'is-invalid' : '' ?>"
                                    placeholder="Enter Quantity Assigned"
                                    value="<?php echo (!set_value('quantity_assigned')) ? '' : set_value('quantity_assigned'); ?>"
                                    required>
                                <?php echo form_error('quantity_assigned', '<div class="invalid-feedback">', '</div>'); ?>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>Return Date:</label>
                                <input type="date" name="return_date[]" id="return_date"
                                    class="form-control <?php echo (form_error('return_date')) ? 'is-invalid' : '' ?>"
                                    placeholder="Enter Return Date"
                                    value="<?php echo (!set_value('return_date')) ? '' : set_value('return_date'); ?>">
                                <?php echo form_error('return_date', '<div class="invalid-feedback">', '</div>'); ?>
                            </div>
                        </div>


                        <div class="col-sm-3">
                            <div class="form-group">
                                <label><b class="text-danger">*</b>Current Status:</label>
                                <select name="current_status" id="current_status"
                                    class="select2 form-control custom-select" required>
                                    <option value="">Select Option</option>
                                    <option value="Active">Active</option>
                                    <option value="Closed">Closed</option>
                                </select>
                                <?php echo form_error('current_status', '<div class="invalid-feedback">', '</div>'); ?>
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