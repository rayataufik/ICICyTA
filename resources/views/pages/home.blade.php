@extends('layouts.default')

@section('content')
<section class="hero position-relative" style="background: radial-gradient(50% 50% at 50% 50%, #4c1e70 0%, #2a1e70 100%),
    url('images/bigwave.svg') no-repeat center 220px;
      background-blend-mode: screen;
      background-size: cover;
      padding-top: 110px;">
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
      <div class="container position-absolute z-1" style="bottom: -130px; right:0; left:0;">
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
  <div class="bg-image position-relative" style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ),
    url('images/conference.jpg') no-repeat center center;
      background-size: cover;
      padding-top: 200px; padding-bottom: 200px">
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
      padding-top: 50px; padding-bottom: 20px;">
    <div class="container text-white">
      <div class="speakers">
        <h1 class="title display-6">Conference Speakers</h1>
      </div>
      <div class="row justify-content-between my-5">
        <div class="col-md-2 col-6 mb-5">
          <div class="card card-speaker">
            <img src="images/kazutakaa.png" class="card-img-top" alt="...">
            <div class="text-white">
              <h5 class="card-title mt-3">Prof. Kazutaka SHIMADA</h5>
              <p class="card-text">Professor in Multi-Modal interpretation, Image processing and Natural Language Processing at Kyushu Institute of Technology, Japan</p>
            </div>
          </div>
        </div>
        <div class="col-md-2 col-6 mb-5">
          <div class="card card-speaker">
            <img src="images/Komang.png" class="card-img-top" alt="...">
            <div class="text-white">
              <h5 class="card-title mt-3">Prof. Ts. Dr. Sazilah Salam</h5>
              <p class="card-text">Professor of ICT in Economic and Tourism at Bali Internasional University, Indonesia.</p>
            </div>
          </div>
        </div>
        <div class="col-md-2 col-6 mb-5">
          <div class="card card-speaker">
            <img src="images/sazilah.png" class="card-img-top" alt="...">
            <div class="text-white">
              <h5 class="card-title mt-3">Prof. Ts. Dr. Sazilah Salam</h5>
              <p class="card-text">Prof of Multimedia, MOOCs, gamification, education technology and serious games at UTEM Malaysia.</p>
            </div>
          </div>
        </div>
        <div class="col-md-2 col-6 mb-5">
          <div class="card card-speaker">
            <img src="images/cihangirnew.jpg" class="card-img-top" alt="...">
            <div class="text-white">
              <h5 class="card-title mt-3">Assoc. Prof. Dr. Cihangir Tezcan</h5>
              <p class="card-text">Assistant Professor at Department of Cyber Security, Informatics Institute, Middle East Technical University (METU) at Ankara, Turkey.</p>
            </div>
          </div>
        </div>
        <div class="col-md-2 col-6 mb-5">
          <div class="card card-speaker">
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

<section class="call-for-papers">
  <div class="call-papers d-flex justify-content-between; ">
    <div class="papers-left" style="flex : 1;">
      <h1 class="title mt-5">Call For Papers</h1>
      <div class="d-flex flex-column align-items-center justify-content-center">
        <img src="images/ikontracks.png" alt="" srcset="">
        <h2 class="mt-2 title-conference">Conference Tracks</h2>
        <div class="d-grid gap-2 d-md-block mt-3">
          <button class="btn btn-main" type="button">Download CFP</button>
          <button class="btn btn-main" type="button">Download Tour Poster</button>
        </div>
      </div>
    </div>
    <div style="flex : 1;">
      <div style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ),
          url('images/conference.jpg') no-repeat center;
          background-size: cover;
          padding-top: 200px; 
          padding-bottom: 200px;">
        <div class="text-white text-center papers-right">
          <div class="mt-5">
            <p class="lead mt-3">The 4th ICICyTA 2024 carries a theme of "From Data to Decisions: Cybernetics and Intelligent Systems in Healthcare, IoT, and Business". Accepted papers will be submitted for inclusion into IEEE Xplore subject to meeting IEEE Xplore’s scope and quality requirements. We invite researchers to submit high-quality and unpublished research papers in the fields of cybernetics, computational intelligence, Internet of Things (IoT), biomedical engineering and applications, but not limited to.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container card-for-papers">
    <div class="row">
      <div class="col-md-6 mb-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title text-center">Cybernetics & Biomedical Engineering</h5>
            <p class="card-text">Data Mining for Software Engineering, Requirement Engineering and Software Produce Line Engineering</p>
            <div class="text-end">
              <a href="#" class="btn btn-main">See More</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 mb-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title text-center">Cybernetics & Management in Business</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <div class="text-end">
              <a href="#" class="btn btn-main">See More</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 mb-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title text-center">Cybernetics & Management in Business</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <div class="text-end">
              <a href="#" class="btn btn-main">See More</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 mb-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title text-center">Cybernetics & Management in Business</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <div class="text-end">
              <a href="#" class="btn btn-main">See More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="for-author">
  <div class="container">
    <h1 class="title text-center">
      For Authors
    </h1>
    <div class="row justify-content-center mt-5">
      <div class="col-md-10 position-relative mx-auto">
        <div class="position-absolute text-center z-1" style="top: -20px; width:fit-content; left: 50%; transform: translateX(-50%);">
          <div class="bg-title p-2 text-white rounded" style="background:#2a1e70">
            Important Date
          </div>
        </div>
        <div class="card mb-5">
          <div class="card-body">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Description</th>
                  <th scope="col">Deadline</th>
                </tr>
              </thead>
              <tbody class="table-group-divider">
                <tr>
                  <td>Submission Deadline</td>
                  <td>25 October 2024</td>
                </tr>
                <tr>
                  <td>Notification of Acceptance</td>
                  <td>25 November 2024</td>
                </tr>
                <tr>
                  <td>Early Bird Registration Deadline with 5% discount</td>
                  <td>20 November 2024</td>
                </tr>
                <tr>
                  <td>Camera Ready</td>
                  <td>30 November 2024</td>
                </tr>
                <tr>
                  <td>Normal Registration deadline</td>
                  <td>7 December 2024</td>
                </tr>
                <tr>
                  <td>Conference Date</td>
                  <td>17-18 Dec 2024</td>
                </tr>
                <tr>
                  <td>One day tour</td>
                  <td>19 Desember 2024</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="row mt-4 justify-content-around">
          <div class="col-md-6 mb-5">
            <div class="card">
              <div class="card-body">
                <div class="position-absolute text-center z-1" style="top: -20px; width:fit-content; left: 50%; transform: translateX(-50%);">
                  <div class="bg-title p-2 text-white rounded" style="background:#2a1e70">
                    Paper Preparation
                  </div>
                </div>
                <p class="card-text mt-2">This is some text within a card body.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 mb-5">
            <div class="card">
              <div class="card-body">
                <div class="position-absolute text-center z-1" style="top: -20px; width:fit-content; left: 50%; transform: translateX(-50%);">
                  <div class="bg-title p-2 text-white rounded" style="background:#2a1e70">
                    No-Show Policy
                  </div>
                </div>
                <p class="card-text mt-2">This is some text within a card body.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 mb-5">
            <div class="card">
              <div class="card-body">
                <div class="position-absolute text-center z-1" style="top: -20px; width:fit-content; left: 50%; transform: translateX(-50%);">
                  <div class="bg-title p-2 text-white rounded" style="background:#2a1e70">
                    PDF Express
                  </div>
                </div>
                <p class="card-text mt-2">This is some text within a card body.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 mb-5">
            <div class="card">
              <div class="card-body">
                <div class="position-absolute text-center z-1" style="top: -20px; width:fit-content; left: 50%; transform: translateX(-50%);">
                  <div class="bg-title p-2 text-white rounded" style="background:#2a1e70">
                    Past Event
                  </div>
                </div>
                <p class="card-text mt-2">This is some text within a card body.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 mb-5">
            <div class="card">
              <div class="card-body">
                <div class="position-absolute text-center z-1" style="top: -20px; width:fit-content; left: 50%; transform: translateX(-50%);">
                  <div class="bg-title p-2 text-white rounded" style="background:#2a1e70">
                    Event Schedule
                  </div>
                </div>
                <p class="card-text mt-2">This is some text within a card body.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="registration">
  <div class="container">
    <h1 class="title-registraton text-center mb-4 mt-5">
      Registration Fee
    </h1>
    <div class="row">
      <div class="col-md-6">
        <div class="row text-center">
          <div class="col-md-6 mb-4">
            <div class="card card-fee text-white">
              <div class="card-body">
                <h5 class="card-title">International Presenter</h5>
                <p class="card-text">IDR 3.000.000</p>
                <p class="card-text">USD 200</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 mb-4">
            <div class="card card-fee text-white">
              <div class="card-body">
                <h5 class="card-title">International Presenter</h5>
                <p class="card-text">IDR 3.000.000</p>
                <p class="card-text">USD 200</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 mb-4">
            <div class="card card-fee text-white">
              <div class="card-body">
                <h5 class="card-title">International Presenter</h5>
                <p class="card-text">IDR 3.000.000</p>
                <p class="card-text">USD 200</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 mb-4">
            <div class="card card-fee text-white">
              <div class="card-body">
                <h5 class="card-title">International Presenter</h5>
                <p class="card-text">IDR 3.000.000</p>
                <p class="card-text">USD 200</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 mb-4">
            <div class="card card-fee text-white">
              <div class="card-body">
                <h5 class="card-title">International Presenter</h5>
                <p class="card-text">IDR 3.000.000</p>
                <p class="card-text">USD 200</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 mb-4">
            <div class="card card-fee text-white">
              <div class="card-body">
                <h5 class="card-title">International Presenter</h5>
                <p class="card-text">IDR 3.000.000</p>
                <p class="card-text">USD 200</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 mb-4">
            <div class="card card-fee text-white">
              <div class="card-body">
                <h5 class="card-title">International Presenter</h5>
                <p class="card-text">IDR 3.000.000</p>
                <p class="card-text">USD 200</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 mb-4">
            <div class="card card-fee text-white">
              <div class="card-body">
                <h5 class="card-title">International Presenter</h5>
                <p class="card-text">IDR 3.000.000</p>
                <p class="card-text">USD 200</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card">
          <div class="card-body">
            <p class="card-text">Payment should be made after acceptance by Bank Transfer to “Bank Negara Indonesia (BNI) as below:</p>
            <div class="bank-info">
              <div class="card mb-3">
                <div class="d-flex card-body align-items-center justify-content-between">
                  <div class="bank-logo">
                    <img src="images/va.png" alt="Virtual Account Logo">
                  </div>
                  <div class="bank-detail">
                    Virtual Account
                  </div>
                  <div class="icon-chevron-right">
                    @include('icons.chevron-right')
                  </div>
                </div>
              </div>
              <div class="card mb-3">
                <div class="d-flex card-body align-items-center justify-content-between">
                  <div class="bank-logo">
                    <img src="images/bank-tf.png" alt="Virtual Account Logo">
                  </div>
                  <div class="bank-detail">
                    Bank Transfer
                  </div>
                  <div class="icon-chevron-right">
                    @include('icons.chevron-right')
                  </div>
                </div>
              </div>
              <div class="card mb-3">
                <div class="d-flex card-body align-items-center justify-content-between">
                  <div class="bank-logo">
                    <img src="images/paypal.png" alt="Virtual Account Logo">
                  </div>
                  <div class="bank-detail">
                    Paypal
                  </div>
                  <div class="icon-chevron-right">
                    @include('icons.chevron-right')
                  </div>
                </div>
              </div>
            </div>
            <!-- <div class="text-end mb-3">
              <a href="#" class="btn btn-main">Register Now</a>
            </div> -->
          </div>
        </div>
      </div>
    </div>
  </div>
</section>




@stop