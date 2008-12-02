<?php
	include 'witty.php';
	$choice = rand(0,(count($witty)-1));
	
	require_once 'header.php';
	?>

<p>When you get back from Australia <a href="http://whenyougetbackfromaustralia.com">
<?=$witty[$choice]?>
</a>.</p>

<div class="toChecklist"><a href="checklist.php">get the checklist &raquo;</a></div>

</body>
</html>