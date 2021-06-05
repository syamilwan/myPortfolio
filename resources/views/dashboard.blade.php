@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header bg-light">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="fs-3 fw-semibold">Dashboard</div>
                    </div>
                </div>
            </div>
            <div class="card-body bg-white mx-3">
                <div class="row border-bottom pb-5">
                    <div class="col-sm-12">
                        <div class="fs-5">User Details</div>
                        <div class="row d-flex justify-content-center align-items-center pb-2 my-3 link-dark text-decoration-none">
                            <div class="col-sm-2">
                                <a data-bs-toggle="modal" data-bs-target="#profilePictureModal" title="View Image"> <!-- buat tooltip -->
                                    <img class="rounded-circle thumbnail-box-shadow" src="{{ URL::asset(auth()->user()->profile_picture)}}" alt="profile picture" width="120" height="120"/>
                                </a>
                            </div>
                            <div class="col-sm-5">
                                <div style="float:right;"> <a href="#" class="btn btn-outline-secondary py-0">Edit</a> </div>
                                <div class="fs-6">Username : {{auth()->user()->name}}</div>
                                <div class="fs-6">Email : {{auth()->user()->email}}</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row pb-5">
                    <div class="col-sm-6">
                        <div class="fs-5">Academic</div>
                    </div>
                    <div class="col-sm-6">
                        <div class="fs-5">Skills</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('modals.dashboard_modals')
@endsection
