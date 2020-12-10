<!DOCTYPE html>
<html>

<head>
	<!-- Mon ficher CSS -->
	<link rel="stylesheet" type="text/css" href="../assets/style.css">

	<?php
	include('include/head.html');
	include('../get/getComment.php');
	?>
</head>

<body>
	<div id="body">

		<?php
		include('include/navbar.html');
		include('include/signup.html');
		include('include/login.html');
		?>

		<div id="container" class="ui container">

			<div id="mainSegment" class="ui segment">
				<h1 id="hi">The comment(s) :</h1>
				<div class="ui divider"></div>


				<table class="ui inverted celled table">
					<thead>
						<tr>
							<th>Id</th>
							<th>Comment text</th>
							<th>Id album</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$i = 0;
						foreach ($idComment as &$id) {
							echo "<tr>";
							echo "<td>" . $id . "</td>";
							echo "<td>" . $commentText[$i] . "</td>";
							echo "<td>" . $idAlbumFK[$i] . "</td>";
							echo "</tr>";
							$i++;
						}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>

</html>

<!-- Mon fichier js -->
<script type="text/javascript" src="../assets/js.js"></script>