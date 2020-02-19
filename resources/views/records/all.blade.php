@extends('app')

@section('title', 'All records')

@section('content')
    @parent
    <div class="row">
        <div class="col-12 col-md-3 border">
            <form>
                <div class="form-group row">
                    <label for="text" class="col-sm-2 col-form-label">Text</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="text" placeholder="A new record" rows="10"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-12 col-md-6  border">
            <ul class="list-group">
                @foreach($records as $record)
                    <li class="list-group-item"><a href="/{{ $record->id }}">{{ substr($record->text, 0, 70) }}</a></li>
                @endforeach
            </ul>
        </div>
        <div class="col-12 col-md-3  border">
            <form>
                <div class="form-group row">
                    <div class="col-sm-12">
                        <input class="form-control" id="search" placeholder="Search" type="text">
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="{{ asset('js/all.js') }}"></script>
@endsection
