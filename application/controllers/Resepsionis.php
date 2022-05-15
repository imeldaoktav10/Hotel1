<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resepsionis extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');	
	}

	public function call()
	{
		$view=$_GET['v'];
		$t=$_GET['t'];
		if (!empty($_POST))	{
			foreach ($_POST as $key => $value) {
				$this->db->like($key,$value);
			}
		}
		$t = $this->db->get($t)->result();
		// var_dump($t);die;
		$this->load->view('Resepsionis/filterData',['data'=>$t]);
	}

	public function payed()
	{
		// var_dump($_GET['id']);
		$this->db->set($_GET['f'], $_GET['v']);
		$this->db->where('id_pesanan', $_GET['id']);
		$this->db->update('pemesanan');

		redirect($_SERVER['HTTP_REFERER']);
	}

	public function Datatrack()
	{
		if (!empty($_GET['ref'])) {
			$car=$_GET['ref'];
			$this->db->where('RefPB', $car);
			$this->db->select('*');
			$this->db->from('pemesanan');
			$this->db->join('Tipe_room', 'Tipe_room.id = pemesanan.id_kamar');
			$yourbooked = $this->db->get()->result();
			$data['book']=$yourbooked;
			$data['id']=$car;
			// var_dump($data);die;
			$this->load->view('Resepsionis/ref',['data'=>$data]);
		}else{
		$this->load->view('Resepsionis/datatrack');
	}
}
}