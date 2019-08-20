<?php
class So extends CI_Controller{
    private $limit=20;
    
    function __construct(){
        parent::__construct();
        $this->load->library(array('template','template3','template4','form_validation','pagination','upload'));
        $this->load->model(array('m_so'));
        
        if(!$this->session->userdata('level')){
            redirect('web');
        }
    }

    public function so_page()
     {
		 
		$level= $this->session->userdata('level'); 
        $list = $this->m_so->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $r) {
           
			if ($level == 1){
			$no++;
			$row = array();
            $row[] = $no;
            $row[] = $r->tgl_input;
            $row[] = $r->id_so;
            $row[] = $r->id_main_project;
            $row[] = $r->no_doc_project;
			$row[] = $r->deskripsi;
			$row[] = $r->nilai_project;
			$row[] = $r->bulan;
			$row[] = $r->no_po_kesepakatan;
			$row[] = $r->status_job;
			/*
			$row[] = $r->rutin;
			$row[] = $r->telkomsel;
			$row[] = $r->po_nonpo;
			$row[] = $r->status_po;
			*/
			$row[] = '<a class="btn btn-sm btn-primary" href="so/edit/'."".$r->id_so."".'"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
                  <a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_so('."'".$r->id_so."'".')"><i class="glyphicon glyphicon-trash"></i> Delete</a>
				  <a class="btn btn-sm btn-primary" href="so/editstatus/'."".$r->id_so."".'"><i class="glyphicon glyphicon-pencil"></i>Update Status</a>';
            
			}
			else {
			$no++;
			$row = array();
            $row[] = $no;
            $row[] = $r->tgl_input;
            $row[] = $r->id_so;
            $row[] = $r->id_main_project;
            $row[] = $r->no_doc_project;
			$row[] = $r->deskripsi;
			$row[] = $r->nilai_project;
			$row[] = $r->bulan;
			$row[] = $r->no_po_kesepakatan;
			$row[] = $r->status_job;	
			}
            $data[] = $row;
        }
 
        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->m_so->count_all(),
                        "recordsFiltered" => $this->m_so->count_filtered(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);



          
     }
    
	
	public function ajax_delete($id)
	{
		$this->m_so->hapus($id);
		echo json_encode(array("status" => TRUE));
	}
	
	function approveso() {
    $dat = $this->input->post('forms');
    for ($i = 0; $i < sizeof($dat); $i++) {
        //print_r($dat[$i]);
		$rdata = $this->m_so->ambildata($dat[$i])->result(); 
		foreach ($rdata as $row){
			$id_so = $row->id_so;
			$flag = '2';
		}		
		    $infoflag=array(
					'FLAG'=>$flag
					); 			
		
		
        
		$this->m_so->updateflag($id_so,$infoflag);
		
    }
    redirect('brg2/index_approve', 'refresh');
}

    function index($offset=0,$order_column='id_so',$order_type='asc'){
        if(empty($offset)) $offset=0;
        if(empty($order_column)) $order_column='id_so';
        if(empty($order_type)) $order_type='asc';
        
        //load data
		$level= $this->session->userdata('level'); 
        $data['so']=$this->m_so->semua($this->limit,$offset,$order_column,$order_type)->result();
        $data['title']="Data soalasi";
        
        $config['base_url']=site_url('so/index/');
        $config['total_rows']=$this->m_so->jumlah();
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
            $this->template->display('so/index',$data);
			}
			else if  ($level == 2){
			$this->template3->display('so/index2',$data);	
			}
			else {
			$this->template4->display('so/index2',$data);	
			}
    }
    
	function cariDetailproject(){
        $id_main_project=$this->input->post('id_main_project');
        $no_doc_project=$this->m_so->cariNodoc($id_main_project);
        if($no_doc_project->num_rows()>0){
            $no_doc_project=$no_doc_project->row_array();
            echo $no_doc_project['no_doc_project'];
        }
		
    }	
    
    function tambah(){
        $data['title']="Tambah Sales Order";
		$data['mainproject']=$this->m_so->semua_mainproject()->result();
        $this->_set_rules();
        if($this->form_validation->run()==true){//jika validasi dijalankan dan benar
			
            $cek=$this->m_so->cek($kode); // cek kode di database
            if($cek->num_rows()>0){ // jika kode sudah ada, maka tampilkan pesan
                $data['message']="<div class='alert alert-danger'>Id soalasi sudah ada</div>";
                $this->template->display('so/tambah',$data);
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
                    'id_so'=>$this->input->post('id_so'),
					'id_main_project'=>$this->input->post('id_main_project'),
					'no_doc_project'=>$this->input->post('no_doc_project'),
					'deskripsi'=>$this->input->post('deskripsi'),
					'nilai_project'=>$this->input->post('nilai_project'),
					'bulan'=>$this->input->post('bulan'),
					'no_po_kesepakatan'=>$this->input->post('no_po_kesepakatan'),
					'status_job'=>$this->input->post('status_job'),
					'tgl_belumdikerjakan'=>$this->input->post('tgl_input'),
					'rutin'=>$this->input->post('rutin'),
					'telkomsel'=>$this->input->post('telkomsel'),
					'po_nonpo'=>$this->input->post('po_nonpo'),
					'status_po'=>$this->input->post('status_po'),
                );
                $this->m_so->simpan($info);
                redirect('so/index/add_success');

            }
        }else{
            $data['message']="";
            $this->template->display('so/tambah',$data);
        }
    }
    
	
	function edit($id){
        $data['title']="Edit data SO";
		$data['mainproject']=$this->m_so->semua_mainproject()->result();
		
        $this->_set_rules();
        if($this->form_validation->run()==true){
            $kode=$this->input->post('id_so');

            $info=array(
					'deskripsi'=>$this->input->post('deskripsi'),
					'nilai_project'=>$this->input->post('nilai_project'),
					'bulan'=>$this->input->post('bulan'),
					'no_po_kesepakatan'=>$this->input->post('no_po_kesepakatan'),
					'status_job'=>$this->input->post('status_job'),
					'rutin'=>$this->input->post('rutin'),
					'telkomsel'=>$this->input->post('telkomsel'),
					'po_nonpo'=>$this->input->post('po_nonpo'),
					'status_po'=>$this->input->post('status_po'),
                );
				
            $this->m_so->update($kode,$info);
            
            $data['so']=$this->m_so->cek($id)->row_array();
            $data['message']="<div class='alert alert-success'>Data berhasil diupdate</div>";
            $this->template->display('so/edit',$data);
        }else{
            $data['message']="";
            $data['so']=$this->m_so->cek($id)->row_array();
            $this->template->display('so/edit',$data);
        }
    }
	
	function editstatus($id){
        $data['title']="Edit data Status";
		$data['mainproject']=$this->m_so->semua_mainproject()->result();
		
        $this->_set_rules_status();
        if($this->form_validation->run()==true){
            $kode=$this->input->post('id_so');
			$status_job=$this->input->post('status_job');
			
			if ($status_job == "On Progress"){
				$info=array(
					'status_job'=>$this->input->post('status_job'),
					'tgl_ongoing'=>$this->input->post('tgl_update'),
                );
			} else if ($status_job == "bast"){
				$info=array(
					'status_job'=>$this->input->post('status_job'),
					'tgl_bast'=>$this->input->post('tgl_update'),
                );
			} else if ($status_job == "closed"){
				$info=array(
					'status_job'=>$this->input->post('status_job'),
					'tgl_closed'=>$this->input->post('tgl_update'),
                );
            }
				
            $this->m_so->update($kode,$info);
            
            $data['so']=$this->m_so->cek($id)->row_array();
            $data['message']="<div class='alert alert-success'>Data berhasil diupdate</div>";
            $this->template->display('so/editstatus',$data);
        }else{
            $data['message']="";
            $data['so']=$this->m_so->cek($id)->row_array();
            $this->template->display('so/editstatus',$data);
        }
    }
	
	function index_approve($offset=0,$order_column='id_so',$order_type='asc'){
        if(empty($offset)) $offset=0;
        if(empty($order_column)) $order_column='id_so';
        if(empty($order_type)) $order_type='asc';
        
        //load data
		$level = $this->session->userdata('level');
		$uname = $this->session->userdata('username');
        $data['so']=$this->m_so->approveso($this->limit,$offset,$order_column,$order_type)->result();
        $data['title']="Data SO Belum Approve";
        
        $config['base_url']=site_url('so/index_approve/');
        $config['total_rows']=$this->m_so->jumlah();
        $config['per_page']=10;
        $config['uri_segment']=3;
        $this->pagination->initialize($config);
        $data['pagination']=$this->pagination->create_links();
        
        
        if($this->uri->segment(3)=="delete_success")
            $data['message']="<div class='alert alert-success'>Data berhasil dihapus</div>";
        else if($this->uri->segment(3)=="add_success")
            $data['message']="<div class='alert alert-success'>Data Berhasil disimpan</div>";
        else
            $data['message']='';
			if ($level == 2 ){
            $this->template3->display('so/index_approve',$data);
			}
			else {
			 $this->template3->display('so/index_approve2',$data);	
			}
    }
    
    
    function _set_rules(){
        $this->form_validation->set_rules('id_so','Id so','required|max_length[5]');
        $this->form_validation->set_rules('deskripsi','Deskripsi ','required|max_length[100]');
        $this->form_validation->set_rules('tgl_input','Tanggal Input','required|max_length[25]');
		$this->form_validation->set_rules('bulan','Tanggal SO','required|max_length[25]');
        $this->form_validation->set_error_delimiters("<div class='alert alert-danger'>","</div>");
    }
	
	function _set_rules_status(){
        
        $this->form_validation->set_rules('tgl_update','Tanggal Update','required|max_length[25]');
        $this->form_validation->set_error_delimiters("<div class='alert alert-danger'>","</div>");
    }
}

