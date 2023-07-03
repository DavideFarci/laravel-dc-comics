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
        <a class="btn btn-primary" href="{{ route('comics.create') }}">Nuovo</a>
        <div class="row row-cols-3">
            @foreach ($trashedComics as $trashedComic)
                <div class="col mb-3">
                    {{-- <div class="card h-100">
                        <img style="width: 100%" src="{{ $trashedComic->thumb }}" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">{{ $trashedComic->series}}</h5>
                        </div>
                        <ul class="list-group list-group-flush">
                        <li class="list-group-item">€ {{ $trashedComic->price}}</li>
                        <li class="list-group-item">{{ $trashedComic->title}}</li>
                        <li class="list-group-item">{{ $trashedComic->sale_date}}</li>
                        <li class="list-group-item">{{ $trashedComic->type}}</li>
                        </ul>
                        <div class="card-body">
                        <a class="btn btn-primary" href="{{ route('comics.show', ['comic' => $trashedComic->id]) }}" class="card-link">Show</a>
                        <a class="btn btn-success" href="{{ route('comics.edit', ['comic' => $trashedComic->id]) }}" class="card-link">Edit</a>
                        <form class="d-inline-block" method="POST" action="{{ route('comics.destroy', ['comic' => $trashedComic->id]) }}">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger">Delete</button>
                        </form>
                        </div>
                    </div> --}}
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                          <div class="col-md-4">
                            <img src="{{ $trashedComic->thumb }}" class="img-fluid rounded-start" alt="image">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title">{{ $trashedComic->series}}</h5>
                              <p class="card-text">{{ $trashedComic->type}}</p>
                              <p class="card-text">{{ $trashedComic->sale_date}}</p>
                              <p class="card-text">{{ $trashedComic->price}}</p>
                              <p class="card-text">
                                <a class="btn btn-primary" href="{{ route('comics.show', ['comic' => $trashedComic->id]) }}" class="card-link">Show</a>
                                <a class="btn btn-success" href="{{ route('comics.edit', ['comic' => $trashedComic->id]) }}" class="card-link">Edit</a>
                                <form class="d-inline-block" method="POST" action="{{ route('comics.harddelete', ['comic' => $trashedComic->id]) }}">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger hard_delete">Delete</button>
                                </form>
                                <form class="d-inline-block" method="POST" action="{{ route('comics.restore', ['comic' => $trashedComic->id]) }}">
                                    @csrf
                                    <button class="btn btn-danger">Restore</button>
                                </form>
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
            @endforeach
        </div>
        {{ $trashedComics->links() }}

    </div>
@endsection