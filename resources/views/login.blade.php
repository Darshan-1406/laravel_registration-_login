<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="{{ asset('bootstrap/bootstrap.css') }}" />
        <title>Login</title>
    </head>
    <body>
        <h1 class="text-center text-uppercase fs-1 fw-bolder mt-3 text-primary">
            {{$result->name}}
        </h1>
        <div class="container">
            <img
                class="shadow-lg p-1 mb-1 bg-danger rounded"
                src="{{ asset( $result->profile ) }}"
                style="width: 150px; height: 150px"
                alt="img"
            />
        </div>
        <div class="container text-center mt-5">
            <div class="row">
                <div class="col">
                    <label class="form-label fw-bold text-body-emphasis"
                        >id:</label
                    ><label
                        class="form-label font-monospace text-success"
                        >{{$result->id}}</label
                    >
                </div>
                <div class="col">
                    <label class="form-label fw-bold text-body-emphasis"
                        >Password:</label
                    ><label
                        class="form-label font-monospace text-success"
                        >{{$result->password}}</label
                    >
                </div>
                <div class="col">
                    <label class="form-label fw-bold text-body-emphasis"
                        >Email:</label
                    ><label
                        class="form-label font-monospace text-success"
                        >{{$result->email}}</label
                    >
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label class="form-label fw-bold text-body-emphasis"
                        >Phone Number:</label
                    ><label
                        class="form-label font-monospace text-success"
                        >{{$result->phone}}</label
                    >
                </div>
                <div class="col">
                    <label class="form-label fw-bold text-body-emphasis"
                        >Gender:</label
                    ><label
                        class="form-label font-monospace text-success"
                        >{{$result->gender}}</label
                    >
                </div>
                <div class="col">
                    <label class="form-label fw-bold text-body-emphasis"
                        >Birthday:</label
                    ><label
                        class="form-label font-monospace text-success"
                        >{{$result->birthday}}</label
                    >
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label class="form-label fw-bold text-body-emphasis"
                        >City:</label
                    ><label
                        class="form-label font-monospace text-success"
                        >{{$result->city}}</label
                    >
                </div>
                <div class="col">
                    <label class="form-label fw-bold text-body-emphasis"
                        >Hobby:</label
                    ><label
                        class="form-label font-monospace text-success"
                        >{{$result->hobby}}</label
                    >
                </div>
                <div class="col">
                    <label class="form-label fw-bold text-body-emphasis"
                        >Adress:</label
                    ><label
                        class="form-label font-monospace text-success"
                        >{{$result->adress}}</label
                    >
                </div>
            </div>
        </div>
        <div class="container text-center mt-5">
            <a href="/"
                ><button type="button" class="btn btn-warning">Back</button></a
            >
        </div>
        <div class="container text-center mt-5">
            <a href="/update/{{$result->id}}/{{$result->email}}"
                ><button type="button" class="btn btn-warning">
                    Update profile
                </button></a
            >
        </div>
        <div class="container text-center mt-5">
            <button
                onclick="myFunction()"
                type="button"
                class="btn btn-warning"
            >
                delete profile
            </button>
        </div>

        <script>
            function myFunction() {
                if (confirm("are You sure For delete Your Profile")) { 
                    window.location.href ="/delete/{{$result->id}}/{{$result->email}}";
                }
            }
        </script>

        <script src="{{ asset('bootstrap/bootstrap.js') }}"></script>
    </body>
</html>
