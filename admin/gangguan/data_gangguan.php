<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="#">Data</a>
  </li>
  <li class="breadcrumb-item active">Gangguan</li>
</ol>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Table Gangguan</div>
          <div class="card-body">
            <div class="responsive" style="margin-bottom: 10px;">
              <a href="?halaman=data_gangguan&action=tambah_gangguan" class="btn btn-info"><span class="glyphicon glyphicon-import"></span> Tambah Data</a>
            </div>

            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Kode Gangguan</th>
                    <th>Nama Gangguan</th>
                    <th>Solusi</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    include("config/koneksi.php");
                    $sql = $koneksi->query("select * from diagnosa");
                    while ($data= $sql->fetch_assoc()){
                  ?>
                  <tr>
                    <td><?php echo $data['kode_gangguan']?></td>
                    <td><?php echo $data['nama_gangguan']; ?></td>
                    <td><?php echo $data['solusi']; ?></td>
                    <td><?php echo $data['ket']; ?></td>
                    <td>
                      <div class="">
                          
                        <a href="?halaman=data_gangguan&action=edit_gangguan&kode_gangguan=<?php echo $data['kode_gangguan']; ?>" class="ace-icon fa fa-edit"></a>
                        <a href="?halaman=data_gangguan&action=hapus_gangguan&kode_gangguan=<?php echo $data['kode_gangguan']; ?>" class="ace-icon fa fa-trash"></a>
                      </div>
                    </td>
                  </tr>
                  <?php } ?> 
                </tbody>
              </table>
            </div>
          </div>
        </div>
