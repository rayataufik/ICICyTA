@extends('layouts.dashboard')

@section('content')

<div class="container">
  <h1 class="display-4">Commitee</h1>
  <hr>
  <div class="tabs">
    <ul class="nav nav-tabs">
      <li class="nav-item">
        <a class="nav-link tablinks" href="#" onclick="openContent(event, 'List')">List Commitee</a>
      </li>
      <li class="nav-item">
        <a class="nav-link tablinks" href="#" onclick="openContent(event, 'Add')">Add Commitee</a>
      </li>
    </ul>
  </div>

  <div id="List" class="tabcontent mt-3">
    <h3>List Commitee</h3>
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
          <td>Steering Committee</td>
          <td>Lorem ipsum dolor sit amet.</td>
          <td>
            <a href="/dashboard/commitee/content/edit" class="badge text-bg-warning me-2">Edit</a>
            <a href="/delete/speaker" class="badge text-bg-danger" onclick="return confirm('Are you sure you want to delete this item?')">Delete</a>
          </td>
        </tr>
      </tbody>
    </table>
  </div>

  <div id="Add" class="tabcontent mt-3">
    <h3>Add Commitee</h3>
    <hr>
    <form action="">
      <div class="mb-3">
        <label for="InputTitle" class="form-label">Title</label>
        <input type="text" class="form-control" id="InputTitle">
      </div>
      <div class="mb-3">
        <label for="InputDescription" class="form-label">Description</label>
        <input id="InputDescription" type="hidden" name="content">
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