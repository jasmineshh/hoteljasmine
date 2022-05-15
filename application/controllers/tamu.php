<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tamu extends CI_Controller { 
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function detailtipe()
	{
	
	$this->db->where('Nama_room' ,$_GET['id']);
		$tipe_kamar = $this->db->get('Tipe_room')->result();
		//var_dump($tipe_kamar);die;
		$data=[];
		foreach ($tipe_kamar as $key => $kamar) {
			$this->db->where('id_tipekamar', $kamar->id);
			$fasilitaskamar = $this->db->get('F_kamar')->result();
			$data [$key]=array(
		 		'Info_kamar' =>$kamar ,
				'F_kamar'=>$fasilitaskamar);
		}
				$this->load->view('tamu/DetailFKamar' ,['data'=>$data]);
	}
	public function booknow()
	{
		$data['user']=$_SESSION['user'];

		$this->db->where('Nama_room' ,$_GET['id']);
		$tipe_kamar = $this->db->get('Tipe_room')->result();
		$dataKamar=[];
		foreach ($tipe_kamar as $key => $kamar) {
			$this->db->where('id_tipekamar', $kamar->id);
			$fasilitaskamar = $this->db->get('F_kamar')->result();
			$dataKamar [$key]=array(
		 		'Info_kamar' =>$kamar ,
				'F_kamar'=>$fasilitaskamar);
		}

				$allroom = $this->db->get('Tipe_room')->result();
			$data['kamar']=$dataKamar;
			$data['alltipe']=$allroom;
				$this->load->view('tamu/book' ,['data'=>$data]);
	}
	public function TipeKamar()
	{

		$tipe_kamar = $this->db->get('Tipe_room')->result();
		$data=[];
		foreach ($tipe_kamar as $key => $kamar) {
			$this->db->where('id_tipekamar', $kamar->id);
			$fasilitaskamar = $this->db->get('F_kamar')->result();
			$data [$key]=array(
		 		'Info_kamar' =>$kamar ,
				'F_kamar'=>$fasilitaskamar);
}
		$this->load->view('tamu/fasilitaskamar' ,['data'=>$data]);
	}
	public function ref()
	{
		$this->db->where('nama_pemesan' ,$_SESSION['user']->Nama);
		$this->db->select('*');
		$this->db->from('pemesanan');
		$this->db->join('Tipe_room', 'Tipe_room.id = pemesanan.id_kamar');
		$yourbooked = $this->db->get()->result();
		$data['book']=$yourbooked;
		//var_dump($data);die;
		$this->load->view('tamu/ref' , ['data'=>$data]);
	}
	public function prosBook()
	{

		$this->db->where('id' ,$_POST['id_kamar']);
		$tipe_kamar = $this->db->get('Tipe_room')->result();
		//var_dump($tipe_kamar);die;
		$total_harga=$_POST['jml_kamar']*$tipe_kamar[0]->harga;
		//var_dump($total_harga);die;

	 	$data= array(
		'nama_pemesan' => $_POST['nama_pemesan'],
		'email' => $_POST['email'],
		'no_hp' => $_POST['no_hp'],
		'nama_tamu' => $_POST['nama_tamu'],
		'id_kamar' => $_POST['id_kamar'],
		'tgl_cekin' => $_POST['tgl_cekin'],
		'tgl_cekout' => $_POST['tgl_cekout'],
		'jml_kamar' => $_POST['jml_kamar'],
		'Harga' => $total_harga,
		'PayBay' => $_POST['PayBay'],
		'PayEnd' => 0,
		//'Status_Kamar' => 0, 
		'RefPB' => date('mdy').$_POST['PayBay'].date('His'),
	);
	$this->db->insert('pemesanan' , $data);
	redirect('/tamu/ref');
	}

} 