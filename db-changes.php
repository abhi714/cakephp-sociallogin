<?php
ini_set('memory_limit', '-1');
$cmd = 'php database.php';

 // $output = shell_exec($cmd);
$output = exec($cmd);

  echo "<pre>$output</pre>";

	echo '<br/>';

?>
