<?php
class exam extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
        $this->load->helper(array('form','url','html'));
		$this->load->library('session');
		$this->load->database();
		$this->load->model('user_model');
        
        if (! $this->session->userdata('uname'))
        {
            redirect('login'); // the user is not logged in, redirect them!
        }
    
    }
	
	function index()
	{
		$details = $this->user_model->get_user_by_id($this->session->userdata('uid'));
		$data['uname'] = $details[0]->username;
		$data['uemail'] = $details[0]->email;
		$this->load->view('exam_view', $data);
	}
}