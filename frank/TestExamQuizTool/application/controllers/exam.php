<?php
class exam extends CI_Controller {
function __construct() {
parent::__construct();
$this->load->model('exam_model');
$this->load->library('session');
        if (! $this->session->userdata('uname'))
        {
            redirect('login'); // the user is not logged in, redirect them!
        }
}
function index() {
//Including validation library
$this->load->library('form_validation');
$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
//Validating Exam name field
$this->form_validation->set_rules('dname', 'examname', 'required|min_length[5]|max_length[50]');
if ($this->form_validation->run() == FALSE) {
$this->load->view('exam_view');
} else {
//Setting values for tabel columns
$data = array(
'examname' => $this->input->post('dname'),
);
//Transfering data to Model
$this->exam_model->form_insert($data);
$data['message'] = 'Data Inserted Successfully';
//Loading View
$this->load->view('newpage', $data);
}
}
}
?>