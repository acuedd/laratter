@extends("layouts.app")

@section("content")
<h> {{ $user->name }} </h>
<ul class="list-unstyled">
    @foreach($follows as $follow)
        <li>
            {{ $follow->username }}
        </li>

    @endforeach
</ul>
@endsection