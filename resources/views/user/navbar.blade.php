 <!-- Back to top button -->
 <div class="back-to-top"></div>

 <header>
     <div class="topbar">
         <div class="container">
             <div class="row">
                 <div class="col-sm-8 text-sm">

                 </div>
                 <div class="col-sm-4 text-right text-sm">
                     <div class="social-mini-button">
                         <a href="#"><span class="mai-logo-facebook-f"></span></a>
                         <a href="#"><span class="mai-logo-twitter"></span></a>
                         <a href="#"><span class="mai-logo-dribbble"></span></a>
                         <a href="#"><span class="mai-logo-instagram"></span></a>
                     </div>
                 </div>
             </div> <!-- .row -->
         </div> <!-- .container -->
     </div> <!-- .topbar -->

     <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
         <div class="container">
             <a class="navbar-brand" href="#"><span class="text-primary display-4">H</span><b class="display-4">MS</b>
             </a>
             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport"
                 aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
             </button>

             <div class="collapse navbar-collapse" id="navbarSupport">
                 <ul class="navbar-nav ml-auto">
                     <li class="nav-item active">
                         <a class="nav-link" href="{{url('home')}}">Home</a>
                     </li>

                     @if(Route::has('login'))
                     @auth
                     <li class="nav-item">
                         <a class="nav-link" href="{{url('doctors')}}">Doctors</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link bg-primary text-light rounded" href="{{url('myappointment')}}">My
                             Appointment</a>
                     </li>
                     <x-app-layout>
                     </x-app-layout>

                     @else
                     <li class="nav-item">
                         <a class="btn btn-primary ml-lg-3" href="{{route('login')}}">Login</a>
                     </li>
                     <li class="nav-item">
                         <a class="btn btn-primary ml-lg-3" href="{{route('register')}}">Register</a>
                     </li>
                     @endauth
                     @endif
                 </ul>
             </div> <!-- .navbar-collapse -->
         </div> <!-- .container -->
     </nav>
 </header>