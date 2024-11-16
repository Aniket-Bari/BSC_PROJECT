<!-- <?php
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
?> -->



<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Customer extends Admin_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->isLogin();
    }

    public function index()
    {
        try {
            $this->hasAccess('vendor');
            $data['pageTitle'] = 'vendor';
            $this->loadViews('vendor/index', $data);
        } catch (Exception $e) {
            log_message('error', $e->getMessage());
            return;
        }
    }


    public function ajax($tab = 'active_rows')
    {
        try {
            $data['rows_per_page'] = $this->input->post('rows_per_page');
            $data['page'] = $this->input->post('page');
            $search_keyword = $this->input->post('search_keyword');

            if ($tab == 'active_rows') {
                $conditions['where'] = ['vm.status' => 'ACTIVE', 'vm.is_deleted' => 'NO'];
                $base_url = base_url() . 'admin/Vendor';
                $searchFilter = 'searchFilter';
                $data['ajax_view_id'] = '';
            } else if ($tab == 'inactive_rows') {
                $conditions['where'] = ['vm.status' => 'INACTIVE', 'vm.is_deleted' => 'NO'];
                $base_url = base_url() . 'admin/Vendor';
                $searchFilter = 'searchFilter1';
                $data['ajax_view_id'] = '1';
            } else if ($tab == 'suspend_rows') {
                $conditions['where'] = ['vm.is_deleted' => 'YES'];
                $base_url = base_url() . 'admin/Vendor';
                $searchFilter = 'searchFilter2';
                $data['ajax_view_id'] = '2';
            }

            $conditions['where_raw'] = '';
            if (!empty($search_keyword))
                $conditions['where_raw'] = "( vm.vendor_name LIKE '%" . $search_keyword . "%' OR vm.email_id LIKE '%" . $search_keyword . "%')";



            $data['total_records'] = $this->Admin_model->getCount('vendor_masters vm', $conditions);

            $conditions['limit'] = [$data['rows_per_page'], $data['page']];

            $data['records'] = $this->Admin_model->getRows('vendor_masters vm', "vm.*", $conditions);

            $data['records'] = $this->Admin_model->getRows('vendor_masters vm', "vm.*", $conditions);

            //pagination configuration
            $config['base_url'] = $base_url;
            $config['per_page'] = $data['rows_per_page'];
            $config['total_rows'] = $data['total_records'];
            $config['uri_segment'] = 3;
            $config['cur_page_giv'] = $data['page'];
            $function = "searchFilter('0')";
            $config['first_link'] = '&laquo;';
            $config['first_tag_open'] = '<li class="page-item"><a class="page-link" onClick="' . $function . '">';
            $config['first_tag_close'] = '</a></li>';

            $rr = ($config['total_rows'] - 1) / $config['per_page'];

            $last_start = floor($rr) * $config['per_page'];
            $function = $searchFilter . "('" . $last_start . "')";
            $config['last_link'] = '&raquo;';
            $config['last_tag_open'] = '<li class="page-item"><a class="page-link" onClick="' . $function . '">';
            $config['last_tag_close'] = '</a></li>';
            $function = $searchFilter . "('" . ($data['page'] - $config['per_page']) . "')";
            $config['prev_tag_open'] = '<li class="page-item"><a class="page-link" onClick="' . $function . '">';
            $config['prev_tag_close'] = '</a></li>';
            $function = $searchFilter . "('" . ($data['page'] + $config['per_page']) . "')";
            $config['next_link'] = '>';
            $config['next_tag_open'] = '<li class="page-item"><a class="page-link" onClick="' . $function . '">';
            $config['next_tag_close'] = '</a></li>';

            $config['full_tag_open'] = '<div class="row"><div class="text-center"><ul class="pagination">';
            $config['full_tag_close'] = '</ul></div></div>';

            $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link">';
            $config['cur_tag_close'] = '</a></li>';

            $function = $searchFilter . "(((this.innerHTML-1)*" . $config['per_page'] . "))";

            $config['num_tag_open'] = '<li class="page-item"><a class="page-link notranslate" onClick="' . $function . '">';
            $config['num_tag_close'] = '</a></li>';
            $this->ajax_pagination->initialize($config);

            $this->load->view('admin/vendor', $data);
        } catch (Exception $e) {
            log_message('error', $e->getMessage());
            return;
        }
    }

    public function view($vendor_id)
    {
        try {
            $this->hasAccess('vendor/view');



            $data['p_record'] = $this->Admin_model->getRow('vendor_masters vm', 'vm.*,s1.user_name as createdby,s2.user_name as updatedby', ['join' => [['hrm_user s1', 'vm.created_by = s1.user_id', 'left'], ['hrm_user s2', 'vm.updated_by = s2.user_id', 'left']], 'where' => ['vm.vendor_id' => $vendor_id]]);
            // print_r($this->db->last_query());exit;
            $data['pageTitle'] = 'View Vendor';
            $this->loadViews('vendor/view', $data);
        } catch (Exception $e) {
            log_message('error', $e->getMessage());
            return;
        }
    }

    public function add()
    {
        try {
            $this->hasAccess('vendor/add');
            $this->form_validation->set_rules('vendor_name', 'Vendor Name', 'trim|required|min_length[4]|max_length[50]');
            $this->form_validation->set_rules('address', 'Vendor Address', 'trim|required');
            // $this->form_validation->set_rules('contact_person_1','Contact Person 1','trim|required');
            // $this->form_validation->set_rules('contact_no_1','Contact No 1','trim|required');
            // $this->form_validation->set_rules('contact_person_2','Contact Person 2','trim|required');
            // $this->form_validation->set_rules('contact_no_2','Contact No 2','trim|required|callback_valid_phone');
            // $this->form_validation->set_rules('state_id','State','trim|required');
            // $this->form_validation->set_rules('email_id','Customer Email','trim|valid_email|required|min_length[5]|max_length[50]');
            // $this->form_validation->set_rules('gst_no','GST_No','trim|required');
            // $this->form_validation->set_rules('pan_no','PAN_No','trim|required');
            // $this->form_validation->set_rules('status','Customer Status','trim|required');


            if ($this->form_validation->run() == FALSE) {
                $data['pageTitle'] = 'Add Vendor';
                // $data['country_data'] = $this->Admin_model->getRows('hrm_country', "id,country_name", ['where'=>['status'=>'ACTIVE','Is_Delete'=>'NO']]);
                // print_r($data);exit();
                // $data['state'] = $this->Admin_model->getRows('state_type', "*", ['where' => ['status' => 'ACTIVE', 'is_deleted' => 'NO']]);

                $this->loadViews('vendor/add', $data);
            } else {

                $insert_data = array(

                    'vendor_name' => $this->input->post('vendor_name'),
                    'vendor_category' => $this->input->post('vendor_category'),
                    'contact_person' => $this->input->post('contact_person'),
                    'phone_number' => $this->input->post('phone_number'),
                    'email_address' => $this->input->post('email_address'),
                    'vendor_address' => $this->input->post('vendor_address'),
                    'notes' => $this->input->post('notes')
                );
                // print_r($insert_data);exit;
                $result = $this->Admin_model->add('vendor_masters', $insert_data);

                // print_r($this->db->last_query());exit;

                $vendor_id = $result; //$this->db->insert_id(); 

                if ($result) {


                    $vendor_id = $vendor_id;
                    $contact_name = $this->input->post('contact_name');
                    $contact_no = $this->input->post('contact_no');
                    $email = $this->input->post('email');
                    $type = $this->input->post('type');


                    for ($i = 0; $i < count($contact_name); $i++) {
                        $in_tran_data = array(
                            'customer_id' => $vendor_id,
                            'contact_name' => $contact_name[$i],
                            'contact_no' => $contact_no[$i],
                            'email' => $email[$i],
                            'type' => $type[$i],

                        );
                        $result_tran = $this->db->insert('vendor_contact_no', $in_tran_data);
                        // print_r($this->db->last_query());exit;

                    }


                    $this->addActivity('Added Vendor');
                    $this->session->set_flashdata('success_msg', 'Vendor added successfully');
                    redirect(base_url('admin/Vendor'));

                } else {
                    $this->session->set_flashdata('error_msg', 'Record not saved..!');
                }

                // redirect(base_url('admin/Customer'));
            }
        } catch (Exception $e) {
            log_message('error', $e->getMessage());
            return;
        }
    }

    public function edit($vendor_id)
    {
        try {
            $this->hasAccess('Vendor/edit');
            $this->form_validation->set_rules('vendor_name', 'Vendor Name', 'required|max_length[150]');
            $this->form_validation->set_rules('vendor_category', 'Vendor Category', 'required');
            $this->form_validation->set_rules('contact_person', 'Contact Person', 'required|max_length[100]');
            $this->form_validation->set_rules('phone_number', 'Phone Number', 'required|max_length[15]');
            $this->form_validation->set_rules('email_address', 'Email Address', 'required|valid_email|is_unique[vendors.email_address]');
            $this->form_validation->set_rules('vendor_address', 'Vendor Address', 'max_length[250]');

            if ($this->form_validation->run() == FALSE) {
                $tran_conditions['where'] = ['vm.vendor_id' => $vendor_id, 'vm.is_deleted' => 'NO'];
                $data['p_record'] = $this->Admin_model->getRow('vendor_masters vm', 'vm.*', $tran_conditions);



                $tranc_conditions['where'] = ['ccn.vendor_id' => $vendor_id, 'ccn.is_deleted' => 'NO'];

                // $tranc_conditions['join']=[['customer_contact_no ccn','vm.customer_id = ccn.customer_id','left']];

                $data['c_record'] = $this->Admin_model->getRows('vendor_contact_no ccn', 'ccn.*', $tranc_conditions);


                // print_r($this->db->last_query());exit();

                $data['pageTitle'] = 'Edit Vendor';

                $this->loadViews('vendor/edit', $data);
            } else {
                $edit_customer = array(
                    'vendor_name' => $this->input->post('vendor_name'),
                    'vendor_category' => $this->input->post('vendor_category'),
                    'contact_person' => $this->input->post('contact_person'),
                    'phone_number' => $this->input->post('phone_number'),
                    'email_address' => $this->input->post('email_address'),
                    'vendor_address' => $this->input->post('vendor_address'),
                    'notes' => $this->input->post('notes')
                );



                $result = $this->Admin_model->edit('vendor_masters', $edit_vendor, ['vendor_id' => $vendor_id]);
                // print_r($result);exit();
                // print_r($this->db->last_query());exit;
                // $customer_id = $result; //$this->db->insert_id(); 
                if ($result) {



                    $vendor_id = $vendor_id;
                    $contact_name = $this->input->post('contact_name');
                    $contact_no = $this->input->post('contact_no');
                    $email = $this->input->post('email');

                    // print_r($contact_name);exit;
                    $this->db->delete('vendor_contact_no', ['vendor_id' => $vendor_id]);

                    for ($i = 0; $i < count($contact_name); $i++) {
                        $in_tran_data = array(
                            'vendor_id' => $vendor_id,
                            'contact_name' => $contact_name[$i],
                            'contact_no' => $contact_no[$i],
                            'email' => $email[$i],

                        );
                        $result_tran = $this->db->insert('vendor_contact_no', $in_tran_data);

                    }
                    $this->addActivity('Updated Vendor');
                    $this->session->set_flashdata('success_msg', 'Vendor updated successfully.');
                } else {
                    $this->session->set_flashdata('error_msg', 'Some problems occured, please try again.');
                }

                redirect(base_url('admin/Vendor'));
            }
        } catch (Exception $e) {
            log_message('error', $e->getMessage());
            return;
        }
    }

    public function status($status = 'ACTIVE')
    {
        try {
            if ($this->check_access('vendor/edit')) {
                $customer_id = $this->input->post('rowId');
                $status = ($status == 'ACTIVE') ? 'INACTIVE' : 'ACTIVE';

                $result = $this->Admin_model->edit('vendor_masters', ['status' => $status], ['vendor_id' => $vendor_id]);
                if ($result) {
                    $this->addActivity('Changed vendor Status');
                    $response['status'] = 'success';
                    $response['msg'] = 'vendor status changed successfully.';
                } else {
                    $response['status'] = 'error';
                    $response['msg'] = 'Some problems occured, please try again.';
                }
            } else {
                $response['status'] = 'error';
                $response['msg'] = 'Access Denied.';
            }
            echo json_encode($response);
        } catch (Exception $e) {
            log_message('error', $e->getMessage());
            return;
        }
    }

    public function delete()
    {
        try {
            if ($this->check_access('vendor/delete')) {
                $vendor_id = $this->input->post('rowId');

                $result = $this->Admin_model->edit('vendor_masters', ['is_deleted' => 'YES'], ['vendor_id' => $vendor_id]);
                if ($result) {
                    $this->addActivity('Deleted vendor');
                    $response['status'] = 'success';
                    $response['msg'] = 'vendor deleted successfully.';
                } else {
                    $response['status'] = 'error';
                    $response['msg'] = 'Some problems occured, please try again.';
                }
            } else {
                $response['status'] = 'error';
                $response['msg'] = 'Access Denied.';
            }
            echo json_encode($response);
        } catch (Exception $e) {
            log_message('error', $e->getMessage());
            return;
        }
    }
    public function deleteChecked()
    {
        try {
            if ($this->check_access('vendor/delete')) {
                $vendor_ids = $this->input->post('rowIds');
                $vendor_ids = json_decode($vendor_ids);
                $result = 0;
                if (!empty($vendor_ids)) {
                    foreach ($vendor_ids as $vendor_id) {
                        $result = $this->Admin_model->edit('vendor_masters', ['is_deleted' => 'YES'], ['vendor_id' => $vendor_id]);
                    }
                }
                if ($result) {
                    $this->addActivity('Delete Checked vendor');

                    $response['status'] = 'success';
                    $response['msg'] = 'vendor deleted successfully.';
                } else {
                    $response['status'] = 'error';
                    $response['msg'] = 'Some problems occured, please try again.';
                }
            } else {
                $response['status'] = 'error';
                $response['msg'] = 'Access Denied.';
            }
            echo json_encode($response);
        } catch (Exception $e) {
            log_message('error', $e->getMessage());
            return;
        }
    }
    public function changeChecked($status = "ACTIVE")
    {
        try {
            if ($this->check_access('vendor/edit')) {
                $vendor_ids = $this->input->post('rowIds');
                $vendor_ids = json_decode($vendor_ids);
                $result = 0;
                if (!empty($vendor_ids)) {
                    foreach ($vendor_ids as $vendor_id) {

                        $result = $this->Admin_model->edit('vendor_masters', ['status' => $status], ['vendor_id' => $vendor_id]);
                    }
                }
                if ($result) {
                    $this->addActivity('Change Checked Vendors Status');

                    $response['status'] = 'success';
                    $response['msg'] = 'Vendors status changed successfully.';
                } else {
                    $response['status'] = 'error';
                    $response['msg'] = 'Some problems occured, please try again.';
                }
            } else {
                $response['status'] = 'error';
                $response['msg'] = 'Access Denied.';
            }
            echo json_encode($response);
        } catch (Exception $e) {
            log_message('error', $e->getMessage());
            return;
        }
    }
    public function restore()
    {
        try {
            if ($this->check_access('vendor/restore')) {
                $vendor_id = $this->input->post('rowId');
                $result = $this->Admin_model->edit('vendor_masters', ['is_deleted' => 'NO'], ['vendor_id' => $vendor_id]);
                if ($result) {
                    $this->addActivity('Restored Vendor');
                    $response['status'] = 'success';
                    $response['msg'] = 'Vendor restored successfully.';
                } else {
                    $response['status'] = 'error';
                    $response['msg'] = 'Some problems occured, please try again.';
                }
            } else {
                $response['status'] = 'error';
                $response['msg'] = 'Access Denied.';
            }
            echo json_encode($response);
        } catch (Exception $e) {
            log_message('error', $e->getMessage());
            return;
        }
    }
    public function restoreChecked()
    {
        try {
            if ($this->check_access('vendor/restore')) {
                $vendor_ids = $this->input->post('rowIds');
                $vendor_ids = json_decode($vendor_ids);
                foreach ($vendor_ids as $vendor_id) {
                    $result = $this->Admin_model->edit('vendor_masters', ['is_deleted' => 'NO'], ['vendor_id' => $vendor_id]);
                }
                if ($result) {
                    $this->addActivity('Restore Checked Vendor');
                    $response['status'] = 'success';
                    $response['msg'] = 'Vendor restored successfully.';
                } else {
                    $response['status'] = 'error';
                    $response['msg'] = 'Some problems occured, please try again.';
                }
            } else {
                $response['status'] = 'error';
                $response['msg'] = 'Access Denied.';
            }
            echo json_encode($response);
        } catch (Exception $e) {
            log_message('error', $e->getMessage());
            return;
        }
    }



















}
