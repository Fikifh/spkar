<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="#">Data</a>
  </li>
  <li class="breadcrumb-item active">Gejala</li>
</ol>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Table Gejala</div>
          <div class="card-body">
            <div class="responsive" style="margin-bottom: 10px;">
              <a href="?halaman=data_gejala&action=tambah_gejala" class="btn btn-info"><span class="glyphicon glyphicon-import"></span> Tambah Data</a>
            </div>

            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Kode Gejala</th>
                    <th>Nama Gejala</th>
                    <th>Pertanyaan</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    include("config/koneksi.php");
                    $sql = $koneksi->query("select * from gejala");
                    while ($data= $sql->fetch_assoc()){
                  ?>
                  <tr>
                    <td><?php echo $data['kode_gejala'];?></td>
                    <td><?php echo $data['nama_gejala']; ?></td>
                    <td><?php echo $data['pertanyaan']; ?></td>
                    <td><?php echo $data['ket']; ?></td>
                    <td>
                      <div class="">
                          
                        <a href="?halaman=data_gejala&action=edit_gejala&kode_gejala=<?php echo $data['kode_gejala']; ?>" class="ace-icon fa fa-edit"></a>
                        <a href="?halaman=data_gejala&action=hapus_gejala&kode_gejala=<?php echo $data['kode_gejala']; ?>" class="ace-icon fa fa-trash"></a>
                      </div>
                    </td>
                  </tr>
                  <?php } ?>  
                </tbody>
              </table>
            </div>
          </div>
        </div>
