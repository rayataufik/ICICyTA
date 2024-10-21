@extends('layouts.dashboard')

@section('content')

<div class="container">
  <h1 class="display-4">Edit For Author Content</h1>
  <hr>
  <h3>Edit Content</h3>
  <form>
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" class="form-control" id="title">
    </div>
    <div class="mb-3">
      <label for="description" class="form-label">Description</label>
      <input id="description" type="hidden" name="description">
      <trix-editor input="description" id="editor"></trix-editor>
    </div>
    <div class="d-grid gap-2 d-md-block">
      <button class="btn btn-primary" type="button">Back</button>
      <button class="btn btn-primary" type="submit">Submit</button>
    </div>
  </form>
</div>

@stop