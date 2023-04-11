<?php $this->load->view('siswa/header'); ?>
<head>
  <link rel="stylesheet" href="<?php echo base_url('assets/css/aos.css'); ?>">
  <style>
    .header-banner {
      background-color: #f5f5f5;
      box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.18);
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 10px 20px;
      margin-bottom: 20px;
    }
    .header-banner img {
      width: 70px;
      height: 70px;
      margin-right: 10px;
    }
    .header-banner h3, .header-banner p {
      margin-bottom: 0;
    }
    .header-banner p {
      font-size: 14px;
    }
    .left-grid, .right-grid {
      background-color: #fff;
      box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.18);
      padding: 20px;
      margin-bottom: 20px;
    }
    .left-grid h4 {
      font-size: 48px;
      margin-bottom: 10px;
    }
    .left-grid, .right-grid {
  height: 100%;
}
.left-grid {
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  height: 100%;
}

  </style>
</head>

<div class="container text-center">
<div class="header-banner">

  <img src="<?php echo base_url('assets/lowongan/img/'.$lowongan->logo); ?>" alt="<?php echo $lowongan->nama_perusahaan; ?>">
  <h1 style="color:#007bff;"><?php echo $lowongan->judul_lowongan; ?></h1>
  <div>
    <h3><?php echo $lowongan->nama_perusahaan; ?></h3>
    <p><?php echo $lowongan->kota; ?></p>
  </div>
  </div>

</div>

<div class="container">
  <div class="row ">
    <div class="col-md-4">
      <div class="left-grid bg-white">
        <h4 class="text-center "><?php echo $lowongan->jumlah_lowongan; ?></h4>
        <p class="text-center">Jumlah lowongan</p>
      </div>
    </div>
    
    <div class="col-md-8">
      <div class="right-grid bg-white">
        <h2>Tentang Perusahaan</h2> <br>
        <p><?php echo $lowongan->deskripsi_panjang; ?></p>
        <button class="btn btn-primary">Apply Pendaftaran</button>
      </div>
    </div>
  </div>
</div>








<?php $this->load->view('footer'); ?>
