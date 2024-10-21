@extends('layouts.dashboard')

@section('content')

<div class="container">
  <h1 class="display-4">Edit Speaker</h1>
  <hr>
  <form action="">
    <div class="mb-3">
      <label for="InputImage" class="form-label">Image</label>
      <input class="form-control" type="file" id="InputImage">
    </div>
    <div class="mb-3">
      <label for="InputName" class="form-label">Name</label>
      <input type="text" class="form-control" id="InputName">
    </div>
    <div class="mb-3">
      <label for="InputDescription" class="form-label">Description</label>
      <textarea class="form-control" id="InputDescription" rows="3"></textarea>
    </div>
    <div class="d-grid gap-2 d-md-block">
      <button class="btn btn-primary" type="button">Back</button>
      <button class="btn btn-primary" type="submit">Submit</button>
    </div>
  </form>
</div>

@stop