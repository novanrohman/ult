<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

  <link rel="stylesheet" href="/vendor/intl-tel-input/build/css/intlTelInput.css" />

<body>
  <nav class="navbar navbar-expand-sm navbar-dark bg-primary">
    <div class="container">
      <img src="/assets/img/logo-poliwangi.png" alt="" style="width: 10vh; padding-right: 1vh;">
      <a class="navbar-brand " href="#" style="font-weight: 600;">Unit Layanan Terpadu</br>
        <p style="font-size: 2vh;">Politeknik Negeri Banyuwangi</p>
      </a>
      <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
        data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav me-auto mt-2 mt-lg-0">
            <li class="nav-item">
                <a class="nav-link active" href="{{route('home')}}" aria-current="page">Beranda<span class="visually-hidden">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('layanan')}}">Layanan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('berkas-pendukung')}}">Berkas Pendukung</a>
            </li>
        </ul>
</div>
    </div>
  </nav>

  <div class="content p-4">
    <div class="container">
      <h2 class="p-4" style="text-align: center;">Form Pelayanan<center>
          <hr>
        </center>
      </h2>

      <form class="p-4" id="form-pendaftaran">
        <div class="mb-3">
          <label for="fulname" class="form-label">Nama Lengkap Pemohon</label>
          <input type="text" class="form-control" id="fullName" name="fullName">


        </div>
        <div class="mb-3">
          <label for="text" class="form-label">No KTP/KTM</label>
          <input type="text" class="form-control" id="ktpNumber" name="ktpNumber">
        </div>

        <!-- Radio -->
        <label for="text" class="form-label">Jenis Pemohon</label>
        <div class="radio p-4" name="pemohon">
          <div class="row">
            <div class="col-md-4">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="jenisPemohon" id="jenisPemohon1" value="Mahasiswa">
                <label class="form-check-label" for="jenisPemohon1">
                  Mahasiswa
                </label>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="jenisPemohon" id="jenisPemohon1" value="Pegawai">
                <label class="form-check-label" for="jenisPemohon1">
                  Pegawai
                </label>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="jenisPemohon" id="jenisPemohon1" value="Masyarakat Umum"> 
                <label class="form-check-label" for="jenisPemohon1">
                  Masyarakat Umum
                </label>
              </div>
            </div>
          </div>
        </div>

        <!-- End Radio -->
        <div class="mb-3">
          <select class="form-select" aria-label="Default select example">
            <option selected>Pilih Program Studi</option>
            <option value="Agribisnis">Agribisnis</option>
            <option value="Bisnis Digital">Bisnis Digital</option>
            <option value="Manajemen Bisnis Pariwisata">Manajemen Bisnis Pariwisata</option>
            <option value="Teknik Manufaktur Kapal">Teknik Manufaktur Kapal</option>
            <option value="Teknik Rekayasa Manufaktur">Teknik Rekayasa Manufaktur</option>
            <option value="Teknik Sipil">Teknik Sipil</option>
            <option value="Teknologi Pengolahan Hasil Ternak">Teknologi Pengolahan Hasil Ternak</option>
            <option value="Teknologi Rekayasa Komputer">Teknologi Rekayasa Komputer</option>
            <option value="Teknologi Rekayasa Perangkat Lunak">Teknologi Rekayasa Perangkat Lunak</option>
          </select>
        </div>
        <div class="mb-3">
          <label for="text" class="form-label">Unit Yang Dituju</label>
          <input type="text" class="form-control" id="unitDituju" name="unitDituju">
        </div>
        <div class="mb-3">
          <label for="text" class="form-label">Keperluan</label>
          <input type="text" class="form-control" id="keperluan" name="keperluan">
        </div>
        <div class="mb-3">
          <label for="text" class="form-label">No Telephone</label>
          <div class="col-xs-5">
            <input type="tel" class="form-control" name="telp" id="telp" />
          </div>
        </div>
        <div class="mb-3">
          <label for="text" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="mb-3">
        </div>
        <div class="col-md-12 text-end">
          <p>*Perikas apakah data sudah terisi dengan benar atau belum sebelum klik lanjut</p>
        </div>
        <div class="row">
          <div class="col-md-10"></div>
          <div class="col-md-1 mx-auto">
            <button type="submit" class="btn btn-outline-primary rounded-pill">Batalkan</button>
          </div>
          <div class="col-md-1 mx-auto">
            <button type="submit" class="btn btn-primary rounded-pill">Lanjutkan</button>
          </div>

        </div>
      </form>
    </div>
  </div>

  <div class="footer bg-primary">
    <div class="container">
      <div class="row">
        <div class="col-md-5 p-4">
          <iframe class="m-4"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3948.0796110040146!2d114.30438802336853!3d-8.294876291740016!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd156d7d86bef9b%3A0x4cb09a70b9109740!2sPoliteknik%20Negeri%20Banyuwangi!5e0!3m2!1sid!2sid!4v1685961798138!5m2!1sid!2sid"
            width="400" height="350" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="col-md-7 p-4 text-white">
          <h4 class="mt-4">Kontak</h4>
          <p>Email: ult@poliwangi.ac.id</br>
            Telp: 033 123123</p>

          <h4 id="alamat">Alamat</h4>
          <p>Jalan Raya Jember No.KM13, Kawang, Labanasem, Kec. Kabat,
            Kabupaten Banyuwangi, Jawa Timur 68461</p>
        </div>
      </div>
    </div>
  </div>

  <div id="copyright">
    <div class="col-md-12 bg-primary text-white p-4">
      <p style="text-align: center;">copyright &copy 2023</p>
    </div>
  </div>
  </div>
  <script src="/assets/js/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
    integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"
    integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="/vendor/intl-tel-input/build/js/intlTelInput.min.js"></script>


  <script type="text/javascript">
    // phone Verification
    $(document).ready(function() {
    $.validator.addMethod(
      "indonesianPhone",
      function(value, element) {
        // Definisikan pola regex untuk nomor telepon Indonesia
        var phonePattern = /^(?:\+?62|0)[0-9]{9,11}$/;
        return this.optional(element) || phonePattern.test(value);
      },
      "Masukkan nomor telepon Indonesia yang valid"
    );
  });


    // validate
    $("#form-pendaftaran").validate({
      rules: {
        fullName: {
          required: true
        },
        ktpNumber: {
          required: true,
          digits: true,
          maxlength: 16,
          minlength: 12,
        },
        unitDituju: {
          required: true
        },
        keperluan: {
          required: true
        },
        telp: {
          required: true,
          indonesianPhone: true,
        },
        email: {
          required: true
        },
      },
      messages: {
        fullName: {
          required: "Nama tidak boleh kosong"
        },
        ktpNumber: {
          required: "Nomor identitas tidak boleh kosong",
          digits: "Harus berupa angka",
          maxlength: "Maksimal 16 karakter",
          minlength: "Minimal 12 karakter",

        },
        unitDituju: {
          required: "Unit yang dituju tidak boleh kosong"
        },
        keperluan: {
          required: "Unit yang dituju tidak boleh kosong"
        },
        telp: {
          required: "telepon tidak boleh kosong"
        },
        email: {
          required: "email tidak boleh kosong"
        },
      }
    });
  </script>
</body>

</html>