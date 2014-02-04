<?php
	$this->load->helper('url');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Lista Simples</title>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/table.css">
	<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-2.1.0.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/sorttable.js"></script>

</head>
<body>

<div id="container">
	<h1>Listas Existentes</h1>

	<div id="body">

		<table class="sortable">
			<tr>
				<th>Lista</th>
				<th>Criada em</th>
				<th>Ações</th>
			</tr>
			<?php
			
			if ($listas) {
				foreach ($listas as $key => $value) {
					echo "<tr>";
						echo "<td><b>" . $value->nome ."</b></td>";
						echo "<td>" . date( 'd/m/Y - H:i', strtotime($value->data_criacao)) . "</td>";
						echo "<td>";
							echo anchor("lista/edit_list/".$value->lista_id, "<img src='".base_url()."/img/ico_edit.png' alt='Editar' height='21' width='21'>");
							echo "&ensp;" . anchor("lista/delete_list", "<img src='".base_url()."/img/delete-xxl.png' alt='Editar' height='18' width='18'>");
						echo "</td>";
					echo "</tr>";
				}
			}
			?>

		</table>

	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>

</body>
</html>
