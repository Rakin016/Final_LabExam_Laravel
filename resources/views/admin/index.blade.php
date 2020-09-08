<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
</head>
<body>

	<h1>Welcome Admin!</h1>

	<a href="{{route('home.create')}}">Register Employer</a> |
	<a href="{{route('logout.index')}}">logout</a>

	<h2>Employer list</h2>

	<table border="1">
		<tr>
			<td>ID</td>
			<td>Username</td>
			<td>Name</td>
			<td>Company Name</td>
			<td>Action</td>
		</tr>

	@for($i=0; $i != count($users); $i++)
		<tr>
			<td>{{$users[$i]->user_idd}}</td>
			<td>{{$users[$i]->user_name}}</td>
			<td>{{$users[$i]->employer_name}}</td>
			<td>{{$users[$i]->company_name}}</td>
			<td>
				<a href="{{route('home.edit', [$users[$i]->userId])}}">Update Info</a> |
				<a href="{{route('home.delete', [$users[$i]->userId])}}">Delete Employer</a>
			</td>
		</tr>
	@endfor
	</table>

</body>
</html>