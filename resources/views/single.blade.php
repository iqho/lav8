<!DOCTYPE html>
<html>
<head>
    <title>Single</title>
</head>
<body>

@if( !empty($posts))
{{ $posts->name}}<br>
Author: {{ $posts->author->name }} - Category: 
@else
<h1> No Post Found </h1>
@endif



</body>
</html>