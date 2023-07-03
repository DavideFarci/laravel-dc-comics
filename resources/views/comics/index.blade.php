@extends('layout.base')

@section('contents')
    <div class="container">
        @if (session('delete_success'))
        @php $comic = session('delete_success') @endphp
        <div class="alert alert-danger">
            La pasta "{{ $comic->series }}" è stata eliminata
            <form
                action="{{ route("comics.restore", ['comic' => $comic]) }}"
                    method="post"
                    class="d-inline-block"
                >
                @csrf
                <button class="btn btn-warning">Ripristina</button>
            </form>
        </div>
        @endif

        @if (session('restore_success'))
            @php $comic = session('restore_success') @endphp
            <div class="alert alert-success">
                La comic "{{ $comic->series }}" è stata ripristinata
            </div>
        @endif
        <div class="row row-cols-3">
            @foreach ($comics as $comic)
                <div class="col mb-3">
                    {{-- <div class="card h-100">
                        <img style="width: 100%" src="{{ $comic->thumb }}" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">{{ $comic->series}}</h5>
                        </div>
                        <ul class="list-group list-group-flush">
                        <li class="list-group-item">€ {{ $comic->price}}</li>
                        <li class="list-group-item">{{ $comic->title}}</li>
                        <li class="list-group-item">{{ $comic->sale_date}}</li>
                        <li class="list-group-item">{{ $comic->type}}</li>
                        </ul>
                        <div class="card-body">
                        <a class="btn btn-primary" href="{{ route('comics.show', ['comic' => $comic->id]) }}" class="card-link">Show</a>
                        <a class="btn btn-success" href="{{ route('comics.edit', ['comic' => $comic->id]) }}" class="card-link">Edit</a>
                        <form class="d-inline-block" method="POST" action="{{ route('comics.destroy', ['comic' => $comic->id]) }}">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger">Delete</button>
                        </form>
                        </div>
                    </div> --}}
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                          <div class="col-md-4">
                            <img src="{{ $comic->thumb }}" class="img-fluid rounded-start" alt="image">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title">{{ $comic->series}}</h5>
                              <p class="card-text">{{ $comic->type}}</p>
                              <p class="card-text">{{ $comic->sale_date}}</p>
                              <p class="card-text">{{ $comic->price}}</p>
                              <p class="card-text">
                                <a class="btn btn-primary" href="{{ route('comics.show', ['comic' => $comic->id]) }}" class="card-link">Show</a>
                                <a class="btn btn-success" href="{{ route('comics.edit', ['comic' => $comic->id]) }}" class="card-link">Edit</a>
                                <form class="d-inline-block" method="POST" action="{{ route('comics.destroy', ['comic' => $comic->id]) }}">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger">Delete</button>
                                </form>
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
            @endforeach
        </div>
        {{ $comics->links() }}

    </div>
@endsection