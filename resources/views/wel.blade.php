<html>
    <body>
    <div>
    	@foreach($users as $user)
		{{$user->name}}
		@endforeach
    </div>
    <hr>
        <div>
    	@foreach($posts as $post)
		{{$post->name}} <br>
		@endforeach
    </div>
        <hr>
        <div>
    	@foreach($postusers as $post)
		{{$post->name}} <br>
		@endforeach
    </div>

    </body>
</html>
