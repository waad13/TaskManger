<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<hi, initial-scale=1.0">
    <title>home</title>
</head>
<body>
   <h1>welcom to store</h1>
   
   @foreach ($products as $product)
 
   <div>
    <h3><a href="/item/{{$product->id}}">{{ $product->title }}</a></h3>
    </div>
    @endforeach

</body>
</html>
