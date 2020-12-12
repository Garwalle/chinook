<!DOCTYPE html>
<html>

<head>
	<!-- Mon ficher CSS -->
	<link rel="stylesheet" type="text/css" href="../assets/style.css">

	<?php
	include('include/head.html');
	include('../get/getArtist.php');
	include('../get/getAlbum.php');
	?>
</head>

<body>
	<div id="body">

		<?php
		include('include/navbar.php');
		include('include/signup.html');
		include('include/login.html');
		include('include/errorMessage.html');
		?>

		<div id="container" class="ui container">

			<div id="mainSegment" class="ui segment">
				<h1 id="hi">Choose an action :</h1>
				<div class="ui divider"></div>

				<div id="flex">

					<div class="ui inverted raised segment">
						<form class="ui inverted form" method="post" action="../add/addArtist.php">
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
						<form class="ui inverted form" method="post" action="../add/addAlbum.php">
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
						<form class="ui inverted form" method="post" action="../add/addComment.php">
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
				<form method="post" action="../services/clear.php" onsubmit="return confirm('Do you really want to clear all tables ?');">
					<button class="ui inverted red button" type="submit">Clear all tables</button>
				</form>
				<div class="ui divider"></div>
			</div>
		</div>
	</div>
</body>

</html>

<!-- Mon fichier js -->
<script type="text/javascript" src="../assets/js.js"></script>