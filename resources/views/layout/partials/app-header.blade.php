<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="index.html">Ivhobe Inn</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="{{ route('site.index') }}" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="{{ route('site.index') }}#services" class="nav-link">Amenities</a></li>
                <li class="nav-item"><a href="{{ route('site.index') }}#rooms" class="nav-link">Rooms</a></li>
                <li class="nav-item"><a href="{{ route('site.index') }}#policy" class="nav-link">Policy</a></li>
                <li class="nav-item"><a href="{{ route('site.about') }}" class="nav-link">About Us</a></li>
                <li class="nav-item"><a href="{{ route('site.book') }}" class="nav-link">Book Now</a></li>
            </ul>
        </div>
    </div>
</nav>
