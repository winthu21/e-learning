<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Register</title>

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    {{-- fontawesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">

                    <div class="col-lg-6 offset-3">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an E-Learning Account!</h1>
                            </div>
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <label for="">Name</label>
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control form-control-user @error('name') is-invalid @enderror" value="{{ old('name') }}">
                                    @error('name')
                                        <small class=" invalid-feedback">{{ $message}}</small>
                                    @enderror
                                </div>
                                <label for="">Email</label>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control form-control-user  @error('email') is-invalid @enderror" value="{{ old('email') }}">
                                    @error('email')
                                            <small class=" invalid-feedback">{{ $message}}</small>
                                        @enderror
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label for="">Password</label>
                                        <input type="password" name="password" class="form-control form-control-user  @error('password') is-invalid @enderror">
                                        @error('password')
                                            <small class=" invalid-feedback">{{ $message}}</small>
                                        @enderror
                                    </div>
                                    <div class="col-sm">
                                        <label for="">Confirm Password</label>
                                        <input type="password" name="password_confirmation" class="form-control form-control-user  @error('password_confirmation') is-invalid @enderror">
                                        @error('password_confirmation')
                                            <small class=" invalid-feedback">{{ $message}}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mt-2">
                                    <input type="submit" class="btn btn-primary btn-user btn-block" value="Register Account">
                                </div>
                                <hr>
                            </form>
                            <hr>
                            <div class="text-center ">
                                <a class="small" href="{{ route('loginPage') }}">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Bootstrap bundle --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>
