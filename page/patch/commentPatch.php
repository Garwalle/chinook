<!DOCTYPE html>
<html>

<head>
    <!-- Mon ficher CSS -->
    <link rel="stylesheet" type="text/css" href="../../assets/style.css">

    <?php
    require_once('../include/head.html');
    include('../../services/PDO_connection.php');

    // Préparation de la requête
    $sql = "SELECT commentText FROM comment WHERE id = '" . $_GET['id'] . "';";
    // Execution de la requête
    $req = $bdd->query($sql);

    while ($donnees = $req->fetch()) {
        $commentText = $donnees['commentText'];
    }
    ?>
</head>

<body>
    <div id="body">

        <div id="container" class="ui container">

            <div id="mainSegment" class="ui segment">
                <h1 id="hi">The comment(s) :</h1>
                <div class="ui divider"></div>

                <form class="ui inverted form attached fluid segment" method="post" action="commentIsPatching.php?id=<?php echo $_GET['id'] ?>">
                    <div class="field">
                        <label>Change comment text :</label>
                        <textarea name="commentText" maxlength="2000" rows="6"><?php echo $commentText; ?></textarea>
                    </div>
                    <button class="ui inverted green button" type="submit">Submit</button>
                </form><br>
                <div class="ui buttons">
                    <button class="ui blue inverted basic button" onclick="window.location.href='../comment.php'">Go back</button>
                    <button class="ui yellow inverted basic button" onclick="document.location.reload();">Clear changes</button>
                    <form method="post" action="commentClear.php?id=<?php echo $_GET['id'] ?>" onsubmit="return confirm('Do you really want to delete this comment ?');">
                        <button class="ui red inverted basic button" type="submit">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>