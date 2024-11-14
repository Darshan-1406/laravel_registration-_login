<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Home</title>
        <link rel="stylesheet" href="{{ asset('bootstrap/bootstrap.css') }}" />
    </head>
    <body>
        @if(session()->has('jsAlert'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
            {{session()->get('jsAlert')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <!-- ==========title======== -->
        <div
            class="container text-center text-capitalize fs-1 fw-bolder text-primary mt-5"
        >
            login here
        </div>
        <!-- =========form============ -->
        <div class="container">
            <form action="login" method="post">
                @csrf
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label"
                        >Email address</label
                    >
                    <input
                        type="email"
                        name="email"
                        class="form-control"
                        id="exampleFormControlInput1"
                        placeholder="enter your email"
                    />
                </div>

                <div class="mb-3">
                    <label for="inputPassword5" class="form-label"
                        >Password</label
                    >
                    <input
                        type="password"
                        name="password"
                        id="inputPassword5"
                        class="form-control"
                        placeholder="enter your Password"
                        aria-describedby="passwordHelpBlock"
                    />
                    <div id="passwordHelpBlock" class="form-text">
                        Your password must be 8-20 characters long, contain
                        letters and numbers, and must not contain spaces,
                        special characters, or emoji.
                    </div>
                </div>

                <div class="mb-3 text-center">
                    <button type="submit" class="btn btn-primary mt-5">
                        LOGIN
                    </button>

                    <a href="/registration">
                        <button type="button" class="btn btn-warning mt-5">
                            Register here
                        </button>
                    </a>
                </div>
            </form>
        </div>

        <script src="{{ asset('bootstrap/bootstrap.js') }}"></script>
    </body>
</html>
