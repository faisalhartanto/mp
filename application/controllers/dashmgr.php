<?php
class Dashmgr extends CI_Controller{
    
    function __construct(){
        parent::__construct();
        $this->load->model(array('m_petugas','m_so'));
        $this->load->library(array('form_validation','template3','session'));
        
        
        if(!$this->session->userdata('level')){
            redirect('web');
        }
    }
    
    function index(){
        $data['title']="Home";
		$uname= $this->session->userdata('user');
		 
        $data['jlhnotif'] =$this->m_so->notif_count($options);
		$jlhnotif= $data['jlhnotif'];
		/*$this->session->set_flashdata('msg', 
                '<div class="alert alert-danger">
                    <p>Barang yang belum di Approve oleh Manager Sejumlah </p> <b>'.$jlhnotif.' </b><p>Unit Barang </p>
                </div>');*/   
        $this->template3->display('dashmgr/index',$data);
		
    }
    
	
	function _set_rules(){
        $this->form_validation->set_rules('user','username','required|trim');
        $this->form_validation->set_rules('password','password','required|trim');
        $this->form_validation->set_error_delimiters("<div class='alert alert-danger'>","</div>");
    }
    
    function logout(){
        activity_log('session_destroy', '0', 'Logout User '.$this->session->userdata('user'));
        $this->session->unset_userdata('level');
        $this->session->unset_userdata('user');
        redirect('web');
    }
    
}