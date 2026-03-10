@extends('layouts.auth')

@section('title','Login')

@section('content')

    <div class="auth-card">

        <div class="auth-header">

            <div class="auth-logo">
                SNSU
            </div>

            <h3>Sign in to your account</h3>
            <p>Enter your credentials to continue</p>

        </div>

        @if($errors->any())
            <div class="auth-error mb-3">
                <ul class="mb-0">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">

            @csrf

            <div class="auth-group">
                <label>Email</label>
                <input
                    type="email"
                    name="email"
                    value="{{ old('email') }}"
                    class="auth-input @error('email') is-invalid @enderror"
                >

                @error('email')
                <div class="auth-invalid">
                    {{ $message }}
                </div>
                @enderror

            </div>

            <div class="auth-group">
                <label>Password</label>

                <input
                    type="password"
                    name="password"
                    class="auth-input @error('password') is-invalid @enderror"
                >

                @error('password')
                <div class="auth-invalid">
                    {{ $message }}
                </div>
                @enderror

            </div>

            <button type="submit" class="auth-btn">
                Login
            </button>

        </form>

    </div>

@endsection
