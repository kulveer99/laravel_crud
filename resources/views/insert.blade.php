<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>

<div class="container">
	<h1 class="text-center">Add Data</h1>
	<form method="POST" action="/store">
		@csrf
		<div class="mb-3">
			<label><b>post title:</b></label>
			<input type="text" name="post_title"  class="form-control">
		</div>
		<div class="mb-3">
			<label><b>post author:</b></label>
			<input type="text" name="post_auther"  class="form-control">
		</div>
		<input type="submit" name="insert" value="Insert" class="btn btn-primary">
	</form>
</div>

</body>
</html>