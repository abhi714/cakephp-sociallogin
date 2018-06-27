<?php
$cmd = 'git pull';

  $output = shell_exec($cmd);

  echo "<pre>$output</pre>";

	echo '<br/>';


$cmd1 = 'php database.php'

$output1 = exec($cmd1);

echo $output1; 

?>

