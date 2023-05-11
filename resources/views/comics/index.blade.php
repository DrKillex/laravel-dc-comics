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
                    <a href="{{route('comics.edit', $comic->id)}}">modifica</a>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                        cancella
                    </button>
                    
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">sicuro di voler cancellare: {{$comic->title}}</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" value="Cancella">
                                </form>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection