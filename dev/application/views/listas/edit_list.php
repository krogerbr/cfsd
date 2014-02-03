<?php
	$this->load->helper('url');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Index</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/table.css">
	<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-2.1.0.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/sorttable.js"></script>

</head>
<body>

<div id="container">
	<h1>Links Úteis</h1>

	<div id="body">

		<h3>Pesquisar aluno para ser inserido:</h3>

		<?php 
			$this->load->view("listas/form_insert_data_list"); 
		?>


		<table class="sortable">
			<tr>
				<?php 
				foreach ($head as $key => $value) {
		            switch ($value) {
		                case 'num_pm': echo "<th>Número de Polícia</th>";
		                    break;
						case 'nome': echo "<th>Nome</th>";
		                    break;
		                case 'nome_funcional': echo "<th>Nome Funcional</th>";
		                    break;
		                case 'turma': echo "<th>Turma</th>";
		                    break;
		                case 'num_curso': echo "<th>Número de Curso</th>";
		                    break;

		                case 'responsavel': echo "<th>Responsável</th>";
		                    break;
					}
				}
				?>
			</tr>
			<?php
			foreach ($data_list as $key => $value) {
				echo "<tr>";
				foreach ($value as $key2 => $value2) {
					switch ($key2) {
		                case 'num_pm': echo "<td>$value2</td>";
		                    break;
						case 'al_nome': echo "<td>$value2</td>";
		                    break;
		                case 'nome_funcional': echo "<td>$value2</td>";
		                    break;
		                case 'turma': echo "<td>$value2</td>";
		                    break;
		                case 'num_curso': echo "<td>$value2</td>";
		                    break;

		                case 'responsavel': echo "<td>$value->grau_hierarquico $value->responsavel</td>";
		                    break;
					}
				}
				echo "</tr>";
			}
			?>
		</table>

	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>

</body>
</html>