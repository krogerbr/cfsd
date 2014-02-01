<?php
	$this->load->helper('url');
	// <form action=" echo base_url(); lista/gerarLista" method="post" style="margin-left:35px;margin-bottom:10px;">
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Lista Simples</title>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/css/style.css">

</head>
<body>

<div id="container" >
	<div style="margin-left:15px;">
		<h1>Nova Lista</h1>
		<form action="#" method="post" style="margin-bottom:15px;">	
			<h3> Nome da lista: </h3>
				<input type="text" name="nome_lista"> <br>

			<h3>Selecione os campos desejados:</h3>
			<div style="margin-left:20px;">
				<input type="checkbox" name="num_pm"> Número de Polícia <br>
				<input type="checkbox" name="nome"> Nome Completo <br>
				<input type="checkbox" name="nome_funcional"> Nome Funcional <br>
				<input type="checkbox" name="turma"> Turma <br>
				<input type="checkbox" name="num_curso"> Número de Curso <br>
				<input type="submit" value="Salvar" style="margin-top:15px;margin-left:-15px;">
			</div>
		</form>
	</div>

<?php 
// name=
// value=
// align=
// tabindex=
// checked
?>
</div>

</body>
</html>