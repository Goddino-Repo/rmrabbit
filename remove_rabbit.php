<?php
    echo "\nTool for removing rabbit\n";
    $disk = strtolower($argv[1]);
    if(strpos(" ", $argv[2]))
    {
	$argv[2] = str_replace(" ", "\ ", $argv[2]);
    }
    $testo = shell_exec("find /mnt/" . $disk . "/ -name '" . $argv[2] . "'");
    $file = fopen("result.txt", "w");
    fwrite($file, $testo);
    fclose($file);
    $lettura = file("result.txt");
    foreach($lettura as $directory)
    {
	if(strpos(" ", $directory))
	    $directory = str_replace(" ", "\ ", $directory);
	shell_exec("rm -f " . $directory);
	echo "deleted " . $directory . "\n";
    }
    echo "\nRabbit deleted!\n";
?>
