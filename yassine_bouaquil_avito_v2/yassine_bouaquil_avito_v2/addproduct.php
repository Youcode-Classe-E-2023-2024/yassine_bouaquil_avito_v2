<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="css/style1.css">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
	integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
	<!-- place navbar here -->
  </header>
  <main>
  <div class="centered">
		<form method="POST" class="forma" action="add.php">
			<input type="text" placeholder="Product Name" required name="Prname">
			<input type="text" required placeholder="Description" name="description">
			<input type="number" required name="Prix" placeholder="Prix">
			<input type="text" required name="Category" placeholder="Ctegory">
            <input type="file" name="image" required class="box" accept="image/jpg, image/png, image/jpeg">
			<input type="submit" class="addbtn" name="add" >
		</form>
	</div>
	
</body>

</html>
