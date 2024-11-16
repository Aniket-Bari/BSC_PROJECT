<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inventory_Notifications extends Admin_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Inventory_Notifications_model');
        $this->load->helper('url');
        $this->load->library('session');
    }

    // Dashboard view
    public function index() {
        // $data['pending_requisitions'] = $this->Inventory_Notifications_model->getPendingRequisitions();
        // $data['toolkit_status'] = $this->Inventory_Notifications_model->getToolkitStatus();
        // $data['return_alerts'] = $this->Inventory_Notifications_model->getReturnAlerts();

        $this->loadViews('inventory_notifications/index');
    }
}
    