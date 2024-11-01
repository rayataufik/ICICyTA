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

  <form action="{{ route('footer.update', $footers->id) }}" method="post">
    @csrf
    @method('POST')
    <div id="AddVanue" class="tabcontent mt-3">
      <h3>Add Vanue</h3>
      <label for="InputLink" class="form-label mt-3">Input Link Gmaps Value</label>
      <div class="row">
        <div class="col-md-4 col-sm-12 d-flex flex-column flex-sm-row">
          <input type="text" class="form-control me-3 mb-2 mb-sm-0" id="InputLink" name="vanue_link" value="{{$footers->vanue_link}}" disabled>
          <div class="d-flex">
            <button type="button" class="btn btn-success me-2" onclick="enableInput('InputLink', 'submitLink')">Edit</button>
            <button type="submit" class="btn btn-primary" id="submitLink" disabled>Submit</button>
          </div>
        </div>
      </div>
    </div>

    <div id="AddVisitor" class="tabcontent mt-3">
      <h3>Add Visitor</h3>
      <label for="InputVisitor" class="form-label mt-3">Input Visitor Link</label>
      <div class="row">
        <div class="col-md-4 col-sm-12 d-flex flex-column flex-sm-row">
          <input type="text" class="form-control me-3 mb-2 mb-sm-0" id="InputVisitor" name="visitor_link" value="{{$footers->visitor_link}}" disabled>
          <div class="d-flex">
            <button type="button" class="btn btn-success me-2" onclick="enableInput('InputVisitor', 'submitVisitor')">Edit</button>
            <button type="submit" class="btn btn-primary" id="submitVisitor" disabled>Submit</button>
          </div>
        </div>
      </div>
    </div>

    <div id="SocialMedia" class="tabcontent mt-3">
      <h3>Social Media</h3>
      <label for="InputEmail" class="form-label mt-3">Input Email</label>
      <div class="row">
        <div class="col-md-4 col-sm-12 d-flex flex-column flex-sm-row">
          <input type="text" class="form-control me-3 mb-2 mb-sm-0" id="InputEmail" name="email" value="{{$footers->email}}" disabled>
          <div class="d-flex">
            <button type="button" class="btn btn-success me-2" onclick="enableInput('InputEmail', 'submitEmail')">Edit</button>
            <button type="submit" class="btn btn-primary" id="submitEmail" disabled>Submit</button>
          </div>
        </div>
      </div>

      <label for="InputPhone" class="form-label mt-3">Input Phone</label>
      <div class="row">
        <div class="col-md-4 col-sm-12 d-flex flex-column flex-sm-row">
          <input type="text" class="form-control me-3 mb-2 mb-sm-0" id="InputPhone" name="phone" value="{{$footers->phone}}" disabled>
          <div class="d-flex">
            <button type="button" class="btn btn-success me-2" onclick="enableInput('InputPhone', 'submitPhone')">Edit</button>
            <button type="submit" class="btn btn-primary" id="submitPhone" disabled>Submit</button>
          </div>
        </div>
      </div>

      <label for="InputLinkedin" class="form-label mt-3">Input Linkedin</label>
      <div class="row">
        <div class="col-md-4 col-sm-12 d-flex flex-column flex-sm-row">
          <input type="text" class="form-control me-3 mb-2 mb-sm-0" id="InputLinkedin" name="linkedin" value="{{$footers->linkedin}}" disabled>
          <div class="d-flex">
            <button type="button" class="btn btn-success me-2" onclick="enableInput('InputLinkedin', 'submitLinkedin')">Edit</button>
            <button type="submit" class="btn btn-primary" id="submitLinkedin" disabled>Submit</button>
          </div>
        </div>
      </div>

      <label for="InputInstagram" class="form-label mt-3">Input Instagram</label>
      <div class="row">
        <div class="col-md-4 col-sm-12 d-flex flex-column flex-sm-row">
          <input type="text" class="form-control me-3 mb-2 mb-sm-0" id="InputInstagram" name="instagram" value="{{$footers->instagram}}" disabled>
          <div class="d-flex">
            <button type="button" class="btn btn-success me-2" onclick="enableInput('InputInstagram', 'submitInstagram')">Edit</button>
            <button type="submit" class="btn btn-primary" id="submitInstagram" disabled>Submit</button>
          </div>
        </div>
      </div>

      <label for="InputFacebook" class="form-label mt-3">Input Facebook</label>
      <div class="row">
        <div class="col-md-4 col-sm-12 d-flex flex-column flex-sm-row">
          <input type="text" class="form-control me-3 mb-2 mb-sm-0" id="InputFacebook" name="facebook" value="{{$footers->facebook}}" disabled>
          <div class="d-flex">
            <button type="button" class="btn btn-success me-2" onclick="enableInput('InputFacebook', 'submitFacebook')">Edit</button>
            <button type="submit" class="btn btn-primary" id="submitFacebook" disabled>Submit</button>
          </div>
        </div>
      </div>
    </div>
  </form>

  <div id="Supporter" class="tabcontent mt-3">
    <h3>Supporter Image</h3>
    <form action="{{ route('footer.update', $footers->id) }}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('POST')
      <label for="InputImage" class="form-label mt-3">Input Supporter Image</label>
      <div class="row">
        <div class="col-md-5 col-sm-12 d-flex flex-column flex-sm-row">
          <input type="file" class="form-control me-3 mb-2 mb-sm-0" id="InputImage" name="image_supporter">
          <div class="d-flex">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>
      </div>
    </form>
    <hr>
    <h3>List Supporter</h3>
    <div class="row">
      @foreach ($footers->supporter as $supporters)
      <div class="col-md-3 col-sm-6 mb-3">
        <div class="card text-end" style="width: 100%;">
          <img src="{{ asset('storage/' . $supporters->image_supporter) }}" class="card-img-top" alt="supporters Image">
          <div class="card-body">
            <form action="{{ route('footer.deleteSupporter', $supporters->id) }}" method="POST" style="display:inline-block;">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger mt-3">Delete</button>
            </form>
          </div>
        </div>
      </div>
      @endforeach
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