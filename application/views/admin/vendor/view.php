<!--main contents start-->
<main class="content_wrapper">
    <!--page title start-->
    <div class="page-heading">
        <div class="container-fluid">
            <div class="row d-flex align-items-center">
                <div class="col-md-6">
                    <div class="page-breadcrumb">
                        <h1>Vendor</h1>
                    </div><br>
                </div>
                <div class="col-md-6 justify-content-md-end d-flex">
                    <div class="breadcrumb_nav">
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-home"></i>
                                <a class="parent-item" href="<?php echo base_url('admin/dashboard') ?>">Home</a>
                                <i class="fa fa-angle-right"></i>
                            </li>
                            <li>
                                <a class="parent-item" href="<?php echo base_url('admin/Vendor') ?>">Vendor</a>
                                <i class="fa fa-angle-right"></i>
                            </li>
                            <li class="active">
                                View
                            </li>
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
                <form name="clients" action="" method="post">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex no-block align-items-center">
                                <h6 class="card-title"><?php echo $pageTitle ?> Details</h6>
                            </div>
                            <div class="form-group row">
                                <label for="vendor_name" class="col-sm-4 text-right control-label col-form-label">Vendor
                                    Name : </label>
                                <div class="col-md-4 col-sm-8 pt-6">
                                    <?php echo (!empty($p_record)) ? $p_record->vendor_name : ''; ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="vendor_category"
                                    class="col-sm-4 text-right control-label col-form-label">Vendor Category : </label>
                                <div class="col-md-4 col-sm-8 pt-6">
                                    <?php echo (!empty($p_record)) ? $p_record->vendor_category : ''; ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="contact_person"
                                    class="col-sm-4 text-right control-label col-form-label">Contact Person : </label>
                                <div class="col-md-4 col-sm-8 pt-6">
                                    <?php echo (!empty($p_record)) ? $p_record->contact_person : ''; ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="phone_number" class="col-sm-4 text-right control-label col-form-label">Phone
                                    Number : </label>
                                <div class="col-md-4 col-sm-8 pt-6">
                                    <?php echo (!empty($p_record)) ? $p_record->phone_number : ''; ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email_id" class="col-sm-4 text-right control-label col-form-label">
                                    Email Address : </label>
                                <div class="col-md-4 col-sm-8 pt-6">
                                    <?php echo (!empty($p_record)) ? $p_record->email_id : ''; ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="address" class="col-sm-4 text-right control-label col-form-label">Address :
                                </label>
                                <div class="col-md-4 col-sm-8 pt-6">
                                    <?php echo (!empty($p_record)) ? $p_record->address : ''; ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-4 m-t-15"></label>
                                <div class="col-sm-6">
                                    <a href="<?php echo base_url('admin/Vendor') ?>" type="button"
                                        class="btn btn-success btn-sm">Back</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
</main>