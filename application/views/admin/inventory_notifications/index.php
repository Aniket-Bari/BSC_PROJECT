
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Inventory Notifications Dashboard</h2>
        <ol class="breadcrumb">
            <li>
                <a href="<?php echo base_url('admin/dashboard') ?>">Home</a>
            </li>
            <li>
                <a href="<?php echo base_url('admin/inventory_notifications') ?>">Inventory Notifications Dashboard</a>
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
                    <h5 class="card-title">
                        <!-- <?php echo $pageTitle ?> -->
                        Inventory Notifications Dashboard
                        </h6>&nbsp;&nbsp;&nbsp;&nbsp;
                        <!-- <em class="text-danger">(
                            * indicates mandatory fields )</em> -->
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
                            <form method="post" class="form-horizontal" action="<?php echo base_url('admin/inventory_notifications') ?>">
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
                                <label>Pending Requisitions:</label>
                                <section>
                                    <h2>Pending Requisitions</h2>
                                    <?php if (!empty($pending_requisitions)): ?>
                                        <ul>
                                            <?php foreach ($pending_requisitions as $req): ?>
                                                <li>
                                                    <strong><?= $req['requisition_id']; ?></strong> -
                                                    <?= $req['description']; ?>
                                                    (Submitted on: <?= $req['submitted_at']; ?>)
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    <?php else: ?>
                                        <p>No pending requisitions at the moment.</p>
                                    <?php endif; ?>
                                </section>
                            </div>
                        </div>

                        <!-- <div class="col-sm-3">
                            
                        </div> -->

                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>Toolkit Status:</label>
                                <section>
                                    <h2>Toolkit Status</h2>
                                    <?php if (!empty($toolkit_status)): ?>
                                        <ul>
                                            <?php foreach ($toolkit_status as $status): ?>
                                                <li>
                                                    Toolkit <strong><?= $status['toolkit_id']; ?></strong> (Technician:
                                                    <?= $status['technician_name']; ?>)
                                                    - Missing Items: <?= $status['missing_items']; ?>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    <?php else: ?>
                                        <p>All toolkits are reported and complete.</p>
                                    <?php endif; ?>
                                </section>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>Return Alerts:</label>
                                <section>
                                    <h2>Return Alerts</h2>
                                    <?php if (!empty($return_alerts)): ?>
                                        <ul>
                                            <?php foreach ($return_alerts as $alert): ?>
                                                <li>
                                                    Item <strong><?= $alert['item_name']; ?></strong> borrowed by
                                                    <?= $alert['borrower_name']; ?>
                                                    is overdue (Due Date: <?= $alert['due_date']; ?>)
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    <?php else: ?>
                                        <p>No overdue tools or materials.</p>
                                    <?php endif; ?>
                                </section>

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