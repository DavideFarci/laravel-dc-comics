@extends('layout.base')

@section('contents')
    <h1>Add new comic card</h1>
    <form method="POST" action="{{ route('comics.store') }}">
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title">
        </div>

        <div class="mb-3">
            <label for="thumb" class="form-label">thumb</label>
            <input type="text" class="form-control" id="thumb">
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">type</label>
            <input type="text" class="form-control" id="type">
        </div>

        <div class="mb-3">
            <label for="series" class="form-label">series</label>
            <input type="text" class="form-control" id="series">
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">price</label>
            <input type="text" class="form-control" id="price">
        </div>


        <div class="mb-3">
            <label for="description" class="form-label">description</label>
            <textarea class="form-control" id="description" rows="3"></textarea>
        </div>

        <button class="btn btn-primary">Submit</button>
    </form>
@endsection