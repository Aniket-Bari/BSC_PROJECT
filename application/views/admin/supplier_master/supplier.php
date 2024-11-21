<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Add Supplier Master</h2>
        <ol class="breadcrumb">
            <li>
                <a href="<?php echo base_url('admin/dashboard') ?>">Home</a>
            </li>
            <li>
                <a href="<?php echo base_url('admin/supplier_master') ?>">Supplier Master</a>
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
                                action="<?php echo base_url('admin/supplier_master') ?>">
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
                                    <label><b class="text-danger">*</b>Supplier Type:</label>
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
                                <label><b class="text-danger">*</b>Name:</label>
                                <input type="text" name="supplier_name" id="supplier_name"
                                    class="form-control <?php echo (form_error('supplier_name')) ? 'is-invalid' : '' ?>"
                                    placeholder="Enter Name" value="<?php echo set_value('supplier_name'); ?>">
                                <?php echo form_error('supplier_name', '<div class="invalid-feedback">', '</div>'); ?>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="form-group">
                                <label><b class="text-danger">*</b>Address:</label>
                                <input type="text" name="address" id="address"
                                    class="form-control <?php echo (form_error('address')) ? 'is-invalid' : '' ?>"
                                    placeholder="Enter Address" value="<?php echo set_value('address'); ?>">
                                <?php echo form_error('address', '<div class="invalid-feedback">', '</div>'); ?>
                            </div>
                        </div>

                        <div class="col-sm-2">
                            <div class="form-group">
                                <label><b class="text-danger">*</b>City:</label>
                                <select name="city" id="city"
                                    class="form-control custom-select <?php echo (form_error('city')) ? 'is-invalid' : '' ?>">
                                    <option value="">Select City</option>
                                    <?php foreach ($city as $row): ?>
                                        <option value="<?php echo $row->city_id; ?>" <?php echo ($row->city_id == set_value('city')) ? 'selected' : ''; ?>>
                                            <?php echo $row->city_name; ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                                <?php echo form_error('city', '<div class="invalid-feedback">', '</div>'); ?>
                            </div>
                        </div>
                        <div class="col-sm-1">
                            <div class="form-group">
                                <button type="button"  class="btnspace btn btn-primary btn-outline-secondary">+</button>
                             </div>   
                        </div>

                        <div class="col-sm-3">
                            <div class="form-group">
                                <label><b class="text-danger">*</b>Pin Code:</label>
                                <input type="number" name="pincode[]" id="pincode"
                                    class="form-control <?php echo (form_error('pincode')) ? 'is-invalid' : '' ?>"
                                    placeholder="Enter Pin Code"
                                    value="<?php echo (!set_value('pincode')) ? '' : set_value('pincode'); ?>"
                                    maxlenght="6" readonly>
                                <?php echo form_error('pincode', '<div class="invalid-feedback">', '</div>'); ?>
                            </div>
                        </div>

                        <div class="col-sm-2">
                            <div class="form-group">
                                <label><b class="text-danger">*</b>State:</label>
                                <select name="state" id="state"
                                    class="form-control custom-select <?php echo (form_error('state')) ? 'is-invalid' : '' ?>">
                                    <option value="">Select State</option>
                                    <?php foreach ($state as $row): ?>
                                        <option value="<?php echo $row->state_code; ?>" <?php echo ($row->state_code == set_value('state')) ? 'selected' : ''; ?>>
                                            <?php echo $row->states; ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                                <?php echo form_error('state', '<div class="invalid-feedback">', '</div>'); ?>
                            </div>
                        </div>
                        <div class="col-sm-1">
                            <div class="form-group">
                                <button type="button"  class="btnspace btn btn-primary btn-outline-secondary">+</button>
                             </div>   
                        </div>

                        <div class="col-sm-3">
                            <div class="form-group">
                                <label><b class="text-danger">*</b>Contact Person:</label>
                                <input type="text" name="contact_person[]" id="contact_person"
                                    class="form-control <?php echo (form_error('contact_person')) ? 'is-invalid' : '' ?>"
                                    placeholder="Enter Contact Person"
                                    value="<?php echo (!set_value('contact_person')) ? '' : set_value('contact_person'); ?>">
                                <?php echo form_error('contact_person', '<div class="invalid-feedback">', '</div>'); ?>
                            </div>
                        </div>


                        <div class="col-sm-3">
                            <div class="form-group">
                                <label><b class="text-danger">*</b>Contact No:</label>
                                <input type="number" name="contact_no[]" id="contact_no"
                                    class="form-control <?php echo (form_error('contact_no')) ? 'is-invalid' : '' ?>"
                                    placeholder="Enter Contact No"
                                    value="<?php echo (!set_value('contact_no')) ? '' : set_value('contact_no'); ?>"
                                    maxlenght="10">
                                <?php echo form_error('contact_no', '<div class="invalid-feedback">', '</div>'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label><b class="text-danger">*</b>Email ID:</label>
                                <input type="email" name="email_id[]" id="email_id"
                                    class="form-control <?php echo (form_error('email_id')) ? 'is-invalid' : '' ?>"
                                    placeholder="Enter Email ID"
                                    value="<?php echo (!set_value('email_id')) ? '' : set_value('email_id'); ?>">
                                <?php echo form_error('email_id', '<div class="invalid-feedback">', '</div>'); ?>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>GST Type:</label>
                                <select class="select2 form-control custom-select" id="gst_type" name="gst_type[]">
                                    <option value="">Select Type</option>
                                    <option value="Type 1">Type 1</option>
                                    <option value="Type 2">Type 2</option>
                                </select>
                                <?php echo form_error('gst_type', '<div class="invalid-feedback">', '</div>'); ?>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>GST No:</label>
                                <input type="text" name="gst_no" id="gst_no"
                                    class="form-control <?php echo (form_error('gst_no')) ? 'is-invalid' : '' ?>"
                                    placeholder="Enter GST No" value="<?php echo set_value('gst_no'); ?>"
                                    maxlength="15">
                                <?php echo form_error('gst_no', '<div class="invalid-feedback">', '</div>'); ?>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>PAN No:</label>
                                <input type="text" name="pan_no" id="pan_no"
                                    class="form-control <?php echo (form_error('pan_no')) ? 'is-invalid' : '' ?>"
                                    placeholder="Enter PAN No"
                                    value="<?php echo (!set_value('pan_no')) ? '' : set_value('pan_no'); ?>">
                                <?php echo form_error('pan_no', '<div class="invalid-feedback">', '</div>'); ?>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>Special Comment:</label>
                                <textarea name="special_comment" id="special_comment"
                                    class="form-control <?php echo (form_error('special_comment')) ? 'is-invalid' : '' ?>"></textarea>
                                <?php echo form_error('special_comment', '<div class="invalid-feedback">', '</div>'); ?>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="form-group">
                                 <button class="btn btn-primary" type="submit" >Save</button>
                                <button class="btn btn-white" type="button" 
                                    onclick="window.location.href='<?php echo base_url('admin/Supplier_Master'); ?>'">Cancel</button>
                               
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>