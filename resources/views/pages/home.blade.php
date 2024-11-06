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
          @if($heroSection)
          <div class="row">
            <div class="col-md-10">
              <h1 class="display-4">{{$heroSection->conference_title}}</h1>
            </div>
          </div>
        </div>
        <div class="event-date-time mt-3">
          <div class="location-date">
            <h6 class="event-date">
              {{ \Carbon\Carbon::parse($heroSection->start_date)->format('M d') }}-{{ \Carbon\Carbon::parse($heroSection->end_date)->format('d, Y') }}
              - {{ $heroSection->location }}
            </h6>
          </div>
          @endif
          <div class="couterdown-event">
            <h6 class="mt-3 lead">Countdown to the event:</h6>
            <div id="countdown" class="mt-3 event-time-countdown d-flex">
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
      @if($heroSection && $heroSection->sponsors->count() > 0)
      <div class="container position-absolute z-1" style="bottom: -130px; right:0; left:0;">
        <div class="mt-4 mb-5 p-4 sponsor-section text-white rounded">
          <h5 class="sponsor">Sponsored By:</h5>
          <div class="row justify-content-center sponsor-logo">
            @foreach($heroSection->sponsors as $sponsor)
            <div class="col-md-2 col text-center">
              <img class="img-fluid" src="{{ asset('storage/' . $sponsor->sponsor_image) }}" alt="Sponsor Logo">
            </div>
            @endforeach
          </div>
        </div>
      </div>
      @endif
    </div>
  </div>
</section>

<section id="about" class="about">
  <div class="bg-image position-relative" style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
    url('{{ asset('storage/' . $aboutSection->image) }}') no-repeat center center;
    background-size: cover;
    padding-top: 200px; 
    padding-bottom: 200px;">
    <div class="container text-white text-center" data-aos="fade-up">
      <div class="mt-5">
        <h1 class="title display-4">{{$aboutSection->title}}</h1>
        <div class="lead mt-3">{!! $aboutSection->description !!}</div>
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
        @if ($SpeakersSection->isNotEmpty())
        @foreach ($SpeakersSection as $speakers)
        <div class="col-md-2 col-6 mb-5">
          <div class="card card-speaker">
            <img src="{{ asset('storage/' . $speakers->image) }}" class="card-img-top" alt="...">
            <div class="text-white">
              <h5 class="card-title mt-3">{{$speakers->name}}</h5>
              <p class="card-text">{{$speakers->description}}</p>
              <a href="{{$speakers->link}}" class="stretched-link" target="_blank"></a>
            </div>
          </div>
        </div>
        @endforeach
        @endif
      </div>
    </div>
  </div>
</section>

<section id="call-for-papers" class="call-for-papers">
  <div class="call-papers d-flex justify-content-between">
    <div class="papers-left" style="flex : 1;">
      <h1 class="title">Call For Papers</h1>
      <div class="d-flex flex-column align-items-center justify-content-center p-5">
        <div class="card card-papers" data-aos="fade-up">
          <div class="card-body text-center">
            <img src="images/ikontracks.png" alt="" srcset="">
            <h2 class="mt-2 title-conference">{{ $cfps->title }}</h2>
            <div class="d-grid gap-2 d-md-block mt-3">
              <button class="btn btn-main-cfp" type="button" data-bs-toggle="modal" data-bs-target="#cfp">Download CFP</button>
              <button class="btn btn-main-cfp" type="button" data-bs-toggle="modal" data-bs-target="#cfp-tour">Download Tour Poster</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div style="flex : 1;">
      <div style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ),
          url('{{ asset('storage/' . $cfps->background_image) }}') no-repeat center;
          background-size: cover;
          padding-top: 200px; 
          padding-bottom: 200px;">
        <div class="text-white text-center papers-right" data-aos="fade-up">
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
        @foreach ($contents as $content)
        <div class="col-md-6 mb-5" data-aos="fade-up">
          <div class="card">
            <div class="card-body">
              <div class="position-absolute text-center z-1" style="top: -50px; width:fit-content; left: 50%; transform: translateX(-50%);">
                <div class="bg-title p-2 text-white rounded">
                  <img src="images/cybermed.png" alt="" style="width: 90px;">
                </div>
              </div>
              <h5 class="card-title text-center mt-4">{{ $content->title_content }}</h5>
              <div class="card-text">
                <ul>
                  @php
                  $dom = new DOMDocument();
                  $dom->loadHTML('<ul>' . $content->description_content . '</ul>', LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
                  $listItems = $dom->getElementsByTagName('li');
                  $limit = 3; // Number of items to display
                  @endphp

                  @for ($i = 0; $i < $listItems->length && $i < $limit; $i++)
                      <li>{!! $listItems->item($i)->textContent !!}</li>
                      @endfor

                      @if ($listItems->length > $limit)
                      <li>....</li>
                      @endif
                </ul>
              </div>
              <div class="text-end">
                <button type="button" class="btn btn-main" data-bs-toggle="modal" data-bs-target="#{{$content->id}}">
                  Read More
                </button>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</section>

<div class="modal fade" id="cfp" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">{{$cfps->cfp_title}}</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img src="{{ asset('storage/' . $cfps->cfp_image) }}" alt="{{$cfps->cfp_title}}" class="img-fluid">
        <div class="mt-3">
          {!! $cfps->cfp_description !!}
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="cfp-tour" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">{{$cfps->tour_title}}</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img src="{{ asset('storage/' . $cfps->tour_poster) }}" alt="{{$cfps->cfp_title}}" class="img-fluid">
      </div>
    </div>
  </div>
</div>

@foreach ($contents as $content)
<div class="modal fade" id="{{$content->id}}" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h2 class="fs-5 text-center">{{$content->title_content}}</h2>
        <p class="mt-3">{!! $content->description_content !!}</p>
      </div>
    </div>
  </div>
</div>
@endforeach

<section id="for-author" class="for-author">
  <div class="container">
    <h1 class="title text-center">
      For Authors
    </h1>
    <div class="row justify-content-center mt-5">
      <div class="col-md-10 position-relative mx-auto" data-aos="fade-up">
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
                @foreach ($ImportantDates as $importantDate)
                <tr>
                  <td>{{ $importantDate->important }}</td>
                  <td>{{ \Carbon\Carbon::parse($importantDate->date)->format('d M Y') }}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
        <div class="for-author-card row mt-4 justify-content-around">
          @foreach ($ContentAuthors as $ContentAuthor)
          <div class="col-md-6 mb-5">
            <div class="card" data-aos="fade-up">
              <div class="card-body">
                <div class="position-absolute text-center z-1" style="top: -20px; width:fit-content; left: 50%; transform: translateX(-50%);">
                  <div class="bg-title p-2 text-white rounded" style="background:#5B5195">
                    {{$ContentAuthor->title}}
                  </div>
                </div>
                <p class="card-text mt-4 mb-4">
                  {!! $ContentAuthor->description !!}
                </p>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</section>

<section id="registration" class="registration">
  <div class="container">
    <h1 class="title-registration text-center mb-4 text-white pt-5">
      Registration Fee
    </h1>
    <div class="row">
      <div class="col-md-6">
        <div class="card-fees row text-center">
          @foreach ($RegistrationFees as $RegistrationFee)
          <div class="col-md-6 mb-4">
            <div class="card card-fee text-white" data-aos="fade-up">
              <div class="card-body">
                <h5 class="card-title">{{ $RegistrationFee->type }}</h5>
                <p class="card-text">
                  IDR {{ number_format($RegistrationFee->price_idr, 0, ',', '.') }} <br>
                  USD {{ number_format($RegistrationFee->price_usd, 2) }}
                </p>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
      <div class="col-md-6">
        <div class="card" data-aos="fade-up">
          <div class="card-body">
            <p class="card-text">
              Payment should be made after acceptance by Bank Transfer to “Bank Negara Indonesia (BNI)” as below:
            </p>
            @foreach ($BankAccounts as $BankAccount)
            <div class="accordion" id="accordionBank">
              <div class="accordion-item mb-3">
                <h2 class="accordion-header" id="heading{{ $BankAccount->id }}">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $BankAccount->id }}" aria-expanded="false" aria-controls="collapse{{ $BankAccount->id }}">
                    <div class="d-flex align-items-center justify-content-between w-100">
                      <div class="bank-logo">
                        <img src="{{ asset('storage/' . $BankAccount->image) }}" alt="Virtual Account Logo" style="width: 50px;">
                      </div>
                      <div class="bank-detail">
                        {{ $BankAccount->payment_method }}
                      </div>
                      <div class="icon-chevron-right">
                        <!-- @include('icons.chevron-right') -->
                      </div>
                    </div>
                  </button>
                </h2>
                <div id="collapse{{ $BankAccount->id }}" class="accordion-collapse collapse" aria-labelledby="heading{{ $BankAccount->id }}" data-bs-parent="#accordionBank">
                  <div class="accordion-body">
                    {!! $BankAccount->description !!}
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
          <div class="d-flex justify-content-center mb-3">
            <a class="btn btn-main" href="{{ $RegistrationLink->link }}" target="_blank" role="button">Registration Link</a>
          </div>
        </div>
        <h6 class="mt-4">
          Payments marked * Include One Day Tour Voucher. <br>
          If you require any price waiver, please feel free to get in touch with us at
          <a href="mailto:icicyta@telkomuniversity.ac.id">icicyta@telkomuniversity.ac.id</a><br><br>
          For participants only: Please send proof of payment and full name to
          <a href="mailto:icicyta@telkomuniversity.ac.id">icicyta@telkomuniversity.ac.id</a>
        </h6>
      </div>
    </div>
  </div>
</section>

<section id="commitee" class="commitee">
  <div class="container">
    <h1 class="title-commitee text-center mb-4 pt-5">
      Committee
    </h1>
    <div class="row">
      @foreach ($Committees as $Committee)
      <div class="col-md-6 mb-4" data-aos="fade-up">
        <div class="accordion" id="accordion">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#{{$Committee->id}}" aria-expanded="false" aria-controls="{{$Committee->id}}">
                {{$Committee->title}}
              </button>
            </h2>
            <div id="{{$Committee->id}}" class="accordion-collapse collapse" data-bs-parent="#accordion">
              <div class="accordion-body">
                {!! $Committee->description !!}
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

<script>
  AOS.init();

  var eventStartDate = new Date("{{ $heroSection ? \Carbon\Carbon::parse($heroSection->start_date)->format('Y/m/d H:i:s') : '' }}").getTime();
  var eventEndDate = new Date("{{ $heroSection ? \Carbon\Carbon::parse($heroSection->end_date)->format('Y/m/d H:i:s') : '' }}").getTime();

  console.log("Start Date: ", new Date(eventStartDate));
  console.log("End Date: ", new Date(eventEndDate));

  var countdown = setInterval(function() {
    var now = new Date().getTime();

    var distanceToStart = eventStartDate - now;
    var distanceToEnd = eventEndDate - now;

    var days = Math.floor(distanceToStart / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distanceToStart % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distanceToStart % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distanceToStart % (1000 * 60)) / 1000);

    if (distanceToStart > 0) {
      document.getElementById("c-days").innerHTML = days + "<div class='small-text'>Days</div>";
      document.getElementById("c-hours").innerHTML = hours + "<div class='small-text'>Hours</div>";
      document.getElementById("c-minutes").innerHTML = minutes + "<div class='small-text'>Minutes</div>";
      document.getElementById("c-seconds").innerHTML = seconds + "<div class='small-text'>Seconds</div>";
    } else if (now >= eventStartDate && now <= eventEndDate) {
      clearInterval(countdown);
      document.getElementById("countdown").innerHTML = "<h1 class='display-4'>Today is The Day!</h1>";
    } else if (distanceToEnd < 0) {
      clearInterval(countdown);
      document.getElementById("countdown").innerHTML = "<h1 class='display-4'>Event has Ended</h1>";
    }
  }, 1000);
</script>
@stop