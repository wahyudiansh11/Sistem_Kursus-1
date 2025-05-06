<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Website Kursus </title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" type="image/png" href={{ asset('favicon.png') }} />
    <link
      href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="assets/css/slick/slick.css" />
    <link rel="stylesheet" href="assets/css/slick/slick-theme.css" />
    <link rel="stylesheet" href="assets/css/animate.css" />
    <link rel="stylesheet" href="assets/css/iconfont.css" />
    <link rel="stylesheet" href="assets/css/font-awesome.min.css" />
    <link rel="stylesheet" href="assets/css/bootstrap.css" />
    <link rel="stylesheet" href="assets/css/magnific-popup.css" />
    <link rel="stylesheet" href="assets/css/bootsnav.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/responsive.css" />

    <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
  </head>

  <body data-spy="scroll" data-target=".navbar-collapse">
    <div id="loading">
      <div id="loading-center">
        <div id="loading-center-absolute">
          <div class="object" id="object_one"></div>
          <div class="object" id="object_two"></div>
          <div class="object" id="object_three"></div>
          <div class="object" id="object_four"></div>
        </div>
      </div>
    </div>

    <div class="culmn">
      <nav class="navbar navbar-default bootsnav navbar-fixed">
        <div class="navbar-top bg-grey fix">
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <div class="navbar-callus text-left sm-text-center">
                  <ul class="list-inline">
                    <li>
                      <a href=""
                        ><i class="fa fa-phone"></i> Call us: 1234 5678 90</a
                      >
                    </li>
                    <li>
                      <a href=""
                        ><i class="fa fa-envelope-o"></i> Contact us:
                        kursus@kita.com</a
                      >
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-md-6">
                <div class="navbar-socail text-right sm-text-center">
                  <ul class="list-inline">
                    <li>
                      <a href="https://www.facebook.com" target="_blank"
                        ><i class="fa fa-facebook"></i
                      ></a>
                    </li>
                    <li>
                      <a href="https://twitter.com" target="_blank"
                        ><i class="fa fa-twitter"></i
                      ></a>
                    </li>
                    <li>
                      <a href="https://www.linkedin.com" target="_blank"
                        ><i class="fa fa-linkedin"></i
                      ></a>
                    </li>
                    <li>
                      <a href="https://www.instagram.com" target="_blank"
                        ><i class="fa fa-instagram"></i
                      ></a>
                    </li>
                    <li>
                      <a
                        href="https://youtube.com/@codeworshipper"
                        target="_blank"
                        ><i class="fa fa-youtube"></i
                      ></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="top-search">
          <div class="container">
            <div class="input-group">
              <span class="input-group-addon"
                ><i class="fa fa-search"></i
              ></span>
              <input type="text" class="form-control" placeholder="Search" />
              <span class="input-group-addon close-search"
                ><i class="fa fa-times"></i
              ></span>
            </div>
          </div>
        </div>

        <div class="container">
          <div class="attr-nav">
            <ul>
              <li class="search">
                <a href="#"><i class="fa fa-search"></i></a>
              </li>
            </ul>
          </div>
          <div class="navbar-header">
            <button
              type="button"
              class="navbar-toggle"
              data-toggle="collapse"
              data-target="#navbar-menu"
            >
              <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="#brand">
              <img src="assets/images/logo.png" class="logo" alt="" />
            </a>
          </div>

          <div class="collapse navbar-collapse" id="navbar-menu">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#home">Home</a></li>
              <li><a href="#features">About</a></li>
              <li><a href="#business">Service</a></li>
              <li><a href="#test">Blog</a></li>
              <li><a href="#contact">Contact</a></li>
              <li><a href="#portfolio">Portfolio</a></li>
              <li><a href="{{ route('auth') }}">Login</a></li>
            </ul>
          </div>
        </div>
      </nav>

      <section id="home" class="home bg-black fix">
        <div class="overlay"></div>
        <div class="container">
          <div class="row">
            <div class="main_home text-center">
              <div class="col-md-12">
                <div class="hello_slid">
                  <div class="slid_item">
                    <div class="home_text">
                      <h2 class="text-white">
                        Welcome to <strong>Project</strong>
                      </h2>
                      <h1 class="text-white">
                        Sistem Aplikasi Web Kursus
                      </h1>
                      <h3 class="text-white">
                        - We are <strong>Kelompok</strong> 4 -
                      </h3>
                    </div>

                    <div class="home_btns m-top-40">
                      <a
                        href=""
                        class="btn btn-primary m-top-20"
                        target="_blank"
                        >Subrek Now</a
                      >
                      <a
                        href="https://github.com/Raizel980/Sistem_Kursus"
                        class="btn btn-default m-top-20"
                        target="_blank"
                        >Lihat Detail</a
                      >
                    </div>
                  </div>
                  <div class="slid_item">
                    <div class="home_text">
                      <h2 class="text-white">
                        Welcome to <strong>My Kursus</strong>
                      </h2>
                      <h1 class="text-white">
                       Kursus Sew
                      </h1>
                      <h3 class="text-white">
                        - Pelatihan <strong>Kursus</strong> Menjahit -
                      </h3>
                    </div>

                    <div class="home_btns m-top-40">
                      <a
                        href=""
                        class="btn btn-primary m-top-20"
                        target="_blank"
                        >Subrek Now</a
                      >
                      <a
                        href="https://www.youtube.com/watch?v=hufj3B0KlS8"
                        class="btn btn-default m-top-20"
                        target="_blank"
                        >Lihat Detail</a
                      >
                    </div>
                  </div>
                  <div class="slid_item">
                    <div class="home_text">
                      <h2 class="text-white">
                        Welcome to <strong>My Kursus</strong>
                      </h2>
                      <h1 class="text-white">
                        Kursus Cake
                      </h1>
                      <h3 class="text-white">
                        - Pelatihan <strong>Kursus</strong> Kue -
                      </h3>
                    </div>

                    <div class="home_btns m-top-40">
                      <a
                        href=""
                        class="btn btn-primary m-top-20"
                        target="_blank"
                        >Subrek Now</a
                      >
                      <a
                        href="https://codeworshipper.netlify.app"
                        class="btn btn-default m-top-20"
                        target="_blank"
                        >Lihat Detail</a
                      >
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="features" class="features">
        <div class="container">
          <div class="row">
            <div class="main_features fix roomy-70">
              <div class="col-md-4">
                <div class="features_item sm-m-top-30">
                  <div class="f_item_icon">
                    <i class="fa fa-thumbs-o-up"></i>
                  </div>
                  <div class="f_item_text">
                    <h3>Kursus Berkualitas Terbaik</h3>
                    <p>
                      Kami menghadirkan kursus dengan standar tinggi, materi lengkap, dan pengajar berpengalaman untuk mendukung pembelajaran yang maksimal.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="features_item sm-m-top-30">
                  <div class="f_item_icon">
                    <i class="fa fa-tablet"></i>
                  </div>
                  <div class="f_item_text">
                    <h3>Belajar Fleksibel & Responsif</h3>
                    <p>
                      Akses materi kapan saja dan di mana saja melalui perangkat Anda. Belajar jadi lebih mudah dan sesuai gaya hidup Anda.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="features_item sm-m-top-30">
                  <div class="f_item_icon">
                    <i class="fa fa-sliders"></i>
                  </div>
                  <div class="f_item_text">
                    <h3>Mudah Dipahami</h3>
                    <p>
                      Setiap modul disusun dengan bahasa yang sederhana, dilengkapi panduan langkah demi langkah agar mudah dipraktikkan oleh siapa saja.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="business" class="business bg-grey roomy-70">
        <div class="container">
          <div class="row">
            <div class="main_business">
              <div class="col-md-6">
                <div class="business_slid">
                  <div class="slid_shap bg-grey"></div>
                  <div class="business_items text-center">
                    <div class="business_item">
                      <div class="business_img">
                        <img src="assets/images/kursus.jpg" alt="" />
                      </div>
                    </div>

                    <div class="business_item">
                      <div class="business_img">
                        <img src="assets/images/menjahit.jpg" alt="" />
                      </div>
                    </div>

                    <div class="business_item">
                      <div class="business_img">
                        <img src="assets/images/kue.jpeg" alt="" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="business_item sm-m-top-50">
                  <h2 class="text-uppercase">
                    <strong>KURSUSKITA </strong> — PLATFORM BELAJAR PRAKTIS DAN KREATIF
                  </h2>
                  <ul>
                    <li>
                      <i class="fa fa-arrow-circle-right"></i> Kursus Modern & Interaktif
                    </li>
                    <li>
                      <i class="fa fa-arrow-circle-right"></i> Materi Mudah Dipahami untuk Semua Usia
                    </li>
                    <li>
                      <i class="fa fa-arrow-circle-right"></i> Sertifikat Resmi Setelah Lulus
                    </li>
                  </ul>
                  <p class="m-top-20">
                    Ingin mahir menjahit atau jago membuat kue?
Kami hadir untuk membantu Anda belajar dengan cara yang menyenangkan, fleksibel, dan bisa diakses dari mana saja.
Materi disusun secara sistematis dan dilengkapi panduan visual agar Anda bisa langsung praktik.
                  </p>

                  <div class="business_btn">
                    <a href="" class="btn btn-default m-top-20">Read More</a>
                    <a href="{{ route('auth') }}" class="btn btn-primary m-top-20"
                      >Start Now</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="portfolio" class="product">
        <div class="container">
          <div class="main_product roomy-80">
            <div class="head_title text-center fix">
              <h2 class="text-uppercase">What Students Say</h2>
              <h5>Anggota Kelompok 4 :</h5>
            </div>

            <div
              id="carousel-example-generic"
              class="carousel slide"
              data-ride="carousel"
            >
              <ol class="carousel-indicators">
                <li
                  data-target="#carousel-example-generic"
                  data-slide-to="0"
                  class="active"
                ></li>
                <li
                  data-target="#carousel-example-generic"
                  data-slide-to="1"
                ></li>
                <li
                  data-target="#carousel-example-generic"
                  data-slide-to="2"
                ></li>
              </ol>

              <div class="carousel-inner" role="listbox">
                <div class="item active">
                  <div class="container">
                    <div class="row">
                      <div class="col-sm-3">
                        <div class="port_item xs-m-top-30">
                          <div class="port_img">
                            <img src="assets/images//Wahyu.jpg" alt="" />
                            <div class="port_overlay text-center">
                              <a
                                href="assets/images/Wahyu.jpg"
                                class="popup-img"
                                >+</a
                              >
                            </div>
                          </div>
                          <div class="port_caption m-top-20">
                            <h5>Wahyu Firdiansah</h5>
                            <h6>- 2302310231</h6>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-3">
                        <div class="port_item xs-m-top-30">
                          <div class="port_img">
                            <img src="assets/images/rizal.jpg" alt="" />
                            <div class="port_overlay text-center">
                              <a
                                href="assets/images/rizal.jpg"
                                class="popup-img"
                                >+</a
                              >
                            </div>
                          </div>
                          <div class="port_caption m-top-20">
                            <h5>Achmad Rizal Firmansyah</h5>
                            <h6>- 2302310242</h6>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-3">
                        <div class="port_item xs-m-top-30">
                          <div class="port_img">
                            <img src="assets/images/elya.jpg" alt="" />
                            <div class="port_overlay text-center">
                              <a
                                href="assets/images/elya.jpg"
                                class="popup-img"
                                >+</a
                              >
                            </div>
                          </div>
                          <div class="port_caption m-top-20">
                            <h5>Elya Al Itriyah</h5>
                            <h6>- 2302310247</h6>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-3">
                        <div class="port_item xs-m-top-30">
                          <div class="port_img">
                            <img src="assets/images/dian.jpg" alt="" />
                            <div class="port_overlay text-center">
                              <a
                                href="assets/images/dian.jpg"
                                class="popup-img"
                                >+</a
                              >
                            </div>
                          </div>
                          <div class="port_caption m-top-20">
                            <h5>Dian Safitri</h5>
                            <h6>- 2302310214</h6>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="item">
                  <div class="container">
                    <div class="row">
                      <div class="col-sm-3">
                        <div class="port_item xs-m-top-30">
                          <div class="port_img">
                            <img src="assets/images/Wahyu.jpg" alt="" />
                            <div class="port_overlay text-center">
                              <a
                                href="assets/images/Wahyu.jpg"
                                class="popup-img"
                                >+</a
                              >
                            </div>
                          </div>
                          <div class="port_caption m-top-20">
                            <h5>Wahyu Firdiasah</h5>
                            <h6>- 2302310231</h6>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-3">
                        <div class="port_item xs-m-top-30">
                          <div class="port_img">
                            <img src="assets/images/rizal.jpg" alt="" />
                            <div class="port_overlay text-center">
                              <a
                                href="assets/images/rizal.jpg"
                                class="popup-img"
                                >+</a
                              >
                            </div>
                          </div>
                          <div class="port_caption m-top-20">
                            <h5>Achmad Rizal Firmansyah</h5>
                            <h6>- 2302310242</h6>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-3">
                        <div class="port_item xs-m-top-30">
                          <div class="port_img">
                            <img src="assets/images/elya.jpg" alt="" />
                            <div class="port_overlay text-center">
                              <a
                                href="assets/images/elya.jpg"
                                class="popup-img"
                                >+</a
                              >
                            </div>
                          </div>
                          <div class="port_caption m-top-20">
                            <h5>Elya Al Itriyah</h5>
                            <h6>- 2302310247</h6>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-3">
                        <div class="port_item xs-m-top-30">
                          <div class="port_img">
                            <img src="assets/images/dian.jpg" alt="" />
                            <div class="port_overlay text-center">
                              <a
                                href="assets/images/dian.jpg"
                                class="popup-img"
                                >+</a
                              >
                            </div>
                          </div>
                          <div class="port_caption m-top-20">
                            <h5>Dian Safitri</h5>
                            <h6>- 2302310214</h6>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="item">
                  <div class="container">
                    <div class="row">
                      <div class="col-sm-3">
                        <div class="port_item xs-m-top-30">
                          <div class="port_img">
                            <img src="assets/images/Wahyu.jpg" alt="" />
                            <div class="port_overlay text-center">
                              <a
                                href="assets/images/Wahyu.jpg"
                                class="popup-img"
                                >+</a
                              >
                            </div>
                          </div>
                          <div class="port_caption m-top-20">
                            <h5>Wahyu Firdiasnah</h5>
                            <h6>- 2302310231</h6>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-3">
                        <div class="port_item xs-m-top-30">
                          <div class="port_img">
                            <img src="assets/images/rizal.jpg" alt="" />
                            <div class="port_overlay text-center">
                              <a
                                href="assets/images/rizal.jpg"
                                class="popup-img"
                                >+</a
                              >
                            </div>
                          </div>
                          <div class="port_caption m-top-20">
                            <h5>Achmad Rizal Firmansyah</h5>
                            <h6>- 2302310242</h6>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-3">
                        <div class="port_item xs-m-top-30">
                          <div class="port_img">
                            <img src="assets/images/elya.jpg" alt="" />
                            <div class="port_overlay text-center">
                              <a
                                href="assets/images/elya.jpg"
                                class="popup-img"
                                >+</a
                              >
                            </div>
                          </div>
                          <div class="port_caption m-top-20">
                            <h5>Elya Al Itriyah</h5>
                            <h6>- 2302310247</h6>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-3">
                        <div class="port_item xs-m-top-30">
                          <div class="port_img">
                            <img src="assets/images/dian.jpg" alt="" />
                            <div class="port_overlay text-center">
                              <a
                                href="assets/images/dian.jpg"
                                class="popup-img"
                                >+</a
                              >
                            </div>
                          </div>
                          <div class="port_caption m-top-20">
                            <h5>Dian Safitri</h5>
                            <h6>- 2302310214</h6>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <a
                class="left carousel-control"
                href="#carousel-example-generic"
                role="button"
                data-slide="prev"
              >
                <i class="fa fa-angle-left" aria-hidden="true"></i>
                <span class="sr-only">Previous</span>
              </a>

              <a
                class="right carousel-control"
                href="#carousel-example-generic"
                role="button"
                data-slide="next"
              >
                <i class="fa fa-angle-right" aria-hidden="true"></i>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
        </div>
      </section>

      <section id="test" class="test bg-grey roomy-60 fix">
        <div class="container">
          <div class="row">
            <div class="main_test fix">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="head_title text-center fix">
                  <h2 class="text-uppercase">What Teacher Say</h2>
                  <h5>Anggota Kelompok 4 :</h5>
                </div>
              </div>

              <div class="col-md-6">
                <div class="test_item fix">
                  <div class="item_img">
                    <img
                      class="img-circle"
                      src="assets/images/test-img1.jpg"
                      alt=""
                    />
                    <i class="fa fa-quote-left"></i>
                  </div>

                  <div class="item_text">
                    <h5>Sarah Smith</h5>
                    <h6>envato.com</h6>

                    <p>
                      Natus voluptatum enim quod necessitatibus quis expedita
                      harum provident eos obcaecati id culpa corporis molestias.
                    </p>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="test_item fix sm-m-top-30">
                  <div class="item_img">
                    <img
                      class="img-circle"
                      src="assets/images/test-img2.jpg"
                      alt=""
                    />
                    <i class="fa fa-quote-left"></i>
                  </div>

                  <div class="item_text">
                    <h5>Sarah Smith</h5>
                    <h6>envato.com</h6>

                    <p>
                      Natus voluptatum enim quod necessitatibus quis expedita
                      harum provident eos obcaecati id culpa corporis molestias.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="brand" class="brand fix roomy-80">
        <div class="container">
          <div class="row">
            <div class="main_brand text-center">
              <div class="col-md-2 col-sm-4 col-xs-6">
                <div class="brand_item sm-m-top-20">
                  <img src="assets/images/cbrand-img1.png" alt="" />
                </div>
              </div>
              <div class="col-md-2 col-sm-4 col-xs-6">
                <div class="brand_item sm-m-top-20">
                  <img src="assets/images/cbrand-img2.png" alt="" />
                </div>
              </div>
              <div class="col-md-2 col-sm-4 col-xs-6">
                <div class="brand_item sm-m-top-20">
                  <img src="assets/images/cbrand-img3.png" alt="" />
                </div>
              </div>
              <div class="col-md-2 col-sm-4 col-xs-6">
                <div class="brand_item sm-m-top-20">
                  <img src="assets/images/cbrand-img4.png" alt="" />
                </div>
              </div>
              <div class="col-md-2 col-sm-4 col-xs-6">
                <div class="brand_item sm-m-top-20">
                  <img src="assets/images/cbrand-img5.png" alt="" />
                </div>
              </div>
              <div class="col-md-2 col-sm-4 col-xs-6">
                <div class="brand_item sm-m-top-20">
                  <img src="assets/images/cbrand-img6.png" alt="" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="action" class="action bg-primary roomy-40">
        <div class="container">
          <div class="row">
            <div class="maine_action">
              <div class="col-md-8">
                <div class="action_item text-center">
                  <h2 class="text-white text-uppercase">
                    Say Thanks With Subscribe! Mksh yaaa
                  </h2>
                </div>
              </div>
              <div class="col-md-4">
                <div class="action_btn text-left sm-text-center">
                  <a
                    href="https://www.youtube.com/@codeworshipper?sub_confirmation=1"
                    class="btn btn-default"
                    target="_blank"
                    >Subscribe Now</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <footer id="contact" class="footer action-lage bg-black p-top-80">
        <div class="container">
          <div class="row">
            <div class="widget_area">
              <div class="col-md-3">
                <div class="widget_item widget_about">
                  <h5 class="text-white">About Us</h5>
                  <p class="m-top-20">
                    Kami adalah tempat belajar terbaik untuk mengembangkan keterampilan kreatif Anda. Dari dasar hingga mahir, kami mendampingi setiap langkah Anda menuju kesuksesan.
                  </p>
                  <div class="widget_ab_item m-top-30">
                    <div class="item_icon">
                      <i class="fa fa-location-arrow"></i>
                    </div>
                    <div class="widget_ab_item_text">
                      <h6 class="text-white">Location</h6>
                      <p>
                        Jl. Raya Lenteng, No. 10 Batuan, Sumenep - Madura
                      </p>
                    </div>
                  </div>
                  <div class="widget_ab_item m-top-30">
                    <div class="item_icon"><i class="fa fa-phone"></i></div>
                    <div class="widget_ab_item_text">
                      <h6 class="text-white">Phone :</h6>
                      <p>+1 2345 6789</p>
                    </div>
                  </div>
                  <div class="widget_ab_item m-top-30">
                    <div class="item_icon">
                      <i class="fa fa-envelope-o"></i>
                    </div>
                    <div class="widget_ab_item_text">
                      <h6 class="text-white">Email Address :</h6>
                      <p>kursus@kita.com</p>
                    </div>
                  </div>
                </div>
                <!-- End off widget item -->
              </div>
              <!-- End off col-md-3 -->

              <div class="col-md-3">
                <div class="widget_item widget_latest sm-m-top-50">
                  <h5 class="text-white">Latest News</h5>
                  <div class="widget_latst_item m-top-30">
                    <div class="item_icon">
                      <img src="assets/images/ltst-img-1.jpg" alt="" />
                    </div>
                    <div class="widget_latst_item_text">
                      <p>Tips Membuat Foto Produk Menarik</p>
                      <a href="">02<sup>th</sup> Mei 2025</a>
                    </div>
                  </div>
                  <div class="widget_latst_item m-top-30">
                    <div class="item_icon">
                      <img src="assets/images/ltst-img-2.jpg" alt="" />
                    </div>
                    <div class="widget_latst_item_text">
                      <p>Kopi dan Kreativitas di Kelas Desain</p>
                      <a href="">21<sup>th</sup> Mei 2025</a>
                    </div>
                  </div>
                  <div class="widget_latst_item m-top-30">
                    <div class="item_icon">
                      <img src="assets/images/ltst-img-3.jpg" alt="" />
                    </div>
                    <div class="widget_latst_item_text">
                      <p>Hasil Menjahit Siswa Minggu Ini!</p>
                      <a href="">29<sup>th</sup> Mei 2025</a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="widget_item widget_service sm-m-top-50">
                  <h5 class="text-white">Latest News</h5>
                  <ul class="m-top-20">
                    <li class="m-top-20">
                      <a
                        href="https://www.youtube.com/watch?v=AP39tJnIQP8"
                        target="_blank"
                        ><i class="fa fa-angle-right"></i> Cara Membuat Portofolio Menarik</a
                      >
                    </li>
                    <li class="m-top-20">
                      <a
                        href="https://www.dimudahin.com/2024/11/ide-usaha-jahit-rumahan.html"
                        target="_blank"
                        ><i class="fa fa-angle-right"></i> 5 Ide Usaha dari Skill Menjahit</a
                      >
                    </li>
                    <li class="m-top-20">
                      <a
                        href="https://ukmindonesia.id/baca-deskripsi-posts/11-cara-bangun-branding-umkm-yang-kuat-strategi-jitu-untuk-bersaing"
                        target="_blank"
                        ><i class="fa fa-angle-right"></i> Tips Branding untuk UMKM</a
                      >
                    </li>
                    <li class="m-top-20">
                      <a
                        href="https://www.youtube.com/watch?v=0fJ9sx7BLdY"
                        target="_blank"
                        ><i class="fa fa-angle-right"></i> Panduan Bikin Kue Kering Modern</a
                      >
                    </li>
                    <li class="m-top-20">
                      <a
                        href="https://www.youtube.com/watch?v=pI4j4j0VgHE"
                        target="_blank"
                        ><i class="fa fa-angle-right"></i> Inspirasi Desain Undangan Digital</a
                      >
                    </li>
                    <li class="m-top-20">
                      <a
                        href="https://www.youtube.com/watch?v=QfCJWcrXir8"
                        target="_blank"
                        ><i class="fa fa-angle-right"></i>  Cara Bangun Bisnis dari Hobi</a
                      >
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-md-3">
                <div class="widget_item widget_newsletter sm-m-top-50">
                  <h5 class="text-white">Newsletter</h5>
                  <form class="form-inline m-top-30">
                    <div class="form-group">
                      <input
                        type="email"
                        class="form-control"
                        placeholder="Enter you Email"
                      />
                      <button type="submit" class="btn text-center">
                        <i class="fa fa-arrow-right"></i>
                      </button>
                    </div>
                  </form>
                  <div class="widget_brand m-top-40">
                    <a href="" class="text-uppercase">Kursus Kita</a>
                    <p>
                      Tempat belajar menjahit, membuat kue, dan desain yang menyenangkan dan aplikatif. Belajar langsung dari para ahli, dan wujudkan impianmu mulai hari ini!
                    </p>
                  </div>
                  <ul class="list-inline m-top-20">
                    <li>
                      - <a href=""><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                      <a href=""><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                      <a href=""><i class="fa fa-linkedin"></i></a>
                    </li>
                    <li>
                      <a href=""><i class="fa fa-instagram"></i></a>
                    </li>
                    <li>
                      <a href="https://youtube.com/@codeworshipper" target="_blank"><i class="fa fa-youtube"></i></a> -
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div
          class="main_footer fix bg-mega text-center p-top-40 p-bottom-30 m-top-80"
        >
          <div class="col-md-12">
            <p class="wow fadeInRight" data-wow-duration="1s">
              Made with
              <i class="fa fa-heart"></i>
              by
              <a target="_blank" href="https://youtube.com/@codeworshipper"
                >Code Worshipper</a
              >
              2023. All Rights Reserved
            </p>
          </div>
        </div>
      </footer>
    </div>

    <script src="assets/js/vendor/jquery-1.11.2.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>

    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.js"></script>
    <script src="assets/js/jquery.easing.1.3.js"></script>
    <script src="assets/css/slick/slick.js"></script>
    <script src="assets/css/slick/slick.min.js"></script>
    <script src="assets/js/jquery.collapse.js"></script>
    <script src="assets/js/bootsnav.js"></script>

    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>
