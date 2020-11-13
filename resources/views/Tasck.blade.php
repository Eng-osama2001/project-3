<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Osama abu twhena</title>
</head>


<body>
<ul>
@foreach ($tascks as $key=>$tasck)
<li>
    <h2> <a href="{{'Tasck/Show/' .$key}}">{{$Tasck}}</a></h2>
</li>
@endforeach

</ul>
</body>
</html>
