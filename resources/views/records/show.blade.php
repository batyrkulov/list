@extends('app')

@section('title', 'All records')

@section('content')
    @parent
    <div class="jumbotron">
        <p class="lead">{{ $record->text }}</p>
        <hr class="my-4">
        <a class="btn btn-primary btn-lg" href="/" role="button">Back</a>
    </div>
@endsection
