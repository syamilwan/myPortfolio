@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header bg-light">
        <div class="row">
            <div class="col-sm-12">
                <div class="fs-3 fw-semibold">Academics</div>
            </div>
        </div>
    </div>
    <div class="card-body bg-white mx-3">
        <div class="fs-6" style="float:right;"><a data-bs-toggle="modal" data-bs-target="#addAcademicModal" class="btn btn-outline-secondary rounded py-0">Add New</a> </div>
        <br/>
        <div>
        <table id="academic_table_list" class="table">
            <thead>
                <tr>
                    <th>Institute</th>
                    <th>Stage</th>
                    <th>Field</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach(auth()->user()->academics as $academic)
                <tr>
                    <td>{{$academic->institute}}</td>
                    <td>{{$academic->edu_stage}}</td>
                    <td>{{$academic->edu_field}}</td>
                    <td> 
                        <a id="viewButton" data-attr="{{ route('academic.view', $academic->id) }}" class="btn btn-outline-secondary py-0"> View </a> <!-- data-bs-toggle="modal" data-bs-target="viewAcademicModal" not needed, uses jquery instead-->  
                        <a id="editButton" data-attr="{{ route('academic.edit', $academic->id) }}" class="btn btn-outline-info py-0"> Edit </a>
                        <form action="{{ route('academic.delete', $academic->id)}}" method="post">
                            @method('DELETE')
                            @csrf
                            <input type="submit" value="Delete" class="btn btn-outline-danger py-0"/>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </div>
</div>
@include('users.academics.modals.add_new')
@include('users.academics.modals.view')

<script>
    $(document).on('click', '#viewButton', function(event) {
        event.preventDefault();
        let href = $(this).attr('data-attr');
        $.ajax({
            url: href,
            // return the result
            success: function(result) {
                $('#viewAcademicModal').modal("show");
                $('#viewAcademicBody').html(result).show();
            },
            error: function(jqXHR, testStatus, error) {
                console.log(error);
                alert("Page " + href + " cannot open. Error:" + error);
                // $('#loader').hide();
            },
            timeout: 8000
        })
    });
    
    $(document).on('click', '#editButton', function(event) {
        event.preventDefault();
        let href = $(this).attr('data-attr');
        $.ajax({
            url: href,
            // return the result
            success: function(result) {
                $('#editAcademicModal').modal("show");
                $('#editAcademicBody').html(result).show();
            },
            error: function(jqXHR, testStatus, error) {
                console.log(error);
                alert("Page " + href + " cannot open. Error:" + error);
                // $('#loader').hide();
            },
            timeout: 8000
        })
    });
</script>

@endsection 