<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Supplier_Master extends Admin_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->isLogin();
	}

	public function index()
	{
		try {
			$this->hasAccess('supplier');
			$data['pageTitle'] = 'Supplier Master';
			$this->loadViews('supplier_master/supplier', $data);
		} catch (Exception $e) {
			log_message('error', $e->getMessage());
			return;
		}
	}
}
