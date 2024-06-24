<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log in</title>
    <link rel="stylesheet" href="{{asset('css/user.css')}}">
</head>
<body>
    <div class="header">
        <a href="#">Profile Admin</a>
    </div>
    @if($errors->any())
    <div class="danger">
       <ul>
           @foreach ($errors->all() as $error)
               <li>{{ $error }}</li>
           @endforeach
       
   </ul>
</div>
@endif
    <div class="container">
     

        <form action="{{url('login')}}" method="post">
            @csrf
            <label for="email">Email: </label>
            <input type="text" name="email" id="email" >
            <label for="password">Password: </label>
            <input type="password" name="password" id="password" >
           
            <button type="submit">Log-in</button>
        </form>
    </div>
</body>
</html>