@extends('layouts.auth')

@section('content')
    <h1>Connexion</h1>
    @if(session('error'))
        <div style="color:red">{{ session('error') }}</div>
    @endif
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" required />
        </div>
        <div class="form-group">
            <label>Mot de passe</label>
            <input type="password" name="password" required />
        </div>
        <button type="submit">Se connecter</button>
    </form>
@endsection
