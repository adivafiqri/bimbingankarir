<?php
$this->load->view('admin/header');
?>
<style>
div.dataTables_wrapper div.dataTables_length label {
    font-weight: normal;
    text-align: left;
    white-space: nowrap;
    margin-left: 25px;
}
div.dataTables_wrapper div.dataTables_filter {
    text-align: right;
    margin-right: 10px;
}
div.dataTables_wrapper div.dataTables_paginate ul.pagination {
    margin: 2px 0;
    white-space: nowrap;
    justify-content: flex-end;
    margin-right: 35px;
    margin-bottom: 10px;
}
div.dataTables_wrapper div.dataTables_info {
    padding-top: 0.85em;
    white-space: nowrap;
    margin-left: 20px;
    margin-bottom: 10px;
}
#hasError{
  color: red;
}
</style>
<!-- Header -->
<div class="header pb-8 pt-5 pt-md-0">

</div>
<!-- <div class="container-fluid mt--7"> -->
  <div class="container-fluid mt--9" id="frm-tabel-lowongan">
    <div class="row mt-2">
      <div class="col-xl-12 mb-5 mb-xl-0">
        <div class="card shadow">
          <div class="card-header border-0">
            <div class="row align-items-center">
              <div class="col">
                <h2 class="mb-0 text-primary">Data Lowongan</h2>
              </div>
              <div class="pull-right">
                <a href="<?php echo base_url(); ?>admin/lowongan/tambah" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> TAMBAH lowongan</a>
              </div>
            </div>
          </div>
          <div class="table-responsive">
            <!-- Projects table -->
            <table class="table align-items-center table-flush" id="example">
              <thead class="thead-light">
                <tr>
                  <th scope="col" width="20px">No</th>
                  <th>Nama Perusahaan</th>
                  <th>Kota</th>
                  <th>Judul Lowongan</th>
                  <th>Deskripsi Singkat</th>
                  <th>Jumlah</br> Lowongan</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php $no=1; foreach ($data as $lowongan): ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $lowongan['nama_perusahaan']; ?></td>
                  <td><?php echo $lowongan['kota']; ?></td>
                  
                  <td><?php echo $lowongan['judul_lowongan']; ?></td>
                  <td><?php echo substr($lowongan['deskripsi_singkat'], 0, 10) . '...'; ?></td>
                  <td><?php echo $lowongan['jumlah_lowongan']; ?></td>
                  <td>
                    <a href="<?php echo site_url('admin/lowongan/edit/'.$lowongan['id_lowongan']) ?>" class="btn btn-sm btn-primary" >EDIT</a>
                    <a href="<?php echo base_url() ?>admin/lowongan/hapus/<?=$lowongan['id_lowongan']?>" class="btn btn-sm btn-danger">HAPUS</a>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>



  <?php
  $this->load->view('footer');
  ?>
