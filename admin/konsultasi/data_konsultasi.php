<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="#">Data</a>
  </li>
  <li class="breadcrumb-item active">Konsultasi</li>
</ol>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Tabel Konsultasi</div>
          <div class="card-body">
            <div class="responsive" style="margin-bottom: 10px;">
              
            </div>

            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Umur</th>
                    <th>Jenis Kelamin</th>
                    <th>Diagnosa</th>
                  </tr>
                </thead>
                <tbody>
                 <?php
                    include("config/koneksi.php");
                    $sql = $koneksi->query("select * from user");
                    while ($data= $sql->fetch_assoc()){
                  ?>
                  <tr>
                    <td><?php echo $no++.".";?></td>
                    <td><?php echo $data['nama']; ?></td>
                    <td><?php echo $data['umur']; ?></td>
                    <td><?php echo $data['jk']; ?></td>
                    <td><?php echo $data['diagnosa']; ?></td>
                  </tr>
                  <?php } ?> 
                </tbody>
              </table>
            </div>
          </div>
        </div>
