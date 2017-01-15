<?php defined('BASEPATH') or exit('No Direct Access Allowed');
/**
* 
*/
class Product_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	function get_barang_all(){
		$query = $this->db->get('barang');
		return $query->result();
	}
	function input_product($data){
		$query = $this->db->insert('barang',$data);
	}
	function get_product_by_id($id){
		$query = $this->db->where('barang_id',$id)->get('barang');
		if ($query->num_rows() > 0){
			return $query->result();
		} else {
			return false;
		}
	}
	function edit_product($id,$data){
		$query = $this->db->where('barang_id',$id)->update('barang',$data);
	}
	function delete($id){
		$this->db->where('barang_id',$id)->delete('barang');
	}
}