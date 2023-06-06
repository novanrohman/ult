<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>

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

    <div class="content">
        <div class="container">
            <div class="row" id="pelayanan">
                    <div class="col-md-6 mt-4">
                        <img src="{{asset('svg/beranda.svg')}}" alt="" width="500vh">
                    </div>
                    <div class="col-md-6 mt-4">
                        <h1>Layanan Kami</h1>
                        
    
                        <div id="deskripsi">
                            <p class="mt-4">Masih bingung dengan tata cara pengajuan layanan?</p>
                                <a class="btn btn-primary rounded-pill" href="{{route('daftar-layanan')}}">Klik Disini</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content p-4 mb-4">
            <div class="container">
                <h2 class="p-4" style="text-align: center;">Pertanyaan Umum<center><hr></center></h2>
                <div class="row p-2">
                    <div class="col-md-8">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                              <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                  Accordion Item #1
                                </button>
                              </h2>
                              <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                  <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                  Accordion Item #2
                                </button>
                              </h2>
                              <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                  <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                  Accordion Item #3
                                </button>
                              </h2>
                              <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                  <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                    <div class="col-md-4">
                        <img src="{{asset('svg/pertanyaan umum.svg')}}" class="img-fluid rounded-top" alt="" style="width: 20em;">
                    </div>
                </div>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>

</html>