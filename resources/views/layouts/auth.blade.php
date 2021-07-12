<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/my-login.css')}}">
</head>
<body class="my-login-page">
	@yield('content')

	<script src="{{asset('js/app.js')}}"></script>
	<script src="{{asset('js/my-login.js')}}"></script>
</body>
</html>