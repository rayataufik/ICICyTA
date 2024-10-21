@extends('layouts.default')

@section('content')
<section class="hero position-relative" style="background: radial-gradient(50% 50% at 50% 50%, #4c1e70 0%, #2a1e70 100%),
    url('images/bigwave.svg') no-repeat center 220px;
      background-blend-mode: screen;
      background-size: cover;
      padding-top: 110px;">
  <div class="bg-image">
    <div class="container text-white">
      <div data-aos="fade-right" data-aos-duration="1500">
        <div class="title">
          <h1 class="display-4">The 4<sup>th</sup> International Conference on <br>
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
      </div>
      <div class="mt-5">
        <h6 class="lead">Submit Your Paper Here: <a class="btn btn-submit-paper" href="https://edas.info/newPaper.php?c=32282" target="_blank" role="button">EDAS</a></h6>
      </div>
      <div class="container position-absolute z-1" style="bottom: -130px; right:0; left:0;">
        <div class="mt-4 mb-5 p-4 sponsor-section text-white rounded">
          <h5 class="sponsor">Sponsored By:</h5>
          <div class="row justify-content-center sponsor-logo">
            <div class="col-md-2 col text-center">
              <img class="img-fluid" src="images/logo-humic.png" alt="Sponsor 1 Logo">
            </div>
            <div class="col-md-2 col text-center">
              <img class="img-fluid" src="images/ieeefix.png" alt="Sponsor 2 Logo">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>

<section id="about" class="about">
  <div class="bg-image position-relative" style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ),
    url('images/conference.jpg') no-repeat center center;
      background-size: cover;
      padding-top: 200px; padding-bottom: 200px">
    <div class="container text-white text-center" data-aos="fade-up" data-aos-delay="0">
      <div class="mt-5">
        <h1 class="title display-4">What is ICICyTA 2024?</h1>
        <p class="lead mt-3">The 4th International Conference on Intelligent Cybernetics Technology & Applications 2024 (ICICyTA 2024)
          with theme "From Data to Decisions: Cybernetics and Intelligent Systems in Healthcare, IoT, and Business" will be held on December 17-19, 2024 at Bali Indonesia.
          This is a hybrid (onsite and online) conference which is organized by Human Centric Engineering, Telkom University (Tel-U) and Bali International University (UNBI).</p>
      </div>
    </div>
  </div>
</section>

<section id="speakers" class="speakers">
  <div class="bg-image" style="background: radial-gradient(50% 50% at 50% 50%, #4c1e70 0%, #2a1e70 100%),
    url('images/gruptwobigwave.svg') no-repeat center 200px;
      background-blend-mode: screen;
      padding-top: 50px; padding-bottom: 20px;">
    <div class="container text-white" data-aos="fade-up" data-aos-delay="0">
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

<section id="call-for-papers" class="call-for-papers">
  <div class="call-papers d-flex justify-content-between; ">
    <div class="papers-left" style="flex : 1;">
      <h1 class="title">Call For Papers</h1>
      <div class="d-flex flex-column align-items-center justify-content-center p-5">
        <div class="card card-papers">
          <div class="card-body text-center">
            <img src="images/ikontracks.png" alt="" srcset="">
            <h2 class="mt-2 title-conference">Conference Tracks</h2>
            <div class="d-grid gap-2 d-md-block mt-3">
              <button class="btn btn-main" type="button">Download CFP</button>
              <button class="btn btn-main" type="button">Download Tour Poster</button>
            </div>
          </div>
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
    <div class="position-relative">
      <div class="row">
        <div class="col-md-6 mb-5">
          <div class="card">
            <div class="card-body">
              <div class="position-absolute text-center z-1" style="top: -50px; width:fit-content; left: 50%; transform: translateX(-50%);">
                <div class="bg-title p-2 text-white rounded">
                  <img src="images/cybermed.png" alt="" style="width: 90px;">
                </div>
              </div>
              <h5 class="card-title text-center mt-4">Cybernetics & Biomedical Engineering</h5>
              <p class="card-text">Data Mining for Software Engineering, Requirement Engineering and Software Produce Line Engineering</p>
              <div class="text-end">
                <button type="button" class="btn btn-main" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                  Read More
                </button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 mb-5">
          <div class="card">
            <div class="card-body">
              <div class="position-absolute text-center z-1" style="top: -50px; width:fit-content; left: 50%; transform: translateX(-50%);">
                <div class="bg-title p-2 text-white rounded">
                  <img src="images/cybermed.png" alt="" style="width: 90px;">
                </div>
              </div>
              <h5 class="card-title text-center mt-4">Cybernetics & Management in Business</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <div class="text-end">
                <button type="button" class="btn btn-main" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                  Read More
                </button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 mb-5">
          <div class="card">
            <div class="card-body">
              <div class="position-absolute text-center z-1" style="top: -50px; width:fit-content; left: 50%; transform: translateX(-50%);">
                <div class="bg-title p-2 text-white rounded">
                  <img src="images/cybermed.png" alt="" style="width: 90px;">
                </div>
              </div>
              <h5 class="card-title text-center mt-4">Cybernetics & Management in Business</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <div class="text-end">
                <button type="button" class="btn btn-main" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                  Read More
                </button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 mb-5">
          <div class="card">
            <div class="card-body">
              <div class="position-absolute text-center z-1" style="top: -50px; width:fit-content; left: 50%; transform: translateX(-50%);">
                <div class="bg-title p-2 text-white rounded">
                  <img src="images/cybermed.png" alt="" style="width: 90px;">
                </div>
              </div>
              <h5 class="card-title text-center mt-4">Cybernetics & Management in Business</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <div class="text-end">
                <button type="button" class="btn btn-main" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                  Read More
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h2 class="fs-5 text-center">Cybernetics & Biomedical Engineering</h2>
        <p class="mt-3">Data Mining for Software Engineering, Requirement Engineering and Software Produce Line Engineering</p>
      </div>
    </div>
  </div>
</div>

<section id="for-author" class="for-author">
  <div class="container">
    <h1 class="title text-center">
      For Authors
    </h1>
    <div class="row justify-content-center mt-5">
      <div class="col-md-10 position-relative mx-auto">
        <div class="position-absolute text-center z-1" style="top: -20px; width:fit-content; left: 50%; transform: translateX(-50%);">
          <div class="bg-title p-2 text-white rounded" style="background:#5B5195">
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
                  <div class="bg-title p-2 text-white rounded" style="background:#5B5195">
                    Paper Preparation
                  </div>
                </div>
                <p class="card-text mt-4 mb-4">This is some text within a card body.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 mb-5">
            <div class="card">
              <div class="card-body">
                <div class="position-absolute text-center z-1" style="top: -20px; width:fit-content; left: 50%; transform: translateX(-50%);">
                  <div class="bg-title p-2 text-white rounded" style="background:#5B5195">
                    No-Show Policy
                  </div>
                </div>
                <p class="card-text mt-4 mb-4">This is some text within a card body.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 mb-5">
            <div class="card">
              <div class="card-body">
                <div class="position-absolute text-center z-1" style="top: -20px; width:fit-content; left: 50%; transform: translateX(-50%);">
                  <div class="bg-title p-2 text-white rounded" style="background:#5B5195">
                    PDF Express
                  </div>
                </div>
                <p class="card-text mt-4 mb-4">This is some text within a card body.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 mb-5">
            <div class="card">
              <div class="card-body">
                <div class="position-absolute text-center z-1" style="top: -20px; width:fit-content; left: 50%; transform: translateX(-50%);">
                  <div class="bg-title p-2 text-white rounded" style="background:#5B5195">
                    Past Event
                  </div>
                </div>
                <p class="card-text mt-4 mb-4">This is some text within a card body.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 mb-5">
            <div class="card">
              <div class="card-body">
                <div class="position-absolute text-center z-1" style="top: -20px; width:fit-content; left: 50%; transform: translateX(-50%);">
                  <div class="bg-title p-2 text-white rounded" style="background:#5B5195">
                    Event Schedule
                  </div>
                </div>
                <p class="card-text mt-4 mb-4">This is some text within a card body.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="registration" class="registration">
  <div class="container">
    <h1 class="title-registraton text-center mb-4 text-white pt-5">
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
            <div class="accordion" id="accordionExample">
              <h2 class="accordion-header mb-4 border">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseTwo">
                  <div class="d-flex card-body align-items-center justify-content-between">
                    <div class="bank-logo">
                      <img src="images/va.png" alt="Virtual Account Logo">
                    </div>
                    <div class="bank-detail">
                      Virtual Account
                    </div>
                    <div class="icon-chevron-right">
                      <!-- @include('icons.chevron-right') -->
                    </div>
                  </div>
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Virtual Account Number: 8321066202400048 <br>
                  Account Holder Name: Telkom University <br>
                  Description: ICICYTA 2024 <br>
                  Bank Name: Bank Negara Indonesia (BNI) <br>
                  Bank Branch: Perintis Kemerdekaan
                </div>
              </div>
              <h2 class="accordion-header mb-4 border">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  <div class="d-flex card-body align-items-center justify-content-between">
                    <div class="bank-logo">
                      <img src="images/bank-tf.png" alt="Virtual Account Logo">
                    </div>
                    <div class="bank-detail">
                      Bank Transfer
                    </div>
                    <div class="icon-chevron-right">
                      <!-- @include('icons.chevron-right') -->
                    </div>
                  </div>
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Bank Name: Bank Mandiri <br>
                  Swift Code: BMRIIDJA <br>
                  Beneficiary name/Recipient name: Universitas Telkom <br>
                  Beneficiary Bank Account No: 1310095019917 <br>
                  Branch: Bank Mandiri KCP Bandung Martadinata <br>
                  Bank Address: Jl. R.E. Martadinata No.103. Kota Bandung, Jawa Barat, Indonesia 40115 City: Bandung <br>
                  Country: Indonesia
                </div>
              </div>
              <h2 class="accordion-header mb-4 border">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  <div class="d-flex card-body align-items-center justify-content-between">
                    <div class="bank-logo">
                      <img src="images/paypal.png" alt="Virtual Account Logo">
                    </div>
                    <div class="bank-detail">
                      Paypal
                    </div>
                    <div class="icon-chevron-right">
                      <!-- @include('icons.chevron-right') -->
                    </div>
                  </div>
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Email: harry.gunawan.putu@gmail.com <br>
                  Additional Important Information: <br>

                  Please transfer the full registration fee plus 5% PayPal Currency conversion fees to our account. <br>
                  Please note that the fee must be transferred under the registrant's name and should be stated clearly on the payment slip. <br>
                  Please include the paper ID information on the payment slip.
                </div>
              </div>
            </div>
            <div class="d-flex justify-content-center mt-4 mb-1">
              <a class="btn btn-main" href="#" role="button">Registration Link</a>
            </div>
          </div>
        </div>

        <h6 class="mt-4">Payments marked * Include One Day Tour Voucher <br> If you require any price waiver, please feel free to get in touch with us <br>
          at icicyta@telkomuniversity.ac.id <br><br>
          For participants only <br> Please send proof of payment and full name to icicyta@telkomuniversity.ac.id</h6 class="mt-3">
      </div>
    </div>
  </div>
</section>

<section id="commitee" class="commitee">
  <div class="container">
    <h1 class="title-commitee text-center mb-4 pt-5">
      Commitee
    </h1>
    <div class="row">
      <div class="col-md-6 mb-4">
        <div class="accordion" id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                Steering Committee
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 mb-4">
        <div class="accordion" id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                General Chairs
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 mb-4">
        <div class="accordion" id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Track Chair
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 mb-4">
        <div class="accordion" id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                Technical Program Committee Chair
              </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 mb-4">
        <div class="accordion" id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                Program Committee
              </button>
            </h2>
            <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 mb-4">
        <div class="accordion" id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                Technical Program Committee Members
              </button>
            </h2>
            <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
  AOS.init();
</script>
@stop