@extends('layout')

@section('content')
<div class="wrapper">
<div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/About.6.jpg" class="d-block w-100 vh-20" alt="..." id="carousel-img">
    </div>
    <div class="carousel-item">
      <img src="image/About.7.jpg" class="d-block w-100 h-20" alt="..." id="carousel-img">
    </div>
    <div class="carousel-item">
      <img src="image/About.9.jpg" class="d-block w-100 h-20" alt="..." id="carousel-img">
    </div>
    <div class="carousel-item">
      <img src="image/About.5.jpg" class="d-block w-100 h-20" alt="..." id="carousel-img">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    <!-- Services Description Section -->
    <section class="services-description bg-success p-3">
        <div class="container text-center">
            <h2>Our Services</h2>
            <p class="lead">Experience luxury and comfort at its best with our exceptional hotel services.</p>
        </div>
    </section>

    <!-- Service Points Section -->
     <section class="service-points bg-white">
        <div class="container">
            <div class="row">
                <!-- Service 1 -->
                <div class="col-md-4 mb-4">
                    <div class="text-center">
                        <!-- Replace the URL with the actual photo of Service 1 -->
                        <img src="image/transport.png" alt="Service 1" style="width: 50;">
                        <h5>Accommodation</h5>
                    </div>
                </div>

                <!-- Service 2 -->
                <div class="col-md-4 mb-4">
                    <div class="text-center">
                        <!-- Replace the URL with the actual photo of Service 2 -->
                        <img src="image/room.png" alt="Service 2" style="width: 50;">
                        <h5>Dining</h5>
                    </div>
                </div>

                <!-- Service 3 -->
                <div class="col-md-4 mb-4">
                    <div class="text-center">
                        <!-- Replace the URL with the actual photo of Service 3 -->
                        <img src="image/wifi.png" alt="Service 3" style="width: 50;">
                        <h5>Wi-Fi</h5>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="text-center">
                        <!-- Replace the URL with the actual photo of Service 3 -->
                        <img src="image/safety.png" alt="Service 3" style="width: 50;">
                        <h5>Locker-Safety</h5>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="text-center">
                        <!-- Replace the URL with the actual photo of Service 3 -->
                        <img src="image/water.png" alt="Service 3" style="width: 50;">
                        <h5>Complimentary Water</h5>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="text-center">
                        <!-- Replace the URL with the actual photo of Service 3 -->
                        <img src="image/sunset.png" alt="Service 3" style="width: 50;">
                        <h5>Sunset View Rooms</h5>
                    </div>
                </div>
            </div>
        </div>

<!-- Add your CSS styles and JS scripts (if needed) -->
@endsection
