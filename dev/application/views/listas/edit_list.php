<?php
	$this->load->helper('url');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Index</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/css/style.css">
</head>
<body>

<div id="container">
	<h1>Links Úteis</h1>

	<div id="body">

		<p>Gerar uma nova lista ou Editar uma existente</p>
		<code><a href="<?php echo site_url(); ?>/lista">Listas</a></code>


		<table class="sortable">
			<tr>
				<th>Número de Polícia</th>
				<th>Nome</th>
				<th>Nome Funcional</th>
				<th>Turma</th>
				
			</tr>
		<?php
			foreach ($data_list as $key => $value) {


public 'al_nome' => string 'DENER VERSIANI KROGER FILHO' (length=27)
      public 'nome_funcional' => string 'KROGER' (length=6)
      public 'num_pm' => string '1616663' (length=7)
      public 'num_curso' => string '472' (length=3)
      public 'turma' => string '10' (length=2)
      public 'grau_hierarquico' => string 'SGT' (length=3)
      public 'sp_nome' => string 'BRENO' (length=5)

			}
		?>

	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>

</body>
</html>