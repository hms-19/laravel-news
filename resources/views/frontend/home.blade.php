@extends('layouts.app')
@section('title','Home')

@section('content')

    <!-- Landing Start -->
    <section id="landing" class="py-5 bg-dark mt-5">
        <div class="container">
            <div class="row" style="min-height: 50vh;">
                <div class=" col-md-6 d-flex flex-column g-4 justify-content-center align-items-start">
                    <h1 class="text-light"><span class="text-primary">WEBHUB</span> News </h1>
                    <p class="lead text-light">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam saepe, recusandae iusto autem maxime repellat?
                    </p>
                    <a href="#" class="btn btn-primary w-25">All News</a>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('assets/frontend/images/1.svg') }}" alt="" class="img-fluid p-4">
                </div>
            </div>
        </div>
    </section>
    <!-- Landing End -->

    <!-- Categories Start -->

    <section id="categories" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 my-3">
                    <h1 class="text-center text-dark text-uppercase fw-bold fs-2">All Categories</h1>
                </div>
                <div class="col-12">
                    <section class="splide" aria-label="Basic Structure Example">
                        <div class="splide__track">
                          <ul class="splide__list">
                            <a href="" class="splide__slide">
                                <i class="fa-solid fa-futbol"></i>
                                <h2>Sport</h2>
                            </a>
                            <a href="" class="splide__slide">
                                <i class="fa-solid fa-building-columns"></i>
                                <h2>Education</h2>
                            </a>
                            <a href="" class="splide__slide">
                                <i class="fa-solid fa-building-flag"></i>
                                <h2>Politics</h2>
                            </a>
                            <a href="" class="splide__slide">
                                <i class="fa-solid fa-microchip"></i>
                                <h2>Technologies</h2>
                            </a>
                            <a href="" class="splide__slide">
                                <i class="fa-solid fa-book-medical"></i>
                                <h2>Health</h2>
                            </a>
                          </ul>
                        </div>
                      </section>
                </div>
            </div>
        </div>
    </section>

    <!-- Categories End -->

    <!-- Latest Start -->

    <section id="categories" class="py-5" style="background: #f4f4f4;">
        <div class="container">
            <div class="row">
                <div class="col-12 my-3">
                    <h1 class="text-center text-dark text-uppercase fw-bold fs-2">Latest News</h1>
                </div>
                <div class="col-12">
                    <div class="row g-4">
                        <div class="col-md-4">
                            <div class="card border-0 shadow-lg">
                                <img src="{{ asset('assets/frontend/images/news/1.jpg') }}" alt="" class="card-image-top p-2" width="100%" height="200px">
                                <div class="card-body">
                                    <a href="details.html" class="text-decoration-none text-dark">
                                        <h3>Ronaldo Daughter Dies</h3>
                                        <p class="text-muted">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, sequi....
                                        </p>
                                        <small class="text-muted">14-4-2022</small>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card border-0 shadow-lg">
                                <img src="{{ asset('assets/frontend/images/news/2.jpg') }}" alt="" class="card-image-top p-2" width="100%" height="200px">
                                <div class="card-body">
                                    <a href="details.html" class="text-decoration-none text-dark">
                                        <h3>Ronaldo Daughter Dies</h3>
                                        <p class="text-muted">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, sequi....
                                        </p>
                                        <small class="text-muted">14-4-2022</small>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card border-0 shadow-lg">
                                <img src="{{ asset('assets/frontend/images/news/3.jpg') }}" alt="" class="card-image-top p-2" width="100%" height="200px">
                                <div class="card-body">
                                    <a href="details.html" class="text-decoration-none text-dark">
                                        <h3>Ronaldo Daughter Dies</h3>
                                        <p class="text-muted">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, sequi....
                                        </p>
                                        <small class="text-muted">14-4-2022</small>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card border-0 shadow-lg">
                                <img src="{{ asset('assets/frontend/images/news/4.jpg') }}" alt="" class="card-image-top p-2" width="100%" height="200px">
                                <div class="card-body">
                                    <a href="details.html" class="text-decoration-none text-dark">
                                        <h3>Ronaldo Daughter Dies</h3>
                                        <p class="text-muted">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, sequi....
                                        </p>
                                        <small class="text-muted">14-4-2022</small>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card border-0 shadow-lg">
                                <img src="{{ asset('assets/frontend/images/news/7.jpg') }}" alt="" class="card-image-top p-2" width="100%" height="200px">
                                <div class="card-body">
                                    <a href="details.html" class="text-decoration-none text-dark">
                                        <h3>Ronaldo Daughter Dies</h3>
                                        <p class="text-muted">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, sequi....
                                        </p>
                                        <small class="text-muted">14-4-2022</small>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card border-0 shadow-lg">
                                <img src="{{ asset('assets/frontend/images/news/5.jpg') }}" alt="" class="card-image-top p-2" width="100%" height="200px">
                                <div class="card-body">
                                    <a href="details.html" class="text-decoration-none text-dark">
                                        <h3>Ronaldo Daughter Dies</h3>
                                        <p class="text-muted">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, sequi....
                                        </p>
                                        <small class="text-muted">14-4-2022</small>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

     <!-- Latest End -->

@endsection
