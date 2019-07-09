 <?php
  include("config/koneksi.php");
  $no = mysqli_query($koneksi,"select kode_relasi from relasi order by kode_relasi desc");
  $kd = mysqli_fetch_array($no);
  $kode = $kd['kode_relasi'];
  $urut = substr($kode, 1,3);
  $tambah = (int) $urut+1;

  if(strlen($tambah) == 1){
    $format = "Z"."00".$tambah;
  }elseif (strlen($tambah)== 2){
    $format = "Z"."0".$tambah;
  }elseif (strlen ($tambah) == 3) {
    $format = "Z".$tambah;
  }
?>


      <div class="card-header">Tambah Relasi</div>
      <div class="card-body">
        <form class="" role="form" method="POST" onsubmit="return cekform();" enctype="multipart/form-data">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                <div class="form-label-group">
                  <input type="text" id="kode_relasi" name="kode_relasi" class="form-control" placeholder="Kode Relasi" value="<?php echo $format;?>" readonly required="required" autofocus="autofocus">
                  <label for="kode_relasi">Kode Relasi</label>
                </div>
                <div class="form-group">
                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="username" style="margin-top: -5px;">Gangguan</label>

                    <select class="form-control " name="gangguan" required="" >
                      <option value="">-Pilih Gangguan-</option>
                        <?php
                        include ("config/koneksi.php"); //koneksi ke database 
                        $pil=mysqli_query($koneksi ,"select kode_gangguan, nama_gangguan from diagnosa");
                        while($p=mysqli_fetch_array($pil)){
                          ?>
                          <option><?php echo "[".$p['kode_gangguan']."]".$p['nama_gangguan'] ?></option>
                          <?php
                        }
                        ?>      
                    </select>
                  </div>
                
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <div class="form-group">
                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="username" style="margin-top: 50px;">Gejala</label>

                    <select class="form-control " name="gejala" required="" >
                      <option value="">-Pilih Gejala-</option>
                        <?php
                        include ("config/koneksi.php"); //koneksi ke database 
                        $pil=mysqli_query($koneksi ,"select kode_gejala, nama_gejala from gejala");
                        while($p=mysqli_fetch_array($pil)){
                          ?>
                          <option><?php echo "[".$p['kode_gejala']."] ".$p['nama_gejala'] ?></option>
                          <?php
                        }
                        ?>      
                    </select>
                </div>
                </div>
              </div>
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
                  <a class="btn btn-danger" href="?halaman=data_relasi&action=tambah_relasi" data-toggle ="modal">Cancel</a>
                </div>
            </div>
          </div>
        </form>
        <?php

            include("config/koneksi.php");
            if(@$_POST['simpan']){
              $kode_relasi   = @$_POST['kode_relasi'];
              $gangguan   = @$_POST['gangguan'];
              $gejala     = @$_POST['gejala'];
              $nilai_mb   = @$_POST['nilai_mb'];
              $nilai_md   = @$_POST['nilai_md'];

              $sql = mysqli_query($koneksi,"insert into relasi (kode_relasi,kode_gejala, kode_gangguan, nilai_mb, nilai_md) values ('$kode_relasi', '$gejala', '$gangguan ', '$nilai_mb', '$nilai_md')");
              if($sql) {
                ?>
                <script type="text/javascript">
                  alert("Data berhasil disimpan");
                  window.location.href="?halaman=data_relasi&action=data_relasi";
                </script>
                <?php
              }
            }
        ?>
      </div>
   
  