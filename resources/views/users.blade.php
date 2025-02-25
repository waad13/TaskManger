
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title></title>
    </head>
    <body>
        @foreach ($users as $user)
 
   <div> 
    <h3><li><a href="/user/{{$user->id}}">{{ $user->name }}</a></li>>{{$user->email}}</h3>
 
    
    </div>
    @endforeach
    

<ul>
   
</ul>
       
   </body>
</html>