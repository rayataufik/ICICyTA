@extends('layouts.dashboard')

@section('content')
<div class="container">
  <h1 class="display-4">About Conference</h1>
  <hr>
  <div class="tabs">
    <ul class="nav nav-tabs">
      <li class="nav-item">
        <a class="nav-link tablinks" href="#" onclick="openContent(event, 'Title')">Title</a>
      </li>
      <li class="nav-item">
        <a class="nav-link tablinks" href="#" onclick="openContent(event, 'Conference')">Conference Description</a>
      </li>
      <li class="nav-item">
        <a class="nav-link tablinks" href="#" onclick="openContent(event, 'image-conference')">Background Image</a>
      </li>
    </ul>
  </div>

  <div id="Title" class="tabcontent mt-3">
    <h3>Title Conference</h3>
    <form action="">
      <label for="InputLink" class="form-label mt-3">Input Title Conference</label>
      <div class="row">
        <div class="col-md-5 d-flex">
          <input type="text" class="form-control me-3" id="InputLink" disabled>
          <button type="button" class="btn btn-success me-2" onclick="enableInput('InputLink', 'submitLink')">Edit</button>
          <button type="submit" class="btn btn-primary" id="submitLink" disabled>Submit</button>
        </div>
      </div>
    </form>
  </div>

  <div id="Conference" class="tabcontent mt-3">
    <h3>Conference Description</h3>
    <form action="">
      <label for="InputTitle" class="form-label mt-3">Conference Description</label>
      <input id="x" type="hidden" name="content">
      <trix-editor input="x" id="editor" contenteditable="false"></trix-editor>
      <button type="button" class="btn btn-success mt-3" id="editButton" onclick="enableEditor()">Edit</button>
      <button type="submit" class="btn btn-primary mt-3" id="submitButton" disabled>Submit</button>
    </form>
  </div>

  <div id="image-conference" class="tabcontent mt-3">
    <h3>Background Image</h3>
    <form action="">
      <label for="InputImage" class="form-label mt-3">Input Background Image</label>
      <div class="row">
        <div class="col-md-5 d-flex">
          <input type="file" class="form-control me-3" id="InputImage" disabled>
          <button type="button" class="btn btn-success me-2" onclick="enableInput('InputImage', 'submitImage')">Edit</button>
          <button type="submit" class="btn btn-primary" id="submitImage" disabled>Submit</button>
        </div>
      </div>
    </form>
  </div>
</div>


<script>
  document.addEventListener("DOMContentLoaded", function() {
    openContent(null, 'Title');
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
      document.getElementById("Title").style.display = "block";
      document.getElementsByClassName("tablinks")[0].className += " active";
    }
  }
</script>
@stop