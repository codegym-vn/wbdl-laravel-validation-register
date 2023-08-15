<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<div class="container">
    <div class="card bg-light">
        <article class="card-body mx-auto" style="min-width: 400px;">
            <h4 class="card-title mt-3 text-center">Register Account</h4>
            <p class="text-center">Get started with your free account</p>
            <p>
                <a href="" class="btn btn-block btn-twitter btn-outline-info"> <i class="fab fa-twitter"></i>   Login via Twitter</a>
                <a href="" class="btn btn-block btn-facebook btn-outline-primary"> <i class="fab fa-facebook-f"></i>   Login via
                    facebook</a>
            </p>
            <p class="divider-text text-center">
                <span class="bg-light">OR</span>
            </p>
            <form method="post" action="{{ route('register') }}">
                @csrf
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                    </div>
                    <input name="full-name" class="form-control" placeholder="Full name" type="text">

                </div>
                @error('full-name')
                <div class="text-danger">{{ $message }}</div>
                @enderror
                <!-- form-group// -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                    </div>
                    <input name="email" class="form-control" placeholder="Email address" type="email">
                </div>
                @error('email')
                <div class="text-danger">{{ $message }}</div>
                @enderror
                <!-- form-group// -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                    </div>
                    <input name="phone" class="form-control" placeholder="Phone number" type="text">
                </div>
                @error('phone')
                <div class="text-danger">{{ $message }}</div>
                @enderror
                <!-- form-group// -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-building"></i> </span>
                    </div>
                    <select name="job" class="form-control">
                        <option selected="" value=""> Select job type</option>
                        <option value="1">Designer</option>
                        <option value="2">Manager</option>
                        <option value="3">Accaunting</option>
                    </select>
                </div>
                @error('job')
                <div class="text-danger">{{ $message }}</div>
                @enderror
                <!-- form-group end.// -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                    </div>
                    <input name="password" class="form-control" placeholder="Create password" type="password">
                </div>
                @error('password')
                <div class="text-danger">{{ $message }}</div>
                @enderror
                <!-- form-group// -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                    </div>
                    <input name="password_confirmation" class="form-control" placeholder="Repeat password" type="password">
                </div> <!-- form-group// -->
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block"> Register Account</button>
                </div> <!-- form-group// -->
                <p class="text-center">Have an account? <a href="">Log In</a></p>
            </form>
        </article>
    </div> <!-- card.// -->
</div>
</body>
</html>
