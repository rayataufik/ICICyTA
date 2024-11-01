@php
$footers = \App\Models\Footer::first();
$Supporters = \App\Models\Supporter::all();
@endphp

<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-5">
        <h4 class="text-white">Venue</h4>
        <div class="map-responsive">
          <iframe src="{{$footers->vanue_link}}" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
      <div class="col-md-4">
        <div class="contact-us">
          <h4 class="text-white">Contact Us</h4>
          <div class="email d-flex">
            @include('icons.email')
            <h6 class="mt-2 ms-2"><a class="text-white" href="mailto:{{$footers->email}}">{{$footers->email}}</a></h6>
          </div>
          <div class="phone d-flex">
            @include('icons.phone')
            <h6 class="text-white mt-3 ms-1">{{$footers->phone}}</h6>
          </div>
        </div>
        <div class="our-social-media mt-3">
          <h4 class="text-white">Our Social Media</h4>
          <div class="social-media d-flex">
            <a href="{{$footers->linkedin}}" class="text-white me-3"><i class='bx bxl-linkedin-square'></i></a>
            <a href="{{$footers->instagram}}" class="text-white me-3"><i class='bx bxl-instagram'></i></a>
            <a href="{{$footers->facebook}}" class="text-white"><i class='bx bxl-facebook-square'></i></a>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <h4 class="text-white">Visitor Statistics</h4>
        <img
          src="{{$footers->visitor_link}}"
          alt="Flag Counter">
      </div>
    </div>
    <div class="supported p-5 rounded">
      <h4>Supported By</h4>
      <div class="row mt-3">
        @foreach($Supporters as $Supporter)
        <div class="col-md-2 text-center">
          <img src="{{asset('storage/'.$Supporter->image_supporter)}}" alt="Supporter Image" class="img-fluid">
        </div>
        @endforeach
      </div>
    </div>
  </div>
</footer>