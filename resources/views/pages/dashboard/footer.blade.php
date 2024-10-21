@extends('layouts.dashboard')

@section('content')

<div class="container">
  <h1 class="display-4">Footer</h1>
  <hr>
  <div class="tabs">
    <ul class="nav nav-tabs">
      <li class="nav-item">
        <a class="nav-link tablinks" href="#" onclick="openContent(event, 'AddVanue')">Add Vanue</a>
      </li>
      <li class="nav-item">
        <a class="nav-link tablinks" href="#" onclick="openContent(event, 'AddVisitor')">Add Visitor</a>
      </li>
      <li class="nav-item">
        <a class="nav-link tablinks" href="#" onclick="openContent(event, 'SocialMedia')">Social Media</a>
      </li>
      <li class="nav-item">
        <a class="nav-link tablinks" href="#" onclick="openContent(event, 'Supporter')">Supporter</a>
      </li>
    </ul>
  </div>

  <div id="AddVanue" class="tabcontent mt-3">
    <h3>Add Vanue</h3>
    <form action="">
      <label for="InputLink" class="form-label mt-3">Input Link Gmaps Value</label>
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

  <div id="AddVisitor" class="tabcontent mt-3">
    <h3>Add Visitor</h3>
    <form action="">
      <label for="InputVisitor" class="form-label mt-3">Input Visitor Link</label>
      <div class="row">
        <div class="col-md-4 col-sm-12 d-flex flex-column flex-sm-row">
          <input type="text" class="form-control me-3 mb-2 mb-sm-0" id="InputVisitor" disabled>
          <div class="d-flex">
            <button type="button" class="btn btn-success me-2" onclick="enableInput('InputVisitor', 'submitVisitor')">Edit</button>
            <button type="submit" class="btn btn-primary" id="submitVisitor" disabled>Submit</button>
          </div>
        </div>
      </div>
    </form>
  </div>

  <div id="SocialMedia" class="tabcontent mt-3">
    <h3>Social Media</h3>
    <form action="">
      <label for="InputEmail" class="form-label mt-3">Input Email</label>
      <div class="row">
        <div class="col-md-4 col-sm-12 d-flex flex-column flex-sm-row">
          <input type="text" class="form-control me-3 mb-2 mb-sm-0" id="InputEmail" disabled>
          <div class="d-flex">
            <button type="button" class="btn btn-success me-2" onclick="enableInput('InputEmail', 'submitEmail')">Edit</button>
            <button type="submit" class="btn btn-primary" id="submitEmail" disabled>Submit</button>
          </div>
        </div>
      </div>

      <label for="InputPhone" class="form-label mt-3">Input Phone</label>
      <div class="row">
        <div class="col-md-4 col-sm-12 d-flex flex-column flex-sm-row">
          <input type="text" class="form-control me-3 mb-2 mb-sm-0" id="InputPhone" disabled>
          <div class="d-flex">
            <button type="button" class="btn btn-success me-2" onclick="enableInput('InputPhone', 'submitPhone')">Edit</button>
            <button type="submit" class="btn btn-primary" id="submitPhone" disabled>Submit</button>
          </div>
        </div>
      </div>

      <label for="InputLinkedin" class="form-label mt-3">Input Linkedin</label>
      <div class="row">
        <div class="col-md-4 col-sm-12 d-flex flex-column flex-sm-row">
          <input type="text" class="form-control me-3 mb-2 mb-sm-0" id="InputLinkedin" disabled>
          <div class="d-flex">
            <button type="button" class="btn btn-success me-2" onclick="enableInput('InputLinkedin', 'submitLinkedin')">Edit</button>
            <button type="submit" class="btn btn-primary" id="submitLinkedin" disabled>Submit</button>
          </div>
        </div>
      </div>

      <label for="InputInstagram" class="form-label mt-3">Input Instagram</label>
      <div class="row">
        <div class="col-md-4 col-sm-12 d-flex flex-column flex-sm-row">
          <input type="text" class="form-control me-3 mb-2 mb-sm-0" id="InputInstagram" disabled>
          <div class="d-flex">
            <button type="button" class="btn btn-success me-2" onclick="enableInput('InputInstagram', 'submitInstagram')">Edit</button>
            <button type="submit" class="btn btn-primary" id="submitInstagram" disabled>Submit</button>
          </div>
        </div>
      </div>

      <label for="InputFacebook" class="form-label mt-3">Input Facebook</label>
      <div class="row">
        <div class="col-md-4 col-sm-12 d-flex flex-column flex-sm-row">
          <input type="text" class="form-control me-3 mb-2 mb-sm-0" id="InputFacebook" disabled>
          <div class="d-flex">
            <button type="button" class="btn btn-success me-2" onclick="enableInput('InputFacebook', 'submitFacebook')">Edit</button>
            <button type="submit" class="btn btn-primary" id="submitFacebook" disabled>Submit</button>
          </div>
        </div>
      </div>
    </form>
  </div>

  <div id="Supporter" class="tabcontent mt-3">
    <h3>Supporter Image</h3>
    <form action="">
      <label for="InputImage" class="form-label mt-3">Input Supporter Image</label>
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
      <div class="col-md-3 col-sm-6 mb-3">
        <div class="card text-end" style="width: 100%;">
          <img src="/images/logo-humic.png" class="card-img-top" alt="...">
          <div class="card-body">
            <a href="#" class="btn btn-danger mt-3">Delete</a>
          </div>
        </div>
      </div>
    </div>
  </div>


</div>


<script>
  document.addEventListener("DOMContentLoaded", function() {
    openContent(null, 'AddVanue');
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
      document.getElementById("AddVanue").style.display = "block";
      document.getElementsByClassName("tablinks")[0].className += " active";
    }
  }
</script>
@stop