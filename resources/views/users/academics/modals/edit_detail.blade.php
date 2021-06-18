<form action="/academic/detail/edit/update" method="POST">
    <div class="modal-body">
        @method('PUT')
        @csrf
        <input hidden name="id" value="{{$academic->id}}">
        <input hidden name="user_id" value="{{$academic->user_id}}">
        <label for="institute">Institute</label> 
            <input id="institute" name="institute" type="text" value="{{$academic->institute}}">
        <label for="edu_stage">Stage</label> 
            <input id="edu_stage" name="edu_stage" type="text" value="{{$academic->edu_stage}}">
        <label for="edu_field">Study Field</label> 
            <input id="edu_field" name="edu_field" type="text" value="{{$academic->edu_field}}">
        <label for="start_date">Start Date</label> 
            <input id="start_date" name="start_date" type="date" value="{{$academic->start_date}}">
        <label for="end_date">End Date</label> 
            <input id="end_date" name="end_date" type="date" value="{{$academic->end_date}}">
    </div>
    <div class="modal-footer">
        <input type="submit" value="Submit" class="btn btn-outline-success">
        <a type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</a>
    </div>
</form>