<div class="p-3 vh-100">
    <a href="/" class="d-flex align-items-center pb-3 mb-3 link-dark text-decoration-none border-bottom">
        <img src="{{ URL::asset('image/logo.ico')}}" class="bi me-2" width="24" height="24"/>
        <span class="fs-5 fw-semibold">My Portfolio</span>
    </a>
    <ul class="list-unstyled ps-0">
        @include('layouts.sidebar_upper_menu')
    </ul>
    <ul class="list-unstyled ps-0" style="position: sticky; top: calc( 100vh - 100px );">
        <small id="clock"></small>
        @include('layouts.sidebar_lower_menu')
    </ul>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript">
    var timestamp = '<?=time();?>';
    function updateTime(){
        $('#clock').html(Date(timestamp));
        timestamp++;
    }
    $(function(){
        setInterval(updateTime, 1000);
    });
</script>
