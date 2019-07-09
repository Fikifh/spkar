 <?php
  include("config/koneksi.php");
  $id = $_GET['kode_gejala'];
  $sql    = $koneksi->query("select * from gejala where kode_gejala='$id'");
  $tampil   = $sql->fetch_assoc();
?>



 <div class="card-header">Tambah Gejala</div>
      <div class="card-body">
        <form class="" role="form" method="POST" onsubmit="return cekform();" enctype="multipart/form-data">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="kode_gejala" name="kode_gejala" class="form-control" value="<?php echo $tampil['kode_gejala'];?>" readonly required="required" autofocus="autofocus">
                  <label for="kode_gejala">Kode Gejala</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="nama_gejala" value="<?php echo $tampil['nama_gejala'];?>" name="nama_gejala" class="form-control" placeholder="Nama Gejala" required="required">
                  <label for="nama_gejala">Nama Gejala</label>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="keterangan" name="keterangan" value="<?php echo $tampil['ket'];?>" class="form-control" placeholder="Keterangan" required="required">
              <label for="keterangan">Keterangan</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="nilai_mb" name="nilai_mb" value="<?php echo $tampil['nilai_mb'];?>" class="form-control" placeholder="Nilai MB" required="required">
                  <label for="nilai_mb">Nilai MB</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="nilai_md" name="nilai_md" value="<?php echo $tampil['nilai_md'];?>" class="form-control" placeholder="Nilai MD" required="required">
                  <label for="nilai_md">Nilai MD</label>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              
                <div class="form-group">
                 <input type="submit" name="edit" value="Edit" class="btn btn-primary btn-small">
                  <a class="btn btn-danger" href="?halaman=data_gejala&action=tambah_gejala" data-toggle ="modal">Cancel</a>
                </div>
            </div>
          </div>
        </form>
        <?php

            include("config/koneksi.php");
            if(@$_POST['edit']){
              $kode_gejala = @$_POST['kode_gejala'];
              $nama_gejala= @$_POST['nama_gejala'];
              $keterangan = @$_POST['keterangan'];
              $nilai_mb = @$_POST['nilai_mb'];
              $nilai_md = @$_POST['nilai_md'];

              $sql = mysqli_query($koneksi,"update gejala set kode_gejala='$kode_gejala', nama_gejala='$nama_gejala', ket='$keterangan', nilai_mb='$nilai_mb', nilai_md='$nilai_md' where kode_gejala='$id'");
              if($sql) {
                ?>
                <script type="text/javascript">
                  alert("Data berhasil disimpan");
                  window.location.href="?halaman=data_gejala&action=data_gejala";
                </script>
                <?php
              }
            }
        ?>
      </div>