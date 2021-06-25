<script>
    //default content
    $(document).ready(function(event) {
        let href = "{{URL::to('editUserDetail')}}";
        $.ajax({
            url: href,
            success: function(result) {
                $('#contentBody').html(result).show();
                $("#editUserDetail").addClass("active disabled");
                $("#editProfilePicture").removeClass("active disabled");
                $("#editResume").removeClass("active disabled");
            },
            error: function(jqXHR, testStatus, error) {
                console.log(error);
                alert("Page " + href + " cannot open. Error:" + error);
                // $('#loader').hide();
            },
            timeout: 8000
        })
    });

    //tabs content -onclick events
    $(document).on('click', '#editUserDetail', function(event) {
        event.preventDefault();
        let href = $(this).attr('data-attr');
        $.ajax({
            url: href,
            success: function(result) {
                $('#contentBody').html(result).show();
                $("#editUserDetail").addClass("active disabled");
                $("#editProfilePicture").removeClass("active disabled");
                $("#editResume").removeClass("active disabled");
            },
            error: function(jqXHR, testStatus, error) {
                console.log(error);
                alert("Page " + href + " cannot open. Error:" + error);
                // $('#loader').hide();
            },
            timeout: 8000
        })
    });
    $(document).on('click', '#editProfilePicture', function(event) {
        event.preventDefault();
        let href = $(this).attr('data-attr');
        $.ajax({
            url: href,
            success: function(result) {
                $('#contentBody').html(result).show();
                $("#editUserDetail").removeClass("active disabled");
                $("#editProfilePicture").addClass("active disabled");
                $("#editResume").removeClass("active disabled");
            },
            error: function(jqXHR, testStatus, error) {
                console.log(error);
                alert("Page " + href + " cannot open. Error:" + error);
                // $('#loader').hide();
            },
            timeout: 8000
        })
    });
    $(document).on('click', '#editResume', function(event) {
        event.preventDefault();
        let href = $(this).attr('data-attr');
        $.ajax({
            url: href,
            success: function(result) {
                $('#contentBody').html(result).show();
                PDFObject.embed("{{ URL::asset(auth()->user()->resume) }}", "#resume-pdf", {height:"15rem"});
                $("#editUserDetail").removeClass("active disabled");
                $("#editProfilePicture").removeClass("active disabled");
                $("#editResume").addClass("active disabled");
                
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
