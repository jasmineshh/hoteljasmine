<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller { 

	public function __construct()
	{
		parent::__construct();
		 $this->CekLogin();
	}

public function CekLogin($value='')
{
	if (!empty($_SESSION['user'])) {
		$this->Leving();
	}else  {
		//redirect('/Auth/login');
	}
}
 function Logout()
{
	$this->session->sess_destroy();
	redirect('/Auth/login');
}
public function Register()
{
	$this->load->view('Auth/register');
}

public function addusers()
{
	$data=$_POST;
	$data += array(
		'level' => 'tamu');

	//var_dump($data);die;
	$this->db->insert('users' , $data);

		redirect('/Auth/login');
}
	public function index()
	{
		$this->load->view('welcome_message');
	}
	      function login()
	{
		$this->load->view('Auth/login');
	}
	public function cekusers()
	{
		//var_dump($_POST);
		$username=$_POST['username'];
		$password=$_POST['password'];
		
		$this->db->where('username' , $username);
		$this->db->where('password' , $password);
		$login=$this->db->get('users')->result();
		if (empty($login)) {
			redirect('/tamu/Login');
		}
		$_SESSION['user']=$login[0];

		$this->leving();
	}

	public function leving()
	{
		if ($_SESSION['user']->level=="tamu") {
        	redirect('/Tamu/TipeKamar');
        }
        if ($_SESSION['user']->level=="resepsionis") {
        	redirect('/Resp/datatrack');
        }
        if ($_SESSION['user']->level=="admin") {
        	redirect('/Admin/data?t=F_Hotel&v=allcounter');
        }
    }
}
