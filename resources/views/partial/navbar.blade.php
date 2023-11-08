<nav class="navbar navbar-expand-lg bg-dark border-dark fixed-top" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="/images/gosyen_logo.png" alt="Gosyen Logo" width="55" height="55"
                class="d-inline-block align-text-top">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'home' ? 'active' : '' }}" aria-current="page"
                        href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'services' ? 'active' : '' }}" href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'our_teams' ? 'active' : '' }}" href="/teams">Our Teams</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'our_clients' ? 'active' : '' }}" href="#">Our Clients</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'galeries' ? 'active' : '' }}" href="#">Galeries</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
