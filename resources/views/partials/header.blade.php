<header>
    <div class="container d-flex align-items-center justify-content-between py-3">
        <h1 class="mb-0">Laravel Movies</h1>
        <ul class="d-flex align-items-center gap-4 ">
            <li>
                <a class="{{ Route::currentRouteName() == 'home' ? 'active_li' : '' }}"
                    href="{{ route('home') }}">Home</a>
            </li>
            <li>
                <a class="{{ Route::currentRouteName() == 'toprated' ? 'active_li' : '' }}"
                    href="{{ route('toprated') }}">Top Rated</a>
            </li>
        </ul>
    </div>
</header>
