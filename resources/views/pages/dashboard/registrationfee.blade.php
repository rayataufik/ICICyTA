@extends('layouts.dashboard')

@section('content')

<div class="container">
  <h1 class="display-4">Registration Fee</h1>
  <hr>
  <div class="tabs">
    <ul class="nav nav-tabs">
      <li class="nav-item">
        <a class="nav-link tablinks" href="#" onclick="openContent(event, 'List')">List Registration Fee</a>
      </li>
      <li class="nav-item">
        <a class="nav-link tablinks" href="#" onclick="openContent(event, 'ListBank')">List Bank Account</a>
      </li>
      <li class="nav-item">
        <a class="nav-link tablinks" href="#" onclick="openContent(event, 'AddBank')">Add Bank Account</a>
      </li>
      <li class="nav-item">
        <a class="nav-link tablinks" href="#" onclick="openContent(event, 'RegistLink')">Registration Link</a>
      </li>
    </ul>
  </div>

  <div id="List" class="tabcontent mt-3">
    <h3>List Registration Fee</h3>
    <hr>
    <form>
      <div class="mb-3">
        <label for="type" class="form-label">Type</label>
        <input type="text" class="form-control" id="type">
      </div>
      <div class="row">
        <div class="col input-group mb-3">
          <div class="input-group-text">$</div>
          <input type="number" class="form-control" id="priceUSD" placeholder="Price USD">
        </div>
        <div class="col input-group mb-3">
          <div class="input-group-text">Rp</div>
          <input type="number" class="form-control" id="priceIDR" placeholder="Price IDR">
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <h3 class="mt-4">Registration Fee</h3>
    <hr>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Type</th>
          <th scope="col">Price USD</th>
          <th scope="col">Price IDR</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Regular</td>
          <td>$100</td>
          <td>Rp. 1.500.000</td>
          <td><span class="badge text-bg-danger">Delete</span>
          </td>
        </tr>
      </tbody>
    </table>
  </div>

  <div id="ListBank" class="tabcontent mt-3">
    <h3>List Bank Account</h3>
    <hr>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Image</th>
          <th scope="col">Payment Methode</th>
          <th scope="col">Description</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td><img src="/images/bank-tf.png" class="card-img-top" alt="..." style="width: 50px;"></td>
          <td>Bank Transfer</td>
          <td>Lorem ipsum dolor sit amet.</td>
          <td>
            <a href="/dashboard/registration/bank-account/edit" class="badge text-bg-warning me-2">Edit</a>
            <a href="/delete/speaker" class="badge text-bg-danger" onclick="return confirm('Are you sure you want to delete this item?')">Delete</a>
          </td>
        </tr>
      </tbody>
    </table>
  </div>

  <div id="AddBank" class="tabcontent mt-3">
    <h3>Add Bank Account</h3>
    <hr>
    <form>
      <div class="mb-3">
        <label for="paymentMethode" class="form-label">Payment Methode</label>
        <input type="text" class="form-control" id="paymentMethode">
      </div>
      <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <input id="description" type="hidden" name="content">
        <trix-editor input="description" id="editor"></trix-editor>
      </div>
      <div class="mb-3">
        <label for="InputImage" class="form-label">Image</label>
        <input class="form-control" type="file" id="InputImage">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>

  <div id="RegistLink" class="tabcontent mt-3">
    <h3>Registration Link</h3>
    <hr>
    <form>
      <div class="mb-3">
        <div class="row">
          <div class="col-md-4 col-sm-12 d-flex flex-column flex-sm-row">
            <input type="text" class="form-control me-3 mb-2 mb-sm-0" id="InputLink" disabled>
            <div class="d-flex">
              <button type="button" class="btn btn-success me-2" onclick="enableInput('InputLink', 'submitLink')">Edit</button>
              <button type="submit" class="btn btn-primary" id="submitLink" disabled>Submit</button>
            </div>
          </div>
        </div>
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