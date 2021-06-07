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
                        <div class="row d-flex justify-content-center pb-2 my-3 link-dark text-decoration-none">
                            <div class="col-lg-2">
                                <a data-bs-toggle="modal" data-bs-target="#profilePictureModal" title="View Image"> <!-- buat tooltip -->
                                    <img src="{{ URL::asset(auth()->user()->profile_picture)}}" alt="profile picture" width="150" height="150" class="rounded-circle thumbnail-box-shadow mt-3"/>
                                </a>
                            </div>
                            <div class="col-lg-10">
                                    <div style="float:right;"> <a href="#" class="btn btn-outline-secondary py-0">Edit</a></div>
                                <div class="table-responsive">
                                    <table class="table table-sm">
                                        <thead>
                                            <tr></tr>
                                        </thead>
                                        <tbody>
                                            <tr></tr>
                                            <tr>
                                                <th scope="row">Username</th>
                                                <td class="fs-6">: {{auth()->user()->name}}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Email</th>
                                                <td class="fs-6">: {{auth()->user()->email}}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Address</th>
                                                <td class="fs-6">: hardcode</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Address</th>
                                                <td class="fs-6">: hardcode</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Address</th>
                                                <td class="fs-6">: hardcode</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Address</th>
                                                <td class="fs-6">: hardcode</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="fs-6 mt-4"><a data-bs-toggle="modal" data-bs-target="#resumeModal" onclick="showResume()" class="btn btn-outline-secondary rounded border border-3">Resume</a> </div>
                        </div>
                    </div>
                </div>
                <div class="row py-3">
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
