@extends('layout.base')

@section('contents')
    <div class="content">
        <div class="row row-cols-3">
            @foreach ($comics as $comic)
                <div class="col">
                    <div class="card h-100">
                        <img style="width: 100%" src="{{ $comic->thumb }}" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">{{ $comic->series}}</h5>
                        {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
                        </div>
                        <ul class="list-group list-group-flush">
                        <li class="list-group-item">€ {{ $comic->price}}</li>
                        <li class="list-group-item">{{ $comic->title}}</li>
                        <li class="list-group-item">{{ $comic->sale_date}}</li>
                        <li class="list-group-item">{{ $comic->type}}</li>
                        </ul>
                        <div class="card-body">
                        <a href="{{ route('comics.show', ['comic' => $comic->id]) }}" class="card-link">Show</a>
                        <a href="#" class="card-link">Create</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection