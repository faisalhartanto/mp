<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pekerjaan_Model extends CI_Model {
	public function view(){
		return $this->db->get('pekerjaan')->result();
	}
	
	
	


	
	public function view_row1($jns){
		
		
        $this->db->select('*');
		$this->db->from('pekerjaan');
		$this->db->where('substring(pekerjaan.jns,1,3)',$jns);
		$this->db->join('sow', 'pekerjaan.jns = sow.jns');
		return $this->db->get()->result();
		
	}
	
	public function view_row2($jns,$bulan){
		
		
        $this->db->select('*');
		$this->db->from('pekerjaan');
		$this->db->where('substring(pekerjaan.jns,1,3)',$jns);
		$this->db->where('substring(tgl,3,5)',$bulan);
		$this->db->join('sow', 'pekerjaan.jns = sow.jns');
		return $this->db->get()->result();
		
	}
	
	public function view_row3($kat){
		
		
        $this->db->select('*');
		$this->db->from('pekerjaan');
		$this->db->where('pekerjaan.jns',$kat);
		$this->db->join('sow', 'pekerjaan.jns = sow.jns');
		return $this->db->get()->result();
		
	}
	
	public function view_row4($kat,$bulan){
		
		
        $this->db->select('*');
		$this->db->from('pekerjaan');
		$this->db->where('pekerjaan.jns',$kat);
		$this->db->where('substring(tgl,3,5)',$bulan);
		$this->db->join('sow', 'pekerjaan.jns = sow.jns');
		return $this->db->get()->result();
		
	}
}
