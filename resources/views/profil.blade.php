@extends('layout')
@section('content')
<nav class="navbar navbar-expand-lg bg-transparent px-5">
    <div class="container-fluid">
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarNav"
        aria-controls="navbarNav"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-start">
        <a href="index.html">
          <img src="{{  asset('/storage/image/Logo_Oriental.png')  }}" width="15%" alt="" />
        </a>
      </div>
      <div
        class="collapse navbar-collapse justify-content-end fw-bold"
        id="navbarNav"
      >
        <ul class="navbar-nav">
          <li class="nav-item mx-2">
            <a class="nav-link" aria-current="page" href="profil.html"
              >Profil</a
            >
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="#">Price List</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="{{ route('booking') }}">Booking</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</section>

  <section>
    <div class="container">
      <div class="row py-5">
        <div class="col-6">
          <img src='{{ asset('/storage/image/Logo_Oriental.png')}}' alt="" />
        </div>
        <div class="col-6 align-self-center">
          <h1 class="fw-bold">Oriental</h1>
          <p>
            <b>Outdoor Equipment Rental</b> Hadir untuk mempermudah customer dalam melakukan booking online peralatan
            pendakian, sehingga tidak perlu khawatir akan gagalnya kegiatan alam yang telah terencanakan jauh hari
            dan kehabisan stok peralatan pendakian.
          </p>
        </div>
      </div>
    </div>
  </section>

  <section class="py-5" id="menu">
    <div class="container my-5">
        <h1 class="text-center fs-4 fw-bold">Price List</h1>
        <div class="row py2">
        @foreach ($data as $d)
          <div class="col-md-3 py-3">
              <div class="card shadow p-3" style="height: 400px; padding: 20px; cursor: pointer;">
                <img
                  src="{{ Storage::url('../storage/image/').$d->foto_barang }}"
                  class="card-img-product card-img-top"
                  alt=""
                />
                <div class="card-body">
                  <h4 class="card-title">{{ $d->nama_barang }}</h4>
                  <p class="card-text">{{ $d->harga }}</p>
                  <p class="card-text">Stok : {{ $d->stok }}</p>
                </div>
              </div>
            </div>
        @endforeach
        </div>
        </div>
      </div>
  </section>
  <footer style="background: #295962">
    <div class="container py-4 py-lg-5 ps-md-4 pe-md-4 ps-4 pe-4">
      <div
        class="row justify-content-center justify-content-md-between text-white"
      >
        <div
          class="col-sm-4 col-md-6 text-center text-lg-start d-flex flex-column item pt-md-2"
        >
          <h1>Oriental</h1>
          <p
            class="text-start pt-3"
            style="font-size: 14px; font-family: Poppins, sans-serif"
          >
            Outdoor Equipment Rental merupakan suatu usaha yang bergerak di
            bidang jasa yang dibangun oleh mahasiswa bidikmisi dengan menyewakan perlengkapan pendakian
            tanpa perlu khawatir akan gagalnya kegiatan alam yang telah terencanakan jauh hari.
          </p>
        </div>
        <div
          class="col-sm-4 col-md-5 col-lg-4 text-center text-lg-start d-flex flex-column item mt-3 mb-4 pt-md-0"
          style="font-family: Poppins, sans-serif"
        >
          <h3 class="fs-6 pb-0 mb-4">Kontak</h3>
          <div class="row d-md-flex mb-md-2 mt-md-2">
            <div class="col-2 col-md-2"><i class="far fa-envelope"></i></div>
            <div class="col text-start d-md-flex">
              <p style="height: 14px; font-size: 14px">
                oriental14@gmail.com<br />
              </p>
            </div>
          </div>
          <div class="row mb-md-2 mt-md-2">
            <div class="col-2 col-md-2"><i class="fas fa-phone-alt"></i></div>
            <div class="col text-start">
              <p style="height: 14px; font-size: 14px">081315289207<br /></p>
            </div>
          </div>
          <div class="row mb-md-2 mt-md-2">
            <div class="col-2 col-md-2">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 -32 576 576"
                width="1em"
                height="1em"
                fill="currentColor"
              >
                <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                <path
                  d="M565.6 36.24C572.1 40.72 576 48.11 576 56V392C576 401.1 569.8 410.9 560.5 414.4L392.5 478.4C387.4 480.4 381.7 480.5 376.4 478.8L192.5 417.5L32.54 478.4C25.17 481.2 16.88 480.2 10.38 475.8C3.882 471.3 0 463.9 0 456V120C0 110 6.15 101.1 15.46 97.57L183.5 33.57C188.6 31.6 194.3 31.48 199.6 33.23L383.5 94.52L543.5 33.57C550.8 30.76 559.1 31.76 565.6 36.24H565.6zM48 421.2L168 375.5V90.83L48 136.5V421.2zM360 137.3L216 89.3V374.7L360 422.7V137.3zM408 421.2L528 375.5V90.83L408 136.5V421.2z"
                ></path>
              </svg>
            </div>
            <div class="col text-start">
              <p style="height: 14px; font-size: 14px">
                Keputih Gg Makam no. 14, Sukolilo, Surabaya<br />
              </p>
            </div>
          </div>
        </div>
      </div>
      <hr class="text-white" />
      <div class="row d-flex justify-content-md-between">
        <div class="col-md-6">
          <p
            class="text-center text-md-start text-white"
            style="font-size: 12px; font-family: Poppins, sans-serif"
          >
            © ORIENTAL - All Right Reserved<br />
          </p>
        </div>
        <div
          class="col-md-5 d-flex d-md-flex justify-content-center justify-content-md-end justify-content-lg-end text-white"
        >
          <div class="row">
            <div class="col"><i class="fab fa-facebook fs-4"></i></div>
            <div class="col ms-md-2 me-md-2">
              <i class="fab fa-instagram fs-4"></i>
            </div>
            <div class="col"><i class="fab fa-youtube fs-4"></i></div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  @endsection
