@extends('layouts.app')

@section('content')
    <div class="container my-5 py-4 text-center">
        <div class="d-flex justify-content-center space-between border-bottom">
            <div class="d-flex align-items-center pb-2 my-3 link-dark text-decoration-none">
                <a data-bs-toggle="modal" data-bs-target="#profilePictureModal" title="View Image"> <!-- buat tooltip -->
                @auth
                    <img class="rounded-circle thumbnail-box-shadow" src="{{ URL::asset(auth()->user()->profile_picture)}}" alt="profile picture" width="120" height="120"/>
                @else
                    <img class="rounded-circle thumbnail-box-shadow" src="{{ URL::asset('image/default-profile-pic.jpg')}}" alt="profile picture" width="120" height="120"/>
                @endauth 
                </a>
                <span class="fs-1 fw-semibold">&nbsp; Hi!</span>
            </div>
        </div>
        <br>
        <span class="fs-5 fw-semibold">
            @auth
                I'm {{ auth()->user()->name }}<sup style="font-size: 65%;">{{ auth()->id() }}</sup>, this is my Homepage.
            @else
                I'm Syamil, a fresh graduate and this is my Portfolio.
            @endauth
        </span>
        <div class="row my-2 pt-3">
            <ul class="btn-toggle-nav list-unstyled pb-1 d-inline-flex justify-content-center">
                <li><a data-bs-toggle="modal" data-bs-target="#aboutModal" class="link-dark rounded border border-3">About</a></li>
                <li><a data-bs-toggle="modal" data-bs-target="#contactModal" class="link-dark rounded border border-3">Contact</a></li>
                <li><a onclick="showResume()" data-bs-toggle="modal" data-bs-target="#resumeModal" class="link-dark rounded border border-3">Resume</a></li>
            </ul>
        </div>
    </div>
    @include('modals.home_modals')
@endsection
