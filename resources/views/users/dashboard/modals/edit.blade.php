<!-- Edit Profile modal skeleton -->
<div class="modal fade" id="editProfileModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-centered">
	<div class="modal-content bg-light">
	<div class="modal-header">
		<h5 class="modal-title">Edit Profile</h5>
		<a type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></a>
	</div>
    <div class="modal-body">
        <nav class="nav nav-tabs btn-toggle-nav fw-normal pb-1 mb-3">
        <li class="nav-item pointer">
            <a id="editUserDetail" data-attr="{{ route('editUserDetail') }}" class="nav-link link-dark">User Details</a>
        </li>
        <li class="nav-item pointer">
            <a id="editProfilePicture" data-attr="{{ route('editProfilePicture') }}"  class="nav-link link-dark">Profile Picture</a>
        </li>
        <li class="nav-item pointer">
            <a id="editResume" data-attr="{{ route('editResume') }}" class="nav-link link-dark" >Resume</a>
        </li>
        </nav>
        <div id="contentBody"><!-- content from jquery--></div>
    </div>
    <div class="modal-footer">
    </div>
	</div>
</div>
</div>
@include('users.dashboard.modals.edit_js')
