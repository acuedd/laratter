<img class="img-thumbnail" src="{{$message->image}}">
<p class="card-text">
    <div class="text-muted"> Escrito por: <a href="/{{ $message->user->username }}">{{ $message->user->name  }} </div>
    {{ $message->content }}</a>
    <a href="/messages/{{ $message->id }}">
        Leer más
    </a>
</p>