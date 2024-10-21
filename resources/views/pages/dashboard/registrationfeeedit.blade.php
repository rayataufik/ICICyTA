@extends('layouts.dashboard')

@section('content')

<div class="container">
  <h1 class="display-4">Edit Registration Fee Bank Account</h1>
  <hr>
  <h3>Edit Bank Account</h3>
  <hr>
  <form>
    <div class="mb-3">
      <label for="InputImage" class="form-label">Image</label>
      <input class="form-control" type="file" id="InputImage">
    </div>
    <div class="mb-3">
      <label for="paymentMethode" class="form-label">Payment Methode</label>
      <input type="text" class="form-control" id="paymentMethode">
    </div>
    <div class="mb-3">
      <label for="description" class="form-label">Description</label>
      <input id="description" type="hidden" name="content">
      <trix-editor input="description" id="editor"></trix-editor>
    </div>
    <div class="d-grid gap-2 d-md-block">
      <button class="btn btn-primary" type="button">Back</button>
      <button class="btn btn-primary" type="submit">Submit</button>
    </div>
  </form>
</div>

@stop