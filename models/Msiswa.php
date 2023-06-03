<?php 
class Msiswa extends CI_Model
{
	function tampil_siswa()
	{
		// model mengambil data dari database 

		// menampilkan semua data dari table siswa
		// select * from siswa
		$ambil = $this->db->get("SISWA");

		// pecah data dalam array
		// oci_fetch_array
		$siswa = $ambil->result_array();

		return $siswa;

	}
	function simpan_siswa($inputan)
	{
		$config['upload_path']          = './assets/img/foto_siswa';
		$config['allowed_types']        = 'gif|jpg|png';

		$ngupload = $this->load->library("upload", $config);

		// adegan ngupload
		$ngupload = $this->upload->do_upload("FOTO_SISWA");
		if ($ngupload) {
			
			$inputan['FOTO_SISWA'] = $this->upload->data("file_name");	
		}

		$this->db->insert("SISWA",$inputan);

		redirect("siswa/tampil");
	}
	function detail_siswa($nis)
	{
		$this->db->where("NIS",$nis);
		$ambil_siswa = $this->db->get("SISWA");
		$detail_siswa = $ambil_siswa->row_array();

		return $detail_siswa;



	}
	function ubah_siswa($nis,$inputan)
	{
		$config['upload_path']          = './assets/img/foto_siswa';
		$config['allowed_types']        = 'gif|jpg|png';

		$ngupload = $this->load->library("upload", $config);

		// adegan ngupload
		$ngupload = $this->upload->do_upload("FOTO_SISWA");
		if ($ngupload) {
			
			$inputan['FOTO_SISWA'] = $this->upload->data("file_name");	
		}

		$this->db->where("NIS",$nis);
		$this->db->update("SISWA",$inputan);

		redirect("siswa/tampil");
	}

	function hapus_siswa($nis)
	{
		$this->db->where("NIS", $nis);
		$this->db->delete("SISWA");

		

		redirect("siswa/tampil");
	}
}

?>