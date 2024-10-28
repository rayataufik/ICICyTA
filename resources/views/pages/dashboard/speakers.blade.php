@extends('layouts.dashboard')

@section('content')

<div class="container">
  <h1 class="display-4">Conference Speakers</h1>
  <hr>
  <div class="tabs">
    <ul class="nav nav-tabs">
      <li class="nav-item">
        <a class="nav-link tablinks" href="#" onclick="openContent(event, 'ListSpeakers')">List Speakers</a>
      </li>
      <li class="nav-item">
        <a class="nav-link tablinks" href="#" onclick="openContent(event, 'AddSpeaker')">Add Speaker</a>
      </li>
    </ul>
  </div>

  <!-- List Speakers -->
  <div id="ListSpeakers" class="tabcontent mt-3">
    <h3>List of Speakers</h3>
    <table class="table">
      <thead>
        <tr>
          <th>#</th>
          <th>Image</th>
          <th>Name</th>
          <th>Description</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($speakers as $index => $speaker)
        <tr>
          <td>{{ $index + 1 }}</td>
          <td><img src="{{ asset('storage/' . $speaker->image) }}" alt="Speaker Image" width="50"></td>
          <td>{{ $speaker->name }}</td>
          <td>{{ $speaker->description }}</td>
          <td>
            <a href="{{ route('dashboard.speakers.edit', $speaker->id) }}" class="badge bg-warning">Edit</a>
            <form action="{{ route('dashboard.speakers.destroy', $speaker->id) }}" method="POST" style="display:inline-block;">
              @csrf
              @method('DELETE')
              <button type="submit" class="badge bg-danger" onclick="return confirm('Are you sure?')">Delete</button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

  <!-- Add Speaker -->
  <div id="AddSpeaker" class="tabcontent mt-3">
    <h3>Add New Speaker</h3>
    <form action="{{ route('dashboard.speakers.store') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" required>
      </div>
      <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" id="description" name="description"></textarea>
      </div>
      <div class="mb-3">
        <label for="image" class="form-label">Image</label>
        <input type="file" class="form-control" id="image" name="image">
      </div>
      <button type="submit" class="btn btn-primary">Add Speaker</button>
    </form>
  </div>
</div>

<script>
  document.addEventListener("DOMContentLoaded", function() {
    openContent(null, 'ListSpeakers');
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
    document.getElementById(contentName).style.display = "block";
    if (evt) evt.currentTarget.className += " active";
  }
</script>

@endsection