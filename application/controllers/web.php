<?php
class Web extends CI_Controller{
    
    function __construct(){
        parent::__construct();
        $this->load->model(array('m_petugas'));
        if($this->session->userdata('username')){
            redirect('dashboard');
        }
    }
    

    
	function index(){
        $this->load->view('web/index');
    }
	
    function cari_combat(){
        $cari=$this->input->post('cari');
        $data['hasil']=$this->m_sitac->cari($cari)->result();
        $data['title']="Pencarian Combat";
        $this->load->view('web/cari_combat',$data);
    }
    
    function anggota(){
        $data['title']="Data Anggota";
        $data['anggota']=$this->m_anggota->semua()->result();
        $this->load->view('web/anggota',$data);
    }
    
    function cari_anggota(){
        $cari=$this->input->post('cari');
        $data['title']="Data Anggota";
        $data['anggota']=$this->m_anggota->cari($cari)->result();
        $this->load->view('web/anggota',$data);
    }
    
    function login(){
        $this->load->view('web/login');
    }
    
    function proses(){
        $this->load->library('form_validation');
		$this->load->library('session');
        $this->form_validation->set_rules('username','Username','required|trim|xss_clean');
        $this->form_validation->set_rules('password','password','required|trim|xss_clean');
        
        if($this->form_validation->run()==false){
            $this->session->set_flashdata('message','Username dan password harus diisi');
            redirect('web');
        }else{
            $username=$this->input->post('username');
            $password=$this->input->post('password');
            $cek=$this->m_petugas->cek($username,md5($password));
            if($cek->num_rows()>0){
				foreach ($cek->result() as $sess) {
                    $sess_data['logged_in'] = 'Sudah Loggin';
                    $sess_data['user'] = $sess->user;
                    $sess_data['level'] = intval($sess->level);
                    // Update by Imam 10 Mei 2019
                    
                    // End of Update
					//$this->session->set_userdata('username',$username);
                    $this->session->set_userdata($sess_data);
                    //------------------------tract login------------------
                   
                }
                //login berhasil, buat session
               
                if ($this->session->userdata('level') == 1) {
                    redirect('dashboard');
                }
                if ($this->session->userdata('level') == 2) {
                    redirect('dashmgr');
                }
                if ($this->session->userdata('level') == 3) {
                    redirect('dashgm');
                }
                
                
            }else{
                //login gagal
                $this->session->set_flashdata('message','Username atau password salah');
                redirect('web');
            }
        }
    }
}