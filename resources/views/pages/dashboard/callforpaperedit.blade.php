@extends('layouts.dashboard')

@section('content')

<div class="container">
  <h1 class="display-4">Edit Content Call For Papers</h1>
  <hr>
  <div id="AddContent" class="tabcontent mt-3">
    <h3>Edit Content</h3>
    <hr>
    <form action="{{ route('dashboard.callpaper.updateContent', $content->id) }}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <div class=" mb-3">
        <label for="InputTitle" class="form-label">Title</label>
        <input type="text" class="form-control" id="InputTitleContent" name="title_content" value="{{ $content->title_content }}">
      </div>
      <div class="mb-3">
        <input id="x" type="hidden" name="description_content" value="{{ $content->description_content }}">
        <trix-editor input="x" id="editorContent"></trix-editor>
      </div>
      <div class="d-grid gap-2 d-md-block">
        <a href="{{ route('dashboard.callpaper') }}" class="btn btn-secondary">Back</a>
        <button class="btn btn-primary" type="submit">Submit</button>
      </div>
    </form>
  </div>
</div>

@stop