<div id="navbar" class="ui inverted menu">
    <div class="header item">Chinook</div>
    <a class="item" href="index.php">Index</a>
    <a class="item" href="artist.php">Artist</a>
    <a class="item" href="album.php">Album</a>
    <a class="item" href="comment.php">Comment</a>

    <div class="right menu">
        <?php
        session_start();
        if (isset($_SESSION["CU_id"])) {
            echo "<div class=\"item\">
                    <div id=\"CU\">" . $_SESSION["CU_username"] . "</div>
                </div>";
        } else {
            echo "<div class=\"item\">
                    <div id=\"signup\" class=\"ui primary button\">Signup</div>
                </div>
                <div class=\"item\">
                    <div id=\"login\" class=\"ui button\">Login</div>
                </div>";
        }
        ?>
    </div>
</div>