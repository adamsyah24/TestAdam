<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Test Adam </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />

    <style>

    </style>
    </head>
    <body>
        {{-- Navbar --}}
        <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
            <div class="container px-5">
                <a class="navbar-brand" href="#!">
                    <img src="https://jatikom.com/wp-content/uploads/2018/11/lambang-farmasi-267x300.jpg" alt="..." height="36">
                    <a class="colorfortext navbar-brand fw-bolder" href="#!">Toko Obat</a>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="colorfortext nav-link active" aria-current="page" href="#!">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">Contact</a></li>
                        <li class="nav-item dropdown dropdown-hover position-static">
                            <a class="colorfortext nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-mdb-toggle="dropdown" aria-expanded="false"> Mega menu
                            </a>
                            <!-- Dropdown menu -->
                            <div class="dropdown-menu megamenu w-100 mt-0" aria-labelledby="navbarDropdown" style="border-top-left-radius: 0; border-top-right-radius: 0;">
                              <div class="container megamenu-inner">
                                <div class="row my-4">
                                  <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                                    <div class="list-group list-group-flush">
                                      <a href="" class="list-group-item list-group-item-action">Menu 1</a>
                                      <a href="" class="list-group-item list-group-item-action">Menu 2</a>
                                      <a href="" class="list-group-item list-group-item-action">Menu 3</a>
                                      <a href="" class="list-group-item list-group-item-action">Menu 4</a>
                                      <a href="" class="list-group-item list-group-item-action">Menu 5</a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </li>
                    </ul>
                </div>
            </div>
        </nav>
        {{-- Header --}}
        <header>
            <div id="Carousel1" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active" style="background-image: url('https://i.pinimg.com/originals/44/fb/1b/44fb1b9d7b572044bf1817d55f2b6c5a.jpg')">
                  <div class="carousel-caption">
                    <h5>Slide Pertama</h5>
                    <p>Caption dari slide.</p>
                  </div>
                </div>
                <div class="carousel-item" style="background-image: url('https://tt152.files.keap.app/tt152/2799b797-d1db-4128-bbc8-af43290f881c')">
                  <div class="carousel-caption">
                    <h5>Slide Kedua</h5>
                    <p>Caption dari slide.</p>
                  </div>
                </div>
                <div class="carousel-item" style="background-image: url('https://transcode-v2.app.engoo.com/image/fetch/f_auto,c_lfill,w_300,dpr_1/https://assets.app.engoo.com/images/HjnmgIKJXcn2eG2FyZbvukCARnINNub5Qw5tDRXrngY.jpeg')">
                  <div class="carousel-caption">
                    <h5>Slide Ketiga</h5>
                    <p>Caption dari slide.</p>
                  </div>
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#Carousel1" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#Carousel1" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </header>
        {{-- Product Pricing List --}}

        <section class="bg-light py-5 border-bottom">
            <div class="container px-5 my-5">
                <div class="text-center mb-5">
                    <h2 class="colorfortext fw-bolder">Kamu Sakit?</h2>
                    <p class="lead mb-0">Obat Kami Manjur Loh</p>
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="container col-lg-6 col-xl-4">
                        <div class="card mb-5 mb-xl-0">
                            <div class="card-body p-5">
                                <div class="card-img-top"><img class="card-img-top" src="https://wwwnc.cdc.gov/travel/images/travel-with-medicine.jpg" alt=""></div>
                                <div class="small text-uppercase fw-bold text-muted">Obat Kapsul</div>
                                <div class="mb-3">
                                    <span class="display-6 fw-bold">Rp 20.000,00</span>
                                </div>
                                <div class="d-grid"><a class="btn btn-danger" href="#!">Beli Obat</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <div class="card mb-5 mb-xl-0">
                            <div class="card-body p-5">
                                <div class="card-img-top"><img class="card-img-top" src="https://blue.kumparan.com/image/upload/fl_progressive,fl_lossy,c_fill,q_auto:best,w_640/v1634025439/01gdf39dvy347w4xra2hb90t2y.jpg" alt=""></div>
                                <div class="small text-uppercase fw-bold text-muted">Obat Puyer</div>
                                <div class="mb-3">
                                    <span class="display-6 fw-bold">Rp 50.000,00</span>
                                </div>
                                <div class="d-grid"><a class="btn btn-danger" href="#!">Beli Obat</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <div class="card mb-5 mb-xl-0">
                            <div class="card-body p-5">
                                <div class="card-img-top"><img class="card-img-top" src="https://foto.kontan.co.id/UglLf2LY-zoY6mglDbGLX3FEvKw=/smart/2022/10/20/1895401369p.jpg" alt=""></div>
                                <div class="small text-uppercase fw-bold text-muted">Obat Sirup</div>
                                <div class="mb-3">
                                    <span class="display-6 fw-bold">Rp 100.000,00</span>
                                </div>
                                <div class="d-grid"><a class="btn btn-danger" href="#!">Beli Obat</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Obat Features --}}
        <section class="pt-4">
            <div class="container px-lg-5">
                <div class="text-center mb-5">
                    <h2 class="colorfortext fw-bolder">Kenapa Harus Obat Kami?</h2>
                    <p class="lead mb-0">Sok Lihat di Bawah</p>
                </div>
                <!-- Page Features-->
                <div class="row gx-lg-5">
                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0 ">
                                <h2 class="fs-4 fw-bold mb-4 mt-4   ">Sehat</h2>
                                <p class="mb-0">Karena mengandung bahan buat kesehatan sih</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0 ">
                                <h2 class="fs-4 fw-bold mb-4 mt-4   ">Lezat</h2>
                                <p class="mb-0">Karena mengandung bahan buat kesehatan sih</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0 ">
                                <h2 class="fs-4 fw-bold mb-4 mt-4   ">Bergizi</h2>
                                <p class="mb-0">Karena mengandung bahan buat kesehatan sih</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0 ">
                                <h2 class="fs-4 fw-bold mb-4 mt-4   ">Nyaman</h2>
                                <p class="mb-0">Karena mengandung bahan buat kesehatan sih</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0 ">
                                <h2 class="fs-4 fw-bold mb-4 mt-4   ">Hemat</h2>
                                <p class="mb-0">Karena mengandung bahan buat kesehatan sih</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0 ">
                                <h2 class="fs-4 fw-bold mb-4 mt-4   ">Jos</h2>
                                <p class="mb-0">Karena mengandung bahan buat kesehatan sih</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- Testimoni Section --}}
        <section class="py-5 border-bottom">
            
            <div class="container px-5 my-5 px-5">
                <div class="text-center mb-5">
                    <h2 class="colorfortext fw-bolder">Testimoni Pelanggan</h2>
                    <p class="lead mb-0">Telah banyak yang sembuh karena obat kami.</p>
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="container mt-5 mb-5">
                        <div class="row g-2">
                            <div class="col-md-4">
                                <div class="card p-3 text-center px-4">
                                    <div class="user-image">
                                        <img src="https://cdn1-production-images-kly.akamaized.net/kgmi-ly012zVH3DHTahK0SHr4CY=/1280x1706/smart/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/1132652/original/04fb0195519c9bdb2a7317f71246d56fakNostalgia_7.jpg" class="rounded-circle" width="80">
                                    </div>
                                    <div class="user-content">
                                        <h5 class="mb-0">Raisa</h5>
                                        <span>Batuk Pilek</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    </div>
                                    <div class="ratings">
                                        <i class="bi bi-star-fill" style="color: #F74A4E"></i>
                                        <i class="bi bi-star-fill" style="color: #F74A4E"></i>
                                        <i class="bi bi-star-fill" style="color: #F74A4E"></i>
                                        <i class="bi bi-star-fill" style="color: #F74A4E"></i>
                                        <i class="bi bi-star" style="color: #F74A4E"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card p-3 text-center px-4">
                                    <div class="user-image">
                                        <img src="https://media.suara.com/pictures/653x366/2022/02/09/60554-isyana-sarasvati-instagramatisyanasarasvati.webp" class="rounded-circle" width="80">
                                    </div>
                                    <div class="user-content">
                                        <h5 class="mb-0">Isyana</h5>
                                        <span>Pusing</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    </div>
                                    <div class="ratings">
                                        <i class="bi bi-star-fill" style="color: #F74A4E"></i>
                                        <i class="bi bi-star-fill" style="color: #F74A4E"></i>
                                        <i class="bi bi-star-fill" style="color: #F74A4E"></i>
                                        <i class="bi bi-star-fill" style="color: #F74A4E"></i>
                                        <i class="bi bi-star-fill" style="color: #F74A4E"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card p-3 text-center px-4">
                                    <div class="user-image">
                                        <img src="https://lensamalut.co/wp-content/uploads/2021/03/20210329_102434.png" class="rounded-circle" width="80">
                                    </div>
                                    <div class="user-content">
                                        <h5 class="mb-0">Amanda</h5>
                                        <span>Belekan</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    </div>
                                    <div class="ratings">
                                        <i class="bi bi-star-fill" style="color: #F74A4E"></i>
                                        <i class="bi bi-star-fill" style="color: #F74A4E"></i>
                                        <i class="bi bi-star-fill" style="color: #F74A4E"></i>
                                        <i class="bi bi-star-fill" style="color: #F74A4E"></i>
                                        <i class="bi bi-star" style="color: #F74A4E"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- Footer --}}
        <footer class="py-5 bg-light">          
              <section>
                <div class="container text-center text-md-start mt-5">
                  <div class="row mt-3">
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                      <h6 class="colorfortext text-uppercase fw-bold mb-4">Toko Obat</h6>
                      <p>Melayani Penjualan Obat</p>
                    </div>
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                      <h6 class="colorfortext text-uppercase fw-bold mb-4">Products</h6>
                      <p>
                        <a href="#!" class="text-reset">Obat Kapsul</a>
                      </p>
                      <p>
                        <a href="#!" class="text-reset">Obat Puyer</a>
                      </p>
                      <p>
                        <a href="#!" class="text-reset">Obat Sirup</a>
                      </p>
                    </div>
           
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                      <h6 class="colorfortext text-uppercase fw-bold mb-4">Links</h6>
                      <p>
                        <a href="#!" class="text-reset">Harga</a>
                      </p>
                      <p>
                        <a href="#!" class="text-reset">Features</a>
                      </p>
                      <p>
                        <a href="#!" class="text-reset">Testimoni</a>
                      </p>
                    </div>
            
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                      <h6 class="colorfortext text-uppercase fw-bold mb-4">Contact Us</h6>
                      <p>Jl Patih Gajah Duduk No.1, Indonesia</p>
                      <p>tokoobat@anu.com</p>
                      <p>+628123124123</p>
                    </div>
                  </div>
                </div>
              </section>
            <div class="container px-5"><p class="m-0 text-center text-black">Copyright &copy; Toko Obat Sejahtera 2022</p></div>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
    </html>
