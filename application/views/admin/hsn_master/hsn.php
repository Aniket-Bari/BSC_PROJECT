<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Add HSN Master</h2>
        <ol class="breadcrumb">
            <li>
                <a href="<?php echo base_url('admin/dashboard') ?>">Home</a>
            </li>
            <li>
                <a href="<?php echo base_url('admin/hsn_master') ?>">HSN Master</a>
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
                        HSN Master
                        <!-- <?php echo $pageTitle ?> -->
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
                                action="<?php echo base_url('admin/hsn_master') ?>">
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
                                    <label><b class="text-danger">*</b>HSN Code:</label>
                                    <input type="text" name="hsn_code" id="hsn_code"
                                        class="form-control <?php echo (form_error('hsn_code')) ? 'is-invalid' : '' ?>"
                                        placeholder="Enter HSN Code" value="<?php echo set_value('hsn_code'); ?>">
                                    <?php echo form_error('hsn_code', '<div class="invalid-feedback">', '</div>'); ?>
                                </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="form-group">
                                <label><b class="text-danger">*</b>IGST %:</label>
                                <input type="text" name="igst" id="igst"
                                    class="form-control <?php echo (form_error('igst')) ? 'is-invalid' : '' ?>"
                                    placeholder="Enter IGST %" value="<?php echo set_value('igst'); ?>">
                                <?php echo form_error('igst', '<div class="invalid-feedback">', '</div>'); ?>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="form-group">
                                <label><b class="text-danger">*</b>CGST %:</label>
                                <input type="text" name="cgst" id="cgst"
                                    class="form-control <?php echo (form_error('cgst')) ? 'is-invalid' : '' ?>"
                                    placeholder="Enter CGST %" value="<?php echo set_value('cgst'); ?>">
                                <?php echo form_error('cgst', '<div class="invalid-feedback">', '</div>'); ?>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="form-group">
                                <label><b class="text-danger">*</b>SGST %:</label>
                                <input type="text" name="sgst" id="sgst"
                                    class="form-control <?php echo (form_error('sgst')) ? 'is-invalid' : '' ?>"
                                    placeholder="Enter SGST %"
                                    value="<?php echo (!set_value('sgst')) ? '' : set_value('sgst'); ?>">
                                <?php echo form_error('sgst', '<div class="invalid-feedback">', '</div>'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="form-group">
                                <button class="btn btn-primary" type="submit" >Save</button>
                                <button class="btn btn-white" type="button"
                                    onclick="window.location.href='<?php echo base_url('admin/HSN_Master'); ?>'">Cancel</button>

                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



