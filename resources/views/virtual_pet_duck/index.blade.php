  @extends('layouts.app')

@section('content')
    {{$ducks}}

    <div>
        <h1>My virtual pet duck</h1>
        @foreach($ducks as $duck)

        <p>Name: {{ $duck->name }}</p>
        <p>Hunger level: {{ $duck->hunger }}</p>
    @endforeach
    </div>

@endsection
