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
                        <div class="row justify-content-md-center pb-2 my-3 link-dark text-decoration-none">
                            <div class="col-lg-2 custom_center_all">
                                <a class="mt-3" data-bs-toggle="modal" data-bs-target="#profilePictureModal">
                                    <img src="{{ URL::asset(auth()->user()->profile_picture)}}" alt="profile picture" class="img-thumbnail rounded thumbnail-box-shadow "/>
                                </a>
                                <div class="fs-6 mt-5 custom_center_all"><a data-bs-toggle="modal" data-bs-target="#resumeModal" onclick="showResume()" class="btn btn-outline-secondary rounded border border-5 bold">Resume</a> </div>
                            </div>
                            <div class="col-lg-10">
                                <div class="custom_end_all"> <a data-bs-toggle="modal" data-bs-target="#editProfileModal" class="btn btn-outline-secondary py-1"><i class="fas fa-edit"></i> Edit </a> </div>
                                <div class="table-responsive border border-3" style="overflow: hidden;">
                                <table class="table table-sm table-hover p-2 m-1">
                                    <thead>
                                        <tr></tr>
                                    </thead>
                                    <tbody>
                                        <tr></tr>
                                        <tr>
                                            <th scope="row" style="width:200px;">Username</th>
                                            <td scope="col" class="fs-6">: {{auth()->user()->name}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="width:200px;">Email</th>
                                            <td scope="col" class="fs-6">: {{auth()->user()->email}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="width:200px;">Phone Number</th>
                                            <td scope="col" class="fs-6">: {{auth()->user()->phone_num}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="width:200px;">Address</th>
                                            <td scope="col" class="fs-6">: {{auth()->user()->address1}} {{auth()->user()->address2}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="width:200px;">Post Code</th>
                                            <td scope="col" class="fs-6">: {{auth()->user()->postcode}} {{auth()->user()->city}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="width:200px;">State</th>
                                            <td scope="col" class="fs-6">: {{auth()->user()->state}} {{auth()->user()->country}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="row py-3">
                    <div class="col-sm-6">
                        <div class="fs-5">Academics</div>
                    </div>
                    <div class="col-sm-6">
                        <div class="fs-5">Skills</div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</div>
@include('modals.dashboard_modals')
@include('users.dashboard.modals.edit')
@endsection
