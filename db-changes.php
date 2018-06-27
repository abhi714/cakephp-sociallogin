<?php
$cmd = 'php database.php';

 // $output = shell_exec($cmd);
$output = system($cmd);

  echo "<pre>$output</pre>";

	echo '<br/>';

?>
