@extends('layouts.appmaster')
@section('title','Login Page')
@section('content')
<form action="dologin" method="POST">
@csrf
	<label for="username">Username:</label>
	<input type="text" id="username" name="username"><br><br>
	
	<label for="password">Password:</label>
	<input type="password" id="password" name="password"><br><br>
	
	<input type="submit" value="submit">
</form>
@endsection