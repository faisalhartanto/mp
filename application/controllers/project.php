<?php
class Project extends CI_Controller{
    private $limit=20;
    
    function __construct(){
        parent::__construct();
        $this->load->library(array('template','template3','template4','form_validation','pagination','upload'));
        $this->load->model(array('m_project'));
        
        if(!$this->session->userdata('level')){
            redirect('web');
        }
    }
	
	public function ajax_delete($id)
	{
		$this->m_project->hapus($id);
		echo json_encode(array("status" => TRUE));
	}

    public function project_page()
     {
		$level= $this->session->userdata('level');	
        $list = $this->m_project->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $r) {
           
		   
			if ($level == 1){
			$no++;
			$row = array();
            $row[] = $no;
            $row[] = $r->id_main_project;
			$row[] = $r->no_doc_project;
            $row[] = $r->deskripsi_project;
            $row[] = $r->tgl_input;
			$row[] = '<a class="btn btn-sm btn-primary" href="project/edit/'."".$r->id_main_project."".'"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
                  <a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_project('."'".$r->id_main_project."'".')"><i class="glyphicon glyphicon-trash"></i> Delete</a>';
            } else {
			$no++;
			$row = array();
            $row[] = $no;
            $row[] = $r->id_main_project;
			$row[] = $r->no_doc_project;
            $row[] = $r->deskripsi_project;
            $row[] = $r->tgl_input;	
				
				
			}
           
 
            $data[] = $row;
        }
 
        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->m_project->count_all(),
                        "recordsFiltered" => $this->m_project->count_filtered(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);



          
     }
    

    function index($offset=0,$order_column='id_main_project',$order_type='asc'){
        if(empty($offset)) $offset=0;
        if(empty($order_column)) $order_column='id_main_project';
        if(empty($order_type)) $order_type='asc';
        
        //load data
		$level= $this->session->userdata('level');
        $data['project']=$this->m_project->semua($this->limit,$offset,$order_column,$order_type)->result();
        $data['title']="Data project";
        
        $config['base_url']=site_url('project/index/');
        $config['total_rows']=$this->m_project->jumlah();
        $config['per_page']=$this->limit;
        $config['uri_segment']=3;
        $this->pagination->initialize($config);
        $data['pagination']=$this->pagination->create_links();
        
        
        if($this->uri->segment(3)=="delete_success")
            $data['message']="<div class='alert alert-success'>Data berhasil dihapus</div>";
        else if($this->uri->segment(3)=="add_success")
            $data['message']="<div class='alert alert-success'>Data Berhasil disimpan</div>";
        else
            $data['message']='';
			if ($level == 1){
            $this->template->display('project/index',$data);
			} else if ($level == 2){
			$this->template3->display('project/index2',$data);	
			} else {
			$this->template4->display('project/index2',$data);	
			}
    }
    
    
    function tambah(){
        $data['title']="Tambah Main Project";
	
		$data['kodeurut']=$this->m_project->carikodeurut("PRO");
        $this->_set_rules();
        if($this->form_validation->run()==true){//jika validasi dijalankan dan benar
			$cek=$this->m_project->cek($id_main_project); // cek kode di database
            if($cek->num_rows()>0){ // jika kode sudah ada, maka tampilkan pesan
                $data['message']="<div class='alert alert-danger'>Id project sudah ada</div>";
                $this->template->display('project/tambah',$data);
            }else{ // jika kode buku belum ada, maka simpan
                
                //setting konfiguras upload image
                $config['upload_path'] = './assets/img/';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size']	= '1000';
				$config['max_width']  = '2000';
				$config['max_height']  = '1024';
                
                $this->upload->initialize($config);
                if(!$this->upload->do_upload('gambar')){
                    $gambar="";
                }else{
                    $gambar=$this->upload->file_name;
                }
                
                $info=array(
					'tgl_input'=>$this->input->post('tgl_input'),
                    'id_main_project'=>$this->input->post('id_main_project'),
					'no_doc_project'=>$this->input->post('no_doc_project'),
                    'deskripsi_project'=>$this->input->post('deskripsi_project'),
					
					
                );
                $this->m_project->simpan($info);
                redirect('project/index/add_success');

            }
        }else{
            $data['message']="";
            $this->template->display('project/tambah',$data);
        }
    }
    
    function edit($id){
        $data['title']="Edit data Main Project";
		
		
        $this->_set_rules();
        if($this->form_validation->run()==true){
            $kode=$this->input->post('id_main_project');

            $info=array(
					'no_doc_project'=>$this->input->post('no_doc_project'),
                    'deskripsi_project'=>$this->input->post('deskripsi_project'),
                );
				
            $this->m_project->update($kode,$info);
            
            $data['project']=$this->m_project->cek($id)->row_array();
            $data['message']="<div class='alert alert-success'>Data berhasil diupdate</div>";
            $this->template->display('project/edit',$data);
        }else{
            $data['message']="";
            $data['project']=$this->m_project->cek($id)->row_array();
            $this->template->display('project/edit',$data);
        }
    }
    
    function _set_rules(){
       
        $this->form_validation->set_rules('id_main_project','Id  Main Project','required|max_length[100]');
        $this->form_validation->set_rules('tgl_input','Tanggal Input','required|max_length[25]');
		$this->form_validation->set_rules('no_doc_project','Tanggal Selesai','required|max_length[25]');
        $this->form_validation->set_error_delimiters("<div class='alert alert-danger'>","</div>");
    }
}