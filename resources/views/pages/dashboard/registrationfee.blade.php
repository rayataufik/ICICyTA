@extends('layouts.dashboard')

@section('content')

<div class="container">
  <h1 class="display-4">Registration Fee</h1>
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
    <form action="{{ route('registration.store') }}" method="POST">
      @csrf
      <div class="mb-3">
        <label for="type" class="form-label">Type</label>
        <input type="text" class="form-control" id="type" name="type">
      </div>
      <div class="row">
        <div class="col input-group mb-3">
          <div class="input-group-text">$</div>
          <input type="number" class="form-control" id="priceUSD" placeholder="Price USD" name="price_usd">
        </div>
        <div class="col input-group mb-3">
          <div class="input-group-text">Rp</div>
          <input type="number" class="form-control" id="priceIDR" placeholder="Price IDR" name="price_idr">
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
        @foreach ($fees as $index => $fee)
        <tr>
          <th scope="row">{{ $index + 1 }}</th>
          <td>{{ $fee->type }}</td>
          <td>${{ number_format($fee->price_usd, 2) }}</td>
          <td>Rp. {{ number_format($fee->price_idr, 0, ',', '.') }}</td>
          <td>
            <form action="{{ route('registration.delete', $fee->id) }}" method="POST" style="display: inline;">
              @csrf
              @method('DELETE')
              <button type="button" class="badge text-bg-danger" data-bs-toggle="modal" data-bs-target="#{{$fee->id}}">Delete</button>
              <div class="modal fade" id="{{$fee->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
        @foreach ($accounts as $index => $account)
        <tr>
          <th scope="row">{{ $index + 1 }}</th>
          <td>
            @if($account->image)
            <img src="{{ asset('storage/' . $account->image) }}" class="card-img-top" alt="Bank Image" style="width: 50px;">
            @else
            <img src="/images/default-bank.png" class="card-img-top" alt="Default Image" style="width: 50px;">
            @endif
          </td>
          <td>{{ $account->payment_method }}</td>
          <td>{!! $account->description !!}</td>
          <td>
            <a href="{{ route('registration.bank-account.edit', $account->id) }}" class="badge text-bg-warning me-2">Edit</a>
            <form action="{{ route('registration.bank-account.delete', $account->id) }}" method="POST" style="display:inline;">
              @csrf
              @method('DELETE')
              <button type="button" class="badge text-bg-danger" data-bs-toggle="modal" data-bs-target="#modal{{$account->id}}">Delete</button>
              <div class="modal fade" id="modal{{$account->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

  <div id="AddBank" class="tabcontent mt-3">
    <h3>Add Bank Account</h3>
    <hr>
    <form action="{{ route('registration.bank-account.store') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="mb-3">
        <label for="paymentMethode" class="form-label">Payment Methode</label>
        <input type="text" class="form-control" id="paymentMethode" name="payment_method">
      </div>
      <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <input id="description" type="hidden" name="description">
        <trix-editor input="description" id="editor"></trix-editor>
      </div>
      <div class="mb-3">
        <label for="InputImage" class="form-label">Image</label>
        <input class="form-control" type="file" id="InputImage" name="image">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>

  <div id="RegistLink" class="tabcontent mt-3">
    <h3>Registration Link</h3>
    <hr>
    <form action="{{ route('registration.link.store-or-update') }}" method="POST">
      @csrf
      <div class="mb-3">
        <div class="row">
          <div class="col-md-4 col-sm-12 d-flex flex-column flex-sm-row">
            <input type="text" class="form-control me-3 mb-2 mb-sm-0" name="link" id="InputLink" value="{{ $registrationLink->link ?? '' }}" disabled>
            <div class="d-flex">
              <button type="button" class="btn btn-success me-2" onclick="enableInput('InputLink', 'submitLink')">Edit</button>
              <button type="submit" class="btn btn-primary" id="submitLink" disabled>Submit</button>
            </div>
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