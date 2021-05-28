<div class="p-3 vh-100">
    <a href="/" class="d-flex align-items-center pb-3 mb-3 link-dark text-decoration-none border-bottom">
        <img src="{{ URL::asset('image/logo.ico')}}" class="bi me-2" width="24" height="24"/>
        <span class="fs-5 fw-semibold">My Portfolio</span>
    </a>
    <ul class="list-unstyled ps-0">
        @include('layouts.sidebar_upper_menu')
    </ul>
    <ul class="list-unstyled ps-0" style="position: sticky; top: calc( 100vh - 100px );">
        @include('layouts.sidebar_lower_menu')
    </ul>
</div>