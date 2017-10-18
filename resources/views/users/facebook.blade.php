@extends("layouts.app")

@section("content")

    <form method="post" action="/auth/facebook/register">
        {{ csrf_field() }}
        <div class="card">
            <div class="card-block">
                <img class="img-thumbnail" src="{{ $user->avatar }}">
            </div>
            <div class="card-block">
                <div class="form-group">
                    <label for="name" class="form-control-label">Nombre</label>
                    <input type="text" class="form-control" name="name" value="{{ $user->name }}" readonly>
                </div>
                <div class="form-group">
                    <label for="email" class="form-control-label">Email</label>
                    <input type="text" class="form-control" name="email" value="{{ $user->email }}" readonly>
                </div>
                <div class="form-group">
                    <label for="username" class="form-control-label">Nombre de usuario</label>
                    <input type="text" class="form-control" name="username" value="{{ old('username') }}">
                </div>
            </div>

            <div class="card-footer">
                <button class="btn btn-primary" type="submit">Registrarse</button>
            </div>
        </div>
    </form>

@endsection