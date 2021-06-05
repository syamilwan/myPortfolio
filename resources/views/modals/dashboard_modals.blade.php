<!-- Profile Picture modal -->
<div class="modal fade" id="profilePictureModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-centered">
	<div class="modal-content bg-light">
	<div class="modal-header">
		<h5 class="modal-title" id="exampleModalLabel">Profile Picture</h5>
		<a type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></a>
	</div>

	<form action="/uploadProfilePicture" method="POST" enctype="multipart/form-data">
		@csrf
		<div class="modal-body">
			<div class="d-flex justify-content-center"><img src="{{ URL::asset(auth()->user()->profile_picture)}}" alt="profile picture"/></div><br/>
			<div class="d-flex justify-content-center"><input type="file" name="profilePicture"></div>
		</div>
		<div class="modal-footer">
			<input type="submit" name="Change" class="btn btn-outline-success">
			<a type="button" data-bs-dismiss="modal" class="btn btn-secondary">Close</a>
		</div>
	</form>
	</div>
</div>
</div>
