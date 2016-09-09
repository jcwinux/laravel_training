<!-- Stored in resources/views/layouts/app.blade.php -->
<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <body>
		<h1>Bienvenido, {{ isset($nombre) ? $nombre : 'No está seteada la variable' }}</h1>
		<h2>{!! $apellido or 'No han enviado un valor en la variable' !!}</h2>
        @section('sidebar')
            This is the master sidebar.
		@show
        <div class="container">
            @yield('content')
        </div>
		<div class="container">
			@for ($i=0; $i<10; $i++)
				<h3>{{ $i }}</h3>
			@endfor
		</div>
		<div class="container">
			<table border="1">
			@foreach ($ciudades as $clave=>$valor)
				<tr>
					<td>{{ $clave }}</td>
					<td>{{ $valor }}</td>
				</tr>
			@endforeach
			</table>
		</div>
    </body>
</html>