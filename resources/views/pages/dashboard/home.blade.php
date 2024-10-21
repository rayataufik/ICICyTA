@extends('layouts.dashboard')

@section('content')
<div class="container">
  <h1 class="display-4">Hero Section</h1>
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

  <div id="Dates" class="tabcontent mt-3">
    <h3>Date & Location</h3>

    <!-- Form untuk input date -->
    <form action="">
      <label for="startDate" class="form-label mt-3">Select Date Range</label>
      <div class="row">
        <div class="col-md-6 d-flex">
          <input type="date" class="form-control me-3" id="startDate" disabled>
          <span class="align-self-center me-3">to</span>
          <input type="date" class="form-control me-3" id="endDate" disabled>
          <button type="button" class="btn btn-success me-2" onclick="enableInput('startDate', 'endDate', 'submitDate')">Edit</button>
          <button type="submit" class="btn btn-primary" id="submitDate" disabled>Submit</button>
        </div>
      </div>
    </form>

    <!-- Form untuk input location -->
    <form action="">
      <label for="InputLocation" class="form-label mt-3">Input Location</label>
      <div class="row">
        <div class="col-md-4 col-sm-12 d-flex flex-column flex-sm-row">
          <input type="text" class="form-control me-3 mb-2 mb-sm-0" id="InputLocation" disabled>
          <div class="d-flex">
            <button type="button" class="btn btn-success me-2" onclick="enableInput('InputLocation', 'submitLocation')">Edit</button>
            <button type="submit" class="btn btn-primary" id="submitLocation" disabled>Submit</button>
          </div>
        </div>
      </div>
    </form>
  </div>

  <div id="Conference" class="tabcontent mt-3">
    <h3>Conference Title</h3>
    <form action="">
      <label for="InputTitle" class="form-label mt-3">Input Title</label>
      <input id="x" type="hidden" name="content">
      <trix-editor input="x" id="editor" contenteditable="false"></trix-editor>
      <div class="mt-3">
        <button type="button" class="btn btn-success" id="editButton" onclick="enableEditor()">Edit</button>
        <button type="submit" class="btn btn-primary" id="submitButton" disabled>Submit</button>
      </div>
    </form>
  </div>

  <div id="Sponsor" class="tabcontent mt-3">
    <h3>Sponsor Image</h3>
    <form action="">
      <label for="InputImage" class="form-label mt-3">Input Sponsor Image</label>
      <div class="row">
        <div class="col-md-5 col-sm-12 d-flex flex-column flex-sm-row">
          <input type="file" class="form-control me-3 mb-2 mb-sm-0" id="InputImage" disabled>
          <div class="d-flex">
            <button type="button" class="btn btn-success me-2" onclick="enableInput('InputImage', 'submitImage')">Edit</button>
            <button type="submit" class="btn btn-primary" id="submitImage" disabled>Submit</button>
          </div>
        </div>
      </div>
    </form>
    <hr>
    <h3>List Sponsor</h3>
    <div class="row">
      <div class="col-md-3 col-sm-6">
        <div class="card text-end" style="width: 100%;">
          <img src="/images/logo-humic.png" class="card-img-top" alt="...">
          <div class="card-body">
            <a href="#" class="btn btn-danger mt-3">Delete</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="Edas" class="tabcontent mt-3">
    <h3>EDAS</h3>
    <form action="">
      <label for="InputLink" class="form-label mt-3">Input Link Edas</label>
      <div class="row">
        <div class="col-md-4 col-sm-12 d-flex flex-column flex-sm-row">
          <input type="text" class="form-control me-3 mb-2 mb-sm-0" id="InputLink" disabled>
          <div class="d-flex">
            <button type="button" class="btn btn-success me-2" onclick="enableInput('InputLink', 'submitLink')">Edit</button>
            <button type="submit" class="btn btn-primary" id="submitLink" disabled>Submit</button>
          </div>
        </div>
      </div>
    </form>
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