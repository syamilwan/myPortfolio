<form action="" method="POST">
    <div class="modal-body">
        @csrf
        <label for="institute">Institute</label> 
            <input id="institute" name="institute" type="text">
        <label for="edu_stage">Stage</label> 
            <input id="edu_stage" name="edu_stage" type="text">
        <label for="edu_field">Study Field</label> 
            <input id="edu_field" name="edu_field" type="text">
        <label for="start_date">Start Date</label> 
            <input id="start_date" name="start_date" type="date">
        <label for="end_date">End Date</label> 
            <input id="end_date" name="end_date" type="date">
    </div>
    <div class="custom_end_all"> <div class="inline_display">
        <input type="submit" value="Submit" class="btn btn-outline-success">
        <a type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Cancel</a>
    </div> </div>
</form>
