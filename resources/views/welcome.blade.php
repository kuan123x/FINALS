<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FINALS</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <style>
/* Define the keyframes for the neon glow effect */
@keyframes neonGlow {
    0% {
        text-shadow: 0 0 10px #66c2ff; /* Lighter blue shadow at the start of the animation */
    }
    50% {
        text-shadow: 0 0 20px #3399ff; /* Increased shadow size with a slightly darker blue at 50% of the animation */
    }
    100% {
        text-shadow: 0 0 10px #66c2ff; /* Return to the lighter blue shadow at the end of the animation */
    }
}
body {
    background-image: url('https://e0.pxfuel.com/wallpapers/876/606/desktop-wallpaper-is-evos-ph-back-luch-and-zeys-hint-at-return-to-the-philippines-one-esports-evos-esports.jpg');
    background-repeat: no-repeat;
    background-size: 100% 400%;
    background-position-y: 30px;
}

/* Apply the neon glow effect to the h1 element */
h1 {
    text-align: center;
    padding-left: 50px;
    font-family: 'Arial', sans-serif; /* You can change the font-family if needed */
    animation: neonGlow 2s infinite; /* 2s duration, infinite loop */
    color: #fff; /* Set text color to white for better visibility */
}



        .navbar {

background-color: #d7d7d7;
background-image: linear-gradient(147deg, #0e0d0d 0%, #e6e1e1 74%);


            padding: 30px;
        }

        .nav-link {
            color: #000;
        }

        .nav-link.active {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-light">
        <h1>FINALS</h1>
        <ul class="nav justify-content-end nav-pills">
            <li class="nav-item">
                <a class="nav-link {{ Route::is('/home') ? 'active' : '' }}" href="{{ url('/') }}">HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::is('teams') ? 'active' : '' }}" href="{{ url('/teams') }}">TEAMS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::is('players') ? 'active' : '' }}" href="{{ url('/players') }}">PLAYERS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::is('heroes') ? 'active' : '' }}" href="{{ url('/heroes') }}">HEROES</a>
            </li>
        </ul>
    </nav>

    <div class="container mt-5">
        @yield('content')
    </div>
</body>
</html>
