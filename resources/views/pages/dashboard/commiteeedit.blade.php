@extends('layouts.dashboard')

@section('content')

<div class="container">
  <h1 class="display-4">Edit Commitee Content</h1>
  <hr>
  <h3>Edit Commitee Content</h3>
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
    <div class="d-grid gap-2 d-md-block">
      <button class="btn btn-primary" type="button">Back</button>
      <button class="btn btn-primary" type="submit">Submit</button>
    </div>
  </form>
</div>

@stop