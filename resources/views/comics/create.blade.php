@extends('layout.app')

@section('main.content')

<div class="container">
    <div>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>

    <form action="{{ route('comics.store') }}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="thumb" class="form-label">thumb</label>
          <input type="text" class="form-control" id="thumb" name="thumb" value="{{ old('thumb') }}">
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">price</label>
            <input type="text" class="form-control" id="price" name="price" value="{{ old('price') }}">
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">series</label>
            <input type="text" class="form-control" id="series" name="series" value="{{ old('series') }}">
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">sale_date</label>
            <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{ old('sale_date') }}">
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">type</label>
            <input type="text" class="form-control" id="type" name="type" value="{{ old('type') }}">
        </div>
        <div class="mb-3">
            <label for="artists" class="form-label">artists</label>
            <textarea class="form-control" id="artists" rows="3" name="artists">{{ old('artists') }}</textarea>
        </div>
        <div class="mb-3">
            <label for="writers" class="form-label">writers</label>
            <textarea class="form-control" id="writers" rows="3" name="writers">{{ old('writers') }}</textarea>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">description</label>
            <textarea class="form-control" id="description" rows="3" name="description">{{ old('description') }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>




</div>

@endsection