@extends('layout')
@section('content')

<section>
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
    <div class="banner" style="background-image: url('{{ asset('/storage/image/banner1.png')}}'); width: 100%; height:90vh">
      <div
        class="d-flex flex-column mb-3 align-items-center justify-content-center text-white" style="padding-top: 10em;"
      >
        <div class="p-2"><h1>ORIENTAL</h1></div>
        <div class="p-2"><h4>Outdoor Equipment Rental</h4></div>
        <div class="p-4">
          <button type="button" class="btn btn-outline-info btn-lg">
            <a href="{{ route('profil') }}">Get Started</a>
          </button>
        </div>
      </div>
    </div>
  </section>


@endsection
