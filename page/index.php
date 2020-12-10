<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<!-- Mon ficher CSS -->
	<link rel="stylesheet" type="text/css" href="../assets/style.css">
	<!-- CDN Semantic ui -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css" integrity="sha512-8bHTC73gkZ7rZ7vpqUQThUDhqcNFyYi2xgDgPDHc+GXVGHXq+xPjynxIopALmOPqzo9JZj0k6OqqewdGO3EsrQ==" crossorigin="anonymous" />
	<!-- Ajax-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<!-- Mon fichier js -->
	<script type="text/javascript" src="../assets/js.js"> </script>

	<!-- Include de fichier PHP -->
	<?php
	include('../include/getArtist.php');
	include('../include/getAlbum.php');
	?>
	<title>Chinook</title>
</head>

<body>
	<div id="body">
		<div id="navbar" class="ui inverted menu">
			<div class="header item">Chinook</div>
			<a class="item" href="index.php">Index</a>
			<a class="item" href="artist.php">Artist</a>
			<a class="item" href="album.php">Album</a>
			<a class="item" href="comment.php">Comment</a>

			<div class="right menu">
				<div onclick="window.location='add/addUser.php';" class="item">
					<div class="ui primary button">Sign up</div>
				</div>
				<div onclick="window.location='';" class="item">
					<div class="ui button">Log-in</div>
				</div>
			</div>
		</div>

		<div id="container" class="ui container">

			<div id="mainSegment" class="ui segment">
				<h1 id="hi">Choose an action :</h1>
				<div class="ui divider"></div>

				<div id="flex">


					<div class="ui inverted raised segment">
						<form class="ui inverted form" method="post" action="add/addArtist.php">
							<h2>Add an artist :</h2>
							<div class="required field">
								<label>First name</label>
								<input type="text" name="firstname" placeholder="Artist first name" maxlength="255" required>
							</div>

							<div class="required field">
								<label>Last name</label>
								<input type="text" name="lastname" placeholder="Artist last name" maxlength="255" required>
							</div>

							<button class="ui inverted button" type="submit">Submit</button>
						</form>
					</div>


					<div class="ui inverted raised segment">
						<form class="ui inverted form" method="post" action="add/addAlbum.php">
							<h2>Add an album :</h2>
							<div class="required field">
								<label>Album artist</label>
								<select name="idArtist" required>
									<?php
									$i = 0;
									foreach ($idArtist as &$id) {
										echo "<option value=\"" . $id . "\">" . $firstName[$i] . "</option>";
										$i++;
									}
									?>
								</select>
							</div>
							<div class="required field">
								<label>Title</label>
								<input type="text" name="title" placeholder="Title of the album" maxlength="255" required>
							</div>

							<button class="ui inverted button" type="submit">Submit</button>
						</form>
					</div>


					<div id="comment" class="ui inverted raised segment">
						<form class="ui inverted form" method="post" action="add/addComment.php">
							<h2>Leave a comment :</h2>
							<div class="required field">
								<label>Album </label>
								<select name="idAlbum" required>
									<?php
									$i = 0;
									foreach ($idAlbum as &$id) {
										echo "<option value=\"" . $id . "\">" . $title[$i] . "</option>";
										$i++;
									}
									?>
								</select>
							</div>
							<div class="required field">
								<label>Your comment</label>
								<textarea name="commentText" maxlength="2000" rows="6"></textarea>
							</div>

							<button class="ui inverted button" type="submit">Submit</button>
						</form>
					</div>

				</div>
				<form method="post" action="clear.php" onsubmit="return confirm('Do you really want to clear all tables ?');">
					<button class="ui inverted red button" type="submit">Clear all tables</button>
				</form>
				<div class="ui divider"></div>
			</div>
		</div>
	</div>
</body>

</html>