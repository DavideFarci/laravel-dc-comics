@extends('layout.base')

@section('contents')
    <h1>Add new comic card</h1>

    {{-- il metodo old() fa in modo che se si verifica un errore in un qualsiasi input il form non venga ripulito --}}
    <form method="POST" action="{{ route('comics.store') }}">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title')}}" value="{{ old('title')}}">
            {{-- da aggiungere per avere il messaggio di errore nel singolo input --}}
            <div class="invalid-feedback">
                @error('title') {{ $message }} @enderror
            </div>
        </div>

        <div class="mb-3">
            <label for="thumb" class="form-label">thumb</label>
            <input type="text" class="form-control" id="thumb" name="thumb" value="{{ old('thumb')}}">
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">type</label>
            <input type="text" class="form-control" id="type" name="type" value="{{ old('type')}}">
        </div>

        <div class="mb-3">
            <label for="series" class="form-label">series</label>
            <input type="text" class="form-control" id="series" name="series" value="{{ old('series')}}">
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">price</label>
            <input type="text" class="form-control" id="price" name="price" value="{{ old('price')}}">
        </div>

        <div class="mb-3">
            <label for="sale_date" class="form-label">sale_date</label>
            <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{ old('sale_date')}}">
        </div>


        <div class="mb-3">
            <label for="description" class="form-label">description</label>
            <textarea class="form-control" id="description" rows="3" name="description" value="{{ old('description')}}"></textarea>
        </div>

        <button class="btn btn-primary">Submit</button>
    </form>
@endsection