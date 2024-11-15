<link rel="stylesheet" href="/assets/css/style.css">
<link rel="stylesheet" href="/assets/css/bootstrap.css">
<link rel="stylesheet" href="/assets/css/bootstrap.min.css">
<link rel="stylesheet" href="/assets/css/animate.css">
<link rel="stylesheet" href="/assets/css/bootstrap.min.css.map">
<link rel="stylesheet" href="/assets/css/bootstrap.css.map">
<!-- <link rel="stylesheet" href="/assets/css/plugins"> -->
<link rel="stylesheet" type="text/css"
    href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">


<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>User Management Form</h2>
        <ol class="breadcrumb">
            <li>
                <a href="<?php echo base_url('admin/dashboard') ?>">Home</a>
            </li>
            <li>
                <a href="<?php echo base_url('admin/user_management') ?>">User Management Form</a>
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
                    <h5 class="card-title">User Management Form
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
                            <form method="post" class="form-horizontal" action="<?php echo base_url('admin/lead') ?>">
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
                                    <label><b class="text-danger">*</b>Full Name:</label>
                                    <input type="text" name="full_name" id="full_name"
                                        class="form-control <?php echo (form_error('full_name')) ? 'is-invalid' : '' ?>"
                                        placeholder="Enter Full Name" value="<?php echo set_value('full_name'); ?>"
                                        required maxlength="100">
                                    <?php echo form_error('full_name', '<div class="invalid-feedback">', '</div>'); ?>
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
                                <label><b class="text-danger">*</b>Phone Number:</label>
                                <input type="number" name="phone_number" id="phone_number"
                                    class="form-control <?php echo (form_error('phone_number')) ? 'is-invalid' : '' ?>"
                                    placeholder="Enter Phone Number"
                                    value="<?php echo (!set_value('phone_number')) ? '' : set_value('phone_number'); ?>"
                                    maxlenght="15" required>
                                <?php echo form_error('phone_number', '<div class="invalid-feedback">', '</div>'); ?>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="form-group">
                                <label><b class="text-danger">*</b>Aadhar Card No:</label>
                                <input type="number" name="aadhar_card" id="aadhar_card"
                                    class="form-control <?php echo (form_error('aadhar_card')) ? 'is-invalid' : '' ?>"
                                    placeholder="Enter Aadhar Card No"
                                    value="<?php echo (!set_value('aadhar_card')) ? '' : set_value('aadhar_card'); ?>"
                                    maxlenght="12" required>
                                <?php echo form_error('aadhar_card', '<div class="invalid-feedback">', '</div>'); ?>
                            </div>
                        </div>


                        <div class="col-sm-3">
                            <div class="form-group">
                                <label><b class="text-danger">*</b>User Role:</label>
                                <select name="user_role" id="user_role" class="select2 form-control custom-selectl"
                                    required>
                                    <option value="">Select Option</option>
                                    <option value="Admin">Admin</option>
                                    <option value="Project Manager">Project Manager</option>
                                    <option value="Sales">Sales</option>
                                    <option value="Tech Staff">Tech Staff</option>
                                </select>
                                <?php echo form_error('lead_type', '<div class="invalid-feedback">', '</div>'); ?>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>Department:</label>
                                <select class="select2 form-control custom-select" id="type" name="type[]">
                                    <option value="">Select Option</option>
                                    <option value="IT">IT</option>
                                    <option value="HR">HR</option>
                                    <option value="Marketing">Marketing</option>
                                </select>
                                <?php echo form_error('type', '<div class="invalid-feedback">', '</div>'); ?>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>Date of Joining:</label>
                                <input type="date" name="date_of_joining" id="date_of_joining"
                                    class="form-control <?php echo (form_error('date_of_joining')) ? 'is-invalid' : '' ?>"
                                    placeholder="Enter Date of Joining"
                                    value="<?php echo (!set_value('date_of_joining')) ? '' : set_value('date_of_joining'); ?>">
                                <?php echo form_error('date_of_joining', '<div class="invalid-feedback">', '</div>'); ?>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="profilePicture">Profile Picture:</label>
                                <input type="file" class="form-control-file" id="profilePicture" name="profile_picture">
                            </div>
                        </div>


                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>Access Rights:</label>

                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="view" name="access_rights[]"
                                        value="View" <?php echo (is_array($access_rights) && in_array("View", $access_rights)) ? 'checked' : ''; ?>>
                                    <label class="custom-control-label" for="view">View</label>

                                    <input type="checkbox" class="custom-control-input" id="create"
                                        name="access_rights[]" value="Create" <?php echo (is_array($access_rights) && in_array("Create", $access_rights)) ? 'checked' : ''; ?>>
                                    <label class="custom-control-label" for="create">Create</label>

                                    <input type="checkbox" class="custom-control-input" id="edit" name="access_rights[]"
                                        value="Edit" <?php echo (is_array($access_rights) && in_array("Edit", $access_rights)) ? 'checked' : ''; ?>>
                                    <label class="custom-control-label" for="edit">Edit</label>

                                    <input type="checkbox" class="custom-control-input" id="delete"
                                        name="access_rights[]" value="Delete" <?php echo (is_array($access_rights) && in_array("Delete", $access_rights)) ? 'checked' : ''; ?>>
                                    <label class="custom-control-label" for="delete">Delete</label>
                                </div>

                                <?php echo form_error('access_rights', '<div class="invalid-feedback">', '</div>'); ?>
                            </div>
                        </div>

                        <div class="row">

                            <br>
                            <!-- Submit and Cancel Buttons -->
                            <div class="col-sm-4 col-sm-offset-2">
                                <div class="form-group">
                                    <button class="btn btn-white" type="button"
                                        onclick="window.location.href='<?php echo base_url('admin/User_Management'); ?>'">Cancel</button>
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