<form action="/changeProfilePicture" method="POST" enctype="multipart/form-data">
		@csrf
		<div class="modal-body">
			<div class="d-flex justify-content-center"><img src="{{ URL::asset(auth()->user()->profile_picture)}}" alt="profile picture"/></div><br/>
			<div class="d-flex justify-content-center"><input type="file" name="profilePicture"></div>
		</div>
        <div class="custom_end_all"> <div class="inline_display">
            <input type="submit" value="Submit" class="btn btn-outline-success">
            <a type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Cancel</a>
        </div> </div>
	</form>