<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>TIC-TAC-TOE</title>
	<link rel="stylesheet" href="assets/css/style.css">
	<style type="text/css">
	
	.o {
		background: url('uploads/photo.jpg') no-repeat center center !important; 
		background-size: 60px !important; 
		border-radius: 50%; 
		border: 1px solid rgba(0, 0, 0, .2) !important;
	}
	</style>
	<script src="assets/js/app.js"></script>
</head>
<body>
<section class="container-game">
	<article class="title-row">
		<h1>TIC-TAC-TOE</h1>
	</article>
    
<?php
require_once "templates/header.php";

if (! playersRegistered()) {
    header("location: index.php");
}
 resetBoard();
 ?>

<table class="wrapper" cellpadding="0" cellspacing="0">
    <tr>
        <td>
            <div class="welcome">
                <h1>
                    <?php
                    if ($_GET['player']) {
                        echo currentPlayer() . " - победитель";
                    }
                    else {
                        echo "It's a tie!";
                    }
                    ?>
                </h1>

                <div class="player-name">
                    Баллы <?php echo playerName('x')?>: <b><?php echo score('x')?></b>
                </div>

                <div class="player-name">
                    Баллы <?php echo playerName('o')?>: <b><?php echo score('o')?></b>
                </div>

                <a href="play.php">Играть дальше</a><br />

                <a href="index.php" class="reset-btn">Обновить</a>
            </div>

        </td>
    </tr>
</table>
</section>
</body>
</html>
	




