@extends('layout.layout')

@section('content')
    <div class="container mt-5 d-flex justify-content-center">
        <div class="col-md-6 p-4" style="background: rgba(255, 255, 255, 0.9); border-radius: 12px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
            <h3 class="text-center fw-bold text-dark mb-4">Login User</h3>

            @if (session('error'))
                <div class="alert alert-danger rounded-pill text-center mb-3">
                    <strong>{{ session('error') }}</strong>
                </div>
            @endif

            <form action="{{ route('doLogin') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control rounded-pill px-3" placeholder="Email" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="password" class="form-control rounded-pill px-3" placeholder="Password" required>
                </div>
                <button type="submit" class="btn btn-dark rounded-pill w-100">Log In</button>
            </form>
        </div>
    </div>
@endsection
