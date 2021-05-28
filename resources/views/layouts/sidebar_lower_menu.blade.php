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
            <li><a href="/login" class="link-dark rounded">Login</a></li>
            <li><a href="/register" class="link-dark rounded">Register</a></li>
        </ul>
    </div>
    @endguest
    <div class="form-check form-switch">
        <label class="custom-control-label" for="darkSwitch">Dark Mode</label>
        <input type="checkbox" class="form-check-input" id="darkSwitch" />
        <script src="{{ URL::asset('js/dark-mode-switch.min.js')}}"></script>
    </div>
</li>
