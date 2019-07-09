<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="#">Data</a>
  </li>
  <li class="breadcrumb-item active">Relasi</li>
</ol>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Tabel Relasi</div>
          <div class="card-body">
            <div class="responsive" style="margin-bottom: 10px;">
              <a href="?halaman=data_relasi&action=tambah_relasi" class="btn btn-info"><span class="glyphicon glyphicon-import"></span> Tambah Data</a>
            </div>

            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Gangguan</th>
                    <th>Nama Gejala</th>
                    <th>Nilai MB</th>
                    <th>Nilai MB</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;
                    include("config/koneksi.php");
                    $sql = $koneksi->query("select * from relasi");
                    while ($data= $sql->fetch_assoc()){
                  ?>
                  <tr>
                    <td><?php echo $no++.".";?></td>
                    <td><?php echo $data['kode_gangguan'];?></td>
                    <td><?php echo $data['kode_gejala'];?></td>
                    <td><?php echo $data['nilai_mb'];?></td>
                    <td><?php echo $data['nilai_md'];?></td>
                    <td>
                      <div class="">
                          
                        <a href="?halaman=data_relasi&action=edit_relasi&kode_relasi=<?php echo $data['kode_relasi']; ?>" class="ace-icon fa fa-edit"></a>
                        <a href="?halaman=data_relasi&action=hapus_relasi&kode_relasi=<?php echo $data['kode_relasi']; ?>" class="ace-icon fa fa-trash"></a>
                      </div>
                    </td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>