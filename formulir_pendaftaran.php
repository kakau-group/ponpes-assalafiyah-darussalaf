<?php
include("atas.php");
?>

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Formulir Pendaftaran Siswa Baru</h2>
        </div>

        <div class="row">

          <div  class="col-lg-100% d-flex align-items-stretch">
            <div class="info">


        <body>
          <form method="post" action="proses_formulir.php" name="myForm" onsubmit="return validateForm()" class="showcase">
      
      <div class="container">
        <main>

        <h3><strong>Data Siswa :</strong></h3><br>


                  <div class="col-12">
                    <label for="nama" class="form-label">Nama Calon Siswa</label>
                    <input type="text" name="nama" class="form-control" id="exampleFormControlInput1">
                  </div><br>
                  
                  <div class="col-12">
                    <label for="text" class="form-label">Tempat Tanggal Lahir</label>
                    <input type="text"  name="jurusan" class="form-control" id="exampleFormControlInput1">
                  </div><br>

                  <div class="col-12">
                    <label for="text" class="form-label">Status dalam Keluarga</label>
                    <input type="text"  name="jurusan" class="form-control" id="exampleFormControlInput1">
                  </div><br>

                  <div class="col-12">
                    <label for="text" class="form-label">Anak ke  / jumlah saudara</label>
                    <input type="text"  name="jurusan" class="form-control" id="exampleFormControlInput1">
                  </div><br>

                  <div class="col-12">
                    <label for="text" class="form-label">Sekolah Aasal</label>
                    <input type="text"  name="jurusan" class="form-control" id="exampleFormControlInput1">
                  </div><br>

                  <div class="col-12">
                    <label for="text" class="form-label">NISN</label>
                    <input type="text"  name="jurusan" class="form-control" id="exampleFormControlInput1">
                  </div><br>

                  <div class="col-12">
                    <label for="text" class="form-label">NIK</label>
                    <input type="text"  name="jurusan" class="form-control" id="exampleFormControlInput1">
                  </div><br>

                  <h3><strong>Data Orang Tua :</strong></h3><br>

                  <div class="col-12">
                    <label for="text" class="form-label">Nama Ayah</label>
                    <input type="text"  name="jurusan" class="form-control" id="exampleFormControlInput1">
                  </div><br>

                  <div class="col-12">
                    <label for="text" class="form-label">NIK</label>
                    <input type="text"  name="jurusan" class="form-control" id="exampleFormControlInput1">
                  </div><br>

                  <div class="col-12">
                    <label for="text" class="form-label">Nama Ibu</label>
                    <input type="text"  name="jurusan" class="form-control" id="exampleFormControlInput1">
                  </div><br>

                  <div class="col-12">
                    <label for="text" class="form-label">Pekerjaan Ayah</label>
                    <input type="text"  name="jurusan" class="form-control" id="exampleFormControlInput1">
                  </div><br>

                  <div class="col-12">
                    <label for="text" class="form-label">Pekerjaan Ibu</label>
                    <input type="text"  name="jurusan" class="form-control" id="exampleFormControlInput1">
                  </div><br>

                  <div class="col-12">
                    <label for="text" class="form-label">Alamat Orang Tua</label>
                    <textarea  name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div><br>

                  <h3><strong>Data Wali (Wakil Orang Tua) :</strong></h3><br>

                  <div class="col-12">
                    <label for="text" class="form-label">Suami</label>
                    <input type="text"  name="jurusan" class="form-control" id="exampleFormControlInput1">
                  </div><br>

                  <div class="col-12">
                    <label for="text" class="form-label">Istri</label>
                    <input type="text"  name="jurusan" class="form-control" id="exampleFormControlInput1">
                  </div><br>

                  <div class="col-12">
                    <label for="text" class="form-label">Pekerjaan Suami</label>
                    <input type="text"  name="jurusan" class="form-control" id="exampleFormControlInput1">
                  </div><br>

                  <div class="col-12">
                    <label for="text" class="form-label">Pekerjaan Istri</label>
                    <input type="text"  name="jurusan" class="form-control" id="exampleFormControlInput1">
                  </div><br>

                  <div class="col-12">
                    <label for="text" class="form-label">Alamat Wali</label>
                    <textarea  name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div><br>

                <div class="col-12">
                  <hr>
                  <button class="w-100 btn btn-success btn-lg" name="submit" type="submit">Simpan</button>
                </div>

                </div>
                </div>
              </div>  
            </div>
          </form>
          </body>
        </div>
      </main>   
    </div>


          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->



  <script>
      function validateForm() {
        var x = document.forms["myForm"]["nama"].value;
        if (x == "" || x == null) {
          alert("Nama Harus diisi terlebih dahulu !");
          return false;
        }
        var x = document.forms["myForm"]["jurusan"].value;
        if (x == "" || x == null) {
          alert("Jurusan Lengkap Harus diisi terlebih dahulu !");
          return false;
        }
        var x = document.forms["myForm"]["alamat"].value;
        if (x == "" || x == null) {
          alert("Alamat Harus diisi terlebih dahulu !");
          return false;
        }
      }
    </script>


<?php
include("bawah.php");
?>

