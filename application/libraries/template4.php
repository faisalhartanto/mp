<?php
class Template4{
    protected $_CI;
    function __construct(){
        $this->_CI=&get_instance();
        // Update by Imam 8 Mei 2019
        if (!$this->_CI->session->userdata('level')){
            redirect(site_url(), 'refresh');
        };
        // End of update
    }
    
    function display($template,$data=null){
        $data['_content']=$this->_CI->load->view($template,$data,true);
        $data['_header']=$this->_CI->load->view('templategm/header',$data,true);
        $data['_sidebar']=$this->_CI->load->view('templategm/sidebar',$data,true);
        $this->_CI->load->view('/template.php',$data);
    }
}