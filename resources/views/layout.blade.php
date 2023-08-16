<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{env('APP_NAME')}}- Hotel Baniya</title>
    <!-- Include your CSS files here -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>
<style>
  #carousel-img{
    width : 100%;
    height : 500px;
}
* {
  box-sizing: border-box;
  overflow-x: hidden;
}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
  text-align: center;
}

.row {
  display: -ms-flexbox; /* IE 10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE 10 */
  flex-wrap: wrap;
  padding: 0 4px;
}
.navbar-expand{
  flex-wrap: nowrap;
  justify-content: flex-end !important;
}

/* Create two equal columns that sits next to each other */
.column {
  -ms-flex: 50%; /* IE 10 */
  flex: 50%;
  padding: 0 4px;
}

.column img {
  margin-top: 8px;
  vertical-align: middle;
}



</style>
<body>
    <!-- Navigation -->
    <section class="header bg-dark">
      <nav class="navbar navbar-expand-lg border-bottom border-bottom-dark bg-dark" data-bs-theme="dark">
        <div class="container-fluid">
          <a class="navbar-brand">
            <img src="image/logo.12.png" width="90" height="90"> 
          </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav ms-auto"> <!-- Added ms-auto class here -->
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">HOME</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/gallery">GALLERY</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/services">SERVICES</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/contact">CONTACT</a>
              </li>
               <li class="nav-item">
                <a class="nav-link" href="/About">ABOUT</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <p class="col-lg-12 p-3 bg-dark text-light sticky-top">Contact Us : 097-541089 || Adress : Badimalika  Municipality , 08 Martadi ,Bajura</p>
    </section>
   
    @yield('content')

    <!-- Include your JavaScript files here -->
    <script src="/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    <div class="bottom p-3">
    <footer class="bg-white">
        <div class="text-center">
            <p>&copy; {{ date('Y') }} Baniya Hotel. All rights reserved.</p>
        </div>
    </footer>
    </div>
</body>
</html>
