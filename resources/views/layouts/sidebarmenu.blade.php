<li class="mb-1">
    <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">
    Home
    </button>
    <div class="collapse show" id="home-collapse">
    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
        <li><a href="#" class="link-dark rounded">Overview</a></li>
        <li><a href="#" class="link-dark rounded">Updates</a></li>
        <li><a href="#" class="link-dark rounded">Reports</a></li>
    </ul>
    </div>
</li>
<li class="mb-1">
    <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
    Dashboard
    </button>
    <div class="collapse" id="dashboard-collapse">
    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
        <li><a href="#" class="link-dark rounded">Overview</a></li>
        <li><a href="#" class="link-dark rounded">Weekly</a></li>
        <li><a href="#" class="link-dark rounded">Monthly</a></li>
        <li><a href="#" class="link-dark rounded">Annually</a></li>
    </ul>
    </div>
</li>
<li class="mb-1">
    <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
    Orders
    </button>
    <div class="collapse" id="orders-collapse">
    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
        <li><a href="#" class="link-dark rounded">New</a></li>
        <li><a href="#" class="link-dark rounded">Processed</a></li>
        <li><a href="#" class="link-dark rounded">Shipped</a></li>
        <li><a href="#" class="link-dark rounded">Returned</a></li>
    </ul>
    </div>
</li>
<li class="border-top my-3"></li>
<li class="mb-1">
    @auth
    <button class="btn btn-toggle align-items-bottom rounded collapsed" data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
    Account
    </button>
    <div class="collapse" id="account-collapse">
        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="#" class="link-dark rounded">New...</a></li>
            <li><a href="#" class="link-dark rounded">Profile</a></li>
            <li><a href="#" class="link-dark rounded">Sign out</a></li>
        </ul>
    </div>
    @endauth
    @guest
    <button class="btn btn-toggle align-items-bottom rounded collapsed" data-bs-toggle="collapse" data-bs-target="#guest-collapse" aria-expanded="false">
    Guest
    </button>
    <div class="collapse" id="guest-collapse">
        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="#" class="link-dark rounded">Login</a></li>
            <li><a href="#" class="link-dark rounded">Register</a></li>
        </ul>
    </div>
    @endguest
</li>

<div class="form-check form-switch">
    <label class="custom-control-label" for="darkSwitch">Dark Mode</label>
    <input type="checkbox" class="form-check-input" id="darkSwitch" />
    <script src="{{ URL::asset('js/dark-mode-switch.min.js')}}"></script>
</div>