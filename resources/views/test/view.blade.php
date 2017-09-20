<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>{{ $article->title }}</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/general.css') }}">
</head>
<body>
	Código Facilito
	<h1>{{ $article->title }}</h1>
	<hr>
	{{ $article->content }}
	<hr>
	{{ $article->user->name }} | {{ $article->category->name }}
	<hr>
	@foreach($article->tags as $tag)
		{{ $tag->name }}
		<br>
	@endforeach
</body>
</html>


