@extends('layouts.dashboard')

@section('content')
<div class="container">
  <h1 class="display-4">Hero Section</h1>
  @if (session('success'))
  <div class="alert alert-success alert-dismissible fade show" role="alert" id="autoCloseAlert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>

  <script>
    setTimeout(function() {
      var alert = document.getElementById('autoCloseAlert');
      if (alert) {
        var bootstrapAlert = new bootstrap.Alert(alert);
        bootstrapAlert.close();
      }
    }, 5000);
  </script>
  @endif
  <hr>
  <div class="tabs">
    <ul class="nav nav-tabs">
      <li class="nav-item">
        <a class="nav-link tablinks" href="#" onclick="openContent(event, 'Dates')">Dates</a>
      </li>
      <li class="nav-item">
        <a class="nav-link tablinks" href="#" onclick="openContent(event, 'Conference')">Conference Title</a>
      </li>
      <li class="nav-item">
        <a class="nav-link tablinks" href="#" onclick="openContent(event, 'Sponsor')">Sponsor</a>
      </li>
      <li class="nav-item">
        <a class="nav-link tablinks" href="#" onclick="openContent(event, 'Edas')">EDAS</a>
      </li>
    </ul>
  </div>

  <form action="{{ route('dashboard.home.update', $heroSection->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('POST')

    <div id="Dates" class="tabcontent mt-3">
      <h3>Date & Location</h3>
      <label for="InputLocation" class="form-label mt-3">Input Location</label>
      <input type="text" class="form-control" name="location" id="InputLocation" value="{{ $heroSection->location }}" disabled>
      <div class="d-flex mt-3">
        <button type="button" class="btn btn-success me-2" onclick="enableInput('InputLocation', 'submitLocation')">Edit</button>
        <button type="submit" class="btn btn-primary" id="submitLocation" disabled>Submit</button>
      </div>
      <label for="startDate" class="form-label mt-3">Select Date Range</label>
      <div class="row">
        <div class="col-md-6 d-flex">
          <input type="date" class="form-control me-3" name="start_date" id="startDate" value="{{ $heroSection->start_date }}" disabled>
          <span class="align-self-center me-3">to</span>
          <input type="date" class="form-control me-3" name="end_date" id="endDate" value="{{ $heroSection->end_date }}" disabled>
          <button type="button" class="btn btn-success me-2" onclick="enableInput('startDate', 'endDate', 'submitDate')">Edit</button>
          <button type="submit" class="btn btn-primary" id="submitDate" disabled>Submit</button>
        </div>
      </div>
    </div>

    <div id="Conference" class="tabcontent mt-3">
      <h3>Conference Title</h3>
      <label for="InputTitle" class="form-label mt-3">Input Title</label>
      <input type="text" class="form-control" name="conference_title" id="InputTitle" value="{{ $heroSection->conference_title }}" disabled>
      <div class="mt-3">
        <button type="button" class="btn btn-success me-2" onclick="enableInput('InputTitle', 'submitTitle')">Edit</button>
        <button type="submit" class="btn btn-primary" id="submitTitle" disabled>Submit</button>
      </div>
    </div>

    <div id="Edas" class="tabcontent mt-3">
      <h3>EDAS</h3>
      <label for="InputLink" class="form-label">Input Link Edas</label>
      <input type="text" class="form-control" name="edas_link" id="InputLink" value="{{ $heroSection->edas_link }}" disabled>
      <div class="d-flex mt-3">
        <button type="button" class="btn btn-success me-2" onclick="enableInput('InputLink', 'submitLink')">Edit</button>
        <button type="submit" class="btn btn-primary" id="submitLink" disabled>Submit</button>
      </div>
    </div>
  </form>

  <div id="Sponsor" class="tabcontent mt-3">
    <h3>Sponsor Image</h3>
    <form action="{{ route('dashboard.home.update', $heroSection->id) }}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('POST')
      <input type="file" class="form-control me-3 mb-2 mb-sm-0" name="sponsor_image" id="InputImage">
      <div class="d-flex mt-3">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>

    <hr>
    <h3>List Sponsors</h3>
    <div class="row">
      @foreach ($heroSection->sponsors as $sponsor)
      <div class="col-md-3 col-sm-6">
        <div class="card" style="width: 100%;">
          <img src="{{ asset('storage/' . $sponsor->sponsor_image) }}" class="card-img-top" alt="Sponsor Image">
          <div class="card-body">
            <form action="{{ route('dashboard.home.deleteSponsor', $sponsor->id) }}" method="POST" style="display:inline-block;">
              @csrf
              @method('DELETE')
              <button type="button" class="btn btn-danger mt-3 text-end" data-bs-toggle="modal" data-bs-target="#{{$sponsor->id}}">Delete</button>
              <div class="modal fade" id="{{$sponsor->id}}" tabindex="-1" aria-labelledby="deleteSponsorLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      Are you sure you want to delete this sponsor?
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Delete</button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>

  <script>
    function enableInput(startInputId, endInputId, submitButtonId) {
      document.getElementById(startInputId).disabled = false;
      document.getElementById(endInputId).disabled = false;
      document.getElementById(submitButtonId).disabled = false;
    }

    document.addEventListener("DOMContentLoaded", function() {
      openContent(null, 'Dates');
    });

    function openContent(evt, contentName) {
      var i, tabcontent, tablinks;

      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }

      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
      }

      if (contentName) {
        document.getElementById(contentName).style.display = "block";

        if (evt) {
          evt.currentTarget.className += " active";
        } else {
          document.getElementsByClassName("tablinks")[0].className += " active";
        }
      } else {
        document.getElementById("Dates").style.display = "block";
        document.getElementsByClassName("tablinks")[0].className += " active";
      }
    }
  </script>
  @stop