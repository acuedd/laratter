@extends("layouts.app")

@section("content")
    <div class="title m-b-md">
        Laratter by <a href="http://platzi.com">platzi</a> 
    </div>

    @if (isset($teacher))
    <p>Profesor:: {{$teacher}} </p>
    @else
    <p>Profesor a definir</p>
    @endif

    <div class="links">
        @foreach ($links as $link => $texto)
        <a href="{{$link}}">{{$texto}}</a>
        @endforeach
    </div>
@endsection