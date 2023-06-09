<?php
$this->load->view('admin/header');
?>

<style>
.custom-file-label::after {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    z-index: 3;
    display: block;
    height: 2.75rem;
    padding: 0.625rem 0.75rem;
    line-height: 1.5;
    color: white;
    content: "Browse";
    background-color: #007bff;
    border-left: 1px solid #cad1d7;
    border-radius: 0 0.375rem 0.375rem 0;
    cursor: pointer !important;
}
#hasError{
  color: red;
}
</style>

<!-- Header -->
<div class="header pb-8 pt-5 pt-md-0">

</div>
<!-- <div class="container-fluid mt--7"> -->
  <div class="container-fluid mt--9" id="frm-tambah-edit">
    <div class="row">
      <div class="col-lg-12">
        <div class="card bg-secondary shadow border-0">
          <div class="card-body">
            <div class="col">
              <h2 class="mb-3 text-primary">TAMBAH LOWONGAN</h2>
            </div>

            <form action="<?php echo site_url('admin/lowongan/aksi_tambah') ?>" method="post">
              <div class="row">
                
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control form-control-alternative" placeholder="Nama Perusahaan" name="nama_perusahaan" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control form-control-alternative" placeholder="Kota" name="kota" required>
                  </div>
                </div>
    
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control form-control-alternative" placeholder="Judul Lowongan" name="judul_lowongan" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control form-control-alternative" placeholder="Deskripsi Singkat" name="deskripsi_singkat" required>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <textarea type="text" class="form-control form-control-alternative" placeholder="Deskripsi Panjang" name="deskripsi_panjang" required></textarea>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <input type="number" class="form-control form-control-alternative" placeholder="Jumlah Lowongan" name="jumlah_lowongan" required>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                <label for="logo" class="pl-2">LOGO</label>
                <input type="file" id="logo" name="file" class="form-control form-control-alternative" >
                </div>
                </div>
                

              </div>
              <div class="text-center">
              <button type="submit" class="btn btn-primary my-2" name="simpan">Simpan</button>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>



    <?php
    $this->load->view('footer');
    ?>
