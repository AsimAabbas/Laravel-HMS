 <!-- .page-section -->
 @include('user.header')
 @include('user.navbar')
 @if (session()->has('message'))

 <div class="alert alert-success mt-4 mx-4">
     <button type="button" class="close float-right" data-dismiss="alert">
         X </button>
     {{session()->get('message')}}
     @endif
 </div>
 <div class="page-section">

     <div class="container">
         <h1 class="text-center mb-5 wow fadeInUp"><b>Our Doctors</b> </h1>
         <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">
             @foreach($doctor as $doctors)
             <div class="item">
                 <div class="card-doctor">
                     <div class="header">
                         <img src="doctorimages/{{$doctors->image}}" alt="">
                     </div>
                     <div class="body">
                         <p class="text-xl mb-0">{{$doctors->name}}</p>
                         <span class="text-sm text-grey">{{$doctors->speciality}}</span><br>
                         <span class="text-sm text-grey"><b>Phone:</b> {{$doctors->phone}}</span>
                     </div>
                 </div>
             </div>
             @endforeach
         </div>
     </div>

 </div>
 <div class="page-section">
     <div class="container">
         <h1 class="text-center wow fadeInUp">Make an Appointment</h1>

         <form class="main-form" action="{{url('appointment')}}" method="POST">
             @csrf
             <div class="row mt-5 ">
                 <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
                     <input type="text" name="name" class="form-control" placeholder="Patient Name" required>
                 </div>
                 <div class="col-12 col-sm-6 py-2 wow fadeInRight">
                     <input type="text" name="email" class="form-control" placeholder="Email address.." required>
                 </div>
                 <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
                     <input type="date" name="date" class="form-control">
                 </div>
                 <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
                     <select name="doctor" id="departement" class="custom-select" required>
                         <option>--- Choose Doctor ---</option>
                         @foreach ($doctor as $doctors)
                         <option value="{{$doctors->name}}">{{$doctors->name}} {{$doctors->speciality}}</option>
                         @endforeach
                     </select>
                 </div>
                 <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                     <input type="text" name="phone" class="form-control" placeholder="Pone Number.." required>
                 </div>
                 <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                     <textarea name="message" id="message" class="form-control" rows="6" placeholder="Enter message.."
                         required></textarea>
                 </div>
             </div>

             <button type="submit" class="btn btn-primary bg-primary mt-3 wow zoomIn">Submit Request</button>
         </form>
     </div>
 </div> <!-- .page-section -->

 @include('user.footer')