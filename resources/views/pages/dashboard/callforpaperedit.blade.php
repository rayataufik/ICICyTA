@extends('layouts.dashboard')

@section('content')

<div class="container">
  <h1 class="display-4">Edit Content Call For Papers</h1>
  <hr>
  <div id="AddContent" class="tabcontent mt-3">
    <h3>Edit Content</h3>
    <hr>
    <form action="">
      <div class="mb-3">
        <label for="InputTitle" class="form-label">Title</label>
        <input type="text" class="form-control" id="InputTitleContent">
      </div>
      <div class="mb-3">
        <input id="x" type="hidden" name="content">
        <trix-editor input="x" id="editorContent"></trix-editor>
      </div>
      <div class="d-grid gap-2 d-md-block">
        <button class="btn btn-primary" type="button">Back</button>
        <button class="btn btn-primary" type="submit">Submit</button>
      </div>
    </form>
  </div>
</div>

@stop