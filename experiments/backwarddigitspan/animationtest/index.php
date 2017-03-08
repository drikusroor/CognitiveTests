<html>
    <head>
        <title>Sprite Animation Demo</title>
		<script src="http://code.jquery.com/jquery-latest.min.js"></script>
		<?php include("animationframe.php");?>
    </head>
    <body>
        <!--<canvas id="animationtest"></canvas>-->
		<!--<canvas id="animationtest2"></canvas>-->
        <script src="animationscript.js"></script>
		<?php createAnimationFrame("animationtest", "images/test.png", 7) ?>
		<?php createAnimationFrame("animationtest2", "images/test2.png", 9) ?>
    </body>
</html>