@extends('layouts.app')

@section('content')
    <div class="container my-5 py-4 text-center">
        <div class="d-flex justify-content-center space-between border-bottom">
            <a href="/" class="d-flex align-items-center pb-2 my-3 link-dark text-decoration-none">
                <img class="rounded-circle thumbnail-box-shadow" src="{{ URL::asset('image/default-profile-pic.jpg')}}" alt="profile picture" width="120" height="120"/> 
                <span class="fs-1 fw-semibold">&nbsp; Hi!</span>
            </a>
        </div>
        <br><span class="fs-5 fw-semibold">Dashboard</span>

    </div>
@endsection
