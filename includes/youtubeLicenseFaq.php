<?php 
	foreach($faq as $item):
?>
	<h3><?php echo $item['question']; ?></h3>
	<p><?php echo $item['answer']; ?></p>
<?php
	endforeach;
?>
