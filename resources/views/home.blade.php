@extends('layout')

@section('content')
    <div class="">
        <div id="carouselExample" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="image/About.9.jpg" class="d-block w-100 vh-100" alt="..." id="carousel-img">
                   

                </div>
                <div class="carousel-item">
                    <img src="image/About.7.jpg" class="d-block w-100 vh-100" alt="..." id="carousel-img">
                   

                </div>
                <div class="carousel-item">
                    <img src="image/About.5.jpg" class="d-block w-100 vh-100" alt="..." id="carousel-img">
                   
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
        <section class="services-description bg-dark p-3 d-flex text-white">
            <div class="mt-5 container position-relative" style="z-index: 1;">
                <h2 class="text-center mb-5">Welcome to Hotel Baniya</h2>
                <div class="row">
                    <div class="col-lg-6 text-align-justify mt-5">
                        Welcome to one of the oldest and most cherished hotels in Bajura. We take immense
                        pride in our legacy, which spans several years, and our unwavering commitment to excellence. Here,
                        we offer nothing but the finest services and the most hygienic, delectable meals prepared with
                        organic firewood.

                        Our culinary expertise is second to none, backed by 15 years of experience and a master chef who
                        creates wonders on every plate. We strive to provide an unforgettable dining experience, where each
                        dish tells a story of passion and dedication.

                        At our esteemed establishment, we believe in fostering a warm and welcoming atmosphere. Our valued
                        guests are not merely customers; they become cherished members of our extended family. It is this
                        personalized touch that sets us apart and makes every visit here a memorable one.

                        Step into our world of authentic flavors, impeccable service, and a sense of belonging. Indulge in
                        the perfect blend of quality, affordability, and an unforgettable journey of taste. We look forward
                        to welcoming you to our exceptional hotel, where every moment is crafted with love and care.

                        <a href="/About" class="btn btn-danger mt-3">Read More</a>

                    </div>

                    <div class="col-lg-6">
                        <img src="image/About.7.jpg" width="100%" height="500">
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
