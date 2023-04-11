<?php
$this->load->view('siswa/header');
?>

<head>
  <link rel="stylesheet" href="assets/css/aos.css">
</head>



<div class="container">
    <div class="row flex-row">
    <div class="col-12 mb-3">
      <form>
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Cari lowongan pekerjaan" id="searchInput">
          <div class="input-group-append">
            <button class="btn btn-primary" type="button" onclick="search()">Cari</button>
          </div>
        </div>
      </form>
    </div>
        <div class="col-12 text-center mb-3">
            <h1 class="text-white">Lowongan Pekerjaan</h1>
        </div>
        <?php foreach ($lowongan as $row) { ?>
        <div class="col-md-4 mb-4 mt-3 flex-column">
            <div class="card h-100">
                <img src="<?php echo base_url('assets/lowongan/img/'.$row->logo); ?>" class="card-img-top img-fluid d-block mx-auto mt-2" alt="<?php echo $row->nama_perusahaan; ?>" style="width: 100px; height: 100px;">
                <div class="card-body">
                    <h4 class="card-text text-center mt-3"><?php echo $row->judul_lowongan; ?></h4>
                    <h4 class="card-text text-center" style="color:blue;"><?php echo $row->kota; ?></h4>
                    <p class="card-text text-center mt-3"><?php echo $row->deskripsi_singkat; ?></p>
                    <div class="text-center">
                        <small class="text-muted"><?php echo $row->jumlah_lowongan; ?> lowongan</small>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>



        
      
<!-- Page content -->
<div class="container-fluid mt--8">




<script>
  function search() {
    // Ambil nilai yang diinput oleh pengguna pada form pencarian
    var searchValue = document.getElementById('searchInput').value.toLowerCase();
    
    // Ambil semua elemen lowongan pekerjaan
    var lowonganElems = document.getElementsByClassName('card');
    
    // Loop melalui semua elemen lowongan pekerjaan
    for (var i = 0; i < lowonganElems.length; i++) {
      // Ambil judul lowongan pekerjaan pada elemen saat ini
      var title = lowonganElems[i].querySelector('.card-text.text-center.mt-3').textContent.toLowerCase();
      
      // Cek apakah judul lowongan pekerjaan mengandung nilai yang diinput oleh pengguna
      if (title.indexOf(searchValue) > -1) {
        // Jika iya, tampilkan elemen tersebut
        lowonganElems[i].style.display = "";
      } else {
        // Jika tidak, sembunyikan elemen tersebut
        lowonganElems[i].style.display = "none";
      }
    }
  }
</script>

  <?php
  $this->load->view('footer');
  ?>