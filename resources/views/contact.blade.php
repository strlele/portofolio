@extends('layout.layout')

@section('content')

<div class="conten-contact" style="padding-top: 100px;">
    <div class="contact-form">
        <h1>Contact</h1>
        <p>Your message</p>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('contact.submit') }}" method="POST">
            @csrf
            <div class="form-group">
                <input type="text" name="name" placeholder="Name" value="{{ old('name') }}">
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <input type="email" name="email" placeholder="Email" value="{{ old('email') }}">
                @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <textarea name="message" placeholder="Message">{{ old('message') }}</textarea>
                @error('message')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn-submit">SEND</button>
        </form>
    </div>
</div>

@endsection
