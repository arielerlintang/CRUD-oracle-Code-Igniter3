<?php 
// class : pengelompokan

// extends controller nya di peranakan 

// ci controller definisi file php controller

class Siswa extends CI_Controller
{
	// perankan dari controller
	function tampil()
	{
		// controller panggil model
		$this->load->model("Msiswa");


		// model Msiswa menjalankan anak nya tampil_siswa();
		$data['siswa'] = $this->Msiswa->tampil_siswa();
		
		// controller manggil view
		$this->load->view("tampil_siswa", $data);
	}	
	function tambah()
	{
		$inputan = $this->input->post();

		if ($inputan) {
			$this->load->model("Msiswa");

			$this->Msiswa->simpan_siswa($inputan);
		}

		$this->load->view("siswa_tambah");
	}
	function detail($nis)
	{
		$this->load->model("Msiswa");

		$data['siswa'] = $this->Msiswa->detail_siswa($nis);

		$this->load->view("siswa_detail", $data);
	}
	function ubah($nis)
	{
		$this->load->model("Msiswa");

		$data['detail'] = $this->Msiswa->detail_siswa($nis);

		$inputan = $this->input->post();
		
		if ($inputan)
		 {
			$this->load->model("Msiswa");
			$this->Msiswa->ubah_siswa($nis,$inputan);			
		}		

		$this->load->view("siswa_ubah", $data);
	}
	function hapus($nis)
	{

		$this->load->model("Msiswa");

		$detail = $this->Msiswa->detail_siswa($nis);
		 $namafoto = $detail['FOTO_SISWA'];

		 unlink("assets/img/foto_siswa/".$namafoto);
		
		$this->Msiswa->hapus_siswa($nis);
	}
}

 ?>