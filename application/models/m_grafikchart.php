<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class M_grafikchart extends CI_Model
{
 
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    /* 
    public function get($kodewilayah)
    {
        $this->db->select('*');
		$this->db->where('substring(kode_brg,4,2)',$kodewilayah);
		$this->db->where('nama_brg','Mobil');
        return $this->db->get('so');
    }
	*/
	public function getkat1($kodekategori)
    {
        $this->db->select('*');
		$this->db->where('status_job',$kodekategori);
        return $this->db->get('so');
    }
	
	
	
	
}