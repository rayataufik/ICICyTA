@extends('layouts.dashboard')

@section('content')

<div class="container">
  <h1 class="display-4">Edit Commitee Content</h1>
  <hr>
  <h3>Edit Commitee Content</h3>
  <hr>
  <form action="{{ route('commitee.update', $committee->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
      <label for="InputTitle" class="form-label">Title</label>
      <input type="text" class="form-control" id="InputTitle" name="title" value="{{ $committee->title }}" required>
    </div>
    <div class="mb-3">
      <label for="InputDescription" class="form-label">Description</label>
      <input id="InputDescription" type="hidden" name="description" value="{{ $committee->description }}">
      <trix-editor input="InputDescription" id="editor"></trix-editor>
    </div>
    <div class="d-grid gap-2 d-md-block">
      <a href="{{ route('commitee.index') }}" class="btn btn-secondary">Back</a>
      <button class="btn btn-primary" type="submit">Submit</button>
    </div>
  </form>
</div>

@stop