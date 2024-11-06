@extends('layouts.dashboard')

@section('content')
<div class="container">
  <h1 class="display-4">About Conference</h1>
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

  <form action="{{ route('dashboard.about.update', $about->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('POST')
    <div id="Title" class="tabcontent mt-3">
      <h3>Title Conference</h3>
      <label for="InputTitle" class="form-label mt-3">Input Title Conference</label>
      <div class="row">
        <div class="col-md-5 d-flex">
          <input type="text" class="form-control me-3" name="title" id="InputTitle" value="{{ $about->title }}" disabled>
          <button type="button" class="btn btn-success me-2" onclick="enableInput('InputTitle', 'submitTitle')">Edit</button>
          <button type="submit" class="btn btn-primary" id="submitTitle" disabled>Submit</button>
        </div>
      </div>
    </div>

    <div id="Conference" class="tabcontent mt-3">
      <h3>Conference Description</h3>
      <label for="InputDescription" class="form-label mt-3">Conference Description</label>
      <input id="x" type="hidden" name="description" value="{{ $about->description }}">
      <trix-editor input="x" id="editor" contenteditable="false"></trix-editor>
      <button type="button" class="btn btn-success mt-3" id="editButton" onclick="enableEditor()">Edit</button>
      <button type="submit" class="btn btn-primary mt-3" id="submitButton" disabled>Submit</button>
    </div>
  </form>

  <div id="image-conference" class="tabcontent mt-3">
    <h3>Background Image</h3>


    <div class="row">
      <div class="col-md-7 d-flex">
        <form action="{{ route('dashboard.about.update', $about->id) }}" method="POST" enctype="multipart/form-data" class="d-flex">
          @csrf
          @method('POST')

          <div class="me-3">
            <label for="InputImage" class="form-label mt-3">Input Background Image</label>
            <input type="file" class="form-control" name="image" id="InputImage">
          </div>

          <div class="align-self-end">
            <button type="submit" class="btn btn-primary" id="submitImage">Submit</button>
          </div>
        </form>
      </div>
      @if ($about->image)
      <div class="mt-3">
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <div class="card-header">
              <div class="mb-2">Image Preview</div>
              <img src="{{ asset('storage/' . $about->image) }}" class="card-img-top" alt="Sponsor Image">
            </div>
          </div>
        </div>
      </div>
      @endif
    </div>
  </div>
</div>

<script>
  function enableInput(inputId, submitButtonId) {
    document.getElementById(inputId).disabled = false;
    document.getElementById(submitButtonId).disabled = false;
  }

  function enableEditor() {
    var editor = document.getElementById('editor');
    editor.removeAttribute('contenteditable');
    editor.setAttribute('contenteditable', true);
    document.getElementById('submitButton').disabled = false;
  }

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