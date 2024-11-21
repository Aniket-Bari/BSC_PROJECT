<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Vendor extends Admin_Controller
{

    public function __construct()
    {
        parent::__construct();
        // $this->load->helper(array('form', 'url'));
        // $this->load->library('form_validation');
        // $this->load->model('Vendor_model'); // Assuming you have a model for vendor
    }

    public function index()
    {
        // $this->loadViews('vendor/index');
        $this->loadViews('vendor/index');
    }


    public function store()
    {
        $this->form_validation->set_rules('vendor_name', 'Vendor Name', 'required|max_length[150]');
        $this->form_validation->set_rules('vendor_category', 'Vendor Category', 'required');
        $this->form_validation->set_rules('contact_person', 'Contact Person', 'required|max_length[100]');
        $this->form_validation->set_rules('phone_number', 'Phone Number', 'required|max_length[15]');
        $this->form_validation->set_rules('email_address', 'Email Address', 'required|valid_email|is_unique[vendors.email_address]');
        $this->form_validation->set_rules('vendor_address', 'Vendor Address', 'max_length[250]');

        if ($this->form_validation->run() == FALSE) {
            $this->loadViews('vendor_management/index');
        } else {
            $data = array(
                'vendor_name' => $this->input->post('vendor_name'),
                'vendor_category' => $this->input->post('vendor_category'),
                'contact_person' => $this->input->post('contact_person'),
                'phone_number' => $this->input->post('phone_number'),
                'email_address' => $this->input->post('email_address'),
                'vendor_address' => $this->input->post('vendor_address'),
                'notes' => $this->input->post('notes')
            );

            if ($this->Vendor_model->insert_vendor($data)) {
                $this->session->set_flashdata('success', 'Vendor information added successfully.');
                redirect('admin/vendor');
            } else {
                $this->session->set_flashdata('error', 'Failed to add vendor information.');
                redirect('admin/vendor');
            }
        }
    }
}
?>