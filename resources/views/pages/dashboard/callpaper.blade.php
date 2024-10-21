@extends('layouts.dashboard')

@section('content')

<div class="container">
  <h1 class="display-4">Call for Paper</h1>
  <hr>
  <div class="tabs">
    <ul class="nav nav-tabs">
      <li class="nav-item">
        <a class="nav-link tablinks" href="#" onclick="openContent(event, 'Title')">Title</a>
      </li>
      <li class="nav-item">
        <a class="nav-link tablinks" href="#" onclick="openContent(event, 'Description')">Description</a>
      </li>
      <li class="nav-item">
        <a class="nav-link tablinks" href="#" onclick="openContent(event, 'Cfp')">CFP</a>
      </li>
      <li class="nav-item">
        <a class="nav-link tablinks" href="#" onclick="openContent(event, 'TourPoster')">Tour Poster</a>
      </li>
      <li class="nav-item">
        <a class="nav-link tablinks" href="#" onclick="openContent(event, 'ListContent')">List Content</a>
      </li>
      <li class="nav-item">
        <a class="nav-link tablinks" href="#" onclick="openContent(event, 'AddContent')">Upload Content</a>
      </li>
    </ul>
  </div>

  <div id="Title" class="tabcontent mt-3">
    <h3>Title Call For Papers</h3>
    <form action="">
      <label for="InputLink" class="form-label mt-3">Input Title Call For Papers</label>
      <div class="row">
        <div class="col-md-5 d-flex">
          <input type="text" class="form-control me-3" id="InputLink" disabled>
          <button type="button" class="btn btn-success me-2" onclick="enableInput('InputLink', 'submitLink')">Edit</button>
          <button type="submit" class="btn btn-primary" id="submitLink" disabled>Submit</button>
        </div>
      </div>
    </form>
  </div>

  <div id="Description" class="tabcontent mt-3">
    <h3>Description Call For Papers</h3>
    <form action="">
      <label for="InputTitle" class="form-label mt-3">Description Call For Papers</label>
      <input id="x" type="hidden" name="content">
      <trix-editor input="x" id="editor" contenteditable="false"></trix-editor>
      <button type="button" class="btn btn-success mt-3" id="editButton" onclick="enableEditor()">Edit</button>
      <button type="submit" class="btn btn-primary mt-3" id="submitButton" disabled>Submit</button>
    </form>
  </div>

  <div id="Cfp" class="tabcontent mt-3">
    <h3>CFP Call For Papers</h3>
    <form action="">
      <div class="mb-3">
        <label for="InputName" class="form-label">Title</label>
        <input type="text" class="form-control" id="InputNameCfp" disabled>
      </div>
      <div class="mb-3">
        <input id="x" type="hidden" name="content">
        <trix-editor input="x" id="editorCfp" contenteditable="false"></trix-editor>
      </div>
      <div class="mb-3">
        <label for="InputImage" class="form-label">Image</label>
        <input class="form-control" type="file" id="InputImageCfp" disabled>
      </div>
      <button type="button" class="btn btn-success mt-3" onclick="enableForm('InputNameCfp', 'InputImageCfp', 'editorCfp', 'submitButtonCfp')">Edit</button>
      <button type="submit" class="btn btn-primary mt-3" id="submitButtonCfp" disabled>Submit</button>
    </form>
  </div>

  <div id="TourPoster" class="tabcontent mt-3">
    <h3>Tour Poster</h3>
    <form action="">
      <label for="InputImage" class="form-label mt-3">Upload Tour Poster</label>
      <div class="row">
        <div class="col-md-5 d-flex">
          <input type="file" class="form-control me-3" id="InputImage" disabled>
          <button type="button" class="btn btn-success me-2" onclick="enableInput('InputImage', 'submitImage')">Edit</button>
          <button type="submit" class="btn btn-primary" id="submitImage" disabled>Submit</button>
        </div>
      </div>
    </form>
  </div>

  <div id="ListContent" class="tabcontent mt-3">
    <h3>List Content</h3>
    <hr>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Title</th>
          <th scope="col">Description</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Cybernetics & Biomedical Engineering
          </td>
          <td>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Natus, sed?</td>
          <td>
            <a href="/dashboard/call-for-papers/content/edit" class="badge text-bg-warning me-2">Edit</a>
            <a href="/delete/speaker" class="badge text-bg-danger" onclick="return confirm('Are you sure you want to delete this item?')">Delete</a>
          </td>
        </tr>
      </tbody>
    </table>
  </div>

  <div id="AddContent" class="tabcontent mt-3">
    <h3>Upload Content</h3>
    <hr>
    <form action="">
      <div class="mb-3">
        <label for="InputTitle" class="form-label">Title</label>
        <input type="text" class="form-control" id="InputTitleContent" disabled>
      </div>
      <div class="mb-3">
        <input id="x" type="hidden" name="content">
        <trix-editor input="x" id="editorContent" contenteditable="false"></trix-editor>
      </div>
      <button type="button" class="btn btn-success mt-3" onclick="enableForm('InputTitleContent', '', 'editorContent', 'submitButtonContent')">Edit</button>
      <button type="submit" class="btn btn-primary mt-3" id="submitButtonContent" disabled>Submit</button>
    </form>
  </div>

</div>

<script>
  function enableForm(inputFieldId, fileFieldId, editorId, submitButtonId) {
    if (inputFieldId) document.getElementById(inputFieldId).disabled = false;
    if (fileFieldId) document.getElementById(fileFieldId).disabled = false;
    if (editorId) document.getElementById(editorId).setAttribute('contenteditable', true);
    document.getElementById(submitButtonId).disabled = false;
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