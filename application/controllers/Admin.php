<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {
	public function data()
	{
		$view=$_GET['v'];
		$t=$_GET['t'];

		$t = $this->db->get($t)->result();
		//var_dump($t);die;
		$this->load->view('Admin/'.$view,['data'=>$t]);
}
}
