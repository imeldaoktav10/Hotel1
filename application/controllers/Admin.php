<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function data()
	{
		$view=$_GET['v'];
		$t=$_GET['t'];
		
		$t = $this->db->get($t)->result();
		// var_dump($t);die;
		$this->load->view('Admin/'.$view,['data'=>$t]);
	}

	public function update()
	{

		$lin=[];
		foreach ($_POST as $key => $upcase) {
		$lin[]=array($key,$upcase);
		$this->db->set($key,$upcase);
		}
		// var_dump($_POST,$_GET);die;
		$this->db->where($_POST,$_GET['link'], $_GET['val']);
		$this->db->update($_GET['t']);
		redirect($_SERVER['HTTP_REVERER']);
	}

	public function add()
	{

		$view=$_GET['v'];
		$t=$_GET['t'];
		if (!empty($_POST)) {
			$this->db->insert($_GET['t'], $_POST);
			echo "<h1>Berhasil Di Tambahkan</h1>";
		}
		$t = $this->db->get($t)->result();
		// var_dump($t);die;
		$this->load->view('Admin/'.$view,['data'=>$t]);
	}
}
