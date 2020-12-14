<!DOCTYPE html>
<html>

<head>
	<!-- Mon ficher CSS -->
	<link rel="stylesheet" type="text/css" href="../assets/style.css">

	<?php
	require_once('include/head.html');
	require_once('../get/getComment.php');
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
				<h1 id="hi">The comment(s) :</h1>
				<div class="ui divider"></div>


				<table class="ui <?php if ($_SESSION["CU_userRole"] === "manager") echo "selectable"; ?> inverted celled table">
					<thead>
						<tr>
							<th>Comment text</th>
							<th>Album title</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$i = 0;
						if (isset($_SESSION["CU_userRole"]) && $_SESSION["CU_userRole"] === "manager") $manager = true;
						foreach ($idComment as &$id) {
							if (isset($manager)) {
								echo "<tr onclick=\"window.location.href='patch/commentPatch.php?id=$id'\">";
							} else {
								echo "<tr>";
							}
							echo "<td>" . $commentText[$i] . "</td>";
							echo "<td>" . $titleAlbum[$i] . "</td>";
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