@extends('welcome')


@section('content')
    <h1>{{ trans('tumba.tits') }}</h1>

    @if($errors->any())
        <ul class="list-group">
            @foreach($errors->all() as $error)
                <li class="list-group-item text-danger">{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    @foreach($images->chunk(3) as $chunk)
    <div class="row">
        @foreach($chunk as $image)
        <div class="col-md-4">
            <div class="thumbnail">
                <img height="200" width="200" src="{{ $image->path }}" alt="...">
                <div class="caption">
                    <h3>Для {{ $image->user_name }}</h3>
                    <p>{{ $image->address }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @endforeach



    <form method="post" action="{{ route('form') }}">
        <div class="form-group">
            <input type="text" class="form-control" id="path" placeholder="Путь" name="path" value="{{ old('path') }}">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="username" placeholder="Имя пользователя" name="user_name" value="{{ old('user_name') }}">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="address" placeholder="Адрес" name="address" value="{{ old('address') }}">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>

@endsection