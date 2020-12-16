<!DOCTYPE html>
<html>

<head>
	<!-- Mon ficher CSS -->
	<link rel="stylesheet" type="text/css" href="../assets/style.css">

	<?php
	require_once('include/head.html');
	require_once('../get/getAlbum.php');
	?>
</head>

<body>
	<div id="body">

		<?php
		require_once('include/navbar.php');
		require_once('include/signup.html');
		require_once('include/login.html');
		?>

		<div id="container" class="ui container">

			<div id="mainSegment" class="ui segment">
				<h1 id="hi">The album(s) :</h1>
				<div class="ui divider"></div>


				<table class="ui inverted celled table">
					<thead>
						<tr>
							<th>Title</th>
							<th>ALbum author</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$i = 0;
						foreach ($idAlbum as &$id) {
							echo "<tr>";
							echo "<td>" . $title[$i] . "</td>";
							echo "<td>" . $albumAuthor[$i] . "</td>";
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