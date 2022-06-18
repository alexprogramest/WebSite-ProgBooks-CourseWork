<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600&family=Montaga&family=Montserrat:wght@400;500;600;700;800&family=Roboto&family=Spectral+SC&display=swap" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="/css/@yield('css-file').css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
	</head>
	<body>
		@include('additions.header')
		@yield('main-content')
		@include('additions.footer')
	</body>
</html>