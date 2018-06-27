<?php
ini_set('memory_limit', '-1');
echo $directory =  getcwd();
$file = $directory.'/database.php';
$cmd = 'php '.$file;

 // $output = shell_exec($cmd);
$output = shell_exec($cmd);

  echo "<pre>$output</pre>";

	echo '<br/>';

?>
