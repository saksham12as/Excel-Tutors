@extends('layouts.app')

@section('title', 'Home - Excel Tutors')

@section('content')
    <div class="container" style="text-align: center; padding: 40px;">
        <h1>Welcome to Excel Tutors</h1>
        <p>We provide expert tutoring services to help you excel in your studies. Join us to start your journey toward academic success.</p>
        <a href="{{ route('Signup') }}" class="btn-primary" style="margin-top: 20px;">Sign Up Now</a>
    </div>
@endsection
