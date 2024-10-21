@extends('layouts.dashboard')

@section('content')

<div class="container">
  <h1 class="display-4">Speakers</h1>
  <hr>
  <div class="tabs">
    <ul class="nav nav-tabs">
      <li class="nav-item">
        <a class="nav-link tablinks" href="#" onclick="openContent(event, 'List')">List Speakers</a>
      </li>
      <li class="nav-item">
        <a class="nav-link tablinks" href="#" onclick="openContent(event, 'Upload')">Upload Speakers</a>
      </li>
    </ul>
  </div>

  <div id="List" class="tabcontent mt-3">
    <h3>List Speakers</h3>
    <hr>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">image</th>
          <th scope="col">Name</th>
          <th scope="col">Description</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td><img src="/images/kazutakaa.png" class="card-img-top" alt="..." style="width: 50px;"></td>
          <td>Prof. Kazutaka SHIMADA</td>
          <td>Lorem ipsum dolor sit amet.</td>
          <td>
            <a href="/dashboard/speaker/edit" class="badge text-bg-warning me-2">Edit</a>
            <a href="/delete/speaker" class="badge text-bg-danger" onclick="return confirm('Are you sure you want to delete this item?')">Delete</a>
          </td>
        </tr>
      </tbody>
    </table>
  </div>

  <div id="Upload" class="tabcontent mt-3">
    <h3>Upload Speakers</h3>
    <hr>
    <form action="">
      <div class="mb-3">
        <label for="InputName" class="form-label">Name</label>
        <input type="text" class="form-control" id="InputName">
      </div>
      <div class="mb-3">
        <label for="InputDescription" class="form-label">Description</label>
        <textarea class="form-control" id="InputDescription" rows="3"></textarea>
      </div>
      <div class="mb-3">
        <label for="InputImage" class="form-label">Image</label>
        <input class="form-control" type="file" id="InputImage">
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