@extends('layouts.dashboard')

@section('content')

<div class="container">
  <h1 class="display-4">Edit Registration Fee Bank Account</h1>
  <hr>
  <h3>Edit Bank Account</h3>
  <hr>
  <form action="{{ route('bank-account.update', $account->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="mb-3">
      <label for="InputImage" class="form-label">Image</label>
      @if($account->image)
      <div class="mb-2">
        <img src="{{ asset('storage/' . $account->image) }}" alt="Current Image" style="width: 100px;">
      </div>
      @endif
      <input class="form-control" type="file" id="InputImage" name="image">
    </div>

    <div class="mb-3">
      <label for="paymentMethode" class="form-label">Payment Methode</label>
      <input type="text" class="form-control" id="paymentMethode" name="payment_method" value="{{ old('payment_method', $account->payment_method) }}">
    </div>

    <div class="mb-3">
      <label for="description" class="form-label">Description</label>
      <input id="description" type="hidden" name="description" value="{{ old('description', $account->description) }}">
      <trix-editor input="description" id="editor"></trix-editor>
    </div>

    <div class="d-grid gap-2 d-md-block">
      <a href="{{ route('registration') }}" class="btn btn-secondary">Back</a>
      <button class="btn btn-primary" type="submit">Submit</button>
    </div>
  </form>
</div>

@stop