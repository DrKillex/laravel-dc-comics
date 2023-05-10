@extends('layout.app')

@section('main.content')
    <div class="container">
        <div class="row">
            @foreach ($comics as $comic)
            <div class="col-4">
                <div class="card mb-3">
                    <div class="card-title">
                        {{$comic->title}}
                    </div>
                    <p>{{$comic->series}}</p>
                    <p>{{$comic->price}}</p>
                    <a href="{{route('comics.show', $comic->id)}}">dettagli</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection