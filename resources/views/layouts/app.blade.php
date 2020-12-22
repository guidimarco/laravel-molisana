<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>La molisana | Home</title>

        {{-- css --}}
        <link rel="stylesheet" href="{{ asset("css/app.css") }}">
    </head>
    <body>
        <header>
            <div class="container">
                <div class="row">
                    <!-- TOP: brand logo -->
                    <div id="logo" class="col-xs-12">
                        logo
                    </div>

                    <!-- BTM: nav menu -->
                    <nav id="main-menu" class="col-xs-12">
                        menu
                    </nav>
                </div>
            </div>
        </header>

        <main>
            @yield('content')
        </main>

        <footer>
            <div class="container">
                <div class="row">
                    <!-- TOP/LEFT: brand info & logo -->
                    <div id="info" class="col-xs-12 col-md-4">
                        info
                    </div>

                    <!-- footer menu -->
                    <nav class="footer-menu col-xs-12 col-md-4">
                        menu
                    </nav>

                    <!-- BTM/RIGHT: footer menu -->
                    <nav class="footer-menu col-xs-12 col-md-4">
                        menu
                    </nav>
                </div><!-- end row -->
            </div>
        </footer>
    </body>
</html>
