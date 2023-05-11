@extends('layout.app')

@section('main.content')
    <div class="container">
        <div class="row">
            @foreach ($comics as $comic)
                <div class="col-4">
                    <div class="card mb-3">
                        <div class="card-title">
                            {{ $comic->title }}
                        </div>
                        <p>{{ $comic->series }}</p>
                        <p>{{ $comic->price }}</p>
                        <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary btn-sm">dettagli</a>
                        <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-success btn-sm">modifica</a>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            cancella
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">CONFERMI DI VOLER CANCELLARE: {{ $comic->title }}</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
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
