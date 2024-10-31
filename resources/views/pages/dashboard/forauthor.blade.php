@extends('layouts.dashboard')

@section('content')

<div class="container">
  <h1 class="display-4">For Author</h1>
  <hr>
  <div class="tabs">
    <ul class="nav nav-tabs">
      <li class="nav-item">
        <a class="nav-link tablinks" href="#" onclick="openContent(event, 'ImportantDate')">Important Date</a>
      </li>
      <li class="nav-item">
        <a class="nav-link tablinks" href="#" onclick="openContent(event, 'ListContent')">List Content</a>
      </li>
      <li class="nav-item">
        <a class="nav-link tablinks" href="#" onclick="openContent(event, 'AddContent')">Add Content</a>
      </li>
    </ul>
  </div>

  <div id="ImportantDate" class="tabcontent mt-3">
    <h3>Add Important Date</h3>
    <form action="{{ route('important-date.store') }}" method="POST">
      @csrf
      <div class="mb-3">
        <label for="important" class="form-label">Important</label>
        <input type="text" class="form-control" id="important" name="important">
      </div>
      <div class="mb-3">
        <label for="date" class="form-label">Date</label>
        <input type="date" class="form-control" id="date" name="date">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <h3 class="mt-4">List Important Date</h3>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Important</th>
          <th scope="col">Date</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($importantDates as $index => $importantDate)
        <tr>
          <th scope="row">{{ $index + 1 }}</th>
          <td>{{ $importantDate->important }}</td>
          <td>{{ \Carbon\Carbon::parse($importantDate->date)->format('d M Y') }}</td>
          <td>
            <form action="{{ route('important-date.delete', $importantDate->id) }}" method="POST" style="display:inline-block;">
              @csrf
              @method('DELETE')
              <button type="submit" class="badge text-bg-danger" onclick="return confirm('Are you sure you want to delete this item?')">Delete</button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

  <div id="ListContent" class="tabcontent mt-3">
    <h3>List Content</h3>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Title</th>
          <th scope="col">Content</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($contents as $index => $content)
        <tr>
          <th scope="row">{{ $index + 1 }}</th>
          <td>{{ $content->title }}</td>
          <td>{!! Str::limit($content->description, 100) !!}</td>
          <td>
            <a href="{{ route('content.edit', $content->id) }}" class="badge text-bg-warning me-2">Edit</a>
            <form action="{{ route('content.delete', $content->id) }}" method="POST" style="display:inline-block;">
              @csrf
              @method('DELETE')
              <button type="submit" class="badge text-bg-danger" onclick="return confirm('Are you sure you want to delete this item?')">Delete</button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

  <div id="AddContent" class="tabcontent mt-3">
    <h3>Add Content</h3>
    <form action="{{ route('content.store') }}" method="POST">
      @csrf
      <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" id="title" name="title">
      </div>
      <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <input id="description" type="hidden" name="description">
        <trix-editor input="description" id="editor"></trix-editor>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>

</div>



<script>
  document.addEventListener("DOMContentLoaded", function() {
    openContent(null, 'ImportantDate');
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
      document.getElementById("ImportantDate").style.display = "block";
      document.getElementsByClassName("tablinks")[0].className += " active";
    }
  }
</script>
@stop