<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Profile - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
      /* CSS Custom */
      #mainNavbar {
        transition: all 0.3s ease;
        padding: 15px 0;
        background-color: rgba(255,255,255,0.9) !important; /* Background awal transparan */
      }
      
      #mainNavbar.scrolled {
        background-color: white !important;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        padding: 10px 0;
      }
      
      /* Padding untuk konten agar tidak tertutup navbar */
      body { 
        padding-top: 80px; 
      }
    </style>
</head>
<body>
    <!-- NAVBAR YANG SUDAH DIPERBAIKI -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNavbar">
        <div class="container d-flex align-items-center">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('images/LOGO HM Course.png') }}" alt="Company Logo" style="height:80px;">
            </a>
            
            <div class="d-flex ms-auto">
                <ul class="navbar-nav flex-row">
                    <li class="nav-item px-3">
                        <a class="nav-link" href="/" style="color:rgb(33, 107, 181);">Home</a>
                    </li>
                    <li class="nav-item px-3">
                        <a class="nav-link" href="/about" style="color:rgb(33, 107, 181);">Tentor</a>
                    </li>
                    <li class="nav-item px-3">
                        <a class="nav-link" href="/services" style="color:rgb(33, 107, 181);">Pendaftaran</a>
                    </li>
                    <!-- <li class="nav-item px-3">
                        <a class="nav-link" href="/contact" style="color:rgb(33, 107, 181);">Contact</a>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>

    <footer class="text-white text-center mt-5" style="background-color: rgba(0, 0, 0, 0.9); padding: 2rem 0; width: 100%;">
  <div class="container">
    &copy; {{ date('Y') }} Hakuna Matata. All rights reserved.
  </div>
</footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
      // JavaScript untuk efek scroll
      window.addEventListener('scroll', function() {
        const navbar = document.getElementById('mainNavbar');
        if (window.scrollY > 50) {
          navbar.classList.add('scrolled');
        } else {
          navbar.classList.remove('scrolled');
        }
      });
    </script>
</body>
</html>