@extends('layout.app')

@section('main.content')
    <div class="container">
        <div>
            <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
        </div>
        <h1>{{$comic->title}}</h1>
        <p>{{$comic->price}}</p>
        <p>{{$comic->series}}</p>
        <p>{{$comic->sale_date}}</p>
        <p>{{$comic->type}}</p>
        <p>{{$comic->artists}}</p>
        <p>{{$comic->writers}}</p>
        <p>{{$comic->description}}</p>
    </div>
@endsection