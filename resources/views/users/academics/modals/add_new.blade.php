<!-- Add Academic Details modal -->
<div class="modal fade" id="addAcademicModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-centered">
	<div class="modal-content bg-light">
	<div class="modal-header">
		<h5 class="modal-title" id="exampleModalLabel">Add Academic Details</h5> 
		<a type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></a>
	</div>
    <form action="/academic/detail/add" method="POST">
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
        <div class="modal-footer">
            <input type="submit" value="Submit" class="btn btn-outline-success">
            <a type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</a>
        </div>
    </form>
    </div>
</div>
</div>
