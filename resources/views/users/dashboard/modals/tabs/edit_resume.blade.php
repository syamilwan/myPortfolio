<form action="/changeResume" method="POST" enctype="multipart/form-data">
	@csrf
    <div class="h5"> Current Resume </div>
    <div id="resume-pdf"> <!-- Display PDF --> </div><br/><br/>
    <div class="h5"> Select New Resume </div>
    <div class="d-flex justify-content-center"><input type="file" name="resume" accept=".pdf"></div>
    <div class="custom_end_all"> <div class="inline_display">
        <input type="submit" value="Submit" class="btn btn-outline-success">
        <a type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Cancel</a>
    </div> </div>
</form>