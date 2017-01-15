<?php defined('BASEPATH') or exit('No DIrect Access Allowed');

/**
* 
*/
class Admin extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('product_model');
	}

	function index(){
		$data['product'] = $this->product_model->get_barang_all();
		$this->load->view('admin_view',$data);
	}
	function add(){
		$this->form_validation->set_rules('id','ID','required');
		$this->form_validation->set_rules('nama','nama','required');
		$this->form_validation->set_rules('harga','harga','required');
		$this->form_validation->set_rules('satuan','satuan','required');
		$this->form_validation->set_rules('deskripsi','deskripsi','required');
		$this->form_validation->set_rules('status','status','required');
		$this->form_validation->set_message('%s must not empty','required');

		if ($this->form_validation->run() == FALSE){
			$this->load->view('admin_add');
		} else {
				$config['upload_path']          = './image/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 1000;
                $config['max_width']            = 2000;
                $config['max_height']           = 2000;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());
                        //$this->load->view('admin_add', $error);
                		print_r($error);
                }
                else
                {
                		$gambar = $this->upload->data();
                        $data = array(
                        	'barang_id'			=> $this->input->post('id'),
                        	'barang_nama'		=> $this->input->post('nama'),
                        	'barang_harga'		=> $this->input->post('harga'),
                        	'barang_satuan'		=> $this->input->post('satuan'),
                        	'barang_deskripsi'	=> $this->input->post('deskripsi'),
                        	'barang_aktif'		=> $this->input->post('status'),
                        	'barang_gambar' 	=> $gambar['file_name']);
                        $this->product_model->input_product($data);
                        redirect('admin');
                }

		}
	}
	function edit($id){
		$this->form_validation->set_rules('id','ID','required');
		$this->form_validation->set_rules('nama','nama','required');
		$this->form_validation->set_rules('harga','harga','required');
		$this->form_validation->set_rules('satuan','satuan','required');
		$this->form_validation->set_rules('deskripsi','deskripsi','required');
		$this->form_validation->set_rules('status','status','required');
		$this->form_validation->set_message('%s must not empty','required');

		if ($this->form_validation->run() == FALSE){
			$data['product'] = $this->product_model->get_product_by_id($id);
			$this->load->view('admin_edit',$data);
		} else {
				$config['upload_path']          = './image/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 1000;
                $config['max_width']            = 2000;
                $config['max_height']           = 2000;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());
                        //$this->load->view('admin_add', $error);
                		print_r($error);
                }
                else
                {
                		$gambar = $this->upload->data();
                        $data = array(
                        	'barang_id'			=> $this->input->post('id'),
                        	'barang_nama'		=> $this->input->post('nama'),
                        	'barang_harga'		=> $this->input->post('harga'),
                        	'barang_satuan'		=> $this->input->post('satuan'),
                        	'barang_deskripsi'	=> $this->input->post('deskripsi'),
                        	'barang_aktif'		=> $this->input->post('status'),
                        	'barang_gambar' 	=> $gambar['file_name']);
                        $this->product_model->edit_product($id,$data);
                        redirect('admin');
                }
		}
	}
	function delete($id){
		$this->product_model->delete($id);
		redirect('admin');
	}
}