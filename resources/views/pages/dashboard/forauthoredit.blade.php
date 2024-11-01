@extends('layouts.dashboard')

@section('content')

<div class="container">
  <h1 class="display-4">Edit For Author Content</h1>
  <hr>
  <h3>Edit Content</h3>
  <form action="{{ route('for-author.content.update', $content->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" class="form-control" id="title" name="title" value="{{ $content->title }}">
    </div>
    <div class="mb-3">
      <label for="description" class="form-label">Description</label>
      <input id="description" type="hidden" name="description" value="{{ $content->description }}">
      <trix-editor input="description" id="editor"></trix-editor>
    </div>
    <a href="{{ route('for-author.index') }}" class="btn btn-secondary">Back</a>
    <button type="submit" class="btn btn-primary">Update</button>
  </form>
</div>

@stop