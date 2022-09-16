<!doctype html>
<html lang="ru">

<head>
    <title>{{ env('APP_NAME') }}</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <!-- PWA  -->
    <meta name="theme-color" content="#6777ef" />
    <link rel="apple-touch-icon" href="{{ asset('logo.PNG') }}">
    <link rel="manifest" href="{{ asset('/manifest.json') }}">
    <style>
        html body {
            display: flex;
            flex-direction: column;
            background-color: #F1F2F6;
            min-height: 100vh;
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 500;
            font-size: 12px;
            line-height: 80%;
            letter-spacing: -0.04em;
        }

        @font-face {
            font-family: 'Roboto';
            src: url('/fonts/Roboto-Regular.ttf');
        }

        @font-face {
            font-family: 'Poppins';
            src: url('/fonts/Poppins-Regular.ttf');
        }

        .appbar {
            height: 30px;
        }

        .main-page-header {
            height: 25vh;
            background-color: #FFFFFF;
        }

        .currdate {
            color: #252e65;
            font-style: normal;
            font-weight: 900;
            font-size: 14px;
            line-height: 195.69%;
            letter-spacing: -0.02em;
        }

        .currdate-day {
            color: #252e65;
            font-style: normal;
            font-weight: 100;
            font-size: 14px;
            line-height: 195.69%;
        }

        .app-title {
            font-style: normal;
            font-weight: 900;
            font-size: 14px;
            line-height: 195.69%;

            letter-spacing: -0.04em;

            color: #070707;

        }
    </style>
    
    @yield('styles')
</head>

<body>


    <div class="appbar">
        <div class="flex-row">
            <span class="app-title float-left ml-3">{{ env('APP_NAME') }}</span>
            <span class="currdate float-right mr-3">Wed <span class="currdate-day">10 Oct</span></span>
        </div>
    </div>

    @yield('content')




    <!-- Optional JavaScript -->
    <script src="{{ asset('/sw.js') }}"></script>
    <script>
        if (!navigator.serviceWorker.controller) {
            navigator.serviceWorker.register("/sw.js").then(function(reg) {
                console.log("Service worker has been registered for scope: " + reg.scope);
            });
        }
    </script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    @yield('scripts')
</body>

</html>
