<!-- About modal -->
<div class="modal fade" id="aboutModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content bg-light">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">About</h5>
        <a type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></a>
      </div>
      <div class="modal-body">
        About me
      </div>
      <div class="modal-footer">
        <a type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</a>
      </div>
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
        <div class="container-fluid" id="resume">
          
        </div>
      </div>
      <div class="modal-footer">
        <a type="button" class="btn btn-outline-success" href="/downloadResume">Download</a>
        <a type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</a>
      </div>
    </div>
  </div>
</div>

<!-- Contact modal -->
<div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content bg-light">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Resume</h5>
        <a type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></a>
      </div>
      <div class="modal-body">
        <div class="container">
          Phone number
          email
          git
        </div>
      </div>
      <div class="modal-footer">
        <a type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</a>
      </div>
    </div>
  </div>
</div>


<script>
    PDFObject.embed("{{ URL::asset('resume.pdf')}}", "#resume", {height:"25rem"});
</script>