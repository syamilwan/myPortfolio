<!-- Profile Picture modal -->
<div class="modal fade" id="profilePictureModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-centered">
	<div class="modal-content bg-light">
	<div class="modal-header">
		<h5 class="modal-title" id="exampleModalLabel">Profile Picture</h5>
		<a type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></a>
	</div>

	<form action="/changeProfilePicture" method="POST" enctype="multipart/form-data">
		@csrf
		<div class="modal-body">
			<div class="d-flex justify-content-center"><img src="{{ URL::asset(auth()->user()->profile_picture)}}" alt="profile picture"/></div><br/>
			<div class="d-flex justify-content-center"><input type="file" name="profilePicture"></div>
		</div>
		<div class="modal-footer">
			<input type="submit" value="Change" class="btn btn-outline-success">
			<a type="button" data-bs-dismiss="modal" class="btn btn-secondary">Close</a>
		</div>
	</form>
	</div>
</div>
</div>

<!-- Resume modal -->
<div class="modal fade" id="resumeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-centered">
	<div class="modal-content bg-light">
	<div class="modal-header">
		<h5 class="modal-title" id="exampleModalLabel">Resume</h5> 
		<a type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></a>
	</div>
	<div class="modal-body">
		<div id="resume"> <!-- Display --> </div>
	</div>
	<form action="/changeResume" method="POST" enctype="multipart/form-data">
	@csrf
		<div class="modal-footer">
			<div class="d-flex justify-content-center"><input type="file" name="resume" accept=".pdf"></div>
			<input type="submit" value="Change" class="btn btn-outline-success">
			<a type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</a>
		</div>
	</form>
	</div>
</div>
</div>

<script>
	function showResume(){
		@auth
			@if(!is_null(auth()->user()->resume))
			PDFObject.embed("{{ URL::asset(auth()->user()->resume) }}", "#resume", {height:"25rem"});
			@endif
		@else
			PDFObject.embed("{{ URL::asset('resume.pdf') }}", "#resume", {height:"25rem"});
		@endauth
	}
</script>