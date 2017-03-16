<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Médiathèque</title>
    </head>
    <body>
		<h1>Liste des livres</h1>
		<ul>
		@foreach ($book as $livre)
			<li>{{$livre->id}}  - {{$livre->name}} - {{$livre->category}}</li>
		@endforeach
		</ul>
    </body>
</html>
