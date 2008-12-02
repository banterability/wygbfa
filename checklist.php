<?php
	include 'witty.php';

	require_once 'header.php';
?>

<div class="toMain"><a href="index.php">&laquo; back</a></div>
<p class="checklistHead">When you get back from Australia:</p>

<ul>
	<?php foreach ($witty as $i): ?>
		<li><input type="checkbox" /><?=$i?>.</li>
	<?php endforeach ?>
</ul>

</body>
</html>