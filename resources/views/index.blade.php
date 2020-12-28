
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Users</title>
  </head>
  <body>
  	<div class="container">
  		<h1> List of users.</h1>
		@if ($users)		
		<table class="table">
		  <thead>
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">Hash</th>
		      <th scope="col">Name</th>
		      <th scope="col">Family</th>
		      <th scope="col">Key</th>
		      <th scope="col">Url</th>
		      <th scope="col">Image</th>
		      <th scope="col">Update</th>
		    </tr>
		  </thead>
		  <tbody>
		  	@foreach ($users as $user)
		    <tr>
		      <th scope="row">{{$loop->iteration}}</th>
		      <td>{{$user->hash}}</td>
		      <td>{{$user->name}}</td>
		      <td>{{$user->family}}</td>
		      <td>{{$user->data['key']}}</td>
		      <td>{{$user->data['url']}}</td>
		      <td>{{$user->data['img_name']}}</td>
		      <td>{{$user->update}}</td>
		    </tr>
		    @endforeach
		  </tbody>
		</table>
  		@else
			<div>No users added yet.</div>
		@endif
		{{ $users->links('pagination::bootstrap-4') }}
	</div>

    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>