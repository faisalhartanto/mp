<?php
class M_so extends CI_Model{
    var $table="so";
	var $table2="project";
	var $table3="rtp";
	var $primary="id_so";
	var $primary2="site_id";
	var $primary3="id_rtp";

	var $column_order = array(null,'id_so','id_main_project','no_doc_project','deskripsi'); //set column field database for datatable orderable
    var $column_search = array('id_so','id_main_project','no_doc_project','deskripsi');  //set column field database for datatable searchable 
    var $order = array('id_so' => 'asc'); // default order 
 
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
	
private function _get_datatables_query()
	{
		if($this->input->post('combat'))
		{
			$this->db->where('combat', $this->input->post('combat'));
		}
		if($this->input->post('alamat'))
		{
			$this->db->where('alamat', $this->input->post('alamat'));
		}
		if($this->input->post('status'))
		{
			$this->db->like('status', $this->input->post('status'));
		}
		

		$this->db->from($this->table);

		$i = 0;
	
		foreach ($this->column_search as $item) // loop column 
		{
			if($_POST['search']['value']) // if datatable send POST for search
			{
				
				if($i===0) // first loop
				{
					//$this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
					$this->db->like($item, $_POST['search']['value']);
				}
				else
				{
					$this->db->or_like($item, $_POST['search']['value']);
				}

				if(count($this->column_search) - 1 == $i); //last loop
					//$this->db->group_end(); //close bracket
			}
		$i++;
		}
		
		if(isset($_POST['order'])) // here order processing
		{
			$this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
		} 
		else if(isset($this->order))
		{
			$order = $this->order;
			$this->db->order_by(key($order), $order[key($order)]);
		}
	}

	function get_datatables()
	{
		$this->_get_datatables_query();
		if($_POST['length'] != -1)
		$this->db->limit($_POST['length'], $_POST['start']);
		$query = $this->db->get();
		return $query->result();
	}

	function count_filtered()
	{
		$this->_get_datatables_query();
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function count_all()
	{
		$this->db->from($this->table);
		return $this->db->count_all_results();
	}
    
    function semua($limit=100,$offset=0,$order_column='',$order_type='asc'){
        if(empty($order_column) || empty($order_type))
            $this->db->order_by($this->primary,'asc');
        else
            $this->db->order_by($order_column,$order_type);
        return $this->db->get($this->table,$limit,$offset);
    }
	
	
	
	function semua_mainproject(){
        
        $query=$this->db->get($this->table2);
        
        return $query;
    }
	
	
    function jumlah(){
        return $this->db->count_all($this->table);
    }

    function carikodeurut($jens){

		$this->db->select_max('substring(id_proker,4,4)','last');
		$this->db->where('substring(id_proker,1,3)',$jens);
		$query=$this->db->get('proker');
		
		
		foreach ($query->result() as $row)
		{
		}
		$data = $row->last;
		$query->free_result(); 
        
		
        $lastNoFaktur=$data;
        
        $lastNoUrut=$lastNoFaktur;
        
        $nextNoUrut=$lastNoUrut+1;
		$noautonya = sprintf('%04s',$nextNoUrut);
 
        return $noautonya;
    }
    
    function cek($kode){
        $this->db->where($this->primary,$kode);
        $query=$this->db->get($this->table);
        
        return $query;
    }
    
    function simpan($jenis){
        $this->db->insert($this->table,$jenis);
        return $this->db->insert_id();
    }
    
    function update($kode,$jenis){
        $this->db->where($this->primary,$kode);
        $this->db->update($this->table,$jenis);
    }
    
    function hapus($kode){
        $this->db->where($this->primary,$kode);
        $this->db->delete($this->table);
    }
    
    function cari($cari){
        $this->db->like($this->primary,$cari);
        $this->db->or_like("judul",$cari);
        return $this->db->get($this->table);
    }
	
	function carisitename($cari){
        $this->db->like($this->primary2,$cari);
        $this->db->or_like("site_id",$cari);
        return $this->db->get($this->table2);
    }
	
	function cariDetailsitac($alamat){
        $this->db->where("alamat",$alamat);
        return $this->db->get("sitac");
    }
	
	function cariNodoc($id_main_project){
        $this->db->where("id_main_project",$id_main_project);
        return $this->db->get("project");
    }
	
}