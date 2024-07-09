<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1> Create Herbalists</h1>
    <div>
        @if ($errors->any())
        <ul>
            @foreach( $errors->all() as $error )
                   <li>{{$error}}</li>
                
            @endforeach
        </ul>
            
    </div>
    <form method="post" action="{{route("herbalists.store")}}">
        @csrf
        @method("post")
        <div> 
            <label>Name</label>
            <input type="name" name="name" placeholder="name" />
        </div>

        <div> 
            <label>Email</label>
            <input type="email" name="email" placeholder="email" />
        </div>

        <div> 
          
            <input type="submit" Value="Save Details" placeholder="name" />
        </div>
    </form>
</body>
</html>