<?php
	$this->load->helper('url');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Lista Simples</title>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/css/style.css">

</head>
<body>

<div id="container">
	<h1>Formulario</h1>

	<div id="body">
		<?php //$this->load->view("form_lista_simples"); ?>

	</div>	

	<div id="body">

		<p>Criar uma lista com dados básicos dos alunos (ex.: Nome, Número de polícia, turma etc)</p>
		<code><?php echo anchor("lista/create_list", "Criar"); ?></code>

		<p>Editar uma lista existente</p>
		<code><?php echo anchor("lista/select_list", "Editar"); ?></code>

	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>

</body>
</html>
