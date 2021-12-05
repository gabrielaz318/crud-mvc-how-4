<!doctype html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="../styles/tabela.css">
	<title>Lan House - Cadastrar</title>
</head>

<body>
	<hr>
	<h1 class="text-center">Lan House - Cadastrar</h1>
	<hr>

	<div class="d-flex flex-row justify-content-center">
		<a href="./index.php" class="btn btn-primary">Início</a>
		<a href="./cadastrar.php" class="btn btn-primary ms-3">Cadastro</a>
	</div>

	<form id="form" name="form" method="POST" action="../controllers/ControllerCadastrar.php" class="d-flex flex-column m-3 w-50">
		<div class="input-group mb-3">
            <span class="input-group-text">Nome</span>
            <input name="nome" id="nome" type="text" class="form-control" aria-label="nome" aria-describedby="nome">
        </div>
		<div class="input-group mb-3">
            <span class="input-group-text">Gênero</span>
            <input name="genero" id="genero" type="text" class="form-control" aria-label="genero" aria-describedby="genero">
        </div>
		<div class="input-group mb-3">
            <span class="input-group-text">Ano de lançamento</span>
            <input name="lancamento" id="lancamento" type="text" class="form-control" aria-label="lancamento" aria-describedby="lancamento">
        </div>
		<div class="input-group mb-3">
            <span class="input-group-text">Preço</span>
            <input name="preco" id="preco" type="text" class="form-control" aria-label="preco" aria-describedby="preco">
        </div>

        <div class="d-flex flex-row-reverse mt-3">
            <button id="submit" type="submit" class="btn btn-success ms-2">Salvar</button>
            <a href="./index.php" class="btn btn-outline-danger">Cancelar</a>
        </div>
</form>
	

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script >
		$('#submit').on('click', e => {
			let nome = $('#nome').val()
			let genero = $('#genero').val()
			let lancamento = $('#lancamento').val()
			let preco = $('#preco').val()

			if(nome === '') {
				alert('Preencha o campo Nome!')
				return false
			}
			if(genero === '') {
				alert('Preencha o campo Gênero!')
				return false
			}
			if(lancamento === '') {
				alert('Preencha o campo Ano de lançamento!')
				return false
			}
			if(preco === '') {
				alert('Preencha o campo Preço!')
				return false
			}
		})
	</script>
</body>
</html>