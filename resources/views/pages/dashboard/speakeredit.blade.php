@extends('layouts.dashboard')

@section('content')

<div class="container">
  <h1 class="display-4">Edit Speaker</h1>
  <hr>
  <form action="{{ route('dashboard.speakers.update', $speaker->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="mb-3">
      <label for="InputImage" class="form-label">Image</label>
      <input class="form-control" type="file" id="InputImage" name="image">
      @if ($speaker->image)
      <img src="{{ asset('storage/' . $speaker->image) }}" alt="Current Image" width="100" class="mt-2">
      @endif
    </div>

    <div class="mb-3">
      <label for="InputName" class="form-label">Name</label>
      <input type="text" class="form-control" id="InputName" name="name" value="{{ $speaker->name }}" required>
    </div>

    <div class="mb-3">
      <label for="InputLink" class="form-label">Link Speaker</label>
      <input type="text" class="form-control" id="InputLink" name="link" value="{{ $speaker->link }}" required>
    </div>

    <div class="mb-3">
      <label for="InputDescription" class="form-label">Description</label>
      <textarea class="form-control" id="InputDescription" name="description" rows="3">{{ $speaker->description }}</textarea>
    </div>

    <div class="d-grid gap-2 d-md-block">
      <a href="{{ route('dashboard.speakers.index') }}" class="btn btn-secondary">Back</a>
      <button class="btn btn-primary" type="submit">Update</button>
    </div>
  </form>
</div>

@stop