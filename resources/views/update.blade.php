<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regiser</title>
        <link rel="stylesheet" href="{{ asset('bootstrap/bootstrap.css') }}" />

        <style>
            input::-webkit-inner-spin-button,
            input::-webkit-outer-spin-button {
                -webkit-appearance: none;
                margin: 0;
            }
        </style>
</head>
<body>  
        <div class="container mb-5">
            <!-- ==========title======== -->
            <div
                class="container text-center text-capitalize fs-1 fw-bolder text-primary mt-5"
            >
                Registration here
            </div>

            <!-- =========form============ -->
            <div class="container">
                <form action="/updatedata" method="post" class="was-validated" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{$result->id}}">
                    <!-- +++++++++++Name++++++++++ -->
                    <div class="mb-3">
                        <label for="validationName" class="form-label">
                            Name
                        </label>
                        <input
                            type="text"
                            name="name"
                            class="form-control"
                            id="validationName"
                            placeholder="Required Name"
                            required
                            value="{{$result->name}}"
                        />
                        <div class="invalid-feedback">Please enter a Name.</div>
                    </div>
                    <!-- ++++++++++Email+++++++++++ -->
                    <div class="mb-3">
                        <label for="validationEmail" class="form-label">
                            Email
                        </label>
                        <input
                            type="email"
                            name="email"
                            class="form-control"
                            id="validationEmail"
                            placeholder="Required Email"
                            required
                            value="{{$result->email}}"
                        />
                        <div class="invalid-feedback">
                            Please enter a valid Email.
                        </div>
                    </div>
                    <!-- ++++++++++++Phone Number+++++++++ -->

                    <div class="mb-3">
                        <label for="validationPhone" class="form-label">
                            Phone Number
                        </label>
                        <input
                            type="number"
                            name="phone"
                            class="form-control"
                            id="validationPhone"
                            placeholder="Required Phone Number"
                            required
                            value="{{$result->phone}}"
                        />
                        <div class="invalid-feedback">
                            Please enter a valid Phone Number.
                        </div>
                    </div>
                    <!-- ++++++++++Password+++++++++++ -->

                    <div class="mb-3">
                        <label for="validationPassword" class="form-label">
                            Password
                        </label>
                        <input
                            type="Password"
                            name="password"
                            class="form-control"
                            id="validationPassword"
                            placeholder="Required Password"
                            required
                            value="{{$result->password}}"
                        />
                        <div class="invalid-feedback">
                            Please enter a Password.
                        </div>
                    </div>
                    <!-- +++++++++++Gender++++++++++ -->

                    <div class="mb-3">
                        <label for="validationGender" class="form-label">
                            Gender
                        </label>
                        <div class="form-check">
                            <input
                                type="radio"
                                value="male"
                                class="form-check-input"
                                id="validationGender"
                                name="gender"
                                required
                                @if($result->gender=='male') checked @endif
                            />
                            <label
                                class="form-check-label"
                                for="validationGender"
                                >Male</label
                            >
                        </div>
                        <div class="form-check mb-3">
                            <input
                                type="radio"
                                value="female"
                                class="form-check-input"
                                id="validationGender"
                                name="gender"
                                required
                                @if($result->gender=='female') checked @endif
                            />
                            <label
                                class="form-check-label"
                                for="validationGender"
                                >Female</label
                            >
                            <div class="invalid-feedback">Select a Gender.</div>
                        </div>
                    </div>
                    <!-- +++++++++++++Birthday++++++++ -->

                    <div class="col-md-3">
                        <label for="validationBirthday" class="form-label">
                            Birthday
                        </label>
                        <input
                            type="date"
                            name="birthday"
                            class="form-control"
                            id="validationBirthday"
                            required
                            value="{{$result->birthday}}"
                        />
                        <div class="invalid-feedback">
                            Please select a Birthday.
                        </div>
                    </div>
                    <!-- ++++++++++++City+++++++++ -->

                    <div class="col-md-3">
                        <label for="validationCity" class="form-label"
                            >City</label
                        >
                        <select
                            class="form-select"
                            name="city"
                            id="validationCity"
                            required
                        >
                            <option disabled value="">
                                Choose City
                            </option>
                            <option  @if($result->city=='Surat') selected @endif value="Surat">Surat</option>
                            <option  @if($result->city=='Navsari') selected @endif value="Navsari">Navsari</option>
                            <option  @if($result->city=='Bharuch') selected @endif value="Bharuch">Bharuch</option>
                        </select>
                        <div class="invalid-feedback">
                            Please select a valid City.
                        </div>
                    </div>
                    <!-- ++++++++++Hobby+++++++++++ -->

                    <div class="col-md-3">
                        <label for="hobby" class="form-label"
                            >Hooby(Optional)</label
                        >
                        <div class="col-12">
                            <div class="form-check">
                                <input
                                    class="form-check-input"
                                    type="checkbox"
                                    value="Cricket"
                                    name="hobby[]"
                                    id="invalidCheck"
                                    @if(in_array('Cricket',explode(",",$result->hobby))) checked @endif
                                />
                                <label
                                    class="form-check-label"
                                    for="invalidCheck"
                                >
                                    Cricket
                                </label>
                            </div>
                            <div class="form-check">
                                <input
                                    class="form-check-input"
                                    type="checkbox"
                                    value="Chess"
                                    name="hobby[]"
                                    id="invalidCheck"
                                    @if(in_array('Chess',explode(",",$result->hobby))) checked @endif

                                />
                                <label
                                    class="form-check-label"
                                    for="invalidCheck"
                                >
                                    Chess
                                </label>
                            </div>
                            <div class="form-check">
                                <input
                                    class="form-check-input"
                                    type="checkbox"
                                    value="Hokey"
                                    name="hobby[]"
                                    id="invalidCheck"
                                    @if(in_array('Hokey',explode(",",$result->hobby))) checked @endif

                                />
                                <label
                                    class="form-check-label"
                                    for="invalidCheck"
                                >
                                    Hokey
                                </label>
                            </div>
                        </div>
                    </div>
                    <!-- ++++++++++++Adress+++++++++ -->

                    <div class="mb-3">
                        <label for="validationAdress" class="form-label"
                            >Adress</label
                        >
                        <textarea
                            class="form-control"
                            id="validationAdress"
                            name="adress"
                            placeholder="Required Adress"
                            required
                        >{{$result->adress}}</textarea>
                        <div class="invalid-feedback">
                            Please enter a adress.
                        </div>
                    </div>
                    <!-- ++++++++++File+++++++++++ -->

                    <div class="mb-3">
                        <input
                            type="file"
                            name="profile"
                            class="form-control"
                            aria-label="file example"
                            accept=".png, .jpg, .jpeg"
                            value="image"
                        />
                        <div class="invalid-feedback">
                            Please select the image.
                        </div>
                    </div>
                    <!-- +++++++++Submit-BUtton++++++++++++ -->

                    <img src="{{ asset($result->profile)}}" style="width: 150px; height: 150px;" class="img-thumbnail mb-1" alt="img">
                    <div class="container mb-5 text-black">Your Profile Image</div>

                    <!-- +++++++++Submit-BUtton++++++++++++ -->

                    <div class="mb-3">
                        <button class="btn btn-primary" type="submit">
                            Update
                        </button>
                    </div>
                    <!-- ++++++++++Form-end+++++++++++ -->

                </form>
            </div>
        </div>
        <script src="{{ asset('bootstrap/bootstrap.js') }}"></script>
    </body>
</html>