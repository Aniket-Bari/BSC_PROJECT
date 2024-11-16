<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_Management extends Admin_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('User_model'); // Load your model to interact with the database
        $this->load->helper(array('form', 'url'));
    }

    public function index() {
        $data['access_rights'] = $this->input->post('access_rights');
        $this->loadViews('user_management/index',$data);
    }

    public function save_user() {
        $this->load->library('form_validation');

        // Set validation rules
        $this->form_validation->set_rules('full_name', 'Full Name', 'required|max_length[100]');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('phone_number', 'Phone Number', 'required|max_length[15]');
        $this->form_validation->set_rules('aadhar_card', 'Aadhar Card No', 'required|max_length[12]');
        $this->form_validation->set_rules('user_role', 'User Role', 'required');
        $this->form_validation->set_rules('department', 'Department', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/user_management/index');
        } else {
            // Prepare data for insertion
            $data = array(
                'full_name' => $this->input->post('full_name'),
                'email' => $this->input->post('email'),
                'phone_number' => $this->input->post('phone_number'),
                'aadhar_card' => $this->input->post('aadhar_card'),
                'user_role' => $this->input->post('user_role'),
                'department' => $this->input->post('department'),
                'date_of_joining' => $this->input->post('date_of_joining'),
                'access_rights' => json_encode($this->input->post('access_rights')),
            );

            // File upload handling
            if (!empty($_FILES['profile_picture']['name'])) {
                $config['upload_path'] = './uploads/';
                $config['allowed_types'] = 'gif|jpg|jpeg|png';
                $config['max_size'] = 2048;

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('profile_picture')) {
                    $data['profile_picture'] = $this->upload->data('file_name');
                } else {
                    $error = array('error' => $this->upload->display_errors());
                    $this->load->view('admin/user_management/index', $error);
                    return;
                }
            }

            // Insert data into the database
            if ($this->User_model->save_user($data)) {
                redirect('admin/user_management');
            } else {
                echo "Error in saving data";
            }
        }
    }
}
