<?php
    echo "\nTool for removing rabbit\n";
    $testo = shell_exec("find " . $argv[1] . " -name '" . $argv[2] . "'");
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
