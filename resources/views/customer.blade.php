<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>customer</title>
</head>

<body>
    @include('home');
    
    <div class="container">
        <form method="POST" action="{{$url}}">
           @csrf
            <p class="h2 text-center m-3">{{$title}}</p>
            <div class="mb-3">
                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Name" aria-label="name" name="name" value="{{$customer->name}}">
                        @error('name')                            
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col">
                        <input type="email" class="form-control" placeholder="Email" aria-label="email" name="email" value="{{$customer->email}}">
                        @error('email')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="City" aria-label="city" name="city" value="{{$customer->city}}">
                        @error('city')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="State" aria-label="state" name="state" value="{{$customer->state}}">
                        @error('state')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <div class="row">
                    <div class="col">
                        <input type="password" class="form-control" placeholder="Password" aria-label="password" name="password">
                        @error('password')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col">
                        <input type="password" class="form-control" placeholder="Confirm_Password" aria-label="password_confirmation" name="password_confirmation">
                        @error('password_confirmation')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                </div>
            </div>
                <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>



</body>

</html>