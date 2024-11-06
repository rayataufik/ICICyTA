@extends('layouts.dashboard')

@section('content')

<div class="container">
  <h1 class="display-4">Committee</h1>
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
        <a class="nav-link tablinks" href="#" onclick="openContent(event, 'List')">List Committee</a>
      </li>
      <li class="nav-item">
        <a class="nav-link tablinks" href="#" onclick="openContent(event, 'Add')">Add Committee</a>
      </li>
    </ul>
  </div>

  <div id="List" class="tabcontent mt-3">
    <h3>List Committee</h3>
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
        @foreach ($committees as $committee)
        <tr>
          <th scope="row">{{ $loop->iteration }}</th>
          <td>{{ $committee->title }}</td>
          <td>{!! $committee->description !!}</td>
          <td>
            <a href="{{ route('commitee.edit', $committee->id) }}" class="badge text-bg-warning me-2">Edit</a>
            <form action="{{ route('commitee.destroy', $committee->id) }}" method="POST" style="display:inline;">
              @csrf
              @method('DELETE')
              <button type="button" class="badge text-bg-danger" data-bs-toggle="modal" data-bs-target="#{{$committee->id}}">Delete</button>
              <div class="modal fade" id="{{$committee->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      Are you sure you want to delete this item?
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

  <div id="Add" class="tabcontent mt-3">
    <h3>Add Committee</h3>
    <hr>
    <form action="{{ route('commitee.store') }}" method="POST">
      @csrf
      <div class="mb-3">
        <label for="InputTitle" class="form-label">Title</label>
        <input type="text" class="form-control" id="InputTitle" name="title" required>
      </div>
      <div class="mb-3">
        <label for="InputDescription" class="form-label">Description</label>
        <input id="InputDescription" type="hidden" name="description">
        <trix-editor input="InputDescription" id="editor"></trix-editor>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>

<script>
  document.addEventListener("DOMContentLoaded", function() {
    openContent(null, 'List');
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
      document.getElementById("List").style.display = "block";
      document.getElementsByClassName("tablinks")[0].className += " active";
    }
  }
</script>
@stop