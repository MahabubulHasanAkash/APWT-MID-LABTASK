<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

	<form method="post">
		<!-- @csrf -->
		<!-- {{csrf_field()}} -->
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		@if (isset($errors))
		 @foreach ($errors->all() as $error)
			{{$error}} <br>
		 @endforeach
		@endif
		<a href="/signup"> Signup </a>
		<fieldset>
			<legend>Login</legend>
		<table>
			<tr>
				<td>Email</td>
				<td><input type="text" name="username" value="admin@laravel.edu"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password" value="12345678"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Submit"></td>
			</tr>
		</table>
		</fieldset>

		<h3 style="color: red">
			{{session('msg')}}
		</h3>
	</form>
</body>
</html>