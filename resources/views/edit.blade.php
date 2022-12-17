<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>

<div class="container">
	<h1 class="text-center">Update Data</h1>
	<form method="POST" action="/update/{{$posts->id}}">
		@csrf
		<div class="mb-3">
			<label><b>post title:</b></label>
			<input type="text" name="post_title"  class="form-control" value="{{$posts->post_title}}">
		</div>
		<div class="mb-3">
			<label><b>post title:</b></label>
			<input type="text" name="post_auther"  class="form-control" value="{{$posts->post_auther}}">
		</div>
		<input type="submit" name="update" value="Update" class="btn btn-success">
	</form>
</div>

</body>
</html>