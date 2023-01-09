<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    @vite('./resources/css/app.css')
    @vite('./resources/css/bootstrap.min.css')
    <meta name="theme-color" content="#712cf9">
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }
    </style>
    @vite('./resources/css/sign-in.css')
    @vite('./resources/css/cover.css')

</head>
<body class="d-flex h-100 text-center text-bg-dark">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">

        @include('partials.navbar')

        <form>
            <h1 class="h3 mb-3 fw-normal">Please register</h1>

            <div class="form-floating">
            <input type="email" class="b-example-divider form-control" id="floatingInput" name="name" placeholder="Name">
            <label for="floatingInput">Name</label>
            </div>
            <div class="form-floating">
            <input type="email" class="b-example-divider form-control" id="floatingInput" name="email" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
            <input type="password" class="b-example-divider form-control" id="floatingPassword" name="password" placeholder="Password">
            <label for="floatingPassword">Password</label>
            </div>
            <div class="form-floating">
            <input type="password" class="b-example-divider form-control" id="floatingPassword" name="confirmePassword" placeholder="Confirme">
            <label for="floatingPassword">Confirme Password</label>
            </div>

            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
        </form>

    </div>
</body>
</html>