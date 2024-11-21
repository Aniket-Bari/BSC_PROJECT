<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product_Master extends Admin_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->isLogin(); // Ensure user is logged in
    }

    public function index()
    {
        try {
            $this->hasAccess('product'); // Ensure the user has required permissions
            $data['pageTitle'] = 'Product/Spare Part Master';

            // Load the view with necessary data
            $this->loadViews('product_master/product', $data);
        } catch (Exception $e) {
            log_message('error', $e->getMessage());
            show_error('An unexpected error occurred. Please try again later.', 500);
        }
    }
}
