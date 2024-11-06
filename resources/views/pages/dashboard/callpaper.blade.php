@extends('layouts.dashboard')

@section('content')

<div class="container mb-5">
  <h1 class="display-4">Call for Paper</h1>
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
      <li class="nav-item">
        <a class="nav-link tablinks" href="#" onclick="openContent(event, 'AddBackgroundImage')">Upload Background Image</a>
      </li>
    </ul>
  </div>

  <form action="{{ route('dashboard.callpaper.update', $callPaper->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('POST')
    <div id="Title" class="tabcontent mt-3">
      <h3>Title Call For Papers</h3>
      <label for="InputTitle" class="form-label mt-3">Input Title Call For Papers</label>
      <div class="row">
        <div class="col-md-5 d-flex">
          <input type="text" class="form-control me-3" id="InputTitle" name="title" value="{{ $callPaper->title }}" disabled>
          <button type="button" class="btn btn-success me-2" onclick="enableInput('InputTitle', 'submitLink')">Edit</button>
          <button type="submit" class="btn btn-primary" id="submitLink" disabled>Submit</button>
        </div>
      </div>
    </div>

    <div id="Description" class="tabcontent mt-3">
      <h3>Description Call For Papers</h3>
      <label for="InputDescription" class="form-label mt-3">Description Call For Papers</label>
      <input id="InputDescription" type="hidden" name="description" value="{{ $callPaper->description }}">
      <trix-editor input="InputDescription" id="editor" contenteditable="false"></trix-editor>
      <button type="button" class="btn btn-success mt-3" id="editButton" onclick="enableEditor()">Edit</button>
      <button type="submit" class="btn btn-primary mt-3" id="submitButton" disabled>Submit</button>
    </div>

    <div id="Cfp" class="tabcontent mt-3">
      <h3>CFP Call For Papers</h3>
      <div class="mb-3">
        <label for="InputTitleCfp" class="form-label">Title</label>
        <input type="text" class="form-control" id="InputTitleCfp" name="cfp_title" value="{{ $callPaper->cfp_title }}" disabled>
      </div>
      <div class=" mb-3">
        <input id="EditorCfp" type="hidden" name="cfp_description" value="{{ $callPaper->cfp_description }}">
        <trix-editor input="EditorCfp" id="editorCfp" contenteditable="false"></trix-editor>
      </div>
      <div class="mb-3">
        <label for="InputImageCfp" class="form-label">Image</label>
        <input class="form-control" type="file" id="InputImageCfp" name="cfp_image" disabled>
        @if ($callPaper->cfp_image)
        <img class="mt-2" src="{{ asset('storage/' . $callPaper->cfp_image) }}" alt="Current Image" width="300" class="mt-2">
        @endif
      </div>
      <button type="button" class="btn btn-success mt-3" onclick="enableForm('InputTitleCfp', 'InputImageCfp', 'editorCfp', 'submitButtonCfp')">Edit</button>
      <button type="submit" class="btn btn-primary mt-3" id="submitButtonCfp" disabled>Submit</button>
    </div>

    <div id="TourPoster" class="tabcontent mt-3">
      <h3>Tour Poster</h3>
      <label for="InputTitletour" class="form-label mt-3">Input Title Tour Poster</label>
      <input type="text" class="form-control me-3" id="InputTitletour" name="tour_title" value="{{ $callPaper->tour_title }}" disabled>
      <label for="InputImage" class="form-label mt-3">Upload Tour Poster</label>
      <div class="row">
        <div class="col-md-5 d-flex">
          <input type="file" class="form-control me-3" id="InputImage" name="tour_poster" disabled>
          <button type="button" class="btn btn-success me-2" onclick="enableInput('InputTitletour', 'InputImage', 'submitImage')">Edit</button>
          <button type="submit" class="btn btn-primary" id="submitImage" disabled>Submit</button>
        </div>
      </div>
      @if ($callPaper->tour_poster)
      <img class="mt-2" src="{{ asset('storage/' . $callPaper->tour_poster) }}" alt="Current Image" width="300" class="mt-2">
      @endif
    </div>

    <div id="AddContent" class="tabcontent mt-3">
      <h3>Upload Content</h3>
      <hr>
      <div class="mb-3">
        <label for="InputTitle" class="form-label">Title</label>
        <input type="text" class="form-control" id="InputTitleContent" name="title_content">
      </div>
      <div class="mb-3">
        <input id="contentDescription" type="hidden" name="description_content">
        <trix-editor input="contentDescription" id="editorContent"></trix-editor>
      </div>
      <button type="submit" class="btn btn-primary mt-3" id="submitButtonContent">Submit</button>
    </div>
  </form>

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
        @foreach ($contents as $index => $content)
        <tr>
          <th scope="row">{{ $index + 1 }}</th>
          <td>{{ $content->title_content }}</td>
          <td>{!! $content->description_content !!}</td>
          <td>
            <a href="{{ route('dashboard.callpaper.editContent', $content->id) }}" class="badge text-bg-warning me-2">Edit</a>
            <form action="{{ route('dashboard.callpaper.deleteContent', $content->id) }}" method="POST" style="display: inline;">
              @csrf
              @method('DELETE')
              <button type="button" class="badge text-bg-danger" data-bs-toggle="modal" data-bs-target="#{{$content->id}}">Delete</button>
              <div class="modal fade" id="{{$content->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      Are you sure you want to delete this content?
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Delete</button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

  <div id="AddBackgroundImage" class="tabcontent mt-3">
    <h3>Background Image</h3>
    <div class="row">
      <div class="col-md-7 d-flex">
        <form action="{{ route('dashboard.callpaper.update', $callPaper->id) }}" method="POST" enctype="multipart/form-data" class="d-flex">
          @csrf
          @method('POST')

          <div class="me-3">
            <label for="InputImage" class="form-label mt-3">Input Background Image</label>
            <input type="file" class="form-control" name="background_image" id="InputImage">
          </div>

          <div class="align-self-end">
            <button type="submit" class="btn btn-primary" id="submitImage">Submit</button>
          </div>
        </form>
      </div>
      @if ($callPaper->background_image)
      <div class="mt-3">
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <div class="card-header">
              <div class="mb-2">Image Preview</div>
              <img src="{{ asset('storage/' . $callPaper->background_image) }}" class="card-img-top" alt="Sponsor Image">
            </div>
          </div>
        </div>
      </div>
      @endif
    </div>
  </div>

</div>

<script>
  function enableInput(inputId1, inputId2, submitButtonId) {
    var input1 = document.getElementById(inputId1);
    var input2 = document.getElementById(inputId2);
    var submitButton = document.getElementById(submitButtonId);

    if (input1.disabled) {
      input1.disabled = false;
    }
    if (input2.disabled) {
      input2.disabled = false;
    }

    submitButton.disabled = false;
  }

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