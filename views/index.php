<?php
	require_once '../controllers/ControllerListar.php';
?>
<!doctype html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="../styles/tabela.css">
	<title>Lan House - Início</title>
</head>

<body>
	<hr>
	<h1 class="text-center">Lan House - Início</h1>
	<hr>

	<div class="d-flex flex-row justify-content-center">
		<a href="./index.php" class="btn btn-primary">Início</a>
		<a href="./cadastrar.php" class="btn btn-primary ms-3">Cadastro</a>
	</div>

	<div class="m-3">
		<table class="table table-hover">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Nome</th>
					<th scope="col">Gênero</th>
					<th scope="col">Lançamento</th>
					<th scope="col">Preço</th>
					<th scope="col">Ações</th>
				</tr>
			</thead>
			<tbody>
				<?php
					new Listar();
				?>
			</tbody>
		</table>
	</div>

	

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
		crossorigin="anonymous"></script>
</body>
</html>