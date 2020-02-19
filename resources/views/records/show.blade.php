@extends('app')

@section('title', 'All records')

@section('content')
    @parent
    {{ $record->text }}
@endsection
