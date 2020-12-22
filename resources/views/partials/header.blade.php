<header>
    <div class="container">
        <div class="row">
            <!-- TOP: brand logo -->
            <div id="logo" class="col-xs-12">
                <img src="{{ asset('images/logo-la-molisana.png') }}" alt="logo brand la molisana">
            </div>

            <!-- BTM: nav menu -->
            <nav id="main-menu" class="col-xs-12">
                <ul>
                    <li>
                        <a href="{{ route('home') }}">Home</a>
                    </li>
                    <li>
                        <a href="{{ route('prodotti') }}">Prodotti</a>
                    </li>
                    <li>
                        <a href="{{ route('news') }}">News</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>
