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
		<fieldset>
			<legend>Signup</legend>
		<table>
            <tr>
				<td>Name</td>
				<td><input type="text" name="name"></td>
			</tr>

            <tr>
				<td>Username</td>
				<td><input type="text" name="username"></td>
			</tr>
	
			<tr>
				<td>Email</td>
				<td><input type="text" name="email"></td>
			</tr>

			<tr>
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>

            <tr>
				<td>Conform password</td>
				<td><input type="password" name="password"></td>
			</tr>

            <tr>
				<td>Address</td>
				<td><input type="password" name="address"></td>
			</tr>

            <tr>
				<td>Company name</td>
				<td><input type="password" name="company"></td>
			</tr>

            <tr>
				<td>City</td>
				<td><input type="password" name="city"></td>
			</tr>

            <tr>
				<td>Country</td>
				<td><input type="password" name="country"></td>
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