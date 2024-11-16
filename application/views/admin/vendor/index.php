<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Add Vendor</h2>
        <ol class="breadcrumb">
            <li>
                <a href="<?php echo base_url('admin/dashboard') ?>">Home</a>
            </li>
            <li>
                <a href="<?php echo base_url('admin/vendor') ?>">Vendor</a>
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
                        Vendors
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
                                <label><b class="text-danger">*</b>Vendor Name:</label>
                                <input type="text" name="vendor_name" id="vendor_name"
                                    class="form-control <?php echo (form_error('vendor_name')) ? 'is-invalid' : '' ?>"
                                    placeholder="Enter Vendor Name" value="<?php echo set_value('vendor_name'); ?>"
                                    required>
                                <?php echo form_error('vendor_name', '<div class="invalid-feedback">', '</div>'); ?>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="form-group">
                                <label><b class="text-danger">*</b>Vendor Category:</label>
                                <select name="vendor_category" id="vendor_category"
                                    class="select2 form-control custom-select" required>
                                    <option value="">Select Category</option>
                                    <option value="Equipment Supplier">Equipment Supplier</option>
                                    <option value="Service Contractor">Service Contractor</option>
                                    <option value="Maintenance Vendor">Maintenance Vendor</option>
                                </select>
                                <?php echo form_error('vendor_category', '<div class="invalid-feedback">', '</div>'); ?>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="form-group">
                                <label><b class="text-danger">*</b>Contact Person:</label>
                                <input type="text" name="contact_person[]" id="contact_person"
                                    class="form-control <?php echo (form_error('contact_person')) ? 'is-invalid' : '' ?>"
                                    placeholder="Enter Contact Person"
                                    value="<?php echo (!set_value('contact_person')) ? '' : set_value('contact_person'); ?>"
                                    required>
                                <?php echo form_error('contact_person', '<div class="invalid-feedback">', '</div>'); ?>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="form-group">
                                <label><b class="text-danger">*</b>Phone Number:</label>
                                <input type="number" name="phone_number[]" id="phone_number"
                                    class="form-control <?php echo (form_error('phone_number')) ? 'is-invalid' : '' ?>"
                                    placeholder="Enter Phone Number"
                                    value="<?php echo (!set_value('phone_number')) ? '' : set_value('phone_number'); ?>"
                                    maxlenght="10" required>
                                <?php echo form_error('phone_number', '<div class="invalid-feedback">', '</div>'); ?>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="form-group">
                                <label><b class="text-danger">*</b>Email Address:</label>
                                <input type="email" name="email[]" id="email"
                                    class="form-control <?php echo (form_error('email')) ? 'is-invalid' : '' ?>"
                                    placeholder="Enter Email Address"
                                    value="<?php echo (!set_value('email')) ? '' : set_value('email'); ?>" required>
                                <?php echo form_error('email', '<div class="invalid-feedback">', '</div>'); ?>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>Vendor Address:</label>
                                <input type="text" name="address" id="address"
                                    class="form-control <?php echo (form_error('address')) ? 'is-invalid' : '' ?>"
                                    placeholder="Enter Vendor Address" value="<?php echo set_value('address'); ?>">
                                <?php echo form_error('address', '<div class="invalid-feedback">', '</div>'); ?>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>Notes:</label>
                                <textarea name="notes" id="notes"
                                    class="form-control <?php echo (form_error('notes')) ? 'is-invalid' : '' ?>"></textarea>
                                <?php echo form_error('notes', '<div class="invalid-feedback">', '</div>'); ?>
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