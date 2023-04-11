<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lowongan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //load model admin
        $this->load->model('admin');
        $this->load->model('Lowongan_Model');
        //cek session dan level user
        if($this->admin->is_role() != "admin"){
            redirect("login/");
        }
    }

   

    public function index()
	{
		$data = $this->Lowongan_Model->Get('lowongan');
		$data = array('data' => $data);

		$this->load->view('admin/lowongan_list', $data);
	}

    public function tambah()
	{
		return $this->load->view('admin/lowongan_tambah');
	}
    private function upload()
	{
      
	$config['upload_path'] = './assets/lowongan/img/';
	$config['allowed_types'] = 'jpg|png|jpeg';
    $config['max_size'] = '90000048';  // max
    $config['file_name'] = $_FILES['file']['name'];

    $this->load->library('upload', $config);
	$this->upload->initialize($config);

	if($this->upload->do_upload("file")){
		return $this->upload->data("file_name");
	}
		print_r($this->upload->display_errors());
  
}
    public function aksi_tambah()
{
    $nama_perusahaan = $this->input->post('nama_perusahaan');
    $kota = $this->input->post('kota');
    $judul_lowongan = $this->input->post('judul_lowongan');
    $deskripsi_singkat = $this->input->post('deskripsi_singkat');
    $deskripsi_panjang = $this->input->post('deskripsi_panjang');
    $jumlah_lowongan = $this->input->post('jumlah_lowongan');
    $file = $this->upload();
    

    $data = array(
        'nama_perusahaan' => $nama_perusahaan,
        'kota' => $kota,
        'judul_lowongan' => $judul_lowongan,
        'deskripsi_singkat' => $deskripsi_singkat,
        'deskripsi_panjang' => $deskripsi_panjang,
        'jumlah_lowongan' => $jumlah_lowongan,
        'logo' => $file
    );

    // Now you can save the form data into a database using a model
    
    $tambah = $this->Lowongan_Model->tambah('lowongan', $data);

    if ($tambah) {
        redirect('admin/lowongan');
    } else {
        echo "Gagal menambahkan data";
    }
}

    public function hapus($id)
	{
		$hapus=$this->Lowongan_Model->hapus('lowongan',$id);
		if ($hapus>0) {
			
			?>
			<script>
				alert("Berhasil Menghapus Soal"); document.location= '../';
			</script>
			<?php
		}
		else
		{
			echo "Gagal dihapus";
		}
	}

    // public function edit($id)
    // {
    //  $lowongan=($this->Lowongan_Model->ambil_data_id($id));
    //  $data = array(
    //   'id_lowongan'   => set_value('id_lowongan',$lowongan->id_lowongan),
    //   'nama_perusahaan' => set_value('nama_perusahaan',$lowongan->nama_lowongan),
    //   'kota'       => set_value('kota',$lowongan->akses),
    //   'logo'   => set_value('logo',$lowongan->logo),
    //   'judul_lowongan'   => set_value('judul_lowongan',$lowongan->judul_lowongan),
    //   'deskripsi_singkat'   => set_value('deskripsi_singkat',$lowongan->deskripsi_singkat),
    //   'deskripsi_panjang'   => set_value('deskripsi_panjang',$lowongan->deskripsi_panjang),
    //   'jumlah_lowongan'   => set_value('jumlah_lowongan',$lowongan->jumlah_lowongan),
    //   'action' 	  => site_url('admin/lowongan/updateData')
    // );
    //  $this->load->view('admin/lowongan_edit', $data);
    // }
   
    

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('');
    }

}