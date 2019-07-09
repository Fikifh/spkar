<?php
  include("config/koneksi.php");
  $no = mysqli_query($koneksi,"select kode_gejala from gejala order by kode_gejala desc");
  $kd = mysqli_fetch_array($no);
  $kode = $kd['kode_gejala'];
  $urut = substr($kode, 1,3);
  $tambah = (int) $urut+1;

  if(strlen($tambah) == 1){
    $format = "G"."00".$tambah;
  }elseif (strlen($tambah)== 2){
    $format = "G"."0".$tambah;
  }elseif (strlen ($tambah) == 3) {
    $format = "G".$tambah;
  }
?>
   
      <div class="card-header">Tambah Gejala</div>
      <div class="card-body">
        <form class="" role="form" method="POST" onsubmit="return cekform();" enctype="multipart/form-data">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="kode_gejala" name="kode_gejala" class="form-control" placeholder="Kode Gejala" value="<?php echo $format;?>" readonly required="required" autofocus="autofocus">
                  <label for="kode_gejala">Kode Gejala</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="nama_gejala" name="nama_gejala" class="form-control" placeholder="Nama Gejala" required="required">
                  <label for="nama_gejala">Nama Gejala</label>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="keterangan" name="keterangan" class="form-control" placeholder="Keterangan" required="required">
              <label for="keterangan">Keterangan</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="nilai_mb" name="nilai_mb" class="form-control" placeholder="Nilai MB" required="required">
                  <label for="nilai_mb">Nilai MB</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="nilai_md" name="nilai_md" class="form-control" placeholder="Nilai MD" required="required">
                  <label for="nilai_md">Nilai MD</label>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              
                <div class="form-group">
                 <input type="submit" name="simpan" value="Simpan" class="btn btn-primary btn-small">
                  <a class="btn btn-danger" href="?halaman=data_gejala&action=tambah_gejala" data-toggle ="modal">Cancel</a>
                </div>
            </div>
          </div>
        </form>
        <?php

            include("config/koneksi.php");
            if(@$_POST['simpan']){
              $kode_gejala = @$_POST['kode_gejala'];
              $nama_gejala= @$_POST['nama_gejala'];
              $keterangan = @$_POST['keterangan'];
              $nilai_mb = @$_POST['nilai_mb'];
              $nilai_md = @$_POST['nilai_md'];

              $sql = mysqli_query($koneksi,"insert into gejala (kode_gejala, nama_gejala, ket, nilai_mb, nilai_md) values ('$kode_gejala', '$nama_gejala', '$keterangan', '$nilai_mb', '$nilai_md')");
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
   
  