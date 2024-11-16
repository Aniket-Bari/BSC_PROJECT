 <!--main contents start-->
 <!-- <link href="<?php //echo base_url('assets/css/select2.min.css')?>" rel="stylesheet" type="text/css" /> -->
 <!-- <script type="text/javascript" src="<?php //echo base_url('assets/js/dataTables.min.js') ?>"></script> -->
<!-- <link href="<?php //echo base_url('assets/css/select2.min.css')?>" rel="stylesheet" type="text/css" /> -->
<link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
/>
                <main class="content_wrapper">
                    <!--page title start-->
                    <div class="page-heading">
                        <div class="container-fluid">
                            <div class="row d-flex align-items-center">
                                <div class="col-md-6">
                                    <div class="page-breadcrumb">
                                        <h1>Vendors</h1>
                                    </div><br>
                                </div>
                                <div class="col-md-6 justify-content-md-end d-flex">
                                    <div class="breadcrumb_nav">
                                        <ol class="breadcrumb">
                                            <li>
                                                <i class="fa fa-home"></i>
                                                <a class="parent-item" href="<?php echo base_url('admin/dashboard')?>">Home</a>
                                                <i class="fa fa-angle-right"></i>
                                            </li>
                                            <li>
                                                <a class="parent-item" href="<?php echo base_url('admin/Vendor')?>">Vendor</a>
                                                <i class="fa fa-angle-right"></i>
                                            </li>
                                            <!-- <li class="active">
                                                Add
                                            </li> -->
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="form-group row">
                    <div class="col-md-12">
                        <form name="Vendor" id="addvendor" action="" method="post">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex no-block align-items-center">
                                    <h6 class="card-title"><?php echo $pageTitle?></h6>&nbsp;&nbsp;&nbsp;&nbsp;<em class="text-danger">( * indicates mandatory fields )</em>
                                </div>
                                
                                <div class="form-group row">
                                    <div class="col-md-4 col-sm-8">
                                    <label for="vendor_name" class="text-right control-label col-form-label <?php echo (form_error('vendor_name')) ? 'text-danger' : '' ?>"><b class="text-danger">* </b>Vendor Name : </label>
                                    <input type="text" id="vendor_name" name="vendor_name" class="form-control <?php echo (form_error('vendor_name')) ? 'is-invalid' : '' ?>" placeholder="Enter Vendor Name" value="<?php echo (!set_value('vendor_name')) ? '' : set_value('vendor_name'); ?>">
                                    <?php echo form_error('vendor_name', '<div class="invalid-feedback">', '</div>'); ?>
                                    </div>

                                    <div class="col-md-4 col-sm-8">
                                    <label for="vendor_loc" class="text-right control-label col-form-label <?php echo (form_error('vendor_loc')) ? 'text-danger' : '' ?>"><b class="text-danger">* </b>Vendor Location : </label>
                                    <input type="text" id="vendor_loc" name="vendor_loc" class="form-control <?php echo (form_error('vendor_loc')) ? 'is-invalid' : '' ?>" placeholder="Enter Vendor Name" value="<?php echo (!set_value('vendor_loc')) ? '' : set_value('vendor_loc'); ?>">
                                    <?php echo form_error('vendor_loc', '<div class="invalid-feedback">', '</div>'); ?>
                                    </div>

                                    <div class="col-md-4 col-sm-8">
                                    <label for="address" class="text-right control-label col-form-label <?php echo (form_error('address')) ? 'text-danger' : '' ?>"><b class="text-danger">* </b>Vendor Address : </label>
                                    <input type="text" id="address" name="address" class="form-control <?php echo (form_error('address')) ? 'is-invalid' : '' ?>" placeholder="Enter Vendor address" value="<?php echo (!set_value('address')) ? '' : set_value('address'); ?>">
                                    <?php echo form_error('address', '<div class="invalid-feedback">', '</div>'); ?>
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    
                                    <div class="col-md-3 col-sm-4">
                                    <label for="contact_name" class="text-right control-label col-form-label <?php echo (form_error('contact_name')) ? 'text-danger' : '' ?>"><b class="text-danger">* </b>Contact Person : </label>
                                    <input type="text" name="contact_name[]" id="contact_name" class="form-control <?php echo (form_error('contact_name')) ? 'is-invalid' : '' ?>" placeholder="Enter Contact Person" value="<?php echo (!set_value('contact_name')) ? '' : set_value('contact_name'); ?>">
                                    <?php echo form_error('contact_name', '<div class="invalid-feedback">', '</div>'); ?>
                                    </div>

                                    <div class="col-md-3 col-sm-4">
                                    <label for="contact_no" class="text-right control-label col-form-label <?php echo (form_error('contact_no')) ? 'text-danger' : '' ?>"><b class="text-danger">* </b>Contact No : </label>
                                    <input type="number" name="contact_no[]" id="contact_no" class="form-control <?php echo (form_error('contact_no')) ? 'is-invalid' : '' ?>" placeholder="Enter Contact No 1" value="<?php echo (!set_value('contact_no')) ? '' : set_value('contact_no'); ?>" maxlenght="10">
                                    <?php echo form_error('contact_no', '<div class="invalid-feedback">', '</div>'); ?>
                                    </div>

                                    <div class="col-md-2 col-sm-4">
                                    <label for="email" class="text-right control-label col-form-label <?php echo (form_error('email')) ? 'text-danger' : '' ?>"><b class="text-danger">* </b>Vendor Email : </label>
                                    <input type="email" name="email[]" id="email" class="form-control <?php echo (form_error('email')) ? 'is-invalid' : '' ?>" placeholder="Enter Vendor Email" value="<?php echo (!set_value('email')) ? '' : set_value('email'); ?>">
                                    <?php echo form_error('email', '<div class="invalid-feedback">', '</div>'); ?>
                                    </div>

                                    <div class="col-md-2 col-sm-4">
                                    <label for="type" class="text-right control-label col-form-label <?php echo (form_error('type')) ? 'text-danger' : '' ?>"><b class="text-danger">* </b>Department : </label>
                                    <select class="select2 form-control custom-select" id="type" name="type[]" >
                                    <option value="Technical">Technical</option>
                                    <option value="Purchase">Purchase</option>
                                    </select>
                                    <?php echo form_error('type', '<div class="invalid-feedback">', '</div>'); ?>
                                    </div>

                                    <div class="col-md-1 col-sm-4">
                                    <button type="button" class="btn btn-primary btn-lg" onclick="add_contact()" style="font-size: 10px;margin-top:30px;"><i class='fa fa-plus' title="Add More Contact" style='color: white;'></i>Add More</button>
                                     </div>
                                </div>
                                <div class="add_row"></div>

                            <hr>
                               
                                <!-- <div class="form-group row">
                                    <div class="col-md-10 col-sm-4"></div>
                                <div class="col-md-2 col-sm-4">
                                        <button type="button" class="btn btn-primary btn-lg" onclick="add_contact()" style="font-size: 10px;"><i class='fa fa-plus'  style='color: white'> Add More Contact</i></button>
                                </div>
                                    <div id="contact" class="col-md-11"></div>

                                </div> -->
                                
                                <!-- <div class="form-group row">
                                    <label for="contact_person_2" class="col-sm-4 text-right control-label col-form-label <?php// echo (form_error('contact_person_2')) ? 'text-danger' : '' ?>">Contact Person 2 : </label>
                                    <div class="col-md-4 col-sm-8">
                                    <input type="text" name="contact_person_2" id="contact_person_2" class="form-control <?php //echo (form_error('contact_person_2')) ? 'is-invalid' : '' ?>" placeholder="Enter Contact Person 2" value="<?php// echo (!set_value('contact_person_2')) ? '' : set_value('contact_person_2'); ?>">
                                    <?php //echo form_error('contact_person_2', '<div class="invalid-feedback">', '</div>'); ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="contact_no_2" class="col-sm-4 text-right control-label col-form-label <?php //echo (form_error('contact_no_2')) ? 'text-danger' : '' ?>">Contact No 2 : </label>
                                    <div class="col-md-4 col-sm-8">
                                    <input type="text" name="contact_no_2" id="contact_no_2" class="form-control <?php //echo (form_error('contact_no_2')) ? 'is-invalid' : '' ?>" placeholder="Enter Contact No 2" value="<?php //echo (!set_value('contact_no_2')) ? '' : set_value('contact_no_2'); ?>" maxlenght="10">
                                    <?php //echo form_error('contact_no_2', '<div class="invalid-feedback">', '</div>'); ?>
                                    </div>
                                </div> -->

                                <div class="form-group row">
                                    <!-- <label for="vendor_code" class="col-sm-1 text-right control-label col-form-label <?php echo (form_error('vendor_code')) ? 'text-danger' : '' ?>"><b class="text-danger">* </b>Vendor Code : </label>
                                    <div class="col-md-3 col-sm-4">
                                    <input type="text" name="vendor_code" id="vendor_code" class="form-control <?php echo (form_error('vendor_code')) ? 'is-invalid' : '' ?>" placeholder="Enter vendor Code" value="<?php echo (!set_value('vendor_code')) ? '' : set_value('gst_no'); ?>">
                                    <?php echo form_error('vendor_code', '<div class="invalid-feedback">', '</div>'); ?>
                                    </div> -->

                                    <label for="gst_no" class="col-sm-1 text-right control-label col-form-label <?php echo (form_error('gst_no')) ? 'text-danger' : '' ?>"><b class="text-danger">* </b>GST No : </label>
                                    <div class="col-md-4 col-sm-4">
                                    <input type="text" name="gst_no" id="gst_no" maxlength="15" class="form-control <?php echo (form_error('gst_no')) ? 'is-invalid' : '' ?>" placeholder="Enter GST No" value="<?php echo (!set_value('gst_no')) ? '' : set_value('gst_no'); ?>">
                                    <?php echo form_error('gst_no', '<div class="invalid-feedback">', '</div>'); ?>
                                    </div>

                                    <label for="pan_no" class="col-sm-2 text-right control-label col-form-label <?php echo (form_error('pan_no')) ? 'text-danger' : '' ?>"><b class="text-danger">* </b>PAN No : </label>
                                    <div class="col-md-4 col-sm-4">
                                    <input type="text" name="pan_no" id="pan_no" class="form-control <?php echo (form_error('pan_no')) ? 'is-invalid' : '' ?>" placeholder="Enter PAN No" value="<?php echo (!set_value('pan_no')) ? '' : set_value('pan_no'); ?>" readonly>
                                    <?php echo form_error('pan_no', '<div class="invalid-feedback">', '</div>'); ?>
                                    </div>

                                </div>
                                
								<div class="form-group row">
                                   
                                </div> 

                                <div class="form-group row">
                                    <label for="status" class="col-sm-1 text-right control-label col-form-label <?php echo (form_error('status')) ? 'text-danger' : '' ?>"><b class="text-danger">* </b>Vendor Status : </label>
                                    <div class="col-md-4 col-sm-8">
                                    <select class="select2 form-control custom-select <?php echo (form_error('status')) ? 'is-invalid' : '' ?>" name="status" style="width: 100%; height:36px;">
                                        <?php 
                                            $selected = (!set_value('status')) ? '' : set_value('status'); 
                                        ?>
                                        <option value="ACTIVE" <?php echo ('ACTIVE' == $selected) ? 'selected' : '' ?>>ACTIVE</option>
                                        <option value="INACTIVE" <?php echo ('INACTIVE' == $selected) ? 'selected' : '' ?>>INACTIVE</option>
                                    </select>
                                    <?php echo form_error('status', '<div class="invalid-feedback">', '</div>'); ?>
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label class="col-sm-3 m-t-15"></label>
                                    <div class="col-sm-6 text-center">
                                    <button type="Submit" name="Submit" class="btn btn-success btn-sm">Submit</button>
                                    <a href="<?php echo base_url('admin/Vendor')?>" type="button" class="btn btn-danger btn-sm">Cancel</a>
                                    </div>
                                </div>

                                <?php
                                    $error = $this->session->flashdata('error_msg');
                                    if($error)
                                    {
                                ?>
                                <div class="alert alert-danger text-center" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    <?php echo $this->session->flashdata('error_msg'); ?>                    
                                </div>
                                <?php } ?>
                                <?php  
                                    $success = $this->session->flashdata('success_msg');
                                    if($success)
                                    {
                                ?>
                                <div class="alert alert-success text-center" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    <?php echo $this->session->flashdata('success_msg'); ?>
                                </div>
                                <?php } ?>
                            </div>
                        </div>

     

<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>


