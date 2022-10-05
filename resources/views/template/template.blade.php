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
            background: linear-gradient(150.85deg, #8776B7 0%, #150052 42.85%);
            height: 100vh;
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 500;
            font-size: 12px;
            line-height: 80%;
            letter-spacing: -0.04em;
            color: #484848;
        }
		
		@media only screen and (min-width: 1080px) {
		  /* For pc: */
		  body>* {
			  width: 40%;
			  margin-left:auto;
			  margin-right: auto;
		  }
		}

        @font-face {
            font-family: 'Roboto';
            src: url('/fonts/Roboto-Regular.ttf');
        }

        @font-face {
            font-family: 'Poppins';
            src: url('/fonts/Poppins-Regular.ttf');
        }
        /* Montserrat-Regular.ttf */
        @font-face {
            font-family: 'Montserrat';
            src: url('/fonts/Montserrat-Regular.ttf');
        }
<<<<<<< HEAD
=======
		@font-face {
            font-family: 'Montserrat-Bold';
            src: url('/fonts/Montserrat-Bold.ttf');
        }
>>>>>>> 0182f344453c4caac581daedc1ea7faf4ce6b4e4

        .appbar {
			margin-top:10px;
            height: 30px;
        }

        .main-page-header {
            height: 25vh;
            background-color: #FFFFFF;
        }

        .currdate {
			font-weight: 600;
			font-size: 14px;
			line-height: 195.69%;
			/* or 23px */


			color: #FFFFFF;
        }

        .currdate-day {
			font-weight: 400;
			font-size: 14px;
			line-height: 195.69%;
			/* or 23px */


			color: #FFFFFF;
        }

        .app-title {
            font-style: normal;
			font-weight: 400;
			font-size: 14px;
            line-height: 195.69%;
			/* identical to box height, or 12px */

			letter-spacing: -0.04em;

			color: #FFFFFF;

			text-shadow: 0px 4px 12px #160052;

        }

        .bottomnavbar {
            height: 85px;
            background: #FFFFFF;
			box-shadow: 0px 2px 26px rgba(0, 0, 0, 0.25);

            display: flex;

            z-index: 2;

        }
        .navbar-icon{
            font-size: 24px;
			color: #3B1E8C;
			text-shadow: 0px 1px 9px #A2A2A2;
        }
        .navbar-row{
            width: 100%;
            display: flex;
            flex-direction: row;
        }
        
        .col-3{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .navbar-row > .col-3 > a{
            height: 100%;
            width: 95%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>

    @yield('styles')
</head>

<body>


    <div class="appbar">
        <div class="flex-row">
            <span class="white-head app-title float-left ml-3">{{ env('APP_NAME') }}</span>
            <span class="white-head currdate float-right mr-3">Wed <span class="white-head currdate-day">10
                    Oct</span></span>
        </div>
    </div>
    <content>
        @yield('content')
    </content>
@if (!isset($showNavbar) || $showNavbar)
    <div class="bottomnavbar">
        <div class="flex-row navbar-row">
            {{-- home(mainpage), studentsrating(studentsrating), shanyraqsrating(shanyraqsrating), addachievement(addmyachievement) --}}
            <div class="col-3">
                <a href="/mainpage">
                    <i class="fas fa-home navbar-icon"></i>
                </a>
            </div>
            <div class="col-3">
                <a href="/studentsrating">
                    <i class="fas fa-trophy navbar-icon"></i>
                </a>
            </div>
            <div class="col-3">
                <a href="/shanyraqsrating">
                    <i class="fas fa-award navbar-icon"></i>
                </a>
            </div>
            <div class="col-3">
                <a href="/addmyachievement">
                    <i class="fas fa-plus navbar-icon"></i>
                </a>
            </div>
        </div>
    </div>
@endif




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
