<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css" integrity="sha512-8bHTC73gkZ7rZ7vpqUQThUDhqcNFyYi2xgDgPDHc+GXVGHXq+xPjynxIopALmOPqzo9JZj0k6OqqewdGO3EsrQ==" crossorigin="anonymous" />
	<?php 
	include('include/getAlbum.php');
	?>
	<title>Chinook</title>
</head>

<body>
	<div id="body">
		<div id="navbar" class="ui inverted menu">
			<div class="header item">Chinook</div>
			<a class="item" href="index.php">Action</a>
			<a class="item" href="artist.php">Artist</a>
			<a class="item" href="album.php">Album</a>
			<a class="item" href="comment.php">Comment</a>

			<div class="right item">
				<div class="ui inverted action input">
					<input type="text" placeholder="Navigate to">
					<div class="ui button">Go</div>
				</div>
			</div>
		</div>

		<div id="container" class="ui container">

			<div id="mainSegment" class="ui segment">
				<h1 id="hi">The album(s) :</h1>
				<div class="ui divider"></div>


				<table class="ui inverted celled table">
					<thead>
						<tr>
							<th>Id</th>
							<th>Title</th>
							<th>Id Artist</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$i=0;
						foreach ($idAlbum as &$id) {
							echo "<tr>";
							echo "<td>".$id."</td>";
							echo "<td>".$title[$i]."</td>";
							echo "<td>".$idArtistFK[$i]."</td>";
							echo "</tr>";
							$i++;
						}
						?>
					</tbody>
				</table>


				<div class="ui divider"></div>
			</div>
		</div>
	</div>
</body>
</html>