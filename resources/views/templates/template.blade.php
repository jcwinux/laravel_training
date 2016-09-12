<html>
	<head>
		<link rel="stylesheet" href="{{asset('css/main.css')}}" />
		<link rel="shortcut icon" href="{{asset('img/favicon.ico')}}">
		<title>@yield('title')</title>
	</head>
	<body>
		@yield('header')
		@yield('content')
		@yield('footer')
	</body>
</html>