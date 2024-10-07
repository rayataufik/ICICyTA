@extends('layouts.default')

@section('content')
<section class="hero" style="background: radial-gradient(50% 50% at 50% 50%, #4c1e70 0%, #2a1e70 100%),
    url('images/bigwave.svg') no-repeat center 220px;
      background-blend-mode: screen;
      background-size: cover;
      padding-top: 110px; position: relative;">
  <div class="bg-image">
    <div class="container text-white">
      <div class="">
        <h1 class="title display-4">The 4<sup>th</sup> International Conference on <br>
          Intelligent Cybernetics Technology <br>
          & Applications 2024 (ICICyTA)</h1>
      </div>
      <div class="event-date-time mt-5">
        <div class="location-date">
          <h6 class="event-date">DEC 17-19, 2024 - A HYBRID INTERNATIONAL CONFERENCE (BALI INDONESIA)</h6>
        </div>
        <div class="couterdown-event">
          <h6 class="mt-3 lead">Countdown to the event:</h6>
          <div class="mt-3 event-time-countdown d-flex">
            <div class="c-square text-center" id="c-days"></div>
            <div class="c-square text-center ms-4" id="c-hours"></div>
            <div class="c-square text-center ms-4" id="c-minutes"></div>
            <div class="c-square text-center ms-4" id="c-seconds"></div>
          </div>
        </div>
      </div>
      <div class="mt-5">
        <h6 class="lead">Submit Your Paper Here: <a class="btn btn-submit-paper" href="https://edas.info/newPaper.php?c=32282" target="_blank" role="button">EDAS</a></h6>
      </div>
      <div class="container" style="position: absolute; z-index: 1; bottom: -130px; right:0; left:0;">
        <div class="mt-4 mb-5 p-4 sponsor-section text-white rounded">
          <h5 class="sponsor">Sponsored By:</h5>
          <div class="mx-auto d-flex justify-content-center sponsor-logo">
            <img class="img-fluid" src="images/logo-humic.png" alt="Sponsor 1 Logo">
            <img class="img-fluid" src="images/ieeefix.png" alt="Sponsor 2 Logo">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="about">
  <div class="bg-image" style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ),
    url('images/conference.jpg') no-repeat center center;
      background-size: cover;
      padding-top: 200px;
      position: relative; padding-bottom: 200px">
    <div class="container text-white text-center">
      <div class="mt-5">
        <h1 class="title display-4">What is ICICyTA 2024?</h1>
        <p class="lead mt-3">The 4th International Conference on Intelligent Cybernetics Technology & Applications 2024 (ICICyTA 2024)
          with theme "From Data to Decisions: Cybernetics and Intelligent Systems in Healthcare, IoT, and Business" will be held on December 17-19, 2024 at Bali Indonesia.
          This is a hybrid (onsite and online) conference which is organized by Human Centric Engineering, Telkom University (Tel-U) and Bali International University (UNBI).</p>
      </div>
    </div>
  </div>
</section>

<section class="speakers">
  <div class="bg-image" style="background: radial-gradient(50% 50% at 50% 50%, #4c1e70 0%, #2a1e70 100%),
    url('images/gruptwobigwave.svg') no-repeat center 200px;
      background-blend-mode: screen;
      background-size: cover;
      padding-top: 50px; padding-bottom: 20px;">
    <div class="container text-white">
      <div class="speakers">
        <h1 class="title display-6">Conference Speakers</h1>
      </div>
      <div class="row justify-content-between my-5">
        <div class="col-md-2 col-6 mb-5">
          <div class="card">
            <img src="images/kazutakaa.png" class="card-img-top" alt="...">
            <div class="text-white">
              <h5 class="card-title mt-3">Prof. Kazutaka SHIMADA</h5>
              <p class="card-text">Professor in Multi-Modal interpretation, Image processing and Natural Language Processing at Kyushu Institute of Technology, Japan</p>
            </div>
          </div>
        </div>
        <div class="col-md-2 col-6 mb-5">
          <div class="card">
            <img src="images/Komang.png" class="card-img-top" alt="...">
            <div class="text-white">
              <h5 class="card-title mt-3">Prof. Ts. Dr. Sazilah Salam</h5>
              <p class="card-text">Professor of ICT in Economic and Tourism at Bali Internasional University, Indonesia.</p>
            </div>
          </div>
        </div>
        <div class="col-md-2 col-6 mb-5">
          <div class="card">
            <img src="images/sazilah.png" class="card-img-top" alt="...">
            <div class="text-white">
              <h5 class="card-title mt-3">Prof. Ts. Dr. Sazilah Salam</h5>
              <p class="card-text">Prof of Multimedia, MOOCs, gamification, education technology and serious games at UTEM Malaysia.</p>
            </div>
          </div>
        </div>
        <div class="col-md-2 col-6 mb-5">
          <div class="card">
            <img src="images/cihangirnew.jpg" class="card-img-top" alt="...">
            <div class="text-white">
              <h5 class="card-title mt-3">Assoc. Prof. Dr. Cihangir Tezcan</h5>
              <p class="card-text">Assistant Professor at Department of Cyber Security, Informatics Institute, Middle East Technical University (METU) at Ankara, Turkey.</p>
            </div>
          </div>
        </div>
        <div class="col-md-2 col-6 mb-5">
          <div class="card">
            <img src="images/Satria-Mandala.png" class="card-img-top" alt="...">
            <div class="text-white">
              <h5 class="card-title mt-3">Assoc. Prof. Satria Mandala, Ph.D</h5>
              <p class="card-text">Associate Professor of Telemedicine System & Artificial Intelligence, and Director of Research Center for Human Centric Engineering at Telkom University, Indonesia.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



@stop