<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>view</title>
</head>
<body>
    @include('home');
    <p class="h2 text-center m-5" >CUSTOMER DETAILS</p>
    <div class="container">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">name</th>
                <th scope="col">email</th>
                <th scope="col">password</th>
                <th scope="col">city</th>
                <th scope="col">state</th>
                <th scope="col">created_at</th>
                <th scope="col">updated_at</th>
                <th scope="col">Delete_Row</th>
              </tr>
            </thead>
            <tbody>

                @foreach ($customers as $customer)
                <tr>
                    <td>{{$customer['id']}}</td>
                    <td>{{$customer['name']}}</td>
                    <td>{{$customer['email']}}</td>
                    <td>{{$customer['password']}}</td>
                    <td>{{$customer['city']}}</td>
                    <td>
                        @if ($customer->state == 'kbkjn')
                            active
                        @else
                            Inactive
                        @endif
                        </td>
                    <td>{{$customer['created_at']}}</td>
                    <td>{{$customer['updated_at']}}</td>
                    <td class="badge text-bg-danger">
                        <a href="{{url('/customer/delete')}}/{{$customer['id']}}">Delete</a>
                    </td>
                    <td class="badge text-bg-warning">
                        <a href="{{url('/customer/edit')}}/{{$customer['id']}}">Edit</a>
                    </td>

                  </tr>
                @endforeach
             
              </tbody>
          </table>
    </div>
    
</body>
</html>